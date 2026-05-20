@extends("main")

@section("content")

    <nav class="bread-crumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="bread-crumbs-list">
                        <li>
                            <a href="{{ route("home") }}">Home</a>
                            <i class="material-icons md-18">chevron_right</i>
                        </li>
                        <li>404</li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading heading-center section-heading-animate">
                        <div class="section-subheading">Sorry, but the page was not found</div>
                        <h1>404</h1>
                        <p class="section-desc">You may have mistyped the address or the page may have moved</p>
                    </div>
                    <div class="btn-group align-items-center justify-content-center">
                        <a href="{{ route("home") }}" class="btn btn-with-icon ripple">
                            <span>Go to home page</span>
                            <svg class="btn-icon-right" viewBox="0 0 13 9" width="13" height="9">
                                <use xlink:href="{{ asset("assets/img/sprite.svg#arrow-right") }}"></use>
                            </svg>
                        </a>
                        <a href="{{ route("contact") }}" class="btn btn-border btn-with-icon ripple">
                            <span>Contact us</span>
                            <svg class="btn-icon-right" viewBox="0 0 13 9" width="13" height="9">
                                <use xlink:href="{{ asset("assets/img/sprite.svg#arrow-right") }}"></use>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
