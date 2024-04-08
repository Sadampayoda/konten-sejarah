@extends('component.app')

@section('content')
<div class="container mx-auto py-10">
    <div class="max-w-5xl mx-auto">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            @if ($data->fileType == 'image')
                
                <div class="grid min-h-[140px] w-full place-items-center overflow-x-scroll rounded-lg p-6 lg:overflow-visible">
                    <img
                    class="object-cover object-center w-full rounded-lg shadow-xl h-96 shadow-blue-gray-900/50"
                    src="{{asset($data->image_url)}}"
                    alt="nature image"
                    />
                </div>
            @else
                <div class="grid min-h-[140px] w-full place-items-center overflow-x-scroll rounded-lg p-6 lg:overflow-visible">
                    <video class="h-full w-full rounded-lg" controls autoPlay>
                        <source src="{{asset($data->iamge_url)}}" type="video/mp4" />
                        Your browser does not support the video tag.
                    </video>
                </div>
                
            @endif
        </div>
    </div>
</div>
@endsection
