@extends('layouts.layouts')

@section('content')
<section style="margin-top: 100px" class="py-5">
    <div class="container col-xxl-8 py-5">
        <!-- Navigasi -->
        <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
            <div class="container-fluid">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="\dashboard">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('unit') }}">ukm</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="">Edit</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </nav>

        <h4 class="fw-bold mb-2">Halaman Edit ukm</h4>

        <form action="{{ route('unit.update', $ukm->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-4">
                <label for="">Masukkan Judul ukm</label>
                <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul"
                    value="{{ old('judul', $ukm->judul) }}">

                @error('judul')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror

            </div>

            <div class="form-group mb-4">
                <label for="">Pilih Foto Kegiatan</label>
                <input type="hidden" name="old_image" value="{{ $ukm->image }}">
                <div><img src="{{ asset('storage/ukm/' . $ukm->image) }}" class="col-lg-4" alt=""></div>
                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">

                @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror

            </div>

            <div class="form-group mb-4">
                <label for="">ukm ukm</label>'
                <textarea name="desc" id="summernote">
                    {!! $ukm->desc !!}
                </textarea>

                @error('desc')
                <div class="text-danger">
                    {{ $message }}
                </div>
                @enderror

            </div>

            <button type="submit" class="btn btn-primary">Update</button>

        </form>
        
    </div>
</section>
@endsection