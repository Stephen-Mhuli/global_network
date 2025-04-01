<x-layout>
    <h2>{{ $network->name }}</h2>

    <div class='bg-gray-200 p-4 rounded'>
        <p><strong>Bandwith Level:</strong> {{ $network->bandwith }}</p>
        <p><strong>About me:</strong></p>
        <p>{{ $network->description }}</p>
    </div>
  </x-layout>