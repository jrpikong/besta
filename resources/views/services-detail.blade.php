@extends('layouts.main')

@section('content')
    <section class="section section-tertiary section-no-border pb-3 mt-0">
        <div class="container">
            <div class="row justify-content-end mt-4">
                <div class="col-lg-10 pt-4 mt-4 text-right">
                    <h1 class="text-uppercase font-weight-light mt-4 pt-3 text-color-primary">Services</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container">

        <div class="row pt-2 mb-4">
            <div class="col-lg-3">
                @include('partials.services-sidebar')

            </div>
            <div class="col-lg-9">

                <h2 class="mb-2">General Construction</h2>

                <img class="img-fluid float-right ml-5 mb-4 mt-4" src="img/demos/construction/icons/construction.png" alt="" />

                <p class="lead mb-4 mt-4">Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittisem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbiacumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat.</p>

                <p>Gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>

                <div class="row">
                    <div class="col-lg-5">
                        <p class="pb-4">Lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat. Lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare.</p>
                    </div>
                    <div class="col-lg-7">
                        <div class="nivo-slider pb-4 mb-4">
                            <div class="slider-wrapper theme-default">
                                <div id="nivoSlider" class="nivoSlider mt-0 mb-4">
                                    <img src="{{asset('img/demos/construction/slides/slide-construction-small-1.jpg')}}" data-thumb="{{asset('img/demos/construction/slides/slide-construction-small-1.jpg')}}" alt="" />
                                    <img src="{{asset('img/demos/construction/slides/slide-construction-small-2.jpg')}}" data-thumb="{{asset('img/demos/construction/slides/slide-construction-small-2.jpg')}}" alt="" />
                                    <img src="{{asset('img/demos/construction/slides/slide-construction-small-3.jpg')}}" data-thumb="{{asset('img/demos/construction/slides/slide-construction-small-3.jpg')}}" alt="" />
                                    <img src="{{asset('img/demos/construction/slides/slide-construction-small-4.jpg')}}" data-thumb="{{asset('img/demos/construction/slides/slide-construction-small-4.jpg')}}" alt="" />
                                </div>
                                <div id="htmlcaption" class="nivo-html-caption"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <p>Gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>

                <h4 class="mt-4 mb-3">Our Process</h4>

                <ul class="list list-icons list-primary mt-4 mb-4">
                    <li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0"><i class="fa fa-check"></i> Fusce sit amet orci quis arcu vestibulum vestibulum.</li>
                    <li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300"><i class="fa fa-check"></i> Amet orci quis arcu vestibulum vestibulum.</li>
                    <li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="600"><i class="fa fa-check"></i> Orci quis arcu vestibulum vestibulum.</li>
                    <li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="900"><i class="fa fa-check"></i> Fuscesit amet orci quis arcu vestibulum vestibulum.</li>
                </ul>

            </div>
        </div>

    </div>
@endsection