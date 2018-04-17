<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index ()
    {
        $service_title = Service::all();
        return view('services',compact('service_title'));
    }

    public function servicesDetail ($category)
    {
        $service_title = Service::all();
        $service = Service::where('slug', '=', $category)->firstOrFail();
        return view('services-detail',compact('service','service_title'));
    }
}
