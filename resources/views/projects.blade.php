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

        <div class="row pt-2">
            <div class="col">

                <ul class="nav nav-pills sort-source mb-3 pb-2" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
                    <li class="nav-item active" data-option-value="*"><a class="nav-link active" href="#">Show All</a></li>
                    @if($services)
                        @foreach($services as $service)
                            <li class="nav-item" data-option-value=".{{$service->slug}}"><a class="nav-link" href="#">{{$service->title}}</a></li>
                        @endforeach
                    @endif
                </ul>

                <div class="sort-destination-loader sort-destination-loader-showing">
                    <div class="row mb-4 pt-1 portfolio-list sort-destination" data-sort-id="portfolio">

                        @if($projects)
                            @foreach($projects as $project)

                                <div class="col-md-6 col-lg-4 isotope-item mb-4 {{$project->service->slug}}">
                                    <a href="{{route('project-detail',[$project->id])}}">
											<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
												<span class="thumb-info-wrapper">
													<img src="{{Voyager::image($project->cover_image)}}" class="img-fluid image-projects" alt="">
													<span class="thumb-info-title">
														<span class="thumb-info-inner">View Project...</span>
													</span>
												</span>
											</span>
                                    </a>
                                    <h4 class="mt-3 mb-0">{{$project->project_name}}</h4>
                                    <p class="mb-0">{{$project->location}}</p>
                                </div>

                            @endforeach
                        @endif

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection