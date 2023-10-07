@extends('nav')

@php

$weatherData = session('weatherData');

if($weatherData) {

      // dd($weatherData);
      
      
      // dd($weatherData);
      
      
      $pais = $weatherData['location']['country'] ;
      $provincia = $weatherData['location']['region']; 
      $localidad = $weatherData['location']['name'] ;
      
      $direccionCompleta = $pais . ", " . $provincia . ", " . $localidad;
      
      // dd($direccionCompleta);
      @endphp
      
      @section('content')
      
        @if(isset($weatherData))
        <div class="relative h-screen" style="background-image: linear-gradient(to bottom right, #41a3f3, #faf3e7);">
          <div class="absolute w-4/5 shadow-xl rounded-xl h-4/5 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 backdrop-blur-md backdrop-filter bg-opacity-30 bg-slate-50 gap-4 items-center  flex flex-col p-4 text-center">
            <form action="{{route('favoritos', ['ciudad' => $direccionCompleta])}}" method="POST">
              @csrf
              <button class="absolute right-5">ICON</button>
              </form>
              <h1 class="text-9xl text-blue-500 font-bold" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">{{ $weatherData['location']['name'] }}</h1>
              <div class="flex justify-center gap-10">
                <p>{{$weatherData['location']['region']}}</p>
                <p>{{$weatherData['location']['country']}}</p>
                </div>
        <div>
          <img  style="width: 100px; height: auto;" src="{{$weatherData['current']['condition']['icon']}}" alt="icon"/>
        </div>
        <div style="width: 100%" class="flex justify-around">
          <div>
          <h1>C {{$weatherData['current']['temp_c']}}º</h1>
          <h1>F {{$weatherData['current']['temp_f']}}º</h1>
          </div>
          <div>
          <h1>ST C {{$weatherData['current']['feelslike_c']}}º</h1>
          <h1>ST F {{$weatherData['current']['feelslike_c']}}º</h1>
          </div>
          </div>
          </div>
          </div>
          @else
          <div>No hay datos disponibles</div>
          @endif
            
      @endsection
      @php
        
    } else {
      header('Location: ' . route('home'));
        exit();
    }
    @endphp

