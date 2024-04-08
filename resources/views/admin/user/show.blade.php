@extends('component.app')

@section('content')
<div class="container mx-auto py-10">
    <div class="max-w-5xl mx-auto">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div class="p-4">
                <h2 class="text-3xl font-semibold mb-2">{{$data->title}}</h2>
                <small class="text-gray-400 mb-4 block">Dibuat pada {{$data->created_at->format('d M Y')}}</small>
                {{-- <div class="border-b border-gray-300"></div> --}}
                <div class="p-4">
                    <p class="text-lg text-gray-700 leading-relaxed">
                        {!! nl2br(e(chunk_split($data->description, 500))) !!}
                    </p>
                </div>
                <div class="p-6 pt-0">
                    <a href="{{route('sejarah.index')}}"
                      class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-gray-900 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none"
                      >
                      Close
                    </a>
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection
