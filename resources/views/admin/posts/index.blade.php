@extends('layouts.app')

@section('content')
<h1>Lista dei post</h1>

<a class="btn btn-primary" href="{{ route('admin.posts.create')}}">Crea nuovo post</a>

<ul>
    @foreach ($posts as $post)
        <li class="card">
            <h2>{{ $post->title }}</h2>
            {{-- <div>{{ $post->slug }}</div> --}}
            <div>{{ $post->content }}</div>
            <div>{{ $post->published_at }}</div>
            <div><a href="{{ route('admin.posts.edit', $post) }}">Modifica post</a></div>
        </li>    
    @endforeach
</ul>
@endsection