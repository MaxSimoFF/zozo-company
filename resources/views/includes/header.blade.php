<header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">

        <a href="{{ route('home') }}" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img src="{{ asset('assets/favicon.png') }}" alt="">
            <h1>Liczydło<span>.</span></h1>
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto" href="{{ route('home') }}">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">O nas</a></li>
                <li><a class="nav-link scrollto" href="#services">Nasze usługi</a></li>
                <li><a class="nav-link scrollto" href="#team">Nasz zespół</a></li>
                <li><a class="nav-link scrollto" href="#contact">Kontakt</a></li>
                {{-- <li class="dropdown"><a href="#"><span>Lang</span> <i
                            class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <li>
                                <a rel="alternate" hreflang="{{ $localeCode }}"
                                    href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    {{ $properties['native'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li> --}}
            </ul>
            <i class="bi bi-list mobile-nav-toggle d-none"></i>
        </nav><!-- .navbar -->

        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a class="btn-getstarted scrollto" href="{{ route('backend.index') }}">Panel</a>
                @else
                    {{-- <a class="btn-getstarted scrollto" href="{{ route('login') }}">Log in</a>

                    @if (Route::has('register'))
                        <a class="btn-getstarted scrollto" href="{{ route('register') }}">Register</a>
                    @endif --}}
                @endauth
            </div>
        @endif

    </div>
</header><!-- End Header -->
