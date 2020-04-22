
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
    <link href="/css/default.css" rel="stylesheet" type="text/css" media="all" />
    <link href="/css/fonts.css" rel="stylesheet" type="text/css" media="all" />

    <!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>
<body>
<div id="header">
    <div id="menu" class="container">
        <ul>
            <li class="current_page_item"><a href="#" accesskey="1" title="">Home</a></li>
            <li><a href="#" accesskey="1" title="">View all</a></li>
            <li><a href="#" accesskey="2" title="">New</a></li>
        </ul>
    </div>
</div>
<div id="logo" class="container">
    <h1><a href="#" class="icon icon-tasks"><span>Anvada test task</span></a></h1>
</div>
<div id="page" class="container">
    <div id="content">
        <div class="title">
            <h2>Welcome to our website</h2>
            <span class="byline">Mauris vulputate dolor sit amet nibh</span>
        </div>
        <p>This is <strong>TwoColours</strong>, a free, fully standards-compliant CSS template designed by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>. The photos in this template are from <a href="http://fotogrph.com/"> Fotogrph</a>. This free template is released under the <a href="http://templated.co/license">Creative Commons Attribution</a> license, so you're pretty much free to do whatever you want with it (even use it commercially) provided you give us credit for it. Have fun :) </p>
    </div>
    <div id="sidebar"><a href="#" class="image image-full"><img src="images/pic05.jpg" alt="" /></a></div>
</div>

<div id="portfolio-wrapper">
    <div id="portfolio" class="container">
        @yield('content')
    </div>
</div>
<div id="contact" class="container">

    <ul class="contact">
        <li><a href="#" class="icon icon-twitter"><span>Twitter</span></a></li>
        <li><a href="#" class="icon icon-facebook"><span></span></a></li>
        <li><a href="#" class="icon icon-dribbble"><span>Pinterest</span></a></li>
        <li><a href="#" class="icon icon-tumblr"><span>Google+</span></a></li>
        <li><a href="#" class="icon icon-rss"><span>Pinterest</span></a></li>
    </ul>
</div>

</body>
</html>
