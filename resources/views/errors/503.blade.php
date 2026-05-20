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
                        <li>503</li>
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
                        <h1>Service is Unavailable</h1>
                        <p class="section-desc">The page requested couldn't be found - this could be due to a spelling
                            error
                            in the URL or a removed page.</p>
                    </div>
                    <div class="btn-group align-items-center justify-content-center">
                        <a href="../pages/home.blade.php" class="btn btn-with-icon ripple">
                            <span>Go to home page</span>
                            <svg class="btn-icon-right" viewBox="0 0 13 9" width="13" height="9">
                                <use xlink:href="assets/img/sprite.svg#arrow-right"></use>
                            </svg>
                        </a>
                        <a href="../pages/contacts.blade.php" class="btn btn-border btn-with-icon ripple">
                            <span>Contact us</span>
                            <svg class="btn-icon-right" viewBox="0 0 13 9" width="13" height="9">
                                <use xlink:href="assets/img/sprite.svg#arrow-right"></use>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
