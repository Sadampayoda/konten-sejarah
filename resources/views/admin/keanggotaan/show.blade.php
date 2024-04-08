@extends('component.app')

@section('content')
    <div class="container mx-auto py-10">

        <div class="flex flex-col lg:flex-row">
            <!-- Kolom pertama -->
            <div class="lg:w-1/2 p-4">

                <div
                    class="grid min-h-[140px] w-full place-items-center overflow-x-scroll rounded-lg p-6 lg:overflow-visible">
                    <img class="object-cover object-center w-full rounded-lg h-96" src="{{ asset($data->photo) }}"
                        alt="nature image" />
                </div>
            </div>
            <!-- Kolom kedua -->
            <div class="lg:w-1/2 p-4">

                <div class="relative mt-5 flex flex-col text-gray-700 bg-white shadow-md rounded-xl bg-clip-border">
                    <nav class="flex flex-col gap-1 p-2 font-sans text-base font-normal text-blue-gray-700">
                        <div role="button"
                            class="flex items-center w-full p-3 leading-tight transition-all rounded-lg outline-none text-start hover:bg-blue-gray-50 hover:bg-opacity-80 hover:text-blue-gray-900 focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900">
                            Nama : {{ $data->nama }}
                        </div>
                        <div role="button"
                            class="flex items-center w-full p-3 leading-tight transition-all rounded-lg outline-none text-start hover:bg-blue-gray-50 hover:bg-opacity-80 hover:text-blue-gray-900 focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900">
                            Provinsi : {{ $data->provinsi }}
                        </div>
                        <div role="button"
                            class="flex items-center w-full p-3 leading-tight transition-all rounded-lg outline-none text-start hover:bg-blue-gray-50 hover:bg-opacity-80 hover:text-blue-gray-900 focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900">
                            Profesi : {{ $data->profesi }}
                        </div>
                        <div role="button"
                            class="flex items-center w-full p-3 leading-tight transition-all rounded-lg outline-none text-start hover:bg-blue-gray-50 hover:bg-opacity-80 hover:text-blue-gray-900 focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900">
                            Asal Intitusi : {{ $data->asal_institusi }}
                        </div>
                    </nav>
                </div>
                <div class="relative mt-5 flex flex-col text-gray-700 bg-white shadow-md rounded-xl bg-clip-border">
                    <nav class="flex flex-col gap-1 p-2 font-sans text-base font-normal text-blue-gray-700">
                        <div role="button"
                            class="flex items-center w-full p-3 leading-tight transition-all rounded-lg outline-none text-start hover:bg-blue-gray-50 hover:bg-opacity-80 hover:text-blue-gray-900 focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900">
                            Namasumber : {{ $data->narasumber }}
                        </div>
                        <div role="button"
                            class="flex items-center w-full p-3 leading-tight transition-all rounded-lg outline-none text-start hover:bg-blue-gray-50 hover:bg-opacity-80 hover:text-blue-gray-900 focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900">
                            Custom Jurnal : {{ $data->custom_jurnal }}
                        </div>
                        <div role="button"
                            class="flex items-center w-full p-3 leading-tight transition-all rounded-lg outline-none text-start hover:bg-blue-gray-50 hover:bg-opacity-80 hover:text-blue-gray-900 focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900">
                            Supervisor : {{ $data->supervisor }}
                        </div>
                    </nav>
                </div>

            </div>
        </div>
        <div class="flex flex-col lg:flex-row">
            <div class="container mx-auto px-4 py-10 max-w-screen-lg">
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
                    <form action="{{route('keahlian.create')}}" method="get">
                        <button 
                        value="{{$data->id}}" type="submit" name="id" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Tambah Data</button>
                    </form>
                </div>
        
                <!-- Tabel Data -->
                <div class="overflow-x-auto">
                    <div class="shadow-md rounded-lg overflow-hidden">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Keahlian
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($keahlian as $data)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $data->nama_keahlian }}</td>
                    
                                        <td class="px-6 py-4 whitespace-nowrap">
                        
                                            <a href="{{ route('keahlian.edit', $data->id) }}"
                                                class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                                            <form action="{{ route('keahlian.destroy', $data->id) }}" method="POST"
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
        </div>
    </div>
@endsection
