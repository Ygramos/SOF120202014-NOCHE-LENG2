@extends('layouts.UserLayout.UserLayout')
@section('menu')
    <x-Header></x-Header>
@endsection
@section('content')
     <div class="flex items-center min-h-screen bg-gray-100 dark:bg-gray-900">
    <div class="container mx-auto">
      <div class="max-w-md mx-auto my-10 bg-white p-4 px-8 ">
        <div class="text-center m-7">
          <h1
            class="my-3 text-2xl font-semibold text-gray-700 dark:text-gray-200 text-left"
          >
            ¡Hola! Ingresa tu e‑mail o usuario
          </h1>
        </div>
        <div class="m-7">
          <form action="" class="">
            <div class="mb-6">
              <label
                for="email"
                class="block mb-2 text-sm text-gray-600 dark:text-gray-400"
                >E-mail o usuario</label
              >
              <input
                type="email"
                name="email"
                id="email"
                placeholder=""
                class="w-full px-3 py-2 placeholder-gray-300 border-2 border-gray-300 rounded-md focus:outline-none focus:border-blue dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500"
              />
            </div>

            <div class="mb-6">
              <button
                type="button"
                class="w-full px-3 py-4 text-white bg-blue rounded-md focus:bg-blue focus:outline-none"
              >
                Continuar
              </button>
            </div>
            <div class="mb-6">
              <button
                type="button"
                class="w-full px-3 py-4 text-blue rounded-md focus:bg-blue focus:outline-none"
              >
                Crear cuenta
              </button>
            </div>
            <a
              href="https://www.mercadolibre.com.co/ayuda/20478"
              class="text-sm text-center text-blue border-t "
            >
              Nesesito ayuda para ingresar
            </a>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection