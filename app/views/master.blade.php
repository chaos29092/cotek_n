<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>
            @section('title')
                 This is the master sidebar.
            @show
        </title>
        <meta name="description" content="@section('description')
                                             This is the master sidebar.
                                          @show">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}">

        <link rel="stylesheet" href="{{asset('assets/css/normalize.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400">
        <script src="{{asset('assets/js/vendor/modernizr-2.6.2.min.js')}}"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div id="top">
            <div class="container">
                <a href="/" class="pull-left"><img id="logo" src="{{asset('img/logo.png')}}" alt=""/></a>
                <h2 class="pull-left">HENAN HUAXIA HAINA SALES & MARKETING CO., LTD</h2>
                <p class="pull-right"><a href="">English</a>  |  <a href="">Pусский</a>  |  <a href="">中文</a></p>
            </div>
        </div>

        <nav class="nav navbar-default" role="navigation" id="nav">
          <div class="container">
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                <a href="/"><button type="button" class="btn btn-sky text-uppercase btn-lg">home</button></a>
                <a href="{{url('products/all')}}"><button type="button" class="btn btn-sky text-uppercase btn-lg">products</button></a>
                <a href="{{url('tour')}}"><button type="button" class="btn btn-sky text-uppercase btn-lg">factory tours</button></a>
                <a href="{{url('solution')}}"><button type="button" class="btn btn-sky text-uppercase btn-lg">solution</button></a>
                <a href="{{url('service')}}"><button type="button" class="btn btn-sky text-uppercase btn-lg">service</button></a>
                <a href="{{url('customer_visit')}}"><button type="button" class="btn btn-sky text-uppercase btn-lg">customer visit</button></a>
                <a href="{{url('about')}}"><button type="button" class="btn btn-sky text-uppercase btn-lg">about us</button></a>
                <a href="{{url('contact')}}"><button type="button" class="btn btn-sky text-uppercase btn-lg">contact</button></a>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>


        @yield('content')

        	<hr class="blueline" />

        	<div class="container">
        	    <ul class="list-inline text-center">
        	          <li><a href="/">Index</a></li>
        	          <li>|</li>
        	          <li><a href="{{asset('products/all')}}">Products</a></li>
                      <li>|</li>
                      <li><a href="{{asset('products/plotter')}}">COTEK Plotter Series</a></li>
                      <li>|</li>
                      <li><a href="{{asset('products/laser')}}">COTEK Laser Series</a></li>
                      <li>|</li>
                      <li><a href="{{asset('products/router')}}">COTEK Router Series</a></li>
                      <li>|</li>


                      <li><a href="{{asset('contact')}}">Contact</a></li>
                </ul>
                <p class="text-center">Copyright © Henan Huaxia Haina Sales & Marketing Co.,Ltd.</p>
        	</div>


        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="{{asset('assets/js/vendor/jquery.min.js')}}"><\/script>')</script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
        <script src="{{asset('assets/js/plugins.js')}}"></script>
        <script src="{{asset('assets/js/main.js')}}"></script>
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-53015633-2', 'auto');
          ga('send', 'pageview');

        </script>
    </body>
</html>
<script language="javascript" src="http://prt.zoosnet.net/JS/LsJS.aspx?siteid=PRT48595698&float=1&lng=cn"></script>