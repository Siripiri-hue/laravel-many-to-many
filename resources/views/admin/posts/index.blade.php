@extends('layouts.app')

@section('content')
<h1>Lista dei post</h1>
<ul>
    @foreach ($posts as $post)
        <li class="card">
            <h2>{{ $post->title }}</h2>
            {{-- <div>{{ $post->slug }}</div> --}}
            <div>{{ $post->content }}</div>
            <div>{{ $post->published_at }}</div>
        </li>    
    @endforeach
</ul>
@endsection