@extends('layouts.layouts')

@section('content')
<section style="margin-top: 100px">
    <div class="container col-xxl-8 py-5">
        <h3 class="fw-bold mb-2 text-center">Halaman Dashboard Admin</h3>
        <p class="text-center">Selamat Datang Di Halaman Dashboard Admin</p>

        <div class="row">
            <div class="col-lg-4">
                <div class="card shadow-sm rounded-3 border-0">
                    <img src="{{ asset('assets/icons/berita.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Blog Berita</h5>
                        <p class="card-text">Berita Seputar Mahasiswa Universitas Dian Nuswantoro</p>
                        <a href="{{ route('blog') }}" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card shadow-sm rounded-3 border-0">
                    <img src="{{ asset('assets/icons/gallery.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Foto Kegiatan BEM KM</h5>
                        <p class="card-text">Atur dan Kelola Kegiatan BEM KM UDINUS</p>
                        <a href="{{ route('photo') }}" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card shadow-sm rounded-3 border-0">
                    <img src="{{ asset('assets/icons/gallery.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Partnership BEM KM</h5>
                        <p class="card-text">Atur dan Kelola Partnership BEM KM UDINUS</p>
                        <a href="{{ route('partner') }}" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card shadow-sm rounded-3 border-0">
                    <img src="{{ asset('assets/icons/gallery.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Forum Kementerian BEM KM</h5>
                        <p class="card-text">Atur dan Kelola Forum BEM KM UDINUS</p>
                        <a href="{{ route('riset') }}" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card shadow-sm rounded-3 border-0">
                    <img src="{{ asset('assets/icons/gallery.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Program Kerja BEM KM</h5>
                        <p class="card-text">Atur dan Kelola Program Kerja BEM KM UDINUS</p>
                        <a href="{{ route('rkt') }}" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card shadow-sm rounded-3 border-0">
                    <img src="{{ asset('assets/icons/gallery.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Kabinet BEM KM</h5>
                        <p class="card-text">Atur dan Kelola Kabinet BEM KM UDINUS</p>
                        <a href="{{ route('kementerian') }}" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card shadow-sm rounded-3 border-0">
                    <img src="{{ asset('assets/icons/gallery.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Ormawa BEM KM</h5>
                        <p class="card-text">Atur dan Kelola Organisasi Mahasiswa BEM KM UDINUS</p>
                        <a href="{{ route('organisasi') }}" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card shadow-sm rounded-3 border-0">
                    <img src="{{ asset('assets/icons/gallery.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">UKM BEM KM</h5>
                        <p class="card-text">Atur dan Kelola Unit Kegiatan Mahasiswa BEM KM UDINUS</p>
                        <a href="{{ route('unit') }}" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>

            >
            </div>

        </div>
    </div>
</section>
@endsection