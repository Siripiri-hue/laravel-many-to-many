@extends('layouts.app')

@section('content')
<form action="{{ route('admin.posts.store') }}" method="POST">
    @csrf
    
    <div class="form-group">
        <label for="title">Titolo</label>
        <input class="form-control" type="text" name="title"  id="title" value="{{ old('title'), 'Default' }}" placeholder="Aggiungi un titolo">

        @error('title')
            {{ $message }}
        @enderror
    </div>

    <div class="form-group">
        <select class="custom-select" name="category_id">
            @foreach ($categories as $cat)
                <option value="{{ $cat->id }}" {{ old('category_id') == 'category_id' ?: 'selected'}}>{{ $cat->name }}</option>
            @endforeach
        </select>

        @error('category_id')
            {{ $message }}
        @enderror
    </div>

    <div class="form-group">
        <label for="content">Corpo del post</label>
        <textarea class="form-control" id="content" name="content" rows="5">{{ old('content'), "Scrivi qui il tuo post"}}</textarea>

        @error('content')
            {{ $message }}
        @enderror
    </div>

    <div class="form-group">
        <label class="active" for="published_at">Selezionare data di pubblicazione:</label>
        <input type="date" id="published_at" name="published_at">

        @error('published_at')
            {{ $message }}
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

</form>
@endsection