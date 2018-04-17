<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <a href="{{route('home')}}">
                    <img alt="Porto" class="img-fluid logo" width="110" src="{{Voyager::image(setting('site.logo-small-header'))}}">
                </a>
            </div>
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-lg-6 mb-2">
                        <h4>Navigation</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 mb-0">
                        <ul class="list list-footer-nav">
                            <li>
                                <a href="{{route('home')}}">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="{{route('company')}}">
                                    Company
                                </a>
                            </li>
                            <li>
                                <a href="{{route('overview')}}">
                                    Services
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul class="list list-footer-nav">
                            <li>
                                <a href="{{route('projects')}}">
                                    Projects
                                </a>
                            </li>
                            <li>
                                <a href="{{route('blog')}}">
                                    Blog
                                </a>
                            </li>
                            <li>
                                <a href="{{route('contact')}}">
                                    Contact
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <h4>Newsletter</h4>

                <div class="newsletter">

                    <div class="alert alert-success d-none" id="newsletterSuccess">
                        <strong>Success!</strong> You've been added to our email list.
                    </div>

                    <div class="alert alert-danger d-none" id="newsletterError"></div>

                    <form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST">
                        <div class="input-group">
                            <input class="form-control form-control-sm" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="text">
                            <span class="input-group-btn">
                                <button class="btn btn-light" type="submit"><i class="icon-paper-plane icons"></i></button>
                            </span>
                        </div>
                    </form>

                </div>

                <p><i class="fa fa-phone"></i> {{Voyager::setting('site.phone')}} <i class="fa fa-envelope ml-2"></i> <a href="mailto:{{Voyager::setting('site.email')}}">{{Voyager::setting('site.email')}}</a></p>

            </div>
        </div>

        <div class="footer-copyright">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>© Copyright 2017. All Rights Reserved. develop by <a href="mailto:jr.pikong@gmail.com">Pikong Labs</a> </p>
                </div>
            </div>
        </div>

    </div>
</footer>