@extends('product_master')

@section('title')
COTEK Laser Series {{$model}}
@stop

@section('description')
With High-speed water cooling spindle and high performance subdivision driver,our laser engraving machine can do stable work on wood/metal cutting and engraving;80W--180W Laser tube sealed glass co2 laser tube ensures the cnc laser cutter to work accurately and preciously for a long time;Following are regular laser engravers recommended.
@stop

@section('breadcrumbs')
<li><a href="{{url('products/laser')}}">COTEK Laser Series</a></li>
@stop

@section('productImg')
@if($model == 'ctk-1325p')
{{asset('img/product/laser/ctk-1325p_1.jpg')}}
@elseif($model == 'ctk-1325h')
{{asset('img/product/laser/ctk-1325h_1.jpg')}}
@elseif($model == 'ctk-1326k')
{{asset('img/product/laser/ctk-1326k_1.jpg')}}
@elseif($model == 'ctk-1290k')
{{asset('img/product/laser/ctk-1290k_1.jpg')}}
@elseif($model == 'ctk-3040k')
{{asset('img/product/laser/ctk-3040k_1.jpg')}}
@elseif($model == 'ctk-4060k')
{{asset('img/product/laser/ctk-4060k_1.jpg')}}
@elseif($model == 'ctk-6090k')
{{asset('img/product/laser/ctk-6090k_1.jpg')}}
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
        <tbody><tr>
            <th>MODEL</th>
            <th>CTK-2030K</th>
            <th>CTK-3040K</th>
            <th>CTK-6040K</th>
            <th>CTK-6090K</th>
            <th>CTK-1290K</th>
        </tr>
        <tr>
            <td>Processing Area</td>
            <td>200mm×300mm</td>
            <td>300mm×400mm</td>
            <td>600mm×400mm</td>
            <td>600mm×900mm</td>
            <td>1200mm×900mm</td>
        </tr>
        <tr>
            <td>Engraving Speed</td>
            <td colspan="5">0-64000 mm/min</td>
        </tr>
        <tr>
            <td>Cutting Speed</td>
            <td colspan="5">0-36m/min</td>
        </tr>
        <tr>
            <td>Laser Power</td>
            <td colspan="5">50W/60W/120W/150W</td>
        </tr>
        <tr>
            <td>Resolution Ratio</td>
            <td colspan="5">0.0064mm</td>
        </tr>
        <tr>
            <td>Minimum Shaping Size</td>
            <td colspan="5">Chinese Character: 2×2mm, Letter: 1×1mm</td>
        </tr>
        <tr>
            <td>Power Supply</td>
            <td colspan="5">AC220V±10%, 50HZ-60HZ±1HZ</td>
        </tr>
        <tr>
            <td>Location Precision</td>
            <td colspan="5">±0.01mm</td>
        </tr>
        <tr>
            <td>Gross Power</td>
            <td colspan="5">≦1250W</td>
        </tr>
        <tr>
            <td>Operating Temperature</td>
            <td colspan="5">0℃-40℃</td>
        </tr>
        <tr>
            <td>Operating Humidity</td>
            <td colspan="5">5-95% (Non-condensing)</td>
        </tr>
        <tr>
            <td>Peripheral Equipment</td>
            <td colspan="5">Water chiller (with water protection), exhaust blower, air pump</td>
        </tr>
        <tr>
            <td>Graphic format supported</td>
            <td colspan="5">BMP. GIF. JPEG. PCX. TGA. TIFF. PLT. CDR. DMG. DXF.etc </td>
        </tr>
        <tr>
            <td>Support Software</td>
            <td colspan="5">CoreIDraw, Photoshop.AutoCAD etc</td>
        </tr>
        <tr>
            <td>Applicable Materials</td>
            <td colspan="5">Nonmetal materials like leather, cloth, plexiglass,crystal,plastic,acrylic, rubber, plastic, wooden product,ceramic tiles,ABS double color sheet etc.</td>
        </tr>
        <tr>
            <td>Applicable Industries</td>
            <td colspan="5">Advertisement decorations, handicraft, garment, shoes, bags, computerized embroidery and clipping,
                template cutting, relief, toys, furniture, packing, printing and other industries</td>
        </tr>
    </tbody></table>
@stop

@section('product_content_3')

@stop