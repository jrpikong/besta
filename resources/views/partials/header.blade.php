<header id="header" class="header-narrow header-semi-transparent-light" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 1, 'stickySetTop': '1'}">
    <div class="header-body">
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <img class="logo-default" alt="Porto" width="324" height="212" src="{{asset('img/demos/construction/logo-construction.png')}}">
                            <a href="{{route('home')}}">
                                <img class="logo-small" alt="Porto" width="131" height="48" src="{{asset('img/demos/construction/logo-construction-small.png')}}">
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
                                            <a class="nav-link dropdown-toggle {{ (Request::is('services*') ? 'active' : '') }}" href="demo-construction-services.html">
                                                Services
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item {{ (Request::is('services') ? 'active' : '') }}" href="{{route('overview')}}">Overview</a></li>
                                                <li><a class="dropdown-item {{ (Request::is('services/pre-construction') ? 'active' : '') }}" href="{{route('sevices',['pre-construction'])}}">Pre-Construction</a></li>
                                                <li><a class="dropdown-item {{ (Request::is('services/general-construction') ? 'active' : '') }}" href="{{route('sevices',['general-construction'])}}">General Construction</a></li>
                                                <li><a class="dropdown-item {{ (Request::is('services/plumbing') ? 'active' : '') }}" href="{{route('sevices',['plumbing'])}}">Plumbing</a></li>
                                                <li><a class="dropdown-item {{ (Request::is('services/painting') ? 'active' : '') }}" href="{{route('sevices',['painting'])}}">Painting</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="demo-construction-projects.html">
                                                Projects
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="demo-construction-blog.html">
                                                Blog
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="demo-construction-contact.html">
                                                Contact
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <ul class="header-social-icons social-icons d-none d-lg-block">
                                <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
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