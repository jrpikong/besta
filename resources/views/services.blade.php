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

        <div class="row pt-2">
            <div class="col-lg-3">
                @include('partials.services-sidebar')
            </div>
            <div class="col-lg-9">

                <div class="row mt-4">
                    <div class="col">
                        <div class="feature-box feature-box-style-2 custom-feature-box mb-4 ml-lg-5 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0">
                            <div class="feature-box-icon">
                                <img src="img/demos/construction/icons/construction.png" alt="" class="img-fluid" />
                            </div>
                            <div class="feature-box-info ml-2">
                                <h4 class="mb-2">General Construction</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                                <a class="mt-3" href="demo-construction-services-detail.html">Learn More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <div class="feature-box feature-box-style-2 custom-feature-box mb-4 ml-lg-5 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0">
                            <div class="feature-box-icon">
                                <img src="img/demos/construction/icons/plumbing.png" alt="" class="img-fluid" />
                            </div>
                            <div class="feature-box-info ml-2">
                                <h4 class="mb-2">Plumbing</h4>
                                <p>Lorem ipsum dolor sit amet Quisque rutrum pellentesque imperdietonsectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet.</p>
                                <a class="mt-3" href="demo-construction-services-detail.html">Learn More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <div class="feature-box feature-box-style-2 custom-feature-box mb-4 ml-lg-5 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
                            <div class="feature-box-icon">
                                <img src="img/demos/construction/icons/painting.png" alt="" class="img-fluid" />
                            </div>
                            <div class="feature-box-info ml-2">
                                <h4 class="mb-2">Painting</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur. Quisque rutrum pellentesque imperdiet. adipiscing metus elit. Quisque rutrum pellentesque imperdiet.</p>
                                <a class="mt-3" href="demo-construction-services-detail.html">Learn More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <div class="feature-box feature-box-style-2 custom-feature-box mb-4 ml-lg-5 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
                            <div class="feature-box-icon">
                                <img src="img/demos/construction/icons/ground-construction.png" alt="" class="img-fluid" />
                            </div>
                            <div class="feature-box-info ml-2">
                                <h4 class="mb-2">Pre-Construction</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                                <a class="mt-3" href="demo-construction-services-detail.html">Learn More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection