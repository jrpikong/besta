<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Page;

class CompanyController extends Controller
{
    public function index ()
    {
        $pages = Page::where('status', 1)->get();

        return view('company',compact('pages'));
    }
}
