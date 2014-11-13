@extends('sidebar_master')

@section('title')
Cotek - Product - {{$category}}
@stop

@section('description')
A special questionnaire for cutting plotters, laser engraving & cutting machines, CNC router and any other products you find on our website, will help us produce the most suitable and economic customized equipment .
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
                    <a href="{{url('product/laser/ctk-1325p')}}" class="thumbnail">
                      <img src="{{asset('img/product/laser/ctk-1325p.jpg')}}" alt="CTK-1325p Flat Laser Cutting Bed Machine">
                      <div class="caption">
                        <p class="text-center">CTK-1325P Flat Laser Cutting Bed Machine</p>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a href="{{url('product/laser/ctk-1325h')}}" class="thumbnail">
                      <img src="{{asset('img/product/laser/ctk-1325h.jpg')}}" alt="CTK-1325h Flat Laser Cutting Bed Machine">
                      <div class="caption">
                        <p class="text-center">CTK-1325H Flat Laser Cutting Bed Machine</p>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a href="{{url('product/laser/ctk-1326k')}}" class="thumbnail">
                      <img src="{{asset('img/product/laser/ctk-1326k.jpg')}}" alt="CTK-1326K Laser engraving and cutting machine">
                      <div class="caption">
                        <p class="text-center">CTK-1326K Laser engraving and cutting machine</p>
                      </div>
                    </a>
                  </div>
        </div>
        <div class="row">
                  <div class="col-xs-6 col-md-4">
                    <a href="{{url('product/laser/ctk-1290k')}}" class="thumbnail">
                      <img src="{{asset('img/product/laser/ctk-1290k.jpg')}}" alt="CTK-1290K Laser Engraving&Cutting Machine">
                      <div class="caption">
                        <p class="text-center">CTK-1290K Laser Engraving&Cutting Machine</p>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a href="{{url('product/laser/ctk-3040k')}}" class="thumbnail">
                      <img src="{{asset('img/product/laser/ctk-3040k.jpg')}}" alt="CTK-3040K Mini Laser Engraver">
                      <div class="caption">
                        <p class="text-center">CTK-3040K Mini Laser Engraver</p>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a href="{{url('product/laser/ctk-4060k')}}" class="thumbnail">
                      <img src="{{asset('img/product/laser/ctk-4060k.jpg')}}" alt="CTK-6040K Laser Engraver">
                      <div class="caption">
                        <p class="text-center">CTK-4060K Laser Engraver</p>
                      </div>
                    </a>
                  </div>
        </div>
        <div class="row">
                  <div class="col-xs-6 col-md-4">
                    <a href="{{url('product/laser/ctk-6090k')}}" class="thumbnail">
                      <img src="{{asset('img/product/laser/ctk-6090k.jpg')}}" alt="CTK-6090K Laser Engraving Cutting Machine">
                      <div class="caption">
                        <p class="text-center">CTK-6090K Laser Engraving Cutting Machine</p>
                      </div>
                    </a>
                  </div>
        </div>
                <hr/>
    <h4>COTEK Router Series</h4>
        <div class="row">
                  <div class="col-xs-6 col-md-4">
                    <a href="{{url('product/router/ctk-6090')}}" class="thumbnail">
                      <img src="{{asset('img/product/router/ctk-6090.jpg')}}" alt="CTK-6090 1.5Kw spindle">
                      <div class="caption">
                        <p class="text-center">CTK-6090 1.5Kw spindle</p>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a href="{{url('product/router/ctk-1212')}}" class="thumbnail">
                      <img src="{{asset('img/product/router/ctk-1212.jpg')}}" alt="CTK-1212 2.2Kw spindle Square guide">
                      <div class="caption">
                        <p class="text-center">CTK-1212 2.2Kw spindle Square guide</p>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a href="{{url('product/router/ctk-1325')}}" class="thumbnail">
                      <img src="{{asset('img/product/router/ctk-1325.jpg')}}" alt="CTK-1325 3.0Kw spindle Square guide">
                      <div class="caption">
                        <p class="text-center">CTK-1325 3.0Kw spindle Square guide</p>
                      </div>
                    </a>
                  </div>
        </div>
        <div class="row">
                  <div class="col-xs-6 col-md-4">
                    <a href="{{url('product/router/ctk-1325t')}}" class="thumbnail">
                      <img src="{{asset('img/product/router/ctk-1325t.jpg')}}" alt="CTK-1325T 3.0Kw spindle Square guide">
                      <div class="caption">
                        <p class="text-center">CTK-1325T 3.0Kw spindle Square guide</p>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a href="{{url('product/router/ctk-1325i')}}" class="thumbnail">
                      <img src="{{asset('img/product/router/ctk-1325i.jpg')}}" alt="CTK-1325I 3.0Kw spindle Square guide Vacuum table">
                      <div class="caption">
                        <p class="text-center">CTK-1325I 3.0Kw spindle Square guide Vacuum table</p>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a href="{{url('product/router/ctk-1325i-2d')}}" class="thumbnail">
                      <img src="{{asset('img/product/router/ctk-1325i-2d.jpg')}}" alt="CTK-1325I-2D 3.7Kw spindle Vacuum table ATC with two tools">
                      <div class="caption">
                        <p class="text-center">CTK-1325I-2D 3.7Kw spindle Vacuum table ATC with two tools</p>
                      </div>
                    </a>
                  </div>
         </div>
        <div class="row">
                  <div class="col-xs-6 col-md-4">
                    <a href="{{url('product/router/ctk-1325i-3d')}}" class="thumbnail">
                      <img src="{{asset('img/product/router/ctk-1325i-3d.jpg')}}" alt="CTK-1325I-3D 4.5Kw spindle Vacuum table ATC with three tools">
                      <div class="caption">
                        <p class="text-center">CTK-1325I-3D 4.5Kw spindle Vacuum table ATC with three tools</p>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a href="{{url('product/router/ctk-1325s')}}" class="thumbnail">
                      <img src="{{asset('img/product/router/ctk-1325s.jpg')}}" alt="CTK-1325S 5.5Kw spindle Square guide">
                      <div class="caption">
                        <p class="text-center">CTK-1325S 5.5Kw spindle Square guide</p>
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
                    <a href="{{url('product/laser/ctk-1325p')}}" class="thumbnail">
                      <img src="{{asset('img/product/laser/ctk-1325p.jpg')}}" alt="CTK-1325p Flat Laser Cutting Bed Machine">
                      <div class="caption">
                        <p class="text-center">CTK-1325P Flat Laser Cutting Bed Machine</p>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a href="{{url('product/laser/ctk-1325h')}}" class="thumbnail">
                      <img src="{{asset('img/product/laser/ctk-1325h.jpg')}}" alt="CTK-1325h Flat Laser Cutting Bed Machine">
                      <div class="caption">
                        <p class="text-center">CTK-1325H Flat Laser Cutting Bed Machine</p>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a href="{{url('product/laser/ctk-1326k')}}" class="thumbnail">
                      <img src="{{asset('img/product/laser/ctk-1326k.jpg')}}" alt="CTK-1326K Laser engraving and cutting machine">
                      <div class="caption">
                        <p class="text-center">CTK-1326K Laser engraving and cutting machine</p>
                      </div>
                    </a>
                  </div>
        </div>
        <div class="row">
                  <div class="col-xs-6 col-md-4">
                    <a href="{{url('product/laser/ctk-1290k')}}" class="thumbnail">
                      <img src="{{asset('img/product/laser/ctk-1290k.jpg')}}" alt="CTK-1290K Laser Engraving&Cutting Machine">
                      <div class="caption">
                        <p class="text-center">CTK-1290K Laser Engraving&Cutting Machine</p>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a href="{{url('product/laser/ctk-3040k')}}" class="thumbnail">
                      <img src="{{asset('img/product/laser/ctk-3040k.jpg')}}" alt="CTK-3040K Mini Laser Engraver">
                      <div class="caption">
                        <p class="text-center">CTK-3040K Mini Laser Engraver</p>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a href="{{url('product/laser/ctk-4060k')}}" class="thumbnail">
                      <img src="{{asset('img/product/laser/ctk-4060k.jpg')}}" alt="CTK-6040K Laser Engraver">
                      <div class="caption">
                        <p class="text-center">CTK-4060K Laser Engraver</p>
                      </div>
                    </a>
                  </div>
        </div>
        <div class="row">
                  <div class="col-xs-6 col-md-4">
                    <a href="{{url('product/laser/ctk-6090k')}}" class="thumbnail">
                      <img src="{{asset('img/product/laser/ctk-6090k.jpg')}}" alt="CTK-6090K Laser Engraving Cutting Machine">
                      <div class="caption">
                        <p class="text-center">CTK-6090K Laser Engraving Cutting Machine</p>
                      </div>
                    </a>
                  </div>
        </div>
        <hr/>
        @elseif($category == 'router')
        <div class="row">
                  <div class="col-xs-6 col-md-4">
                    <a href="{{url('product/router/ctk-6090')}}" class="thumbnail">
                      <img src="{{asset('img/product/router/ctk-6090.jpg')}}" alt="CTK-6090 1.5Kw spindle">
                      <div class="caption">
                        <p class="text-center">CTK-6090 1.5Kw spindle</p>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a href="{{url('product/router/ctk-1212')}}" class="thumbnail">
                      <img src="{{asset('img/product/router/ctk-1212.jpg')}}" alt="CTK-1212 2.2Kw spindle Square guide">
                      <div class="caption">
                        <p class="text-center">CTK-1212 2.2Kw spindle Square guide</p>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a href="{{url('product/router/ctk-1325')}}" class="thumbnail">
                      <img src="{{asset('img/product/router/ctk-1325.jpg')}}" alt="CTK-1325 3.0Kw spindle Square guide">
                      <div class="caption">
                        <p class="text-center">CTK-1325 3.0Kw spindle Square guide</p>
                      </div>
                    </a>
                  </div>
        </div>
        <div class="row">
                  <div class="col-xs-6 col-md-4">
                    <a href="{{url('product/router/ctk-1325t')}}" class="thumbnail">
                      <img src="{{asset('img/product/router/ctk-1325t.jpg')}}" alt="CTK-1325T 3.0Kw spindle Square guide">
                      <div class="caption">
                        <p class="text-center">CTK-1325T 3.0Kw spindle Square guide</p>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a href="{{url('product/router/ctk-1325i')}}" class="thumbnail">
                      <img src="{{asset('img/product/router/ctk-1325i.jpg')}}" alt="CTK-1325I 3.0Kw spindle Square guide Vacuum table">
                      <div class="caption">
                        <p class="text-center">CTK-1325I 3.0Kw spindle Square guide Vacuum table</p>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a href="{{url('product/router/ctk-1325i-2d')}}" class="thumbnail">
                      <img src="{{asset('img/product/router/ctk-1325i-2d.jpg')}}" alt="CTK-1325I-2D 3.7Kw spindle Vacuum table ATC with two tools">
                      <div class="caption">
                        <p class="text-center">CTK-1325I-2D 3.7Kw spindle Vacuum table ATC with two tools</p>
                      </div>
                    </a>
                  </div>
         </div>
        <div class="row">
                  <div class="col-xs-6 col-md-4">
                    <a href="{{url('product/router/ctk-1325i-3d')}}" class="thumbnail">
                      <img src="{{asset('img/product/router/ctk-1325i-3d.jpg')}}" alt="CTK-1325I-3D 4.5Kw spindle Vacuum table ATC with three tools">
                      <div class="caption">
                        <p class="text-center">CTK-1325I-3D 4.5Kw spindle Vacuum table ATC with three tools</p>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a href="{{url('product/router/ctk-1325s')}}" class="thumbnail">
                      <img src="{{asset('img/product/router/ctk-1325s.jpg')}}" alt="CTK-1325S 5.5Kw spindle Square guide">
                      <div class="caption">
                        <p class="text-center">CTK-1325S 5.5Kw spindle Square guide</p>
                      </div>
                    </a>
                  </div>
         </div>
        <hr/>
    @endif
    </div>
@stop



