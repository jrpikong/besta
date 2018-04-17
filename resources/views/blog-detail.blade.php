@extends('layouts.main')

@section('content')
    <section class="section section-tertiary section-no-border pb-3 mt-0">
        <div class="container">
            <div class="row justify-content-end mt-4">
                <div class="col-lg-10 pt-4 mt-4 text-right">
                    <h1 class="text-uppercase font-weight-light mt-4 pt-3 text-color-primary">Blog</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container">

        @if($article)
            <div class="row pt-2">
                <div class="col">
                    <div class="blog-posts single-post mt-4">

                        <article class="post post-large blog-single-post">

                            <div class="post-date">
                                <span class="day">{{$article->created_at->format('d')}}</span>
                                <span class="month">{{$article->created_at->format('M')}}</span>
                            </div>

                            <div class="post-content">

                                <h1 class="mb-3">{{$article->title}}</h1>

                                <div class="post-meta">
                                    <span><i class="fas fa-user"></i> By <a href="#">{{$article->authorId->name}}</a> </span>
                                </div>

                                <img src="{{Voyager::image($article->image)}}" class="img-fluid " alt="{{$article->image}}">
                                <p> {!! $article->body !!} </p>
                            </div>
                        </article>

                    </div>
                </div>
            </div>
        @endif

    </div>
@endsection