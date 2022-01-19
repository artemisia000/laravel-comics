
@extends('layouts.main')

@section('main.content')
    
    <main class="container" >

        <div class="cards">
            @foreach($comics as $comic)
              <div class="card">
                  <img src=" {{ $comic['thumb'] }} " alt="">
              </div>
              <h3> {{ $comic['series'] }} </h3>
            @endforeach
        </div>
        

    </main>

@endsection   

