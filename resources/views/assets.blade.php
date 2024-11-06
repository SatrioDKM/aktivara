@extends('components.navbar')

@section('content')
<div class="bg-gray-900 text-white p-6">
    <h1 class="text-2xl mb-6">Pengelolaan Aset</h1>

    <!-- Notification for Low Stock -->
    @if($lowStockAssets->count() > 0)
        <div class="bg-red-500 text-white p-4 rounded-lg mb-6">
            <p><strong>Peringatan:</strong> Stok aset berikut mendekati habis atau kurang dari 5:</p>
            <ul class="list-disc list-inside">
                @foreach($lowStockAssets as $asset)
                    <li>{{ $asset->name }} - Stok: {{ $asset->stock }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Asset Management Form -->
    <div class="bg-gray-800 p-4 rounded-lg mb-6">
        <form action="{{ route('assets.store') }}" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-4">
            @csrf
            <input type="text" name="name" placeholder="Nama Aset" class="bg-gray-700 rounded px-3 py-2 w-full">
            <input type="number" name="stock" placeholder="Jumlah Stok" class="bg-gray-700 rounded px-3 py-2 w-full">
            <input type="text" name="location" placeholder="Lokasi Penempatan" class="bg-gray-700 rounded px-3 py-2 w-full">
            <select name="status" class="bg-gray-700 rounded px-3 py-2 w-full">
                <option value="Masuk">Masuk</option>
                <option value="Perbaikan">Perbaikan</option>
                <option value="Keluar">Keluar</option>
            </select>
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded">
                Simpan Aset
            </button>
        </form>
    </div>

    <!-- Actions -->
    <div class="flex justify-between mb-4">
        <div class="flex space-x-2">
            <button onclick="exportTableToPDF()" class="bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded">Ekspor ke PDF</button>
            <button onclick="exportTableToExcel()" class="bg-gray-600 hover:bg-gray-700 px-4 py-2 rounded">Ekspor ke Excel</button>
        </div>
    </div>

    <!-- Asset Table -->
    <div class="overflow-x-auto">
        <table class="w-full bg-gray-800">
            <thead>
                <tr class="bg-gray-800">
                    <th class="px-4 py-2">Nama Aset</th>
                    <th class="px-4 py-2">Jumlah Stok</th>
                    <th class="px-4 py-2">Lokasi</th>
                    <th class="px-4 py-2">Status</th>
                    <th class="px-4 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($assets as $asset)
                <tr class="border-t border-gray-700">
                    <td class="px-4 py-2">{{ $asset->name }}</td>
                    <td class="px-4 py-2">{{ $asset->stock }}</td>
                    <td class="px-4 py-2">{{ $asset->location }}</td>
                    <td class="px-4 py-2">{{ $asset->status }}</td>
                    <td class="px-4 py-2">
                        <button class="bg-blue-500 p-2 rounded">Edit</button>
                        <button class="bg-red-500 p-2 rounded">Hapus</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Asset Statistics Chart -->
    <div class="mt-6">
        <h2 class="text-xl mb-4">Statistik Aset</h2>
        <canvas id="assetChart"></canvas>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Chart configuration for asset statistics
    var ctx = document.getElementById('assetChart').getContext('2d');
    var assetChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: {!! json_encode($assetNames) !!},
            datasets: [{
                label: 'Jumlah Stok',
                data: {!! json_encode($assetStocks) !!},
                backgroundColor: 'rgba(54, 162, 235, 0.6)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // Export to PDF function
    function exportTableToPDF() {
        // Implement PDF export logic
        alert('Ekspor ke PDF masih dalam pengembangan');
    }

    // Export to Excel function
    function exportTableToExcel() {
        // Implement Excel export logic
        alert('Ekspor ke Excel masih dalam pengembangan');
    }
</script>
@endpush
