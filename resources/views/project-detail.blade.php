@extends('layouts.main')

@section('content')
    <section class="section section-tertiary section-no-border pb-3 mt-0">
        <div class="container">
            <div class="row justify-content-end mt-4">
                <div class="col-lg-10 pt-4 mt-4 text-right">
                    <h1 class="text-uppercase font-weight-light mt-4 pt-3 text-color-primary">Projects</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container">

        <div class="row">
            <div class="col">
                <div class="portfolio-title">
                    <div class="row">
                        <div class="portfolio-nav-all col-lg-1">
                            <a href="{{route('projects')}}" data-tooltip data-original-title="Back to list"><i class="fa fa-th"></i></a>
                        </div>
                        <div class="col-lg-10 text-center">
                            <h2 class="mb-0">{{$project->project_name}}</h2>
                        </div>
                    </div>
                </div>

                <hr class="solid tall">
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-lg-4">
                <div class="thumb-gallery">
                    <div class="lightbox" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}}">
                        <div class="owl-carousel owl-theme manual thumb-gallery-detail show-nav-hover" id="thumbGalleryDetail">
                            @foreach(json_decode($project->all_images) as $all_image)
                                <div>
                                    <a href="{{Voyager::image($all_image)}}">
                                        <span class="thumb-info thumb-info-centered-info thumb-info-no-borders text-4">
                                            <span class="thumb-info-wrapper text-4">
                                                <img alt="Project Image" src="{{Voyager::image($all_image)}}" class="img-fluid">
                                                <span class="thumb-info-title text-4">
                                                    <span class="thumb-info-inner text-4"><i class="icon-magnifier icons text-4"></i></span>
                                                </span>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            @endforeach

                        </div>
                    </div>

                    <div class="owl-carousel owl-theme manual thumb-gallery-thumbs mt" id="thumbGalleryThumbs">
                        @foreach(json_decode($project->all_images) as $all_image)
                            <div>
                                <img alt="Project Image" src="{{Voyager::image($all_image)}}" class="img-fluid cur-pointer">
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
            <div class="col-lg-8">

                <div class="project-detail-construction">

                    <p> {!! $project->description  !!}</p>

                    <div class="row">
                        <div class="col-lg-5">

                            <ul class="list-project-details">
                                <li>
                                    <label>Project Location:</label>
                                    <p>{{$project->location}}</p>
                                </li>
                                <li>
                                    <label>Project Type:</label>
                                    <p>{{$project->service->title}}</p>
                                </li>
                                <li>
                                    <label>Project Cost:</label>
                                    <p>Rp {{$project->project_cost}}</p>
                                </li>
                                <li>
                                    <label>Client:</label>
                                    <p>{{$project->client_name}}</p>
                                </li>
                            </ul>

                        </div>
                        <div class="col-lg-7">
                            <div class="progress-bars progress-bars-project-detail">
                                <div class="progress-label">
                                    <span>General Progress</span>
                                </div>
                                <div class="progress progress-sm">
                                    <div class="progress-bar progress-bar-primary" data-appear-progress-animation="{{$project->general_progress}}%">
                                        <span class="progress-bar-tooltip">{{$project->general_progress}}%</span>
                                    </div>
                                </div>
                                <div class="progress-label">
                                    <span>Phase 1 </span>
                                </div>
                                <div class="progress progress-sm">
                                    <div class="progress-bar progress-bar-primary" data-appear-progress-animation="{{$project->progress_phase1}}%" data-appear-animation-delay="300">
                                        <span class="progress-bar-tooltip">{{$project->progress_phase1}}%</span>
                                    </div>
                                </div>
                                <div class="progress-label">
                                    <span>Phase 2</span>
                                </div>
                                <div class="progress progress-sm">
                                    <div class="progress-bar progress-bar-primary" data-appear-progress-animation="{{$project->progress_phase2}}%" data-appear-animation-delay="600">
                                        <span class="progress-bar-tooltip">{{$project->progress_phase2}}%</span>
                                    </div>
                                </div>
                                <div class="progress-label">
                                    <span>Phase 4</span>
                                </div>
                                <div class="progress progress-sm">
                                    <div class="progress-bar progress-bar-primary" data-appear-progress-animation="{{$project->progress_phase3}}%" data-appear-animation-delay="900">
                                        <span class="progress-bar-tooltip">{{$project->progress_phase3}}%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection