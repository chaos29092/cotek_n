@extends('sidebar_master')

@section('title')
    Hanvy - about us.
@stop

@section('description')
    This is description.
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



