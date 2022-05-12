@extends('layouts.app')

@section('content')

<h1 class="text-center">Lista dei post</h1>

<a class="my-4 btn btn-primary justify-content-end" href="{{ route('admin.posts.create')}}">Crea nuovo post</a>

<table class="table table-striped" > 
    <thead> 
        <tr class="text-center"> 
            <th scope="col">Title</th> 
            <th scope="col">Slug</th>
            {{-- <th scope="col">Content</th>  --}}
            <th scope="col">Created</th>
            <th scope="col">Published</th> 
            <th scope="col">Category</th>
            <th scope="col">Tags</th>
            <th scope="col">Modifica</th>
            <th scope="col">Elimina</th>
        </tr> 
    </thead>
    
    <tbody> 
        @foreach ($posts as $post)

        {{-- @dd($post) --}}
        
        <tr scope="row"> 
            <td>{{ $post->title }}</td> 
            <td>{{ $post->slug }}</td>
            {{-- <td>{{ $post->content }}</td>  --}}
            <td>{{ $post->created_at }}</td> 
            <td>{{ $post->published_at }}</td> 
            <td>{{ $post->category ? $post->category->name : '' }}</td>
            <td>
                @foreach ($post->tags as $tag )
                    <span>{{ $tag->name }}</span>
                @endforeach
            </td>
            <td><a href="{{ route('admin.posts.edit', $post) }}">Modifica post</a></td> 
            <td>
                <form class="form-group" action="{{ route('admin.posts.destroy', $post) }}" method="POST">
                    @csrf
                    @method('DELETE')
    
                    <button type="submit">Elimina post</button>
                </form>
            </td>
        </tr>
        @endforeach 
    </tbody> 
</table>

@endsection