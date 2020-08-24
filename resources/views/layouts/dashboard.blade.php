<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!--begin::Head-->
<head><base href="">
    <meta charset="utf-8"/>
    <title>Dashboard | @yield('title', 'Settings')</title>
    <meta name="description" content="Updates and statistics"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>        <!--end::Fonts-->



    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="{{asset("assets/plugins/global/plugins.bundle.css")}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset("assets/plugins/custom/prismjs/prismjs.bundle.css")}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset("assets/css/style.bundle.css")}}" rel="stylesheet" type="text/css"/>
    <!--end::Global Theme Styles-->

    <!--begin::Layout Themes(used by all pages)-->
    <!--end::Layout Themes-->

    @stack('styles')
    <link rel="shortcut icon" href="{{asset("assets/media/logos/favicon.ico")}}"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
{{--    <script src="{{ asset('js/app.js') }}" defer></script>--}}

</head>
<!--end::Head-->

<body  id="kt_body"  class=" header-mobile-fixed page-loading"  >

<!--begin::Main-->
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="d-flex flex-row flex-column-fluid page">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
            <!--begin::Header Mobile-->
            <div id="kt_header_mobile" class="header-mobile  header-mobile-fixed " >
                <!--begin::Logo-->
                <a href="{{route('dashboard.setting.index')}}">
                    <img alt="Logo" src="{{asset("assets/media/logos/logo-letter-12.png")}}" class="max-h-30px"/>
                </a>
                <!--end::Logo-->

            </div>
            <!--end::Header Mobile-->

            <!--begin::Header-->
            <div id="kt_header" class="header flex-column  header-fixed " >
                <!--begin::Top-->
                <div class="header-top">
                    <!--begin::Container-->
                    <div class=" container ">
                        <!--begin::Left-->
                        <div class="d-none d-lg-flex align-items-center mr-3">
                            <!--begin::Logo-->
                            <a href="{{route('dashboard.setting.index')}}" class="mr-20">
                                <img alt="Logo" src="{{asset("assets/media/logos/logo-letter-12.png")}}" class="max-h-40px"/>
                            </a>
                            <!--end::Logo-->
                        </div>
                        <!--end::Left-->

                        <!--begin::Topbar-->
                        <div class="topbar topbar-top" id="kt_header_topbar">
                            <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
                                @method('POST')
                                @csrf
                            </form>

                            <!--begin::User-->
                            <div class="topbar-item">
                                <a onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();" href="">
                                    <div class="btn btn-icon btn-secondary" id="kt_quick_user_toggle">
			                    <span class="svg-icon svg-icon-lg">
                                    <i class="fa fa-sign-out-alt"></i>
                                </span>
                                    </div>
                                </a>
                            </div>
                            <!--end::User-->
                        </div>
                        <!--end::Topbar-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Top-->

                <!--begin::Bottom-->
                <div class="header-bottom" id="kt_header_bottom" style="height: auto">
                    <!--begin::Container-->
                    <div class=" container   d-flex flex-column">
                        <!--begin::Tab Navs(for desktop mode)-->
                        <ul class="header-tabs nav flex-column-auto">
                            <!--begin::Item-->
                            <li class="nav-item">
                                <a href="{{route('dashboard.setting.index')}}" class="nav-link">
                                    <span class="nav-title text-uppercase">Home</span>
                                </a>
                            </li>
                            <!--end::Item-->

                            <!--begin::Item-->
                            <li class="nav-item">
                                <a href="{{route('dashboard.resource.index')}}" class="nav-link">
                                    <span class="nav-title text-uppercase">Resources</span>
                                </a>
                            </li>
                            <!--end::Item-->

                            <!--begin::Item-->
                            <li class="nav-item">
                                <a href="{{route('dashboard.question.index')}}" class="nav-link">
                                    <span class="nav-title text-uppercase">Questions</span>
                                </a>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="nav-item">
                                <a href="{{route('dashboard.poll.index')}}" class="nav-link">
                                    <span class="nav-title text-uppercase">Polls</span>
                                </a>
                            </li>
                            <!--end::Item-->

                            <!--begin::Item-->
                            <li class="nav-item">
                                <a href="{{route('dashboard.event.index')}}" class="nav-link">
                                    <span class="nav-title text-uppercase">Agenda</span>
                                </a>
                            </li>
                            <!--end::Item-->

                            <!--begin::Item-->
                            <li class="nav-item">
                                <a href="{{route('dashboard.speaker.index')}}" class="nav-link">
                                    <span class="nav-title text-uppercase">Speakers</span>
                                </a>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="nav-item">
                                <a href="{{route('dashboard.guest.index')}}" class="nav-link">
                                    <span class="nav-title text-uppercase">Guests</span>
                                </a>
                            </li>
                            <!--end::Item-->

                            <!--begin::Item-->
{{--                            <li class="nav-item">--}}
{{--                                <a href="{{route('dashboard.message.index')}}" class="nav-link">--}}
{{--                                    <span class="nav-title text-uppercase">Messages</span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
                            <!--end::Item-->
                        </ul>
                        <!--begin::Tab Navs-->

                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Bottom-->
            </div>
            <!--end::Header-->


            <!--begin::Container-->
            <div class="d-flex flex-row flex-column-fluid  container ">

                <!--begin::Content Wrapper-->
                <div class="main d-flex flex-column flex-row-fluid">

                    <div class="content flex-column-fluid" id="kt_content">
                        <!--begin::Dashboard-->
                        @yield('content')
                        <!--end::Dashboard-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--begin::Content Wrapper-->
            </div>
            <!--end::Container-->

        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::Main-->


<script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
<!--begin::Global Config(global config for global JS scripts)-->
<script>
    var KTAppSettings = {
        "breakpoints": {
            "sm": 576,
            "md": 768,
            "lg": 992,
            "xl": 1200,
            "xxl": 1200
        },
        "colors": {
            "theme": {
                "base": {
                    "white": "#ffffff",
                    "primary": "#6993FF",
                    "secondary": "#E5EAEE",
                    "success": "#1BC5BD",
                    "info": "#8950FC",
                    "warning": "#FFA800",
                    "danger": "#F64E60",
                    "light": "#F3F6F9",
                    "dark": "#212121"
                },
                "light": {
                    "white": "#ffffff",
                    "primary": "#E1E9FF",
                    "secondary": "#ECF0F3",
                    "success": "#C9F7F5",
                    "info": "#EEE5FF",
                    "warning": "#FFF4DE",
                    "danger": "#FFE2E5",
                    "light": "#F3F6F9",
                    "dark": "#D6D6E0"
                },
                "inverse": {
                    "white": "#ffffff",
                    "primary": "#ffffff",
                    "secondary": "#212121",
                    "success": "#ffffff",
                    "info": "#ffffff",
                    "warning": "#ffffff",
                    "danger": "#ffffff",
                    "light": "#464E5F",
                    "dark": "#ffffff"
                }
            },
            "gray": {
                "gray-100": "#F3F6F9",
                "gray-200": "#ECF0F3",
                "gray-300": "#E5EAEE",
                "gray-400": "#D6D6E0",
                "gray-500": "#B5B5C3",
                "gray-600": "#80808F",
                "gray-700": "#464E5F",
                "gray-800": "#1B283F",
                "gray-900": "#212121"
            }
        },
        "font-family": "Poppins"
    };
</script>
<!--end::Global Config-->

<!--begin::Global Theme Bundle(used by all pages)-->
<script src="{{asset("assets/plugins/global/plugins.bundle.js")}}"></script>
<script src="{{asset("assets/plugins/custom/prismjs/prismjs.bundle.js")}}"></script>
<script src="{{asset("assets/js/scripts.bundle.js")}}"></script>
<!--end::Global Theme Bundle-->

<script>
    $('a[href^="{{Request::fullUrl()}}"]').addClass("active")
</script>
@stack('scripts')
<!--end::Page Scripts-->
</body>
<!--end::Body-->
