
@extends('layouts.main')

@section('main.content')
    
    <main>
        <div class="container">
            <div class="cards" >
                @foreach ($comics as $comic)
                    <div class="card" >                 
                        <img src=" {{ $comic['thumb'] }} " alt="{{ $comic['series'] }}">    
                        <h3>{{ $comic['series'] }}</h3>
                    </div>  
                @endforeach
            </div>
        </div>         
    </main>

@endsection   

