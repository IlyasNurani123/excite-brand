<section id="nav-br" class="nav-bar">
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
        <a class="navbar-brand text-white logo" href="www.excitebrand.com">EB</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ request()->routeIs('index') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('index') }}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item {{ request()->routeIs('who-we-are') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('who-we-are') }}">WHO WE ARE</a>
                </li>

                <li class="nav-item dropdown {{ request()->routeIs('what-we-do') ? 'active' : '' }}">
                    {{-- <a href="{{ route('what-we-do') }}"
                        class="nav-link dropdown-toggle dropdown-item" id="navbarDropdown" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        WHAT WE DO
                    </a> --}}
                    <a href="{{ route('what-we-do') }}" id="navbarDropdown" class="nav-link dropdown-toggle"
                        aria-haspopup="true" aria-expanded="false">WHAT WE DO</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        {{-- <li> <a href="{{ route('what-we-do') }}"
                                class="dropdown-item">WHAT WE DO</a></li> --}}
                        <li class="{{ request()->routeIs('we-develop') ? 'active' : '' }}"> <a
                                href="{{ route('we-develop') }}" class="dropdown-item">WE DEVELOP</a></li>
                        <li class="{{ request()->routeIs('we-design') ? 'active' : '' }}"> <a
                                href="{{ route('we-design') }}" class="dropdown-item">WE DESIGN</a></li>

                        <li id="sub-dropdown" class="dropdown {{ request()->routeIs('we-promote') ? 'active' : '' }}"><a
                                href="{{ route('we-promote') }}" id="navbarDropdown"
                                class="dropdown-toggle dropdown-item" aria-haspopup="true" aria-expanded="false">WE
                                PROMOTO</a>
                            <ul id="sub-dropdown-menu" class="dropdown-menu">
                                <li class="{{ request()->routeIs('seo-services') ? 'active' : '' }}"> <a
                                        href="{{ route('seo-services') }}" class="dropdown-item">SEO SERVICES</a></li>
                                <li class="{{ request()->routeIs('ppc-agency') ? 'active' : '' }}"> <a
                                        href="{{ route('ppc-agency') }}" class="dropdown-item">PPC AGENCY</a></li>
                            </ul>
                        </li>
                        <li class="{{ request()->routeIs('we-support') ? 'active' : '' }}"><a
                                href="{{ route('we-support') }}" class="dropdown-item">WE SUPPORT</a></li>
                    </ul>
                </li>


                {{-- <li class="nav-item dropdown">
                    <a class="nav-link" href="{{ route('what-we-do') }}">WHAT WE DO</a>
                </li> --}}
                <li class="nav-item {{ request()->routeIs('our-work') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('our-work') }}">OUR WORK</a>
                </li>

                <li class="nav-item {{ request()->routeIs('blogs') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('blogs') }}">NEWS & BLOG</a>
                </li>

                <li class="nav-item {{ request()->routeIs('contact-us') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('contact-us') }}">CONTACT US</a>
                </li>
            </ul>
        </div>
    </nav>
</section>
@push('scripts')
    <script>
        $('.dropdown ul.dropdown-menu li a').on('touchstart', function(e) {
            e.preventDefault();
            window.location.href = $(this).attr('href');
        })

    </script>

@endpush
