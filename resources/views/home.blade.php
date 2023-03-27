@extends('template')

@section('content')
   
    
    <div class="px-4">
        <h1 class="text-2xl mb-8 text-gray-900">Contenido Tecnico</h1>
        <div class="grid grid-cols-1 gap-4 mb-4" >
            @foreach($posts as $post)
            <a href="{{ route('post', $post->slug)}}" class="bg-gray-100 rounded-lg px-6 py-4" >
                <p class="text-xs flex items-center gap-2">
                    <span class="uppercase text-gray-700 bg-gray-200 rounded-full px-2 py-1">Tutorial</span>
                    <span>{{$post->created_at->format('d/m/Y')}}</span>
                </p>
                <h2>{{$post->title}}</h2>
            </a>
            @endforeach
        </div>
        {{ $posts->links()}}        
    </div>
@endsection
    
