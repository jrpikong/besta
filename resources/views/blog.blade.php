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

        <div class="row mb-4">
            @if($articles)
                @foreach($articles as $article)
                    <div class="col-lg-6">
                        <div class="recent-posts mt-4 mb-4">
                            <a href="{{route('blog-detail',[$article->slug])}}">
                                <img class="img-fluid pb-3 img-blog" src="{{Voyager::image($article->thumbnail('medium'))}}" alt="{{$article->title}}">
                            </a>
                            <article class="post">
                                <div class="date">
                                    <span class="day">{{$article->created_at->format('d')}}</span>
                                    <span class="month">{{$article->created_at->format('M')}}</span>
                                </div>
                                <h4 class="pt-3 pb-0 mb-0"><a class="text-color-dark" href="{{route('blog-detail',[$article->slug])}}">{{$article->title}}</a></h4>
                                <p>By {{$article->authorId->name}}</p>
                                <p>{!!str_limit($article->body,200)!!}</p>
                                <a class="mt-3" href="{{route('blog-detail',[$article->slug])}}">Read More <i class="fa fa-long-arrow-right"></i></a>
                            </article>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
        <div id="portfolioPagination" class="center">
            {{ $articles->links('vendor.pagination.bootstrap-4') }}
        </div>

    </div>
@endsection