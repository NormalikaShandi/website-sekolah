<header>
    <div id="header1" class="header1-area">
        <div class="main-menu-area bg-primary" id="sticker">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="logo-area">
                            <a href="/ppdb"><img class="img-responsive"  src="{{asset('Assets/frontend/img/logo-footer.png')}}" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 hidden-sm">
                        <div class="apply-btn-area">
                            @auth
                                <a href="{{url('/home')}}" class="apply-now-btn3">Home</a>
                            @else
                                <a href="{{route('login')}}" class="apply-now-btn3">Login</a>
                                <a href="{{route('register')}}" class="apply-now-btn">Daftar</a>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu Area Start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul>
                                <ul>
                                    <li><a href="#">Program Studi</a></li>
                                    <li><a href="#">Alur Pendaftaran</a></li>
                                    <li><a href="#">Berkas</a></li>
                                    <li><a href="#">Biaya</a></li>
                                </ul>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu Area End -->
</header>