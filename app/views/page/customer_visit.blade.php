@extends('sidebar_master')

@section('title')
Cotek - customer visit
@stop

@section('description')
customer visit Henan Huaxia Haina Sales and Marketing Co., Ltd.
@stop

@section('topimg')
    <div id="topimg">
        <img src="{{asset('img/page/customer.jpg')}}" class="img-responsive" alt=""/>
    </div>
@stop

@section('content_page')
    <div>
        <h4>Customer Visit</h4>
        <hr/>
        <div class="row">
                  <div class="col-xs-6 col-md-4">
                    <a href="#" class="thumbnail">
                      <img src="{{asset('img/page/customers_1.jpg')}}" alt="customers from North America visit our company">
                      <div class="caption">
                        <p class="text-center">customers from North America visit our company</p>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a href="#" class="thumbnail">
                      <img src="{{asset('img/page/customers_2.jpg')}}" alt="customers-form-local-government-visit-our-factory">
                      <div class="caption">
                        <p class="text-center">customers form local government visit our factory</p>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a href="#" class="thumbnail">
                      <img src="{{asset('img/page/customers_3.jpg')}}" alt="client from Aisa visit our office">
                      <div class="caption">
                        <p class="text-center">client from Aisa visit our office</p>
                      </div>
                    </a>
                  </div>
        </div>
        <div class="row">
                  <div class="col-xs-6 col-md-4">
                      <a href="#" class="thumbnail">
                      <img src="{{asset('img/page/customers_4.jpg')}}" alt="Client visit our company">
                      <div class="caption">
                        <p class="text-center">Client visit our company</p>
                      </div>
                      </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a href="#" class="thumbnail">
                      <img src="{{asset('img/page/customers_5.jpg')}}" alt="Participate in exhibition">
                      <div class="caption">
                        <p class="text-center">Participate in exhibition</p>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a href="#" class="thumbnail">
                      <img src="{{asset('img/page/customers_6.jpg')}}" alt="Participate in exhibition">
                      <div class="caption">
                        <p class="text-center">Participate in exhibition</p>
                      </div>
                    </a>
                  </div>
                </div>
        <hr/>
    </div>
@stop



