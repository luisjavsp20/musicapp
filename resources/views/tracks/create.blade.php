<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2>Registrar Nueva Cancion</h2>
        </div>
    </x-slot>

    <div class="py-12">
        <form action="{{ route('tracks.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" name='title'>
                @error('title')
                <div>{{ $message }}</div>
                @enderror
            <input type="file" name='music'>
                @error('music')
                <div>{{ $message }}</div>
                @enderror
            <button class="bg-green-500 rounded px-4 py-2 hover:text-gray-50"" type="submit">
                Registrar
            </button>
        </form>
    </div>
</x-app-layout>