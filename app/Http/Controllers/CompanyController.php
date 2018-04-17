<?php

namespace App\Http\Controllers;

use App\Galery;
use App\Partner;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Page;

class CompanyController extends Controller
{
    public function index ()
    {
        $galery = Galery::first();
        $partners = Partner::all();
        return view('company',compact('galery','partners'));
    }
}
