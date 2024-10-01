<div class="container">
    <a href="{{ route('user.beranda.index') }}" class="navbar-brand">
        <!-- <h1 class="text-dark fs-6 fw-bold text-center mb-0">GIBS <br> NEWS</h1> -->
        <img src="{{ asset('img/logo gibs.png') }}" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
        aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a href="{{ route('user.beranda.index') }}" class="nav-link {{ $title === 'Beranda' ? 'active' : '' }} text-dark">
                    HOME
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-dark" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">PROFILE</a>
                <ul class="dropdown-menu color-2">
                <li><a class="dropdown-item  text-dark" href="#">About</a></li>
                <li><a class="dropdown-item  text-dark" href="#">Leader & Staff</a></li>
                <li><a class="dropdown-item  text-dark" href="#">Campus Tour</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-dark">
                    ACADEMICS
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-dark" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">PROGRAM</a>
                <ul class="dropdown-menu color-2">
                <li><a class="dropdown-item  text-dark" href="#">Our Stream</a></li>
                <li><a class="dropdown-item  text-dark" href="#">Co-curricular & Extracurricular</a></li>
                <li><a class="dropdown-item  text-dark" href="#">Achievement</a></li>
                <li><a class="dropdown-item  text-dark" href="#">Program Unggulan</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-dark">
                    REGISTRATION
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-dark" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">INFORMATION</a>
                <ul class="dropdown-menu color-2">
                <li><a class="dropdown-item  text-dark" href="#">Career at GIBS</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="{{ route('user.berita.index') }}" class="nav-link {{ $title === 'Berita' ? 'active' : '' }} text-dark">
                    NEWS
                </a>
            </li>
            
            <!-- <li class="nav-item">
                <a href="{{ route('user.pengumuman.index') }}" class="nav-link {{ $title === 'Pengumuman' ? 'active' : '' }} text-dark">
                    Pengumuman
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('user.kontak.index') }}" class="nav-link {{ $title === 'Kontak' ? 'active' : '' }} text-dark">
                    Kontak
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('user.tentang.index') }}" class="nav-link {{ $title === 'Tentang' ? 'active' : '' }} text-dark">
                    Tentang
                </a>
            </li> -->
        </ul>


        <div>
            <a href="#" class="btn btn-outline-light d-none">
                <span>Sign In</span>
                <i class="bi bi-door-open"></i>
            </a>

            <div class="dropdown">
                <img src="{{ asset('img/profile.jpg') }}" alt="Profile" title="Profile" id="profileDropdown"
                    data-bs-toggle="dropdown" data-bs-auto-close="outside" class="rounded-circle"
                    style="width: 40px">
                <ul class="dropdown-menu dropdown-menu-end color-2 mt-4 px-5 border-black shadow-sm" aria-labelledby="profileDropdown"
                    style="width: max-content; border-radius: 25px">
                    <img src="{{ asset('img/profile.jpg') }}" alt="Profile" title="Profile"
                        class="rounded-circle d-block mx-auto my-3" style="width: 60px">
                    <h1 class="text-dark fs-5 fw-semibold text-center">{{ Auth::user()->name }}</h1>
                    <small class="d-block text-dark text-center mb-3">
                        {{ Auth::user()->email }}
                    </small>
                    <!-- <small class="d-block text-dark text-center py-1 border-top border-bottom border-light">
                        Sebagai User
                    </small> -->
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger d-block mx-auto my-3">
                            <span style="margin-right: 5px">Logout</span>
                            <!-- <i class="bi bi-arrow-right-square"></i> -->
                        </button>
                    </form>
                </ul>
            </div>
        </div>
    </div>
</div>