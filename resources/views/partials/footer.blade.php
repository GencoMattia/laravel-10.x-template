<footer>
    <div class="container">
        <div class="row">
            <section class="logo-links">
                <nav class="site-links">
                    <div class="dc-comics-list">
                        <h2>
                            DC Comics
                        </h2>
                        <ul>
                            @foreach ( $dcComicsList as $link )
                            <li>
                                <a href="#">
                                    {{ $link["title"] }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="dc-comics-list">
                        <h2>
                            Shop
                        </h2>
                        <ul>
                            @foreach ( $shopList as $link )
                            <li>
                                <a href="#">
                                    {{ $link["title"] }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="dc-comics-list">
                        <h2>
                            DC
                        </h2>
                        <ul>
                            @foreach ( $dcList as $link )
                            <li>
                                <a href="#">
                                    {{ $link["title"] }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="dc-comics-list">
                        <h2>
                            Sites
                        </h2>
                        <ul>
                            @foreach ( $siteList as $link )
                            <li>
                                <a href="#">
                                    {{ $link["title"] }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </nav>
                <div class="footer-logo">
                    <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="footer-logo">
                </div>
            </section>
            <section class="footer-socials">
                <div class="container">
                    <nav class="social-links">
                        <button class="sign-up">
                            Sign Up Now!
                        </button>
                        <div class="socials-list">
                            <h2>
                                Follow Us
                            </h2>
                            <ul>
                                @foreach ( $socialList as $link )
                                <li>
                                    <a href="#">
                                        <img src="{{ Vite::asset('resources/img/' . $link["icon"]) }}" alt="header-logo">
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </nav>
                </div>
            </section>
        </div>
    </div>
</footer>
