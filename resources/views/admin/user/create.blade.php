@extends('component.app')

@section('content')
    <div class="container py-10">
        <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden shadow-md">
            <div class="p-10">
                <h2 class="text-2xl font-semibold mb-4 text-center">Tambah Data Admin</h2>
                @if (session('error'))
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative"
                        role="alert">
                        <strong class="font-bold">error!</strong>
                        <span class="block sm:inline">{{ session('error') }}</span>
                        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                            <svg class="fill-current h-6 w-6 text-green-500" role="button"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <title>Close</title>
                                <path fill-rule="evenodd"
                                    d="M14.348 5.652a.5.5 0 0 1 0 .707L10.06 10l4.288 4.288a.5.5 0 0 1-.707.707L9.354 10l-4.293 4.293a.5.5 0 1 1-.708-.707L8.646 10 4.352 5.707a.5.5 0 0 1 .708-.707L10.06 9.293l4.293-4.294a.5.5 0 0 1 .707 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                    </div>
                @endif
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

                <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4">

                        <div class="relative h-11 w-full min-w-[200px]">
                            <input type="text" name="name" id="name" placeholder="name"
                                class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-gray-900 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                                required />
                        </div>
                        <div class="relative h-11 w-full min-w-[200px]">
                            <input type="email" name="email" id="email" placeholder="email"
                                class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-gray-900 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                                required />
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="w-96">
                            <div class="relative w-full min-w-[200px]">
                                <input type="password" name="password" id="password" placeholder="password"
                                    class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-gray-900 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                                    required />
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="w-96">
                            <div class="relative w-full min-w-[200px]">
                                <input type="password" name="konfirmasi" id="konfirmasi" placeholder="konfirmasi"
                                    class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-gray-900 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                                    required />
                            </div>
                        </div>
                    </div>


                    <div class="flex justify-center mt-6">
                        <button type="submit"
                            class="py-2 px-4 bg-blue-500 hover:bg-blue-600 focus:ring-blue-700 focus:ring-offset-blue-200 text-white font-semibold rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2">Simpan</button>
                        <a href="{{ route('user.index') }}"
                            class="py-2 px-4 bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold rounded-lg shadow-md ml-4 focus:outline-none focus:ring-2 focus:ring-offset-2">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
