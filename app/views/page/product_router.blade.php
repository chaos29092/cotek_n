@extends('product_master')

@section('title')
COTEK Router Series {{$model}}
@stop

@section('description')
CNC router models: CTK-1318K/CTK-1326K/CTK-1626K/CTK-1826 Table size for wood/stone engraving and carving: 1300*1800mm/1300*2600mm/1600*2600mm/1800*2600mm High performance driver can assure the router CNC machine fast speed and high precision;And the strong cutting strength of our CNC engraver can realize a long time mass processing;As a professional manufacture,we promise you the most efficiency woodworking router with most favorable price.
@stop

@section('breadcrumbs')
<li><a href="{{url('products/router')}}">COTEK Router Series</a></li>
@stop

@section('productImg')
@if($model == 'ctk-6090')
{{asset('img/product/router/ctk-6090_1.jpg')}}
@elseif($model == 'ctk-1212')
{{asset('img/product/router/ctk-1212_1.jpg')}}
@elseif($model == 'ctk-1325')
{{asset('img/product/router/ctk-1325_1.jpg')}}
@elseif($model == 'ctk-1325t')
{{asset('img/product/router/ctk-1325t_1.jpg')}}
@elseif($model == 'ctk-1325i')
{{asset('img/product/router/ctk-1325i_1.jpg')}}
@elseif($model == 'ctk-1325i-2d')
{{asset('img/product/router/ctk-1325i-2d_1.jpg')}}
@elseif($model == 'ctk-1325i-3d')
{{asset('img/product/laser/ctk-1325i-3d_1.jpg')}}
@elseif($model == 'ctk-1325s')
{{asset('img/product/laser/ctk-1325s_1.jpg')}}
@endif
@stop

@section('productImg_1')

@stop

@section('productImg_2')
@stop

@section('productImg_3')

@stop

@section('product_dec')
    <div class="product-title">LASER ROUTER <span class="text-uppercase">{{$model}}</span></div>
    <div class="product-desc">Applicable material: Nonmetal materials like wood, leather, cloth, plexiglass,rubber printing plates,ABS double color sheet, synthetic crystal, horn, cardboard, MDF, marble, jade, etc.</div>
    <hr>
    <div class="product-desc">Applicable Industries: Advertisement decorations, handicraft, garment, shoes, bags, computerized embroidery and clipping,template cutting, relief, toys, furniture, packing, printing and other industries.</div>
    <div class="product-stock">In Stock</div>
@stop

@section('product_content_1')
    <h3>Applicable material:</h3>
    <p>Nonmetal materials like wood, leather, cloth, plexiglass,rubber printing plates,ABS double color sheet, synthetic crystal, horn, cardboard, MDF, marble, jade, etc.</p>
    <h3>Features <small>Why choose Cotek Laser Engraving Machine?</small></h3>
    <ol>
        <li>High-subdivision motor with Japan's drive technology,which can guarantee the product running under high speed, high precision;</li>
        <li>Imported linear guide rail,mechanical operation in good precision and strong stability;</li>
        <li>Channel type feed and feeding infinite;</li>
        <li>The overall adopts high quality aluminum alloy and processed with professional mold,which with characteristics of good strength hard deformation;</li>
        <li>Main components of the circuit adopts original imported ones and the main control chip contains double CPU;</li>
    </ol>
    <h3>Gallery <small>What Cotek Laser Engraving Machine Can Make?</small></h3>
    <img src="{{asset('img/product/laser/chengpin_1.jpg')}}" alt="Laser Engraving Image Gallery"/>
    <img src="{{asset('img/product/laser/chengpin_2.jpg')}}" alt="Laser Engraving Image Gallery"/>

    <h3>Customers Words <small>What Cotek Customers Say?</small></h3>
    <div>
    <section id="carousel">
                    <div class="quote"><i class="fa fa-quote-left fa-4x"></i></div>
    				<div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="8000">
    				  <!-- Carousel indicators -->
                      <ol class="carousel-indicators">
    				    <li data-target="#fade-quote-carousel" data-slide-to="0" class="active"></li>
    				    <li data-target="#fade-quote-carousel" data-slide-to="1"></li>
    				    <li data-target="#fade-quote-carousel" data-slide-to="2"></li>
    				    <li data-target="#fade-quote-carousel" data-slide-to="3"></li>
    				    <li data-target="#fade-quote-carousel" data-slide-to="4"></li>
    				  </ol>
    				  <!-- Carousel items -->
    				  <div class="carousel-inner">
    				    <div class="active item">
    				    	<blockquote>
    				    	<p>Mr. Bonze Fleet owns Bonze Lures in New Zealand purchased one set CTK-3040 laser engraving machine. He plans to use this machine to cut through the shell laminate, a kind of hard material with thickness up to 3 mm. The final products are in round and square shapes. Before that, they have to cut the raw material manually. This takes much time, material and labor. Our laser machine owning the quality of precise cutting and time saving helps him solve all those problems at one time. Except that, it’s small size makes it joining the work process easily without influencing other procedures. </p>
    				    	</blockquote>
    				    </div>
    				    <div class="item">
    				    	<blockquote>
    				    	<p>Mr. Sandis Zvejnieks works in SIA Areatech in Latvia purchased one set CTK3040 laser engraving machine. The raw materials to be processed are wood piece, thin rubber plate and plastic sheet. He likes the rotary equipment very much for it can engrave on cylindrical materials. The CTK-3040 laser engraver is one machine with multi-function. And it also meets his needs on stamp making at the same time.<br/><br/><br/></p>

    				    	</blockquote>
    				    </div>
    				    <div class="item">
    				    	<blockquote>
    				    	<p>UAE customer Bilal Ballout(a distributor in this area),purchased our CTK-3040 laser engraving machine,after make comprasion on quality and price with previous supplier,he had made second batch purchase already as our offcially agent.<br/><br/><br/><br/><br/></p>
    				    	</blockquote>
    				    </div>
    				    <div class="item">
    				    	<blockquote>
    				    	<p>Indonesia customer Kevin Lauren purchased our mini laser engraving machine for stamp engraving and wood card cutting,after quality confirmation,he said he want to sell our machines to some clients in his country.<br/><br/><br/><br/><br/></p>
    				    	</blockquote>
    				    </div>
    				    <div class="item">
    				    	<blockquote>
    				    	<p>Venezuela customer Brasilia Mileo Gonzalez purchased our laser engraving machine CTK-6090 to process MDF for arts and crafts,because her previous old-fashioned mechanical engraving equipment is noisy,waste and low efficiency.Now,she is very satisfied with our equipment.<br/><br/><br/><br/> <br/></p>
    				    	</blockquote>
    				    </div>

    				  </div>
    				</div>
    </section>
    </div>
    <h3>To Dear Customer <small>Words From Cotek</small></h3>
    <div class="row">
        <div class="col-md-2">
            <img src="{{asset('img/product/laser/author.jpg')}}" class="img-circle" alt="manage"/>
        </div>
        <div class="col-md-10">
            <blockquote>It's really a great pleasure to have you here!Is there any type attracks you? <br/><br/>
            Quality? Price? Service? Whatever! Your fully satisfication will be our goal to win with 100% efforts.What we pursue is not only successful slaes but also the better favour we can provide for you than ever before you got from others.Sincerely hope that we can get a chance to become a part of your team and we will continue to innovate for your success! <br/><br/>
            If you need our recommendations about the models,please fill the questions list.Thank you very much! <br/><br/>
            We hope you will join us! <br/><br/>
            Your sincerely
            </blockquote>


        </div>
    </div>
@stop

@section('product_content_2')

@stop

@section('product_content_3')

@stop