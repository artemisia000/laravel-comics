
@extends('layouts.main')

@section('main.content')
    
    <main>
       <div class="container">
          <ul>
              <li>
                
                    @foreach ($comics as $comic)
                      
                    <img src=" {{ $comic['thumb'] }} " alt="{{ $comic['series'] }}">    
                    <h3>{{ $comic['series'] }}</h3>
        
                    @endforeach
                
              </li>
          </ul>
      </div>         
    </main>

@endsection   

