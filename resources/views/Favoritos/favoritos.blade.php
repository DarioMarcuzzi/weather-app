@extends('nav')

@section('content')


<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-10 p-4 gap-4">
  @foreach ($favoritos as $favorito)
    @php
    // dd($favorito);
        $arrayDeDirecciones = explode(", ",  $favorito->ciudad);

        $pais = $arrayDeDirecciones[0];
        $provincia = $arrayDeDirecciones[1];
        $localidad = $arrayDeDirecciones[2];

    @endphp

    <div class="w-full max-w-xs mx-auto bg-white shadow-md rounded-lg overflow-hidden mb-8">
    <div class="relative">
        <form action="{{ route('favoritos-destroy', [$favorito->id]) }}" method="POST" class="absolute top-2 right-2 z-10">
            @csrf
            @method('DELETE')
            <button class="w-6 h-6 rounded-md flex items-center justify-center bg-red-500 text-white" type="submit">X</button>
        </form>
    </div>
    <div class="p-4">
        <h2 class="text-xl font-bold mb-2">{{ $localidad }}</h2>
        <h2 class="text-xl font-bold mb-2">{{ $provincia }}</h2>
        <form action="{{ route('buscar') }}" method="POST">
            @csrf
            <input type="hidden" name="ciudad" value="{{ $favorito->ciudad }}">
            <button class="bg-slate-700 text-white font-semibold px-4 py-2 rounded-full" type="submit">Ver Clima</button>
        </form>
    </div>
</div>
  
  @endforeach
</div>

@endsection  



 