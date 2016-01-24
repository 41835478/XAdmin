<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <title>@yield('title') - 管理后台</title>
        <meta name="keywords" content="@yield('keywords')">
        <meta name="description" content="@yield('description')">

        <!-- bootstrap & fontawesome -->
        <link href="{{ asset('css/bootstrap.min.css?v=3.4.0') }}" rel="stylesheet">
        <link href="{{ asset('font-awesome/css/font-awesome.css?v=4.3.0') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/backend/common.css') }}" />

        <!-- page specific plugin styles -->
        <link rel="stylesheet" href="{{ asset('css/jquery-ui.custom.min.css') }}" />
        @yield('styles')

        <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

        <!--[if lte IE 8]>
        <script src="{{ asset('js/html5shiv.min.js') }}"></script>
        <script src="{{ asset('js/respond.min.js') }}"></script>
        <![endif]-->
</head>

<body>
    <div class="ant-layout-aside">
        <div class="ant-layout-sider">
            <div class="ant-layout-logo"></div>
            <div id="sider"></div>
        </div>
        <div class="ant-layout-main">
            <div class="ant-layout-header"></div>
            <div class="ant-layout-breadcrumb">
                <div id="breadcrumb">
                </div>
            </div>
            <div class="ant-layout-container">
                <div class="ant-layout-content">
                    <div id="content">
                    </div>
                </div>
            </div>
            <div class="ant-layout-footer">
                Ant Design 版权所有 © 2015 由蚂蚁金服体验技术部支持
            </div>
        </div>
    </div>

    <!-- basic scripts -->
    <script src="{{ asset('js/jquery-2.1.1.min.js') }}"></script>
    <!--[if IE]>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <![endif]-->

    <!-- page specific plugin scripts -->
    <script src="{{ asset('js/jquery-ui.custom.min.js') }}"></script>

    <!-- React scripts -->
    <script src="{{ asset('js/react/react.js') }}"></script>
    <script src="{{ asset('js/react/react-dom.js') }}"></script>

    <!-- inline scripts related to this page -->
    <script type="text/javascript" src="{{ asset('js/backend/build/app.js') }}" charset="utf-8"></script>
    @yield('scripts')
</body>
</html>
