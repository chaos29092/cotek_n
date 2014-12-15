@extends('master')

@section('title')
    Hanvy - about us.
@stop

@section('description')
    This is description.
@stop

@section('content')
    <div id="content-page">

        <div class="container-fluid" id="product">
            <div class="content-wrapper">

                {{--产品图部分--}}
                <div class="item-container">
                    <div class="container">
                        <div class="col-md-12">
                            <ol class="breadcrumb">
                                <li><a href="/">Home</a></li>
                                <li><a href="{{url('products/all')}}">Products</a></li>
                                @yield('breadcrumbs')
                                <li class="active">{{$model}}</li>
                            </ol>
                            <hr id="breadcrumb"/>
                            <div class="product col-md-4 service-image-left">

                                <center>
                                    <img id="item-display" src="@yield('productImg')" alt=""/>
                                </center>
                            </div>

                            <div class="container service1-items col-sm-2 col-md-2 pull-left">
                                <center>
                                    <a id="item-1" class="service1-item">
                                        <img src="@yield('productImg_1')" alt=""/>
                                    </a>
                                    <a id="item-2" class="service1-item">
                                        <img src="@yield('productImg_2')" alt=""/>
                                    </a>
                                    <a id="item-3" class="service1-item">
                                        <img src="@yield('productImg_3')" alt=""/>
                                    </a>
                                </center>
                            </div>
                            <div class="col-md-6">
                                @yield('product_dec')

                                <hr>
                                <a href="mailto:nylyzj.com"><span class="glyphicon glyphicon-envelope"></span> Send a
                                    E-mail to Us</a> <br/>

                                <div class="btn-group cart">
                                    <a href="#contact">
                                        <button type="button" class="btn btn-primary btn-lg">
                                            <span class="glyphicon glyphicon-comment"></span> Get Prices
                                        </button>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                {{--产品详情部分--}}
                <div class="container" id="content">
                    <div class="col-md-3">
                        <div id="sidetitle">
                            <h4>PRODUCTS LIST</h4>
                        </div>
                        <div class="list-group">
                            <a href="{{url('products/all')}}" class="list-group-item">All Products</a>
                            <a href="{{url('products/plotter')}}" class="list-group-item">COTEK Plotter Series</a>
                            <a href="{{url('products/laser')}}" class="list-group-item">COTEK Laser Series</a>
                            <a href="{{url('products/router')}}" class="list-group-item">COTEK Router Series</a>
                        </div>

                        <div class="well">
                            <h4>NEED HELP?</h4>
                            <a href="http://prt.zoosnet.net/LR/Chatpre.aspx?id=PRT48595698&lng=en">
                                <button type="button" class="btn btn-primary">
                                    <span class="glyphicon glyphicon-comment"></span> chat now
                                </button>
                            </a>
                            <span>(Chat Online)</span>
                            <br/><br/>

                            <p>or Email to us:</p>
                            <a href="mailto:info@sinohuaxia.com"><span class="glyphicon glyphicon-envelope"></span>
                                info@sinohuaxia.com</a>
                            <br/><br/>
                            <a href="{{url('contact')}}" target="_blank"><img src="{{asset('img/contact.jpg')}}"
                                                                              class="img-responsive img-rounded center-block"
                                                                              alt=""/></a>
                        </div>
                        <div>
                            <a href=""><img src="{{asset('img/whyus.jpg')}}" class="img-responsive img-rounded" alt=""/></a>
                        </div>
                    </div>


                    <div class="col-md-9 product-info">
                        <ul id="myTab" class="nav nav-tabs nav_tabs">

                            <li class="active"><a href="#service-one" data-toggle="tab">DESCRIPTION</a></li>
                            <li><a href="#service-two" data-toggle="tab">PARAMETERS</a></li>
                            <li><a href="#service-three" data-toggle="tab">REVIEWS</a></li>

                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div class="tab-pane fade in active" id="service-one">

                                <section class="product-info">
                                    @yield('product_content_1')
                                </section>

                            </div>
                            <div class="tab-pane fade" id="service-two">

                                <section class="product-info">
                                    @yield('product_content_2')
                                </section>

                            </div>
                            <div class="tab-pane fade" id="service-three">
                                <section class="product-info">
                                    @yield('product_content_3')
                                </section>
                            </div>
                        </div>
                        <hr/>
                        <div id="contact">
                            <h4>Please Fill Your Inquiry</h4>
                            {{ Form::open(array('url' => 'mailPost', 'class' => 'form-horizontal', 'role' => 'form' )) }}
                            <input name="product" type="hidden" value="{{$model}}">

                            <div class="form-group">
                                {{ Form::label('email', 'Email(*)', array('class' => 'col-md-1 control-label')) }}
                                <div class="col-md-6">
                                    <input required placeholder="youremail@example.com" class="form-control"
                                           name="email" type="email" id="email">
                                </div>
                            </div>

                            <div class="form-group">
                                {{ Form::label('subject', 'Name', array('class' => 'col-md-1 control-label')) }}
                                <div class="col-md-6">
                                    <input placeholder="your name" class="form-control" name="subject" type="text"
                                           id="subject">
                                </div>
                            </div>

                            <div class="form-group">
                                {{ Form::label('country', 'Country', array('class' => 'col-md-1 control-label')) }}
                                <div class="col-md-6">
                                    <input placeholder="your country" class="form-control" name="country" type="text">
                                </div>
                            </div>

                            <div class="form-group">
                                {{ Form::label('phone', 'Phone', array('class' => 'col-md-1 control-label')) }}
                                <div class="col-md-6">
                                    <input placeholder="your phone number" class="form-control" name="phone" type="text">
                                </div>
                            </div>


                            <div class="form-group">
                                {{ Form::label('message', 'Message(*)', array('class' => 'col-md-1 control-label')) }}
                                <div class="col-md-8">
                                    <textarea required class="form-control" rows="8" name="mes" cols="50"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-offset-1 col-sm-10">
                                    {{ Form::submit('send a message', array('class' => 'btn btn-primary')) }}
                                </div>
                            </div>
                            {{ Form::close() }}
                            <script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
                            <script>
                                $("form").validate();
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
@stop



