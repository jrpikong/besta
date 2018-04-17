<?php

namespace App\Http\Controllers;

use App\Message;
use App\Service;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }
    public function store (Request $request)
    {
        $uri  = $request->input('url');
        $insert = Message::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
            'status' => 'Belum Dibaca'
        ]);
        if($uri == 'contact-page'){
            $request->session()->flash('success','Terimakasih Admin kami akan segera menghubungi Anda');
            return view('contact');
        }
        $service_title = Service::all();
        $request->session()->flash('success','Terimakasih Admin kami akan segera menghubungi Anda');
        return view('services',compact('service_title'));
    }
}
