<nav class="navbar navbar-expand-lg classic navbar-dark navbar-bg-dark">
    <div class="container flex-lg-row flex-nowrap align-items-center">
        <div class="navbar-brand w-100">
            <a href="./index.html">
                <img src="./assets/img/logo-light.png" srcset="./assets/img/logo-light.png 2x" alt="" />
            </a>
        </div>
        <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
            <div class="offcanvas-header d-lg-none d-xl-none">
                <a href="./index.html"><img src="./assets/img/logo-light.png" srcset="./assets/img/logo-light.png 2x"
                        alt="" /></a>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
                    @isset($auth)
                        <li class="nav-item"><a class="nav-link" href="#">Publikasi</a></li>
                    @endisset
                    <li class="nav-item"><a class="nav-link" href="#">BPS Sumsel</a></li>
                </ul>
                <!-- /.navbar-nav -->
                <div class="d-lg-none mt-auto pt-6 pb-6 order-4">
                    <a href="mailto:first.last@email.com" class="link-inverse">bps1600@bps.go.id</a>
                    <br /> 0813-3378-3485<br />
                    <nav class="nav social social-white mt-4">
                        <a href="#"><i class="uil uil-twitter"></i></a>
                        <a href="#"><i class="uil uil-facebook-f"></i></a>
                        <a href="#"><i class="uil uil-dribbble"></i></a>
                        <a href="#"><i class="uil uil-instagram"></i></a>
                        <a href="#"><i class="uil uil-youtube"></i></a>
                    </nav>
                    <!-- /.social -->
                </div>
                <!-- /offcanvas-nav-other -->
            </div>
            <!-- /.offcanvas-body -->
        </div>
        <!-- /.navbar-collapse -->
        <div class="navbar-other ms-lg-4">
            <ul class="navbar-nav flex-row align-items-center ms-auto">
                <li class="nav-item"><a class="nav-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-info"><i
                            class="uil uil-info-circle"></i></a></li>
                @if (!$auth)
                    <li class="nav-item d-none d-md-block">
                        <a href="{{ url('login') }}" class="btn btn-sm btn-primary rounded-pill">Sign In</a>
                    </li>
                @endif

                <li class="nav-item d-lg-none">
                    <button class="hamburger offcanvas-nav-btn"><span></span></button>
                </li>
            </ul>
            <!-- /.navbar-nav -->
        </div>
        <!-- /.navbar-other -->
    </div>
    <!-- /.container -->
</nav>
<!-- /.navbar -->

<div class="offcanvas offcanvas-end text-inverse" id="offcanvas-info" data-bs-scroll="true">
    <div class="offcanvas-header">
        <a href="./index.html"><img src="./assets/img/logo-light.png" srcset="./assets/img/logo-light.png 2x"
                alt="" /></a>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
            aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">

        <!-- /.widget -->
        <div class="widget mb-8">
            <h4 class="widget-title text-white mb-3">Contact Info</h4>
            <address> Palembang <br /> Light City, London </address>
            <a href="mailto:first.last@email.com">info@email.com</a><br /> 00 (123) 456 78 90
        </div>
        <!-- /.widget -->
        <div class="widget mb-8">
            <h4 class="widget-title text-white mb-3">Learn More</h4>
            <ul class="list-unstyled">
                <li><a href="#">Our Story</a></li>
                <li><a href="#">Terms of Use</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>
        <!-- /.widget -->
        <div class="widget">
            <h4 class="widget-title text-white mb-3">Follow Us</h4>
            <nav class="nav social social-white">
                <a href="#"><i class="uil uil-twitter"></i></a>
                <a href="#"><i class="uil uil-facebook-f"></i></a>
                <a href="#"><i class="uil uil-dribbble"></i></a>
                <a href="#"><i class="uil uil-instagram"></i></a>
                <a href="#"><i class="uil uil-youtube"></i></a>
            </nav>
            <!-- /.social -->
        </div>
        <!-- /.widget -->
    </div>
    <!-- /.offcanvas-body -->
</div>
<!-- /.offcanvas -->
