@extends('sidebar_master')

@section('title')
    Cotek - Contact
@stop

@section('description')
    Advertising equipment (CNC routers, printers, banner machines, etc)
@stop

@section('topimg')
    <div id="topimg">
        <img src="{{asset('img/page/contact.jpg')}}" class="img-responsive" alt=""/>
    </div>
@stop

@section('content_page')
    <div>
        <h4>CONTACT US</h4>
        <hr/>
        <p><strong>Henan Huaxia Haina Sales and Marketing Co., Ltd</strong></p>

        <p>Y06 Building,11 Changchun Road, Zhengzhou City,Henan,China,450001</p>

        <p>Mobile: +86 139 3821 6025</p>

        <p><a href="mailto:info@sinohuaxia.com"></a>E-mail: info@sinohuaxia.com</p>

        <p><strong>Zip Code:</strong>450001</p>

        <hr/>
        <div id="contact">
            <h4>Please Fill Your Inquiry</h4>
            {{ Form::open(array('url' => 'mailPost', 'class' => 'form-horizontal', 'role' => 'form' )) }}
            <input name="product" type="hidden" value="contact 页面">

            <div class="form-group">
                {{ Form::label('country', 'Country', array('class' => 'col-md-1 control-label')) }}
                <div class="col-md-6">
                    <input placeholder="your country" class="form-control" name="country" type="text">
                </div>
            </div>

            <div class="form-group">
                {{ Form::label('subject', 'Name', array('class' => 'col-md-1 control-label')) }}
                <div class="col-md-6">
                    <input placeholder="your name" class="form-control" name="subject" type="text"
                           id="subject">
                </div>
            </div>

            <div class="form-group">
                {{ Form::label('email', 'Email(*)', array('class' => 'col-md-1 control-label')) }}
                <div class="col-md-6">
                    <input required placeholder="youremail@example.com" class="form-control"
                           name="email" type="email" id="email">
                </div>
            </div>

            <div class="form-group">
                {{ Form::label('phone', 'Phone', array('class' => 'col-md-1 control-label')) }}
                <div class="col-md-6">
                    <input placeholder="your phone number" class="form-control" name="phone" type="text">
                </div>
            </div>


            <div class="form-group">
                {{ Form::label('message', 'Message(*)', array('class' => 'col-md-1 control-label')) }}
                <div class="col-md-8">
                    <textarea required class="form-control" rows="8" name="mes" cols="50"></textarea>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-offset-1 col-sm-10">
                    {{ Form::submit('send a message', array('class' => 'btn btn-primary')) }}
                </div>
            </div>
            {{ Form::close() }}
            <script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
            <script>
                $("form").validate();
            </script>
        </div>
        <hr/>
    </div>
@stop



