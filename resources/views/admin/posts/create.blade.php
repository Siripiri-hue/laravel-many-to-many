@extends('layouts.app')

@section('content')
<form>
    <div class="form-group">
        <label for="title">Titolo</label>
        <input class="form-control" type="text" name="title"  id="title" placeholder="Aggiungi un titolo">
    </div>

    <div class="form-group">
        <label for="content">Corpo del post</label>
        <textarea class="form-control" id="content" name="content" rows="5">Scrivi qui il tuo post</textarea>
    </div>

    <div class="form-group">
        <label class="active" for="published_at">Selezionare data di pubblicazione:</label>
        <input type="date" id="published_at" name="published_at">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection