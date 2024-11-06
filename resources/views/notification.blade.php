@extends('components.navbar')

@section('content')
<div class="bg-gray-900 text-white p-6 pt-5">
    <h1 class="text-2xl mb-6">Notifikasi</h1>

    @if(count($notifications) > 0)
        <ul>
            @foreach($notifications as $notification)
                <li class="p-2 border-b border-gray-700">
                    <p>{{ $notification->data['message'] ?? 'No message' }}</p>
                    <p class="text-sm text-gray-400">{{ $notification->created_at->format('d/m/Y H:i') }}</p>
                </li>
            @endforeach
        </ul>
    @else
        <p class="text-gray-500">Tidak ada notifikasi</p>
    @endif
</div>
@endsection
