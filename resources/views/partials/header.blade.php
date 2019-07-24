<header id="header" class="header-narrow header-semi-transparent-light" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 1, 'stickySetTop': '1'}">
    <div class="header-body">
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <img class="logo-default" alt="Porto" width="131" height="96" src="{{Voyager::image(setting('site.logo'))}}">
                            <a href="{{route('home')}}">
                                <img class="logo-small" alt="Porto" width="131" height="96" src="{{Voyager::image(setting('site.logo'))}}">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="header-nav header-nav-stripe">
                            <div class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li>
                                            <a class="nav-link {{ (Request::is('/') ? 'active' : '') }}" href="{{route('home')}}">
                                                Home
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link {{ (Request::is('company*') ? 'active' : '') }}" href="{{route('company')}}">
                                                Company
                                            </a>
                                        </li>
                                        <li class="dropdown">
                                            <a class="nav-link dropdown-toggle {{ (Request::is('services*') ? 'active' : '') }}" href="{{route('overview')}}">
                                                Services
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item {{ (Request::is('services') ? 'active' : '') }}" href="{{route('overview')}}">Overview</a></li>
                                                @if(!$services->isEmpty())
                                                    @foreach($services as $service)
                                                        <li class="nav-item"><a class="nav-link {{ (Request::is('services/'.$service->slug) ? 'active' : '') }}" href="{{route('services',[$service->slug])}}">{{$service->title}}</a></li>
                                                    @endforeach
                                                @endif
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{route('projects')}}">
                                                Projects
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{route('blog')}}">
                                                Blog
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{route('contact')}}">
                                                Contact
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <ul class="header-social-icons social-icons d-none d-lg-block">
                                @if(Voyager::setting('site.facebook'))
                                    <li class="social-icons-facebook"><a href="http://www.facebook.com/{{Voyager::setting('site.facebook')}}" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                @endif

                                @if(Voyager::setting('site.twitter'))
                                    <li class="social-icons-twitter"><a href="http://www.twitter.com/{{Voyager::setting('site.twitter')}}" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                @endif
                            </ul>
                            <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                <i class="fa fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>