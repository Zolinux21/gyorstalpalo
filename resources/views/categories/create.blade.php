@extends('layout')
@section('content')
    
<h1>új kategória</h1>

@error('name')
    <div>{{ $message }}</div>
@enderror

<form action="{{ route('categories.store') }}" method="post">
    @csrf
    <fieldset>
        <label for="name">Kategória név</label>
        <input type="text" name="name" id="name">
    </fieldset>
    <button type="submit">Ment</button>
</form>

@endsection