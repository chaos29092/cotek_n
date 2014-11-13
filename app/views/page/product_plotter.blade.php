@extends('product_master')

@section('title')
CUTTING PLOTTER {{$model}}
@stop

@section('description')
 Applicable materials: car stickers, label, reflective film, light box, carton board, thermal transfer film etc...
@stop

@section('breadcrumbs')
<li><a href="{{url('products/plotter')}}">COTEK Plotter Series</a></li>
@stop

@section('productImg')
@if($model == 'ctk-360c')
{{asset('img/product/plotter/cotek360_1.jpg')}}
@elseif('ctk-720c')
{{asset('img/product/plotter/ctk720_1.jpg')}}
@elseif('ctk-1350c')
{{asset('img/product/plotter/ctk1350_1.jpg')}}
@endif
@stop

@section('productImg_1')

@stop

@section('productImg_2')
@stop

@section('productImg_3')

@stop

@section('product_dec')
    <div class="product-title">Full Automatically Scan Cutting Plotter  <span class="text-uppercase">{{$model}}</span></div>
    <div class="product-desc">Applicable materials: car stickers, label, reflective film, light box, carton board, thermal transfer film.</div>
    <hr>
    <div class="product-desc">Areas of application: advertisement signs, traffic signs, clothing processing, automobile decoration, glass industry, craft gifts, thermal transfer, interior decoration, etc.</div>
    <div class="product-desc">Unique innovation: Equipped with temperature control device can be connected with the thermal transfer equipment supporting temperature control during heat transfer process.</div>
    <div class="product-stock">In Stock</div>
@stop

@section('product_content_1')
    <h3>Features <small>Why choose Cotek cutting plotter?</small></h3>
    <ol>
        <li>Internet cable transmission. Cutting plotter and computer can realize long-distance data transmission;</li>
        <li>4 interfaces: RJ45, USB 2.0, Serial port, USB flash drive;</li>
        <li>Automatic contour cutting function doesn't need to install the driver. It can plug and play. AMRS function is as good as ROLAND, MIMAKI, GRAPHTEC brands in such function. The latest FLEXI software perfect match with plotters;</li>
        <li>Pointed foot and closed compensation function. The parameter can be manually adjusted on the machine to make the output more accurate;</li>
        <li>Servo system, more accurate, lower noise;</li>
        <li>Full aluminum alloy carriage with imported gear makes lettering precision much higher. The service life is eight years;</li>
        <li>Light limitation function protects device from empty cutting;</li>
        <li>The maneuverability of membrane large buttons made by imported material performs very good. The service life is 5 years;</li>
        <li>Extension--Temperature control module. It can work together with thermal transfer equipment;</li>
    </ol>
@stop

@section('product_content_2')
    <table class="table table-bordered text-center">
        <tr>
            <th>{{Lang::get('product.th_1')}}</th>
            <th>CTK-360C</th>
            <th>CTK-720C</th>
            <th>CTK-1350C</th>
        </tr>
        <tr>
            <td>{{Lang::get('product.td_1')}}</td>
            <td>360mm</td>
            <td>720mm</td>
            <td>1350mm</td>
        </tr>
        <tr>
            <td>{{Lang::get('product.td_2')}}</td>
            <td>330mm(12" )</td>
            <td>630mm(24" )</td>
            <td>1260mm(48" )</td>
        </tr>
        <tr>
            <td>{{Lang::get('product.td_3')}}</td>
            <td colspan="3">{{Lang::get('product.td_4')}}</td>
        </tr>
        <tr>
            <td>{{Lang::get('product.td_5')}}</td>
            <td colspan="3">10-990g  /  50-800mm/s</td>
        </tr>
        <tr>
            <td>{{Lang::get('product.td_6')}}</td>
            <td colspan="3">< ±0.1mm</td>
        </tr>
        <tr>
            <td>{{Lang::get('product.td_7')}}</td>
            <td colspan="3">{{Lang::get('product.td_8')}}</td>
        </tr>
        <tr>
            <td>{{Lang::get('product.td_9')}}</td>
            <td colspan="3">0.0254mm/Step(0.001"/step)</td>
        </tr>
        <tr>
            <td>{{Lang::get('product.td_10')}}</td>
            <td colspan="3">{{Lang::get('product.td_11')}}</td>
        </tr>
        <tr>
            <td>{{Lang::get('product.td_12')}}</td>
            <td colspan="3">{{Lang::get('product.td_13')}}</td>
        </tr>
        <tr>
            <td>{{Lang::get('product.td_14')}}</td>
            <td colspan="3">{{Lang::get('product.td_15')}}</td>
        </tr>
        <tr>
            <td>{{Lang::get('product.td_16')}}</td>
            <td colspan="3">DMPL/HPGL </td>
        </tr>
        <tr>
            <td>{{Lang::get('product.td_17')}}</td>
            <td colspan="3">{{Lang::get('product.td_18')}}</td>
        </tr>
        <tr>
            <td>{{Lang::get('product.td_23')}}</td>
            <td colspan="3">{{Lang::get('product.td_24')}}</td>
        </tr>
        <tr>
            <td>{{Lang::get('product.td_19')}}</td>
            <td colspan="3">{{Lang::get('product.td_20')}}</td>
        </tr>
        <tr>
            <td>{{Lang::get('product.td_21')}}</td>
            <td colspan="3">{{Lang::get('product.td_22')}}</td>
        </tr>
    </table>
@stop

@section('product_content_3')

@stop