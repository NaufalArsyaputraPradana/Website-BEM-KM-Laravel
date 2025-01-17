<!-- Navbar -->
<nav
    class="navbar navbar-expand-lg navbar-light fixed-top mask-custom shadow-0 {{ Request::segment(1) == '' ? '' : 'bg-white shadow color-black' }}">

    <div class="container">

        <a class="navbar-brand" href="/">
            <img src="{{ asset('assets/icons/Logo BEM KM UDINUS.png') }}" height="55" width="55" alt="">
        </a>

        <a class="navbar-brand" href="/">
            <img src="{{ asset('assets/icons/Logo BEM Arus Sinergitas.png') }}" height="75" width="75" alt="">
        </a>

        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle w3-button w3-mobile" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Beranda </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li class="nav-item"><a href="/kabinet" class="nav-link w3-button w3-mobile dropdown-item">Kabinet Arus Sinergitas</a></li>
                        <li class="nav-item"><a href="/forum" class="nav-link w3-button w3-mobile dropdown-item">Forum dan Kajian</a></li>
                        <li class="nav-item"><a href="/proker" class="nav-link w3-button w3-mobile dropdown-item">Program Kerja</a></li>
                        <li class="nav-item"><a href="/ormawa" class="nav-link w3-button w3-mobile dropdown-item">Ormawa UDINUS</a></li>
                        <li class="nav-item"><a href="/ukm" class="nav-link w3-button w3-mobile dropdown-item">UKM UDINUS</a></li>
                    </ul>
                </li>
               
                <li class="nav-item">
                    <a class="nav-link w3-button w3-mobile" href="https://docs.google.com/forms/d/e/1FAIpQLSeDNiL7fvSjR2IHC3DDOpwghKzlBshTjA0eZ9YRZGGUSWX3Bg/viewform">Partnership</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link w3-button w3-mobile" href="/berita">Content</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link w3-button w3-mobile" href="/foto">Kegiatan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link w3-button w3-mobile" href="https://sites.google.com/mhs.dinus.ac.id/kalenderkm">Kalender</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link w3-button w3-mobile" href="mailto:bemkm@orma.dinus.ac.id">Kontak</a>
                </li>
            </ul>


            <form class="d-flex input-group w-auto">
                <input type="search" class="form-control" placeholder="Cari Disini" aria-label="Search" />
                <button data-mdb-ripple-init class="btn btn-outline-primary" type="button" data-mdb-ripple-color="dark">
                    <i class="fas fa-magnifying-glass"></i>
                </button>
            </form>
        </div>
    </div>
</nav>
<!-- Navbar -->