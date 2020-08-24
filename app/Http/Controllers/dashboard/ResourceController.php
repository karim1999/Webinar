<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Resource;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileDoesNotExist;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileIsTooBig;

class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        return view('dashboard.resource.index', [
            "resources" => Resource::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        $resource= new Resource();
        return view('dashboard.resource.form', [
            "resource" => $resource
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return void
     * @throws FileDoesNotExist
     * @throws FileIsTooBig
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'name' => 'required',
            'file' => 'file',
        ]);
        $resource = new Resource();
        $resource->name= $request->post('name');
        $resource->save();

        if($request->file('file'))
            $resource->addMediaFromRequest("file")->toMediaCollection('file');

        return redirect()->route('dashboard.resource.index')->with("status", "The resource were added successfully.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Resource $resource
     * @return Response
     */
    public function edit(Resource $resource)
    {
        //
        return view('dashboard.resource.form', [
            "resource" => $resource
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Resource $resource
     * @return Response
     * @throws FileDoesNotExist
     * @throws FileIsTooBig
     */
    public function update(Request $request, Resource $resource)
    {
        //
        $validatedData = $request->validate([
            'name' => 'required',
            'file' => 'file',
        ]);
        $resource->name= $request->post('name');
        $resource->save();

        if($request->file('file'))
            $resource->addMediaFromRequest("file")->toMediaCollection('file');

        return redirect()->route('dashboard.resource.index')->with("status", "The resource was edited successfully.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Resource $resource
     * @return void
     * @throws Exception
     */
    public function destroy(Resource $resource)
    {
        //
        $resource->delete();
        return back()->with("status", "The resource was deleted successfully.");
    }
}
