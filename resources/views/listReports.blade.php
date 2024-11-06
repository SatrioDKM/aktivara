{{-- @extends('layouts.app') --}}
@extends('components.navbar')

@section('content')
    <div class="container mt-5">
        <h2 class="mb-4">Daftar Laporan Harian</h2>

        <!-- Tombol Ekspor ke PDF -->
        <a href="{{ url('/laporan/export-pdf') }}" class="btn btn-danger mb-3">Ekspor ke PDF</a>

        <!-- Tabel Daftar Laporan -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Deskripsi Tugas</th>
                    <th>Lokasi</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
                @foreach($laporan as $index => $lapor)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $lapor['deskripsi'] }}</td> <!-- Akses array dengan notasi ini -->
                        <td>{{ $lapor['lokasi'] }}</td>
                        <td>{{ \Carbon\Carbon::parse($lapor['tanggal'])->format('d-m-Y') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection