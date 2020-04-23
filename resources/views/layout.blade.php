
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : TwoColours
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20130811

-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
          crossorigin="anonymous">
    <link href="/css/default.css" rel="stylesheet" type="text/css" media="all" />
    <link href="/css/fonts.css" rel="stylesheet" type="text/css" media="all" />


    <!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>
<body>
<div id="header">
    <div id="menu" class="container">
        <ul>
            <li class="{{ Request::path() === '/' ? 'current_page_item' : '' }} ">
                <a href="/" accesskey="1" title="">Home</a>
            </li>
            <li class="{{ Request::path() === 'all' ? 'current_page_item' : '' }} ">
                <a href="/all" accesskey="1" title="">View all</a>
            </li>
            <li class="{{ Request::path() === 'new' ? 'current_page_item' : '' }} ">
                <a href="/new" accesskey="2" title="">New</a>
            </li>
        </ul>
    </div>
</div>

@yield('title')


<div id="portfolio-wrapper">
    <div id="portfolio" class="container">
        @yield('content')
    </div>
</div>


</body>
</html>
