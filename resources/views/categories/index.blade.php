@extends('layout')
@section('content')

<h1>Kategóriák</h1>

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<ul>
    @foreach($categories as $category)
        <li>{{$category->id}} - {{$category->name}}</li>
        <a href="{{ route('categories.show', $category->id) }}">Megjelenítés</a>
        <a href="{{ route('categories.edit', $category->id) }}">Szerkesztés</a>
        <form action="{{ route('categories.destroy', $category->id) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('biztosan törli?')">Törlés</button>
        </form>
    @endforeach
</ul>

@endsection
