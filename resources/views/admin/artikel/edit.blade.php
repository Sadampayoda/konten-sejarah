@extends('component.app')

@section('content')
    <div class="container py-10 flex justify-center">
        <div class="max-w-lg w-full bg-white shadow-md rounded-lg overflow-hidden">
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
            <div class="p-6">
                <h4 class="text-2xl font-semibold text-blue-gray-900 mb-1">Edit Artikel</h4>
                <p class="text-base text-gray-700 mb-4">Edit berita Anda di sini</p>
                <form method="POST" action="{{ route('artikel.update', $data->id) }}" class="w-full"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <label for="image" class="block text-sm font-medium text-gray-700 mb-1">Image</label>
                        @if ($data->image)
                            <input type="hidden" name="image_lama" value="{{ $data->image }}">
                            <img src="{{ asset($data->image) }}" width="70" height="70" alt="Foto Sebelumnya">
                        @endif
                        <input name="image" id="image" type="file" accept="image/*"
                            class="block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                    </div>
                    <div class="mb-4">
                        <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Title</label>
                        <input name="title" id="title" type="text" value="{{ $data->title }}"
                            class="block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                    </div>
                    <div class="mb-4">
                        <label for="content" class="block text-sm font-medium text-gray-700 mb-1">Content</label>
                        <textarea name="content" id="content" rows="4"
                            class="block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">{{ $data->content }}</textarea>
                    </div>
                    <button type="submit"
                        class="bg-gray-900 text-white px-4 py-2 rounded-md font-semibold shadow-md hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-opacity-50">
                        Update
                    </button>
                </form>
            </div>
        </div>
    </div>
    <script>
        document.getElementById("content").value = "{{ $data->content }}";
    </script>
@endsection
