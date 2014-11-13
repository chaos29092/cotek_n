@extends('sidebar_master')

@section('title')
Cotek - Tour
@stop

@section('description')
Advertising equipment (CNC routers, printers, banner machines, etc)
@stop

@section('topimg')
    <div id="topimg">
        <img src="{{asset('img/page/factory.jpg')}}" class="img-responsive" alt=""/>
    </div>
@stop

@section('content_page')
    <div>
        <h4>FACTORY TOUR</h4>
        <hr/>
        <div class="row">
                  <div class="col-xs-6 col-md-6">
                      <img src="{{asset('img/page/tour_1.jpg')}}" alt="...">
                  </div>
                  <div class="col-xs-6 col-md-6">
                      <img src="{{asset('img/page/tour_2.jpg')}}" alt="...">
                  </div>

                </div>
        <hr/>
    </div>
@stop



