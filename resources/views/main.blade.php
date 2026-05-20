<!DOCTYPE html>
<html lang="en">
<head>
    @include("components.head")
</head>
<body>
<main class="main">

    <div class="main-inner">

        <!-- Begin mobile main menu -->
        @include("components.mobile")
        <!-- End mobile main menu -->

        <!-- Begin header -->
        @include("components.header")
        <!-- End header -->

        @yield("content")

    </div>
    <!-- Begin footer -->
    @include("components.footer")
    <!-- End footer -->
</main>
</body>
</html>
