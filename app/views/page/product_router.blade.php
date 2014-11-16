@extends('product_master')

@section('title')
COTEK Router Series {{$model}}
@stop

@section('description')
CNC router models: CTK-6090/CTK-1212/CTK-1325/CTK-1325T/CTK-1325I Table size for wood/stone engraving and carving: 1300*1800mm/1300*2600mm/1600*2600mm/1800*2600mm High performance driver can assure the router CNC machine fast speed and high precision;And the strong cutting strength of our CNC engraver can realize a long time mass processing;As a professional manufacture,we promise you the most efficiency woodworking router with most favorable price.
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
@endif
@stop

@section('productImg_1')

@stop

@section('productImg_2')
@stop

@section('productImg_3')

@stop

@section('product_dec')
    <div class="product-title">CNC Router <span class="text-uppercase">{{$model}}</span></div>
    <hr>
    @if($model == 'ctk-6090' or $model =='ctk-1212' or $model =='ctk-1325')
    <div class="product-desc">High stability:lathe bed platform casting,supporting dense,bearing force average,reducing machine distortion.</div>
    @elseif($model == 'ctk-1325t')
    <div class="product-desc">The machine adopts steel structure,seamless welding,according to the standard industry to produce.</div>
    @elseif($model == 'ctk-1325i' or $model == 'ctk-1325i-2d' or $model =='ctk-1325i-3d')
    <div class="product-desc">Multi-head cnc router:The machine add multi-heads,they can work at the same time or just one head work separately.</div>
    @endif
    <div class="product-stock">In Stock</div>
@stop

@section('product_content_1')
    <h3>Main Feature:</h3>
    @if($model == 'ctk-6090' or $model =='ctk-1212' or $model =='ctk-1325')
    <ol>
        <li>High stability:lathe bed platform casting,supporting dense,bearing force average,reducing machine distortion.</li>
        <li>High precision: ball screw drive with a high precision which can reach up to 0.05mm.</li>
        <li>High quality parts:using the linear round guide,high precision;X rail adopt pop dust-proof structure,ensure the machine has a long-term operation;spindle is water cooling.</li>
        <li>Good compatibility:Compatible software CAD/CAM,such as Type3,AreCam,Castmate,UcanCam,Artcut engraving software,Coreldraw,etc.It can manufacture fancy emboss,and 3D arts.</li>
    </ol>
    @elseif($model == 'ctk-1325t')
    <ol>
        <li>The machine adopts steel structure,seamless welding,according to the standard industry to produce;</li>
        <li>X Y and Z adopt Taiwan HIWIN linear square guide rail,high precision,good dust cleaning;</li>
        <li>X and Y axis adopt rack transmission,faster working,higher efficiency;</li>
        <li>High performance subdivision stepper motor operates smoothly at maximum speed;</li>
        <li>Adopting high quality water cooled spindle,so the machine can keep working for long-time without any fault;</li>
        <li>It has the function of re-carving after break point and power failure.</li>
    </ol>
    @elseif($model == 'ctk-1325i' or $model =='ctk-1325i-2d' or $model =='ctk-1325i-3d')
    <ol>
        <li>Multi-head cnc router:The machine add multi-heads,they can work at the same time or just one head work separately;</li>
        <li>Three axis imported linear square rail.Solid gantry,well structure of lathe bed,stable lethe table,fast speed and high accuracy;</li>
        <li>High-speed water cooling spindle and high performance subdivision driver ensure to work stably for a long time;</li>
        <li>Adopt advanced CNC system (NC studio or DSP control system).This system have break point memory mode and special saving made of different points so that can make sure continuous working after power off or other postpone situation;</li>
        <li>Option:Stainless steel water tank is suitable for the processing of hard materials,such as glass,marble and so on.</li>
    </ol>
    @endif

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