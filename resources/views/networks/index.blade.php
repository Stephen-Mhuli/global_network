<x-layout>
    <h2>Currently Available Networks</h2>
  
    <ul>
      @foreach($networks as $network)
        <li>
          <x-card :highlight="$network->bandwith > 70" href="{{ route('networks.show', $network->id) }}">
            <h3>{{ $network->name }}</h3>
          </x-card>
        </li>
      @endforeach
    </ul>
  </x-layout>