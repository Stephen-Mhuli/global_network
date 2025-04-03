<x-layout>
    <h2>Currently Available Networks</h2>
  
    <ul>
      @foreach($networks as $network)
        <li>
          <x-card :highlight="$network->bandwith > 70" href="{{ route('networks.show', $network->id) }}">
            <div>
                <h3>{{ $network->name }}</h3>
                <p>{{ $network->region->name }}</p>
            </div>
          </x-card>
        </li>
      @endforeach
    </ul>

    {{ $networks->links() }}
  </x-layout>