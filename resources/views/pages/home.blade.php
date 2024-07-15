@extends("layouts.app")

@section("page-title", "Home")

@section("main-content")
    <main>
        <div class="jumbotron">

        </div>
        <div class="container">
            <div class="content-label">
                <h2>
                    Current Series
                </h2>
            </div>
            <section class="content">
                <ul class="article-list">
                    @foreach ( $data as $comic )
                    <li>
                        <article class="comics-item">
                            <img src="{{ $comic["thumb"] }}" alt=" {{ $comic["series"] . "-img" }} ">
                            <p>
                                {{ $comic["series"] }}
                            </p>
                        </article>
                    </li>
                    @endforeach
                </ul>
                <button class="load-more">
                    Load More
                </button>
            </section>
        </div>
    </main>
@endsection
