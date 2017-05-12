<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Home')</title>
    <link rel="shortcut icon" href="favicon.ico">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Bootstrap css -->
    <link type="text/css" rel='stylesheet' href="/themes/css/bootstrap.min.css">

    <!-- End Bootstrap css -->

    <link
            href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,cyrillic-ext'
            rel='stylesheet' type='text/css'>
    <link
            href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic'
            rel='stylesheet' type='text/css'>

    <link type="text/css" data-themecolor="default" rel='stylesheet'
          href="/themes/css/main-default.css">


    <link rel="stylesheet"
          href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    @yield('include')
</head>
<body>
    @include('layouts._header')
    @yield('content')
    @include('layouts._footer')
</body>
<script src="/themes/js/jquery/jquery-1.11.1.min.js"></script>
<!-- bootstrap -->
<script src="/themes/js/bootstrap.min.js"></script>
<!-- end bootstrap -->
<script src="/themes/www/js/home/index.js"></script>


<!-- Modules -->
<script src="/themes/js/modules/color-themes.js"></script>
<!-- End Modules -->
<!-- Google services -->
<!---<script type="text/javascript" src="https://www.google.com/jsapi?autoload={'modules':[{'name':'visualization','version':'1','packages':['corechart']}]}"></script>--->

<!-- end Google services -->

<script src="/themes/js/cookie.js"></script>
</html>