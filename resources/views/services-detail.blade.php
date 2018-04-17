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

                <h2 class="mb-2">{{$service->title}}</h2>

                <img class="img-fluid float-right ml-5 mb-4 mt-4" src="{{Voyager::image($service->icon)}}" alt="{{$service->title}}" />

                <p>{!! $service->description !!}</p>

                <div class="row">
                    <div class="col-lg-5">
                        <p class="pb-4">Lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat. Lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare.</p>
                    </div>
                    <div class="col-lg-7">
                        <div class="nivo-slider pb-4 mb-4">
                            <div class="slider-wrapper theme-default">
                                <div id="nivoSlider" class="nivoSlider mt-0 mb-4">
                                    @foreach(json_decode($service->images) as $item)
                                        <img src="{{Voyager::image($item)}}" data-thumb="{{Voyager::image($item)}}" class="img-fluid pb-3 img-blog" alt="" />
                                    @endforeach
                                </div>
                                <div id="htmlcaption" class="nivo-html-caption"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection