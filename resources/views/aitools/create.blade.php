@extends('layout')
@section('content')
    
<h1>új Ai tool</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    
@endif

<form action="{{ route('aitools.store') }}" method="post">
    @csrf
    <fieldset>
        <label for="name">Ai tool név</label>
        <input type="text" name="name" id="name"></input>
    </fieldset>
    <fieldset>
        <label for="category_id">Kategória</label>
        <select name="category_id" id="category_id">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{$category->name}}</option>
            @endforeach
        </select>
    </fieldset>
    <fieldset>
        <label for="description">Leírás</label>
        <textarea name="description" id="description"></textarea>
    </fieldset>
    <fieldset>
        <label for="link">Link</label>
        <input type="text" name="link" id="link">
    </fieldset>
    <fieldset>
        <label for="hasFeePlan">Van -e ingyenes változata</label>
        <input type="checkbox" name="hasFeePlan" id="hasFeePlan">
    </fieldset>
    <fieldset>
        <label for="price">Ár (havi)</label>
        <input type="number" name="price" id="price">
    </fieldset>
    <button type="submit">Ment</button>
</form>

@endsection