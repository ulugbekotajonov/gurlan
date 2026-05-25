<header class="header header-minimal">
    <nav class="header-fixed">
        <div class="container">
            <div class="row flex-nowrap align-items-center justify-content-between">
                <div class="col-auto header-fixed-col logo-wrapper">
                    <a href="{{ route("home") }}" class="logo" title="PathSoft">
                        <img src="{{ asset("assets/img/logo.png") }}" width="115" height="36" alt="PathSoft">
                    </a>
                </div>
                <div class="col-auto col-xl col-static header-fixed-col d-none d-xl-block">
                    <div class="row flex-nowrap align-items-center justify-content-end">
                        <div class="col header-fixed-col d-none d-xl-block col-static">
                            <!-- Begin main menu -->
                            <nav class="main-mnu">
                                <ul class="main-mnu-list">
                                    <li>
                                        <a href="{{ route("home") }}" data-title="Home">
                                            <span>Home</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="about.blade.php" data-title="About us">
                                            <span>About us</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="services.blade.php" data-title="Services">
                                            <span>Services</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="typography.blade.php" data-title="Typography">
                                            <span>Typography</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="tabs.blade.php" data-title="Tabs & Accordions">
                                            <span>Tabs & Accordions</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="news.blade.php" data-title="News">
                                            <span>News</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="contacts.blade.php" data-title="Contacts">
                                            <span>Contacts</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            <!-- End main menu -->
                        </div>
                    </div>
                </div>
                <div class="col-auto d-block d-xl-none header-fixed-col">
                    <div class="main-mnu-btn">
                        <span class="bar bar-1"></span>
                        <span class="bar bar-2"></span>
                        <span class="bar bar-3"></span>
                        <span class="bar bar-4"></span>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
