<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight flex items-center justify-between">
            {{ __('posts') }}
            <a href="{{route('posts.create')}}" class=" text-xs bg-gray-800 text-white rounded px-2 py-1">
                Crear</a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="table">
                       <thead>
                            <tr>
                                <th>ID</th>
                                <th>TITULO</th>
                                
                            </tr>
                        </thead>
                        @foreach($posts as $post)
                        <tr class= "border-b border-grey-200 text-sm" >
                        <td class="px-4 py-4">{{$post->id}}</td>
                            <td class="px-4 py-4">{{$post->title}}</td>
                            <td class="px-4 py-4">
                                <a href="{{route('posts.edit', $post)}}" class="bg-red-600 text-white rounded px-6 py-2" >Editar</a>
                            </td>
                            <td class="px-4 py-4">
                                <form action="{{route('posts.destroy', $post)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    
                                    <input type="submit" value="Eliminar" class="bg-red-600 text-white rounded px-4 py-2">
                                </form>
                            </td>
                        </tr>
                        @endforeach

                    </table>
                    {{$posts->links()}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
