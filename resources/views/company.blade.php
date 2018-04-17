@extends('layouts.main')

@section('content')

    <section class="section section-tertiary section-no-border pb-3 mt-0">
        <div class="container">
            <div class="row justify-content-end mt-4">
                <div class="col-lg-10 pt-4 mt-4 text-right">
                    <h1 class="text-uppercase font-weight-light mt-4 pt-3 text-color-primary">Company</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container">

        <div class="row pt-2">
            <div class="col-lg-3">
                <aside class="sidebar" id="sidebar" data-plugin-sticky data-plugin-options="{'minWidth': 991, 'containerSelector': '.container', 'padding': {'top': 110}}">

                    <ul class="nav nav-list flex-column mb-4 show-bg-active">
                        <li class="nav-item"><a class="nav-link" data-hash data-hash-offset="110" href="#who-we-are">Who We Are</a></li>
                        <li class="nav-item"><a class="nav-link" data-hash data-hash-offset="110" href="#history">History</a></li>
                        <li class="nav-item"><a class="nav-link" data-hash data-hash-offset="110" href="#mission-vision">Mission &amp; Vision</a></li>
                        @if(!$partners->isEmpty())
                            <li class="nav-item"><a class="nav-link" data-hash data-hash-offset="110" href="#partners">Partners</a></li>
                        @endif
                    </ul>

                </aside>
            </div>
            <div class="col-lg-9">

                <section id="who-we-are" class="mb-4">
                    <div class="nivo-slider mt-3 pb-4">
                        <div class="slider-wrapper theme-default">
                            <div id="nivoSlider" class="nivoSlider mt-0 mb-4">
                                @if($galery)
                                    @foreach(json_decode($galery->images) as $item)
                                        <img src="{{Voyager::image($item)}}" data-thumb="{{Voyager::image($item)}}" alt="" />
                                    @endforeach
                                @endif
                            </div>
                            <div id="htmlcaption" class="nivo-html-caption"></div>
                        </div>
                    </div>

                    <h2 class="mb-0 text-color-dark">Who We Are</h2>
                    <p class="lead mb-4 mt-4">{{Voyager::setting('site.who-we-are')}}</p>

                </section>

                <hr class="solid tall">

                <section id="history" class="mb-4">
                    <h2 class="mb-0 text-color-dark">History</h2>

                    <div class="row">
                        <p class="mt-4"> {{Voyager::setting('site.history')}}</p>
                        {{--<div class="col-lg-7">--}}
                            {{--<img class="float-left img-fluid mr-4 mb-3 mt-4 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0" width="200" src="img/office/office-1.jpg" alt="">--}}
                            {{--<p class="mt-4">Gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. </p>--}}
                            {{--<p class="mt-4">Gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. </p>--}}
                        {{--</div>--}}
                        {{--<div class="col-lg-4">--}}
                            {{--<ul class="list list-unstyled list-primary list-borders">--}}
                                {{--<li class="pt-2 pb-2 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0"><strong class="text-color-primary text-4">2017 - </strong> Moves its headquarters to a new building</li>--}}
                                {{--<li class="pt-2 pb-2 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="100"><strong class="text-color-primary text-4">2014 - </strong> Porto creates its new brand</li>--}}
                                {{--<li class="pt-2 pb-2 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="200"><strong class="text-color-primary text-4">2006 - </strong> Porto opens it doors in London</li>--}}
                                {{--<li class="pt-2 pb-2 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300"><strong class="text-color-primary text-4">2003 - </strong> Inauguration of the new office</li>--}}
                                {{--<li class="pt-2 pb-2 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="400"><strong class="text-color-primary text-4">2001 - </strong> Porto goes into business</li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    </div>
                </section>

                <hr class="solid tall">

                <section id="mission-vision" class="mb-4">

                    <div class="row mt-4">
                        <div class="col-sm-6 text-center">
                            <div class="feature-box feature-box-style-4 justify-content-center mt-4 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0">
											<span class="featured-boxes featured-boxes-style-4 p-0 m-0">
												<span class="featured-box featured-box-primary featured-box-effect-6 p-0 m-0">
													<span class="box-content p-0 m-0">
														<i class="icon-featured icon-target icons"></i>
													</span>
												</span>
											</span>
                                <div class="feature-box-info">
                                    <h2 class="mb-3 text-color-dark">Mission</h2>
                                    <p class="mb-4">{{Voyager::setting('site.mission')}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 text-center">
                            <div class="feature-box feature-box-style-4 justify-content-center mt-4 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
											<span class="featured-boxes featured-boxes-style-4 p-0 m-0">
												<span class="featured-box featured-box-primary featured-box-effect-6 p-0 m-0">
													<span class="box-content p-0 m-0">
														<i class="icon-featured icon-eye icons"></i>
													</span>
												</span>
											</span>
                                <div class="feature-box-info">
                                    <h2 class="mb-3 text-color-dark">Vision</h2>
                                    <p class="mb-4">{{Voyager::setting('site.vision')}}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>

                @if(!$partners->isEmpty())
                    <hr class="solid tall">
                    <section id="partners" class="mb-4">
                        <h2 class="mb-0 text-color-dark">Partners</h2>

                        <div class="row mt-4">
                            <div class="content-grid content-grid-dashed col mt-4 mb-4">
                                <div class="row content-grid-row">
                                    @foreach($partners as $patner)
                                        <div class="content-grid-item col-sm-4 text-center">
                                            <img class="img-fluid" src="{{Voyager::image($patner->icon)}}" alt="{{$patner->name}}">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </section>
                @endif

            </div>

        </div>

    </div>
@endsection