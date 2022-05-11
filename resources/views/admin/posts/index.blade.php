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
            <th>Modifica</th>
            <th>Elimina</th>
        </tr> 
    </thead>
    
    <tbody> 
        @foreach ($posts as $post)
        
        <tr> 
            <td>{{ $post->title }}</td> 
            <td>{{ $post->slug }}</td>
            {{-- <td>{{ $post->content }}</td>  --}}
            <td>{{ $post->published_at }}</td> 
            <td>{{ $post->category ? $post->category->name : '' }}</td>
<<<<<<< HEAD
=======
            {{-- <td>{{ $post->category->name }}</td> --}}
>>>>>>> 086b6134aaf44a39f1b8f51b33e81d539a05028d
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