<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2>Lista de Canciones</h2>
       
        <a href="{{ route('tracks.create') }}" class="bg-blue-500 rounded px-4 py-2 hover:text-gray-50">Nueva Cancion</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="grid grid-cols-4 gap-2">
            @foreach($tracks as $track)
                <div class="rounded bg-gray-300 p-4">
                    <h6>{{ $track->title }}</h6>
                    <audio controls class="pt-4">
                        <source src="{{ $track->getUrl() }}" type="audio/mp3">
                    </audio>
             </div>
            @endforeach
         </div>
    </div>
</x-app-layout>