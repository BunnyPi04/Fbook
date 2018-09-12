<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Fbook Dashboard</title>
        <meta name="description" content="Latest updates and statistic charts">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

        <!--begin::Web font -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
        <script>
            WebFont.load({
                google: {
                    "families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
                },
                active: function() {
                    sessionStorage.fonts = true;
                }
            });
        </script>
        <!--end::Web font -->
        <base href="{{ asset('/') }}">
        @include('admin.layout.style')
    </head>
    <body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

        <div class="m-grid m-grid--hor m-grid--root m-page">
            @include('admin.layout.header')
            <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
                <button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn">
                    <i class="la la-close"></i>
                </button>
                @include('admin.layout.sidebar')
                @yield('content')
            </div>
            @include('admin.layout.footer')
        </div>

        <!-- begin::Scroll Top -->
        <div id="m_scroll_top" class="m-scroll-top">
            <i class="la la-arrow-up"></i>
        </div>
        <!-- end::Scroll Top -->

       @include('admin.layout.script')
    </body>
</html>
