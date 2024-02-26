@extends('layout')

@section('content')
    <h1>Ai Eszközök
        <a href="{{ route('aitools.create') }}" title="Új AI eszköz"> új Ai eszköz</a>
    </h1>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <ul>
        @foreach ($aitools as $aitool)
            <li>{{$aitool->id}} - {{$aitool->name}}</li>
            <a href="{{ route('aitools.show', $aitool->id) }}">Megjelenítés</a>
            <a href="{{ route('aitools.edit', $aitool->id) }}">Szerkesztés</a>
            <form action="{{ route('aitools.destroy', $aitool->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('biztosan törli?')">Törlés</button>
            </form>
        @endforeach
    </ul>
@endsection