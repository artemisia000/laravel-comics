
@extends('layouts.main')

@section('main.content')
    
    <main class="container" >

        <div class="cards">
            @foreach ($comics as $comic)
              <div class="card">
                  <img src=" {{ $comic['thumb'] }} " alt="{{ $comic['series'] }}">
              </div>
              <h3>{{ $comic['title'] }}</h3>
            @endforeach
        </div>
        

    </main>

@endsection   

