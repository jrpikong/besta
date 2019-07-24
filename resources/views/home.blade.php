@extends('layouts.main')

@section('content')
    {{--Include Slider--}}
    @include('partials.slider')
    {{--End Slider--}}

    <div class="container">
        <div class="row mt-4 mt-lg-5 mb-4 py-4">
            <div class="col-lg-4">
                <h2 class="mb-0 text-color-dark">Who We Are</h2>
                <p class="lead">PT. Besta Rekanda</p>

            </div>
            <div class="col-lg-2 text-center d-none d-lg-block">
                <img src="{{asset('img/dotted-line-angle.png')}}" class="img-fluid" />
            </div>
            <div class="col-lg-6">
                <p>{!! str_limit(Voyager::setting('site.who-we-are'),250)!!}</p>
                <a class="mt-3" href="{{route('company')}}">Learn More <i class="fa fa-long-arrow-right"></i></a>
            </div>
        </div>
    </div>

    <section class="section section-tertiary section-no-border section-custom-construction">
        <div class="container">
            <div class="row pt-4">
                <div class="col">
                    <h2 class="mb-0 text-color-dark">Services</h2>
                    <p class="lead">{{Voyager::setting('site.services-description')}}</p>
                </div>
            </div>

            <div class="row mt-4">
                @if($services)
                    @foreach($services as $service)
                        <div class="col-lg-6">
                            <div class="feature-box feature-box-style-2 custom-feature-box mb-4 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
                                <div class="feature-box-icon">
                                    <img src="{{Voyager::image($service->icon)}}" alt="{{$service->slug}}" class="img-fluid" />
                                </div>
                                <div class="feature-box-info ml-3">
                                    <h4 class="mb-2">{{$service->title}}</h4>
                                    <p>{{str_limit($service->description,120)}}</p>
                                    <a class="mt-3" href="{{route('services',[$service->slug])}}">Learn More <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>

    @if(!$projects->isEmpty())
    <section class="pt-3 pb-4 home-concept-construction">
        <div class="container">
            <div class="row pt-4">
                <div class="col">
                    <h2 class="mb-0 text-color-dark">Projects</h2>

                    <div class="diamonds-wrapper lightbox" data-plugin-options="{'delegate': '.diamond', 'type': 'image', 'gallery': {'enabled': true}}">
                        <ul class="diamonds">
                            @foreach($projects as $i => $project)
                                @php
                                    $sm = '';
                                    if ($i == 3 || $i == 5 || $i == 6){
                                        $sm = 'diamond-sm';
                                    }
                                @endphp
                                <li>
                                    <a href="{{Voyager::image($project->cover_image)}}" class="diamond {{$sm}}">
                                        <div class="content">
                                            <img src="{{Voyager::image($project->cover_image)}}" class="img-fluid" />
                                        </div>
                                    </a>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
            <div class="row row-diamons-description justify-content-center justify-content-xl-start text-center text-xl-left">
                <div class="col-md-8 col-lg-6">
                    <p class="lead">{{Voyager::setting('site.project-description')}}</p>
                    <a class="btn btn-outline btn-primary" href="{{route('projects')}}">View All Projects</a>
                </div>
            </div>
        </div>
    </section>
    @endif
    @if(!$testimonials->isEmpty())
    <section class="section section-background mb-4" style="background-image: url({{Voyager::image(Voyager::setting('site.bg-testimonial'))}}); background-position: 50% 100%; min-height: 540px; background-size: cover;">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-6">

                    <div class="owl-carousel owl-theme nav-bottom rounded-nav mt-4 pt-4 mb-4 pb-4" data-plugin-options="{'items': 1, 'loop': false}">
                        @foreach($testimonials as $testimonial)
                            <div>
                                <div class="col">
                                    <div class="testimonial testimonial-style-2 testimonial-with-quotes mb-0">
                                        <blockquote>
                                            <p>{{$testimonial->description}}</p>
                                        </blockquote>
                                        <div class="testimonial-author">
                                            <p><strong>{{$testimonial->testi_name}}</strong><span>{{$testimonial->from}}</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </section>
    @endif
    @if(!$reason->isEmpty())
    <section class="section section-tertiary section-no-border section-custom-construction">
        <div class="container">
            <div class="row pt-4">
                <div class="col">
                    <h2 class="mb-0 text-color-dark">4 Reason choosing Us</h2>
                </div>
            </div>

            <div class="row mt-4">
                @foreach($reason as $item)
                    <div class="col-lg-6">
                        <div class="feature-box feature-box-style-2 custom-feature-box mb-4 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
                            <div class="feature-box-icon">
                                <img src="{{Voyager::image($item->icon)}}" alt="{{$item->title}}" class="img-fluid" style="width: 70px;" />
                            </div>
                            <div class="feature-box-info ml-3">
                                <h4 class="mb-2">{{$item->title}}</h4>
                                <p>{{str_limit($item->description,320)}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif
    <section class="pt-3 section-custom-construction-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="owl-carousel owl-theme stage-margin rounded-nav" data-plugin-options="{'margin': 10, 'loop': false, 'nav': true, 'dots': false, 'stagePadding': 40, 'items': 6, 'autoplay': true, 'autoplayTimeout': 3000}">
                        @if(!$partners->isEmpty())
                            @foreach($partners as $partner)
                                <div>
                                    <img class="img-fluid" src="{{Voyager::image($partner->icon)}}" alt="{{$partner->name}}">
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center mt-4">
                    <hr class="solid mt-0 mb-4">
                </div>
            </div>
            <div class="row pt-4">
                <div class="col">
                    <h2 class="mb-0 text-color-dark">News</h2>
                </div>
            </div>
            <div class="row">
                @if($posts)
                    @foreach($posts as $post)
                        <div class="col-lg-4">
                    <div class="recent-posts mt-4">
                        <a href="{{route('blog-detail',[$post->slug])}}">
                            <img class="img-fluid pb-3 img-blog" src="{{Voyager::image($post->image)}}" alt="{{$post->title}}">
                        </a>
                        <article class="post">
                            <div class="date">
                                <span class="day">{{$post->created_at->format('d')}}</span>
                                <span class="month">{{$post->created_at->format('M')}}</span>
                            </div>
                            <h4 class="pt-3 pb-0 mb-0"><a class="text-color-dark" href="{{route('blog-detail',[$post->slug])}}">{{$post->title}}</a></h4>
                            <p>By {{$post->authorId->name}}</p>
                            <p>{!!str_limit($post->body,200)!!}</p>
                            <a class="mt-3" href="{{route('blog-detail',[$post->slug])}}">Read More <i class="fa fa-long-arrow-right"></i></a>
                        </article>
                    </div>
                </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>

@endsection
