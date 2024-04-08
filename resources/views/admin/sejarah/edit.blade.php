@extends('component.app')

@section('content')
    <div class="container py-10">
        <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden shadow-md">
            <div class="p-10">
                <h2 class="text-2xl font-semibold mb-4 text-center">Tambah Data Sejarah</h2>
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

                <form action="{{ route('sejarah.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">

                        <div class="relative h-11 w-full min-w-[200px]">
                            <input type="text" value="{{$data->title}}" name="title" id="title" placeholder="Title"
                                class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-gray-900 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                                required />
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="w-96">
                            <div class="relative w-full min-w-[200px]">
                                <textarea id="description" name="description" 
                                    class="peer h-full min-h-[100px] w-full resize-none rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-gray-900 focus:border-t-transparent focus:outline-0 disabled:resize-none disabled:border-0 disabled:bg-blue-gray-50"
                                    placeholder=" "></textarea>
                                <label
                                    class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[3.75] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:border-gray-900 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:border-gray-900 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                                    description
                                </label>
                            </div>
                        </div>
                    
                    
                    <div class="flex justify-center mt-6">
                        <button type="submit"
                            class="py-2 px-4 bg-blue-500 hover:bg-blue-600 focus:ring-blue-700 focus:ring-offset-blue-200 text-white font-semibold rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2">Simpan</button>
                        <a href="{{ route('sejarah.index') }}"
                            class="py-2 px-4 bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold rounded-lg shadow-md ml-4 focus:outline-none focus:ring-2 focus:ring-offset-2">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        document.getElementById("description").value = "{{$data->description}}";
    </script>
@endsection
