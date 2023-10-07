@extends('nav')



@section('content')

<div class="flex flex-col items-center mt-5 gap-10 justify-center text-center">
  <h1 class="text-5xl font-extrabold text-sky-900">Bienvenido a la App de Clima</h1>
  <p class="text-lg text-gray-700">Descubre el clima en tiempo real para cualquier ciudad</p>

  <div class="w-full md:w-2/3 lg:w-1/2 bg-gray-100 p-6 rounded-lg shadow-lg">
      <h2 class="text-2xl font-bold text-sky-900 mb-4">¿Cómo funciona?</h2>
      <p class="text-gray-700 mb-4">Ingresa el nombre de una ciudad y obtén información detallada sobre el clima actual. ¡Puedes guardar tus ciudades favoritas para acceder rápidamente a la información en el futuro!</p>
      <p class="text-gray-700 mb-4">¿Quieres saber cómo está el clima en tu próximo destino? ¡Esta aplicación es perfecta para ti!</p>
  </div>

  <div class="w-full md:w-2/3 lg:w-1/2 bg-gray-100 p-6 rounded-lg shadow-lg">
      <h2 class="text-2xl font-bold text-sky-900 mb-4">¿Por qué elegirnos?</h2>
      <p class="text-gray-700 mb-4">- Información precisa y actualizada sobre el clima</p>
      <p class="text-gray-700 mb-4">- Posibilidad de guardar tus ciudades favoritas</p>
      <p class="text-gray-700 mb-4">- Interfaz fácil de usar y visualmente atractiva</p>
  </div>

  <p class="text-gray-700">¡Empieza ahora mismo y mantente siempre informado sobre el clima en tus lugares favoritos!</p>
</div>



@endsection