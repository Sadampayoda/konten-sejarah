@extends('component.app')

@section('content')
    <div class="container mx-auto px-4 py-10 max-w-screen-lg">
        <h1 class="text-3xl font-bold mb-6">Data Galery</h1>
        <!-- Tombol Tambah Data -->
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Success!</strong>
                <span class="block sm:inline">{{ session('success') }}</span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                    <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <title>Close</title>
                        <path fill-rule="evenodd"
                            d="M14.348 5.652a.5.5 0 0 1 0 .707L10.06 10l4.288 4.288a.5.5 0 0 1-.707.707L9.354 10l-4.293 4.293a.5.5 0 1 1-.708-.707L8.646 10 4.352 5.707a.5.5 0 0 1 .708-.707L10.06 9.293l4.293-4.294a.5.5 0 0 1 .707 0z"
                            clip-rule="evenodd" />
                    </svg>
                </span>
            </div>
        @endif

        <div class="mb-4">
            <a href="{{ route('galeri.create') }}"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Tambah Data</a>
        </div>

        <!-- Tabel Data -->
        <div class="overflow-x-auto">
            <div class="shadow-md rounded-lg overflow-hidden">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
        
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">title
                            </th>
                            
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">content
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($data as $item)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $item->title }}</td>
                               
                                <td class="px-6 py-4 whitespace-nowrap">{{ $item->description }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    
                                    <a href="{{ route('galeri.show', $item->id) }}"
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Show Foto / Video</a>
                                    <a href="{{ route('galeri.edit', $item->id) }}"
                                        class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                                    <form action="{{ route('galeri.destroy', $item->id) }}" method="POST"
                                        class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
