<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main"
            aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <a class="navbar-brand pt-0" href="{{ route('home') }}">
            <img src="{{ asset('argon/img/brand/logo.png') }}" class="navbar-brand-img">
        </a>

        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('argon/img/brand/blue.png') }}">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse"
                            data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false"
                            aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="{{ route('home') }}">
                        <i class="ni ni-tv-2 text-primary" {{ ($title === "Home") ? 'style="color: #00FF85;"' : '' }}></i>
                        {{ __('Home') }}
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Services") ? 'active' : '' }}" href="{{ route('service.index') }}">
                        <i class="ni ni-briefcase-24 text-primary" {{ ($title === "Services") ? 'style="color: #00FF85;"' : '' }}></i>
                        <span class="nav-link-text " {{ ($title === "Services") ? 'style="color: #00FF85;"' : '' }}>{{ __('Services') }}</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Gallery") ? 'active' : '' }}" href="{{ route('home') }}">
                        <i class="ni ni-album-2 text-primary"></i> {{ __('Gallery') }}
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Testimonials") ? 'active' : '' }}" href="{{ route('home') }}">
                        <i class="ni ni-bullet-list-67 text-primary"></i> {{ __('Testimonials') }}
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Articles") ? 'active' : '' }}" href="{{ route('home') }}">
                        <i class="ni ni-single-copy-04 text-primary"></i> {{ __('Articles') }}
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
