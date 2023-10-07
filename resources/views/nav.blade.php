<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
    body{
      margin:0;
      padding:0;
      font-family: sans-serif;
      background-image: linear-gradient(to bottom right, #41a3f3, #faf3e7);
    }
  </style>

  @vite('resources/css/app.css')

</head>
<body class="h-screen w-scree">
  <header>
    <nav class="flex justify-between items-center text-white p-4 bg-slate-900">
      {{-- <a class="text-2xl font-extrabold shado+w-md hover:text-sky-600 text-sky-800" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);" href="{{route('home')}}">Weater App</a> --}}
      <a href="{{route('home')}}" class="flex items-center">
        <img src="{{asset('iconPNG/pngwing.com.png')}}" alt="Weather App Logo" class="w-12 h-12 mr-2">
        <span class="text-2xl font-extrabold hover:text-sky-600 text-sky-800" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">Weather App</span>
    </a>
      <div>
        <form action="{{route('buscar')}}" method="POST">
          @csrf
          <span>Ciudad <input name="ciudad" placeholder="Luján.." class="text-black p-1 rounded-md " type="text"/></span>
          <button type="submit" class="p-1 rounded-md hover:bg-sky-300 active:border-sky-50 hover:text-black bg-slate-600">Buscar</button>
        </form>
      </div>
      <div class="flex gap-4">
        <a href="{{route('home')}}" >Home</a>
        <a href="{{ route('favoritos') }}">Favoritos</a>
      </div>
    </nav>
  </header>

  <main>
    @yield('content')


  </main>

  <footer>
    
  </footer>
  
  
</body>
</html>
