@extends('layouts.app')

@section('content')

<h1>Lista dei post</h1>

<a class="btn btn-primary" href="{{ route('admin.posts.create')}}">Crea nuovo post</a>

<table> 
    <thead> 
        <tr> 
            <th>Title</th> 
            <th>Slug</th>
            {{-- <th>Content</th>  --}}
            <th>Published At</th> 
            <th>Category</th>
            <th>Tags</th>
            <th>Modifica</th>
            <th>Elimina</th>
        </tr> 
    </thead>
    
    <tbody> 
        @foreach ($posts as $post)

        {{-- @dd($post) --}}
        
        <tr> 
            <td>{{ $post->title }}</td> 
            <td>{{ $post->slug }}</td>
            {{-- <td>{{ $post->content }}</td>  --}}
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