@extends('layouts.dashboard')

@section('content')
    <div class="card card-custom">
        <div class="card-header">
            <h3 class="card-title">
                Settings
            </h3>
        </div>
        <!--begin::Form-->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (session('status'))
            <div class="alert alert-success">
                <div class="alert-text">
                    {{ session('status') }}
                </div>
            </div>
        @endif
        <form method="post" action="{{route('dashboard.setting.update', 1)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group mb-8">
                    <div class="alert alert-custom alert-default" role="alert">
                        <div class="alert-icon"><i class="flaticon-warning text-primary"></i></div>
                        <div class="alert-text">
                            Here are the main <code>Webinar</code> settings:
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label  class="col-2 col-form-label">Light Logo (250 x 30)</label>
                    <div class="col-10">
                        <div class="image-input image-input-outline" id="kt_image_1">
                            <div class="image-input-wrapper" style="background-size: contain;
                                background-repeat: no-repeat;
                                background-position: center;background-image: url({{$setting->getFirstMediaUrl('logo')}})"></div>

                            <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                <i class="fa fa-pen icon-sm text-muted"></i>
                                <input type="file" name="logo" accept=".png, .jpg, .jpeg"/>
                                <input type="hidden" name="profile_avatar_remove"/>
                            </label>

                            <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
		<i class="ki ki-bold-close icon-xs text-muted"></i>
	</span>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label  class="col-2 col-form-label">Dark Logo (250 x 30)</label>
                    <div class="col-10">
                        <div class="image-input image-input-outline" id="kt_image_2">
                            <div class="image-input-wrapper" style="background-size: contain;
                                background-repeat: no-repeat;
                                background-position: center;background-image: url({{$setting->getFirstMediaUrl('logo_dark')}})"></div>

                            <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                <i class="fa fa-pen icon-sm text-muted"></i>
                                <input type="file" name="logo_dark" accept=".png, .jpg, .jpeg"/>
                                <input type="hidden" name="profile_avatar_remove"/>
                            </label>

                            <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
		<i class="ki ki-bold-close icon-xs text-muted"></i>
	</span>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label  class="col-2 col-form-label">Title</label>
                    <div class="col-10">
                        <input class="form-control" type="text" value="{{old('title', $setting->title)}}" name="title"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label  class="col-2 col-form-label">Event Title</label>
                    <div class="col-10">
                        <input class="form-control" type="text" value="{{old('event_title', $setting->event_title)}}" name="event_title"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-url-input" class="col-2 col-form-label">Webinar Link</label>
                    <div class="col-10">
                        <input class="form-control" type="url" name="link" value="{{old('link', $setting->link)}}"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-color-input" class="col-2 col-form-label">Gradient Color 1: </label>
                    <div class="col-10">
                        <input class="form-control" type="color" value="{{old('gradient_from', $setting->gradient_from)}}" name="gradient_from"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-color-input" class="col-2 col-form-label">Gradient Color 2: </label>
                    <div class="col-10">
                        <input class="form-control" type="color" value="{{old('gradient_to', $setting->gradient_to)}}" name="gradient_to"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-color-input" class="col-2 col-form-label">Chat Background Color: </label>
                    <div class="col-10">
                        <input class="form-control" type="color" value="{{old('chat_background', $setting->chat_background)}}" name="chat_background"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-color-input" class="col-2 col-form-label">Keywords: </label>
                    <div class="col-10">
                        <input class="form-control" type="text" value="{{old('keywords', $setting->keywords)}}" name="keywords"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-color-input" class="col-2 col-form-label">Description: </label>
                    <div class="col-10">
                        <textarea class="form-control" name="description">{{old('description', $setting->description)}}</textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-color-input" class="col-2 col-form-label">Enable Resources Tab: </label>
                    <div class="col-10" style="display: flex; align-items: center">
                        <input type="checkbox" name="enable_resources" {{$setting->enable_resources ? "checked" : ""}} />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-color-input" class="col-2 col-form-label">Enable Polls Tab: </label>
                    <div class="col-10" style="display: flex; align-items: center">
                        <input type="checkbox" name="enable_polls" {{$setting->enable_polls ? "checked" : ""}} />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-color-input" class="col-2 col-form-label">Enable Questions Tab: </label>
                    <div class="col-10" style="display: flex; align-items: center">
                        <input type="checkbox" name="enable_questions" {{$setting->enable_questions ? "checked" : ""}} />
                    </div>
                </div>
{{--                <div class="form-group row">--}}
{{--                    <label for="example-color-input" class="col-2 col-form-label">Enable Social Tab: </label>--}}
{{--                    <div class="col-10" style="display: flex; align-items: center">--}}
{{--                        <input type="checkbox" name="enable_social" {{$setting->enable_social ? "checked" : ""}} />--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="form-group row">
                    <label for="example-color-input" class="col-2 col-form-label">Enable Agenda Tab: </label>
                    <div class="col-10" style="display: flex; align-items: center">
                        <input type="checkbox" name="enable_agenda" {{$setting->enable_agenda ? "checked" : ""}} />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-color-input" class="col-2 col-form-label">Enable Speakers Tab: </label>
                    <div class="col-10" style="display: flex; align-items: center">
                        <input type="checkbox" name="enable_speakers" {{$setting->enable_speakers ? "checked" : ""}} />
                    </div>
                </div>
                <div class="form-group row">
                    <label  class="col-2 col-form-label">Polls Tab Name</label>
                    <div class="col-10">
                        <input class="form-control" type="text" value="{{old('polls_tab_name', $setting->polls_tab_name)}}" name="polls_tab_name"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label  class="col-2 col-form-label">Questions Tab Name</label>
                    <div class="col-10">
                        <input class="form-control" type="text" value="{{old('questions_tab_name', $setting->questions_tab_name)}}" name="questions_tab_name"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label  class="col-2 col-form-label">Resources Tab Name</label>
                    <div class="col-10">
                        <input class="form-control" type="text" value="{{old('resources_tab_name', $setting->resources_tab_name)}}" name="resources_tab_name"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label  class="col-2 col-form-label">Speakers Tab Name</label>
                    <div class="col-10">
                        <input class="form-control" type="text" value="{{old('speakers_tab_name', $setting->speakers_tab_name)}}" name="speakers_tab_name"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label  class="col-2 col-form-label">Agenda Tab Name</label>
                    <div class="col-10">
                        <input class="form-control" type="text" value="{{old('agenda_tab_name', $setting->agenda_tab_name)}}" name="agenda_tab_name"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label  class="col-2 col-form-label">After Question Message:</label>
                    <div class="col-10">
                        <input class="form-control" type="text" value="{{old('after_question', $setting->after_question)}}" name="after_question"/>
                    </div>
                </div>
{{--                <div class="form-group row">--}}
{{--                    <label  class="col-2 col-form-label">Social Tab Name</label>--}}
{{--                    <div class="col-10">--}}
{{--                        <input class="form-control" type="text" value="{{old('social_tab_name', $setting->social_tab_name)}}" name="social_tab_name"/>--}}
{{--                    </div>--}}
{{--                </div>--}}

                <div class="form-group row">
                    <label for="example-datetime-local-input" class="col-2 col-form-label">Time of the event</label>
                    <div class="col-10">
                        <input class="form-control" type="datetime-local" value="{{old('event_time', $setting->event_time)}}" name="event_time" id="example-datetime-local-input"/>
                    </div>
                </div>

            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-2">
                    </div>
                    <div class="col-10">
                        <button type="submit" class="btn btn-success mr-2">Submit</button>
                        <button type="reset" class="btn btn-secondary">Cancel</button>
                        <a href="{{route('dashboard.setting.reset')}}">
                            <button type="button" class="btn btn-danger">Reset All</button>
                        </a>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
@push('scripts')
    <script>
        var avatar1 = new KTImageInput('kt_image_1');
        var avatar2 = new KTImageInput('kt_image_2');
    </script>
@endpush
