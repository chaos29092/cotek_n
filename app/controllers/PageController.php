<?php

class PageController extends BaseController {

    public function index()
    {
        return View::make('page.index');
    }

    public function about()
    {
        return View::make('page.about_us');
    }

    public function contact()
    {
        return View::make('page.contact');
    }

    public function customerVisit()
    {
        return View::make('page.customer_visit');
    }

    public function service()
    {
        return View::make('page.service');
    }

    public function solution()
    {
        return View::make('page.solution');
    }

    public function tour()
    {
        return View::make('page.tour');
    }

    public function ok()
    {
        return View::make('page.ok');
    }

    public function products($category)
    {
        $data['category'] = $category ;
        return View::make('page.products', $data);
    }

    public function productPlotter($model)
    {
        $data['model'] = $model ;
        return View::make('page.product_plotter', $data);
    }

    public function productLaser($model)
    {
        $data['model'] = $model ;
        return View::make('page.product_laser', $data);
    }

    public function productRouter($model)
    {
        $data['model'] = $model ;
        return View::make('page.product_router', $data);
    }


}