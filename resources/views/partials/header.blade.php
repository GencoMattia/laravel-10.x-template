<header>
    <div class="container">
        <div class="row">
            <section class="logo">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="header-logo">
            </section>
            <nav class="navbar">
                <ul>
                    @foreach ( $navbarLinks as $link )
                    <li>
                        {{ $link["title"] }}
                    </li>
                    @endforeach
                </ul>
            </nav>
        </div>
    </div>
</header>
