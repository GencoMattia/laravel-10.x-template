<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid justify-content-center">
            <div class="navbar">
                <a class="navbar-brand me-5" href="#">
                    <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="header-logo">
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        @foreach ( $navbarLinks as $link )
                        <li class="nav-item me-3">
                            <a class="nav-link active" aria-current="page" href="#">
                                {{ strtoupper($link["title"]) }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>
