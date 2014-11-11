@extends('sidebar_master')

@section('title')
    Hanvy - about us.
@stop

@section('description')
    This is description.
@stop

@section('topimg')
    <div id="topimg">
        <img src="{{asset('img/page/product.jpg')}}" class="img-responsive" alt=""/>
    </div>
@stop

@section('content_page')
    <div>
    {{--产品列表标题--}}
    @if($category == 'all')
        <h4>All Products</h4>
    @elseif($category == 'plotter')
        <h4>COTEK Plotter Series</h4>
    @elseif($category == 'laser')
        <h4>COTEK Laser Series</h4>
    @elseif($category == 'router')
        <h4>COTEK Router Series</h4>
    @endif
        <hr/>

    {{--产品列表--}}
    @if($category == 'all')
    <h4>COTEK Plotter Series</h4>
        <div class="row">
                  <div class="col-xs-6 col-md-4">
                    <a href="{{url('product/plotter/ctk-360c')}}" class="thumbnail">
                      <img src="{{asset('img/product/plotter/products_ctk360.jpg')}}" alt="CTK-360C Cutting Plotter">
                      <div class="caption">
                        <p class="text-center">CTK-360C Cutting Plotter (Plotter De Corte)</p>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a href="{{url('product/plotter/ctk-720c')}}" class="thumbnail">
                      <img src="{{asset('img/product/plotter/products_ctk720.jpg')}}" alt="CTK-720C Cutting Plotter">
                      <div class="caption">
                        <p class="text-center">New Series CTK-720C Cutting Plotter(Plotter De Corte Cotek)</p>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a href="{{url('product/plotter/ctk-1350c')}}" class="thumbnail">
                      <img src="{{asset('img/product/plotter/products_ctk1350.jpg')}}" alt="CTK-1350 Cutting Plotter">
                      <div class="caption">
                        <p class="text-center">CTK-1350C Cutting Plotter(Plotter De Corte,Kesici Plotter) </p>
                      </div>
                    </a>
                  </div>
        </div>
        <hr/>
    <h4>COTEK Laser Series</h4>
        <div class="row">
                  <div class="col-xs-6 col-md-4">
                    <a href="#" class="thumbnail">
                      <img src="{{asset('img/index/1.jpg')}}" alt="...">
                      <div class="caption">
                        <p class="text-center">Headquarter office building   </p>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a href="#" class="thumbnail">
                      <img src="{{asset('img/index/1.jpg')}}" alt="...">
                      <div class="caption">
                        <p class="text-center">Headquarter office building   </p>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a href="#" class="thumbnail">
                      <img src="{{asset('img/index/1.jpg')}}" alt="...">
                      <div class="caption">
                        <p class="text-center">Headquarter office building   </p>
                      </div>
                    </a>
                  </div>
        </div>
        <div class="row">
                  <div class="col-xs-6 col-md-4">
                    <a href="#" class="thumbnail">
                      <img src="{{asset('img/index/1.jpg')}}" alt="...">
                      <div class="caption">
                        <p class="text-center">Headquarter office building   </p>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a href="#" class="thumbnail">
                      <img src="{{asset('img/index/1.jpg')}}" alt="...">
                      <div class="caption">
                        <p class="text-center">Headquarter office building   </p>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a href="#" class="thumbnail">
                      <img src="{{asset('img/index/1.jpg')}}" alt="...">
                      <div class="caption">
                        <p class="text-center">Headquarter office building   </p>
                      </div>
                    </a>
                  </div>
                </div>
                <hr/>
    <h4>COTEK Router Series</h4>
        <div class="row">
                  <div class="col-xs-6 col-md-4">
                    <a href="#" class="thumbnail">
                      <img src="{{asset('img/index/1.jpg')}}" alt="...">
                      <div class="caption">
                        <p class="text-center">Headquarter office building   </p>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a href="#" class="thumbnail">
                      <img src="{{asset('img/index/1.jpg')}}" alt="...">
                      <div class="caption">
                        <p class="text-center">Headquarter office building   </p>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a href="#" class="thumbnail">
                      <img src="{{asset('img/index/1.jpg')}}" alt="...">
                      <div class="caption">
                        <p class="text-center">Headquarter office building   </p>
                      </div>
                    </a>
                  </div>
        </div>
        <div class="row">
                  <div class="col-xs-6 col-md-4">
                    <a href="#" class="thumbnail">
                      <img src="{{asset('img/index/1.jpg')}}" alt="...">
                      <div class="caption">
                        <p class="text-center">Headquarter office building   </p>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a href="#" class="thumbnail">
                      <img src="{{asset('img/index/1.jpg')}}" alt="...">
                      <div class="caption">
                        <p class="text-center">Headquarter office building   </p>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a href="#" class="thumbnail">
                      <img src="{{asset('img/index/1.jpg')}}" alt="...">
                      <div class="caption">
                        <p class="text-center">Headquarter office building   </p>
                      </div>
                    </a>
                  </div>
                </div>
        <hr/>

    @elseif($category == 'plotter')
        <div class="row">
                  <div class="col-xs-6 col-md-4">
                    <a href="{{url('product/plotter/ctk-360c')}}" class="thumbnail">
                      <img src="{{asset('img/product/plotter/products_ctk360.jpg')}}" alt="CTK-360C Cutting Plotter">
                      <div class="caption">
                        <p class="text-center">CTK-360C Cutting Plotter (Plotter De Corte)</p>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a href="{{url('product/plotter/ctk-720c')}}" class="thumbnail">
                      <img src="{{asset('img/product/plotter/products_ctk720.jpg')}}" alt="CTK-720C Cutting Plotter">
                      <div class="caption">
                        <p class="text-center">New Series CTK-720C Cutting Plotter(Plotter De Corte Cotek)</p>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a href="{{url('product/plotter/ctk-1350c')}}" class="thumbnail">
                      <img src="{{asset('img/product/plotter/products_ctk1350.jpg')}}" alt="CTK-1350 Cutting Plotter">
                      <div class="caption">
                        <p class="text-center">CTK-1350C Cutting Plotter(Plotter De Corte,Kesici Plotter) </p>
                      </div>
                    </a>
                  </div>
        </div>
        <hr/>
    @elseif($category == 'laser')
        <div class="row">
                  <div class="col-xs-6 col-md-4">
                    <a href="#" class="thumbnail">
                      <img src="{{asset('img/index/1.jpg')}}" alt="...">
                      <div class="caption">
                        <p class="text-center">Headquarter office building   </p>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a href="#" class="thumbnail">
                      <img src="{{asset('img/index/1.jpg')}}" alt="...">
                      <div class="caption">
                        <p class="text-center">Headquarter office building   </p>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a href="#" class="thumbnail">
                      <img src="{{asset('img/index/1.jpg')}}" alt="...">
                      <div class="caption">
                        <p class="text-center">Headquarter office building   </p>
                      </div>
                    </a>
                  </div>
        </div>
        <div class="row">
                  <div class="col-xs-6 col-md-4">
                    <a href="#" class="thumbnail">
                      <img src="{{asset('img/index/1.jpg')}}" alt="...">
                      <div class="caption">
                        <p class="text-center">Headquarter office building   </p>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a href="#" class="thumbnail">
                      <img src="{{asset('img/index/1.jpg')}}" alt="...">
                      <div class="caption">
                        <p class="text-center">Headquarter office building   </p>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a href="#" class="thumbnail">
                      <img src="{{asset('img/index/1.jpg')}}" alt="...">
                      <div class="caption">
                        <p class="text-center">Headquarter office building   </p>
                      </div>
                    </a>
                  </div>
                </div>
        <hr/>
        @elseif($category == 'router')
        <div class="row">
                  <div class="col-xs-6 col-md-4">
                    <a href="#" class="thumbnail">
                      <img src="{{asset('img/index/1.jpg')}}" alt="...">
                      <div class="caption">
                        <p class="text-center">Headquarter office building   </p>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a href="#" class="thumbnail">
                      <img src="{{asset('img/index/1.jpg')}}" alt="...">
                      <div class="caption">
                        <p class="text-center">Headquarter office building   </p>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a href="#" class="thumbnail">
                      <img src="{{asset('img/index/1.jpg')}}" alt="...">
                      <div class="caption">
                        <p class="text-center">Headquarter office building   </p>
                      </div>
                    </a>
                  </div>
        </div>
        <div class="row">
                  <div class="col-xs-6 col-md-4">
                    <a href="#" class="thumbnail">
                      <img src="{{asset('img/index/1.jpg')}}" alt="...">
                      <div class="caption">
                        <p class="text-center">Headquarter office building   </p>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a href="#" class="thumbnail">
                      <img src="{{asset('img/index/1.jpg')}}" alt="...">
                      <div class="caption">
                        <p class="text-center">Headquarter office building   </p>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a href="#" class="thumbnail">
                      <img src="{{asset('img/index/1.jpg')}}" alt="...">
                      <div class="caption">
                        <p class="text-center">Headquarter office building   </p>
                      </div>
                    </a>
                  </div>
                </div>
        <hr/>
    @endif
    </div>
@stop



