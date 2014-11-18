@extends('master')

@section('title')
    This is title.
@stop

@section('description')
    This is description.
@stop

@section('content')
    @yield('topimg')

    <div class="container" id="content">
        <div class="row">
            {{--sidebar--}}
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
                    <button type="button" class="btn btn-warning">
                        <span class="glyphicon glyphicon-comment"></span> chat now
                    </button>
                    </a>
                    <span>(Chat Online)</span>
                    <br/><br/>
                    <p>or Email to us:</p>
                    <a href="mailto:info@nylyzj.com"><span class="glyphicon glyphicon-envelope"></span> info@nylyzj.com</a>
                    <br/><br/>
                    <a href="{{url('contact')}}" target="_blank"><img src="{{asset('img/contact.jpg')}}" class="img-responsive img-rounded center-block" alt=""/></a>
                </div>
                <div>
                    <a href=""><img src="{{asset('img/whyus.jpg')}}" class="img-responsive img-rounded" alt=""/></a>
                </div>
            </div>

            <div class="col-md-9" id="content-page">
                @yield('content_page')
            </div>
        </div>
    </div>
@stop




