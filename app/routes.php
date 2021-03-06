<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
//page
Route::get('/', 'PageController@index');
Route::get('about', 'PageController@about');
Route::get('contact', 'PageController@contact');
Route::get('customer_visit', 'PageController@customerVisit');
Route::get('service', 'PageController@service');
Route::get('solution', 'PageController@solution');
Route::get('tour', 'PageController@tour');
Route::get('ok', 'PageController@ok');

Route::get('products/{category}', 'PageController@products');
Route::get('product/plotter/{model}', 'PageController@productPlotter');
Route::get('product/laser/{model}', 'PageController@productLaser');
Route::get('product/router/{model}', 'PageController@productRouter');

//contact
Route::post('mailPost', function()
{
    $date = Input::all();

    Mail::send('emails.inquiry', array('subject'=>$date['subject'],'mes'=>$date['mes'],'email'=>$date['email'],'product'=>$date['product'],'country'=>$date['country'],'phone'=>$date['phone']),function($message){
        $message->to(array('178399731@qq.com'), 'inquiry')->subject('cotek - 英语 - 网站询盘');
    });

    return Redirect::to('ok')->with('message', 'Message Send Successfully! We will contact you as soon as possible.');
});

