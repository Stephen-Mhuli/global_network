<x-layout>
    <h2>{{ $network->name }}</h2>

    <div class='bg-gray-200 p-4 rounded'>
        <p><strong>Bandwith Level:</strong> {{ $network->bandwith }}</p>
        <p><strong>About me:</strong></p>
        <p>{{ $network->description }}</p>
    </div>
    <div class="border-2 border-dashed bg-white px-4 pb-4 my-4 rounded">
        <h3>Region Information</h3>
        <p><strong>Region name:</strong> {{ $network->region->name }}</p>
        <p><strong>Location:</strong> {{ $network->region->location }} </p>
        <p><strong>About the region:</strong></p>
        <p> {{ $network->region->description }} </p>
    </div>
  </x-layout>