@extends('components.navbar')

@section('content')
    <div class="container mt-5">
        <h2 class="mb-4">Buat Laporan Harian</h2>
        
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action=" " method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi Tugas</label>
                <textarea name="deskripsi" id="deskripsi" rows="3" class="form-control @error('deskripsi') is-invalid @enderror" placeholder="Deskripsi tugas yang dilakukan"></textarea>
                @error('deskripsi')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label for="lokasi" class="form-label">Lokasi</label>
                <input type="text" name="lokasi" id="lokasi" class="form-control @error('lokasi') is-invalid @enderror" placeholder="Lokasi tugas">
                @error('lokasi')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="dokumentasi" class="form-label">Unggah Dokumentasi</label>
                <input type="file" name="dokumentasi" id="dokumentasi" class="form-control @error('dokumentasi') is-invalid @enderror">
                @error('dokumentasi')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <button type="submit" class="btn btn-primary">Simpan Laporan</button>
        </form>
    </div>
@endsection
