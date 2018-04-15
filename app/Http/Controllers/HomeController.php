<?php

namespace App\Http\Controllers;

use App\Project;
use App\Service;
use App\Slider;
use App\Testimonial;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class HomeController extends Controller
{
    public function home ()
    {
        $sliders = $this->slider();
        $services = $this->service();
        $projects = $this->projects();
        $testimonials = $this->testimonials();
        $posts = $this->posts();
        return view('home',compact('sliders','services','projects','testimonials','posts'));
    }


    private function slider()
    {
        $slider =Slider::where('status', 1)->get();
        return $slider;
    }

    private function service()
    {
        $service = Service::all();
        return $service;
    }

    private function projects()
    {
        $project = Project::orderby('created_at','desc')->get();
        return $project;
    }

    private function testimonials()
    {
        $testimonial = Testimonial::all();
        return $testimonial;
    }

    private function posts()
    {
        $posts = Post::with('authorId')->where('status', 1)->limit(3)->get();
        return $posts;
    }
}
