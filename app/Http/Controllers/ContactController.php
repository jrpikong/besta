<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store (Request $request)
    {
        header('Content-type: application/json');
        echo 'hello';
    }
}
