{{-- @extends('layouts.app') --}}
@extends('components.navbar')

@section('content')
<div class="bg-gray-900 text-white p-6">
    <h1 class="text-2xl mb-6">Daftar Kegiatan Harian</h1>

    <!-- Filters -->
    <div class="bg-gray-800 p-4 rounded-lg mb-6">
        <form action="{{ route('activities.activities') }}" method="GET" class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <div class="flex space-x-2">
                <input type="date" name="date_from" value="{{ request('date_from') }}" class="bg-gray-700 rounded px-3 py-2 w-full" placeholder="Dari">
                <input type="date" name="date_to" value="{{ request('date_to') }}" class="bg-gray-700 rounded px-3 py-2 w-full" placeholder="Ke">
            </div>
            
            <select name="category" class="bg-gray-700 rounded px-3 py-2">
                <option value="">Pilih Kategori</option>
                <option value="Normal" {{ request('category') == 'Normal' ? 'selected' : '' }}>Normal</option>
                <option value="Maintenance" {{ request('category') == 'Maintenance' ? 'selected' : '' }}>Maintenance</option>
            </select>

            <select name="status" class="bg-gray-700 rounded px-3 py-2">
                <option value="">Pilih Status</option>
                <option value="Selesai" {{ request('status') == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                <option value="Pending" {{ request('status') == 'Pending' ? 'selected' : '' }}>Pending</option>
            </select>

            <select name="assigned_to" class="bg-gray-700 rounded px-3 py-2">
                <option value="">Yang Mengerjakan</option>
                <option value="sendiri" {{ request('assigned_to') == 'sendiri' ? 'selected' : '' }}>Sendiri</option>
                <option value="Paijo" {{ request('assigned_to') == 'Paijo' ? 'selected' : '' }}>Paijo</option>
            </select>

            <div class="flex space-x-2">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded">
                    Cari
                </button>
                <a href="{{ route('activities.activities') }}" class="bg-gray-600 hover:bg-gray-700 px-4 py-2 rounded">
                    Reset
                </a>
            </div>
        </form>
    </div>

    <!-- Actions -->
    <div class="flex justify-between mb-4">
        <div class="flex space-x-2">
            <button class="bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded">
                Tambah
            </button>
            <button class="bg-gray-600 hover:bg-gray-700 px-4 py-2 rounded">
                Dengan Terpilih
            </button>
        </div>
    </div>

    <!-- Table -->
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead>
                <tr class="bg-gray-800">
                    <th class="px-4 py-2"><input type="checkbox"></th>
                    <th class="px-4 py-2">Aksi</th>
                    <th class="px-4 py-2">ID</th>
                    <th class="px-4 py-2">Dibuat tanggal</th>
                    <th class="px-4 py-2">Agenda Tanggal</th>
                    <th class="px-4 py-2">Tanggal Diperbarui</th>
                    <th class="px-4 py-2">Judul Kegiatan</th>
                    <th class="px-4 py-2">Dibuat oleh</th>
                    <th class="px-4 py-2">Urgency</th>
                    <th class="px-4 py-2">Pengaju Kegiatan</th>
                    <th class="px-4 py-2">Kategori Kegiatan</th>
                    <th class="px-4 py-2">Status Kegiatan</th>
                </tr>
            </thead>
            <tbody>
                @foreach($activities as $activity)
                <tr class="border-t border-gray-700">
                    <td class="px-4 py-2"><input type="checkbox" value="{{ $activity->id }}"></td>
                    <td class="px-4 py-2">
                        <div class="flex space-x-1">
                            <button class="p-1 bg-blue-500 rounded" title="Edit">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                </svg>
                            </button>
                            <button class="p-1 bg-gray-600 rounded" title="Info">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </button>
                        </div>
                    </td>
                    <td class="px-4 py-2">{{ $activity->id }}</td>
                    <td class="px-4 py-2">{{ $activity->created_at->format('d/m/Y H:i') }}</td>
                    <td class="px-4 py-2">{{ $activity->agenda_date->format('d/m/Y') }}</td>
                    <td class="px-4 py-2">{{ $activity->updated_at->format('d/m/Y H:i') }}</td>
                    <td class="px-4 py-2">{{ $activity->title }}</td>
                    <td class="px-4 py-2">{{ $activity->created_by }}</td>
                    <td class="px-4 py-2">
                        <span class="px-2 py-1 rounded {{ $activity->urgency == 'Ya' ? 'bg-red-500' : 'bg-gray-600' }}">
                            {{ $activity->urgency }}
                        </span>
                    </td>
                    <td class="px-4 py-2">{{ $activity->assigned_to }}</td>
                    <td class="px-4 py-2">{{ $activity->category }}</td>
                    <td class="px-4 py-2">
                        <span class="px-2 py-1 rounded {{ $activity->status == 'Selesai' ? 'bg-green-500' : 'bg-yellow-500' }}">
                            {{ $activity->status }}
                        </span>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="mt-4">
        {{ $activities->links() }}
    </div>
</div>
@endsection

@push('styles')
<style>
    /* Add any custom styles here */
</style>
@endpush