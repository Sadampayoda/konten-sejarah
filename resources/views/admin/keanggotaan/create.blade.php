@extends('component.app')

@section('content')
    <div class="container py-10">
        <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden shadow-md">
            <div class="p-10">
                <h2 class="text-2xl font-semibold mb-4 text-center">Tambah Data Keanggotaan</h2>
                @if ($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                        <strong class="font-bold">Oops!</strong>
                        <span class="block sm:inline">{{ $errors->first() }}</span>
                        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                            <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20">
                                <title>Close</title>
                                <path fill-rule="evenodd"
                                    d="M14.348 5.652a.5.5 0 0 1 0 .707L10.06 10l4.288 4.288a.5.5 0 0 1-.707.707L9.354 10l-4.293 4.293a.5.5 0 1 1-.708-.707L8.646 10 4.352 5.707a.5.5 0 0 1 .708-.707L10.06 9.293l4.293-4.294a.5.5 0 0 1 .707 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                    </div>
                @endif

                <form action="{{ route('keanggotaan.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4">

                        <div class="relative h-11 w-full min-w-[200px]">
                            <input type="text" name="nama" id="nama" placeholder="Nama lengkap"
                                class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-gray-900 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                                required />
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="relative h-11 w-full min-w-[200px]">
                            <input type="text" name="nim" id="nim" placeholder="Nomor Induk Mahasiswa"
                                class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-gray-900 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                                required />
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="relative h-11 w-full min-w-[200px]">
                            <input type="text" name="provinsi" id="provinsi" placeholder="Provinsi"
                                class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-gray-900 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                                required />
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="relative h-11 w-full min-w-[200px]">
                            <input type="text" name="profesi" id="profesi" placeholder="Profesi"
                                class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-gray-900 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                                required />
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="relative h-11 w-full min-w-[200px]">
                            <input type="text" name="asal_institusi" id="asal_institusi" placeholder="Asal Institusi"
                                class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-gray-900 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                                required />

                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="relative h-11 w-full min-w-[200px]">
                            <input type="number" name="narasumber" id="narasumber" placeholder="Berapa kali Narasumber"
                                class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-gray-900 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                                required />

                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="relative h-11 w-full min-w-[200px]">
                            <input type="number" name="custom_jurnal" id="custom_jurnal" placeholder="Costum Jurnal"
                                class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-gray-900 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                                required />

                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="relative h-11 w-full min-w-[200px]">
                            <input type="number" name="supervisor" id="supervisor" placeholder="Supervisor"
                                class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-gray-900 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                                required />

                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="px-4 py-6">
                            <label for="file" class="block text-sm font-medium text-gray-700">Pilih file:</label>
                            <div
                                class="mt-2 flex justify-center items-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                <div class="space-y-1 text-center">
                                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none"
                                        viewBox="0 0 48 48" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M20 6L4 14v28a2 2 0 0 0 2 2h36a2 2 0 0 0 2-2V14L28 6H20zM8 24h32M12 18v12M24 12v12M24 30v6">
                                        </path>
                                    </svg>
                                    <div class="flex text-sm text-gray-600">
                                        <label for="file-upload"
                                            class="relative cursor-pointer bg-white rounded-md font-medium text-blue-600 hover:text-blue-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-blue-500">
                                            <span>Upload a file</span>
                                            <input id="file-upload" name="photo" type="file" class="sr-only">
                                        </label>
                                        <p class="pl-1">or drag and drop</p>
                                    </div>
                                    <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center mt-6">
                        <button type="submit"
                            class="py-2 px-4 bg-blue-500 hover:bg-blue-600 focus:ring-blue-700 focus:ring-offset-blue-200 text-white font-semibold rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2">Simpan</button>
                        <a href="{{ route('keanggotaan.index') }}"
                            class="py-2 px-4 bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold rounded-lg shadow-md ml-4 focus:outline-none focus:ring-2 focus:ring-offset-2">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
