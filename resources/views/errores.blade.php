@php
    $errorData = session('errorData'); //sacamos la info de session
    if($errorData) {  // si hay algo termino el php y retorno html
        @endphp

        <!DOCTYPE html>
        <html lang="es">

        <head>
        @vite('resources/css/app.css')
        </head>

        <body>
        <div class="relative h-screen" style="background-image: linear-gradient(to bottom right, #41a3f3, #faf3e7);">
          <div class="absolute justify-around flex flex-col w-4/5 shadow-xl rounded-xl h-4/5 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 backdrop-blur-md backdrop-filter bg-opacity-50 bg-red-300 p-4 text-center">
            <h1 class="text-9xl text-red-500 font-bold" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">Error!</h1>
            <div class="flex items-center justify-center mt-4">
                <a class="p-4 w-min text-white text-2xl rounded-md hover:bg-sky-300 active:border-sky-50 hover:text-black bg-sky-600" href="{{route('home')}}">Home</a>
            </div>
          </div>
        </div>
        </body>

        </html>

        @php //abro el php para redirigir al usuario a la pag principal si no tiene un mensaje de error
    } else {
        header('Location: ' . route('home'));
        exit();
    }
@endphp



