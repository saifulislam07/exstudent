<nav class="navbar wide transparent absolute inverse-text navbar-expand-lg"
    style="background: rgb(0 0 0  / 80%) !important;">
    <div class="container-fluid flex-row justify-content-center">
        <div class="navbar-header">
            <div class="navbar-brand">
                <a href="/">
                    <img src="/" srcset="{{ asset('/logos/1.png') }}, {{ asset('/logos/2.png') }}2x" alt="" style="width: 69px;"/>
                </a>
            </div>
            <div class="navbar-hamburger ml-auto d-lg-none d-xl-none">
                <button class="hamburger animate" data-toggle="collapse" data-target=".navbar-collapse">
                    <span>
                    </span>
                </button>
            </div>
        </div>
        <!-- /.navbar-header -->
        <div class="navbar-collapse collapse justify-content-between align-items-center">
            <ul class="navbar-nav plain mx-auto text-center">
                <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/aboutsme">About</a></li>
                {{-- <li class="nav-item"><a class="nav-link" href="/myachievement">Achievement</a></li> --}}
                <li class="nav-item "><a class="nav-link " href="/mygallery">Gallery</a></li>
                <li class="nav-item "><a class="nav-link " href="/photostory">News</a></li>
                <li class="nav-item "><a class="nav-link " href="/noticelist">Notice</a></li>
                <li class="nav-item "><a class="nav-link " href="/videos">Videos</a></li>
                <li class="nav-item "><a class="nav-link " href="/reunion2022">Reunion 2022</a></li>
                <li class="nav-item "><a class="nav-link " href="/contacts">Contact</a>
                </li>
            </ul>
        </div>
        <div class="social-wrapper text-right">
            <ul class="social social-color" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="5000">
                <li><a target="_blank" href="{{ $socialMedia->facebook }}"><i class="fa fa-facebook"></i></a></li>
                <li><a target="_blank" href="{{ $socialMedia->instagram }}"><i class="fa fa-instagram"></i></a>
                </li>
                <li><a target="_blank" href="{{ $socialMedia->twitter }}"><i class="fa fa-twitter"></i></a></li>
                <li><a target="_blank" href="{{ $socialMedia->linkedin }}"><i class="fa fa-linkedin"></i></a></li>
            </ul>
        </div>
        <!--/.social-wrapper -->
    </div>
</nav>