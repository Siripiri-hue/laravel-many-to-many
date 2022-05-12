@extends('layouts.app')

@section('content')
<form action="{{ route('admin.posts.store') }}" method="POST" class="p-4">
    @csrf
    
    {{-- titolo --}}
    <div class="form-group">
        <label for="title">Titolo *</label>
        <input class="form-control" type="text" name="title" id="title" value="{{ old('title') }}" placeholder="Aggiungi un titolo">

        @error('title')
            {{ $message }}
        @enderror
    </div>

    {{-- categorie --}}
    <div class="form-group">
        <label for="category_id">Selezionare una categoria</label>
        <select class="custom-select" name="category_id">
            <option value="">Seleziona un'opzione</option>
            @foreach ($categories as $cat)
            <option value="{{ $cat->id }}" {{ ( old('category_id') == $cat->id ) ? 'selected' : '' }}>
                    {{ $cat->name }}
                </option>
            @endforeach
        </select>

        @error('category_id')
            {{ $message }}
        @enderror
    </div>

    {{-- tags --}}
    @foreach ($tags as $tag)
        <div class="form-group form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="tags-{{ $tag->id }}" value="{{ $tag->id }}" id="{{ $tag->id }}" name="tags[]" 
                {{ (is_array(old('tags')) && in_array($tag->id, old('tags'))) ? ' checked' : '' }} />
            <label class="form-check-label" for="tags-{{ $tag->id }}">{{ $tag->name }}</label>
        </div>

        @error('tags')
            <div>{{ $message }}</div>
        @enderror
    @endforeach

    {{-- body --}}
    <div class="form-group">
        <label for="content">Contenuto del post *</label>
        <textarea class="form-control" id="content" name="content" rows="5">{{ old('content', 'Scrivi qui il tuo post') }}</textarea>

        @error('content')
            {{ $message }}
        @enderror
    </div>

    {{-- data --}}
    <div class="form-group">
        <label class="active" for="published_at">Selezionare data di pubblicazione:</label>
        <input type="date" id="published_at" name="published_at" value="{{ old('published_at') }}">

        @error('published_at')
            {{ $message }}
        @enderror
    </div>

    {{-- button --}}
    <button type="submit" class="btn btn-primary">Submit</button>

</form>
@endsection