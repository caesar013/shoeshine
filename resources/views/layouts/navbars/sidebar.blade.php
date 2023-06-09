<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main"
            aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <div>
            <a class="navbar-brand" style="height: 100px; width: auto;"
                @auth href="{{ route('dashboard.home') }}" @endauth @guest href="{{ route('guest.home') }}" @endguest>
                <img src="{{ asset('argon/img/brand/logo.png') }}" class="navbar-brand-img "
                    style="max-height: 100%; max-width: 100%;">
            </a>
        </div>

        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a class="navbar-brand" style="height: auto; width: auto;"
                            @auth href="{{ route('dashboard.home') }}" @endauth
                            @guest href="{{ route('guest.home') }}" @endguest>
                            <img src="{{ asset('argon/img/brand/logo.png') }}" class="navbar-brand-img "
                                style="max-height: 100%; max-width: 100%;">
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
            <!-- Authorized Navigation -->
            @auth
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}"
                            href="{{ route('dashboard.home') }}">
                            <i class="ni ni-tv-2 text-primary"></i>
                            {{ __('Home') }}
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('service') ? 'active' : '' }}"
                            href="{{ route('service.showServices') }}">
                            <i class="ni ni-briefcase-24 text-primary"></i>
                            {{ __('Services') }}
                        </a>
                    </li>

                    @cannot('admin')
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('dashboard/shoe*') ? 'active' : '' }}"
                            href="{{ route('dashboard.shoe.index') }}">
                            <i class="ni ni-ui-04 text-primary"></i>
                            {{ __('Shoes') }}
                        </a>
                    </li>

                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('dashboard/order*') ? 'active' : '' }}"
                                href="{{ route('dashboard.order.create') }}">
                                <i class="ni ni-delivery-fast text-primary"></i>
                                {{ __('Order') }}
                            </a>
                        </li>
                    @endcannot

                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('testimony') ? 'active' : '' }}"
                            href="{{ route('testimony') }}">
                            <i class="ni ni-bullet-list-67 text-primary"></i> {{ __('Testimonials') }}
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('article*') ? 'active' : '' }}" href="{{ route('article') }}">
                            <i class="ni ni-single-copy-04 text-primary"></i> {{ __('Articles') }}
                        </a>
                    </li>
                </ul>

                @can('admin')
                    <h5 class="d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Administrator</span>
                    </h5>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('dashboard/order*') ? 'active' : '' }}"
                                href="{{ route('dashboard.admin.order.create') }}">
                                <i class="ni ni-tv-2 text-primary"></i>
                                {{ __('Create Orders') }}
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('dashboard/admin/service*') ? 'active' : '' }}"
                                href="{{ route('dashboard.admin.service.index') }}">
                                <i class="ni ni-tv-2 text-primary"></i>
                                {{ __('Services Control') }}
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('dashboard/admin/shoe*') ? 'active' : '' }}"
                                href="{{ route('dashboard.admin.shoe.index') }}">
                                <i class="ni ni-tv-2 text-primary"></i>
                                {{ __('Shoes Control') }}
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('dashboard/admin/transaction*') ? 'active' : '' }}"
                                href="{{ route('dashboard.admin.transaction.index') }}">
                                <i class="ni ni-tv-2 text-primary"></i>
                                {{ __('Transactions Control') }}
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('dashboard/admin/report*') ? 'active' : '' }}"
                                href="{{ route('dashboard.admin.report.index') }}">
                                <i class="ni ni-tv-2 text-primary"></i>
                                {{ __('Report') }}
                            </a>
                        </li>
                    </ul>
                @endcan
            @endauth

            {{-- Guest Navigation --}}
            @guest
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('home') ? 'active' : '' }}" href="{{ route('guest.home') }}">
                            <i class="ni ni-tv-2 text-primary"></i>
                            {{ __('Home') }}
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('service') ? 'active' : '' }}"
                            href="{{ route('service.showServices') }}">
                            <i class="ni ni-briefcase-24 text-primary"></i>
                            {{ __('Services') }}
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('testimony') ? 'active' : '' }}"
                            href="{{ route('testimony') }}">
                            <i class="ni ni-bullet-list-67 text-primary"></i> {{ __('Testimonials') }}
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('article*') ? 'active' : '' }}" href="{{ route('article') }}">
                            <i class="ni ni-single-copy-04 text-primary"></i> {{ __('Articles') }}
                        </a>
                    </li>
                </ul>
            @endguest
        </div>
    </div>
</nav>
