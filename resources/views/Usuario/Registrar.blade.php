@extends('layouts.UserLayout.UserLayout')

@section('content')
      <div class="bg-gray-100 ">
    <div class="relative py-3 ">
      <div class="relative ">
        <div class="w-3/6 mx-auto">
          <div>
            <h1 class="text-2xl font-semibold">
              Completa tus datos
            </h1>
          </div>
          <div class=" bg-white p-8  rounded-md">
            <div class="text-base   text-gray-700 grid grid-cols-2 gap-4">
              <div class="relative py-5">
                <input
                  autocomplete="off"
                  id="nombre"
                  name="nombre"
                  type="text"
                  class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue hover:border-gray-600"
                  placeholder="Nombre"
                />
                <label
                  for="nombre"
                  class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm"
                  >Nombre</label
                >
              </div>
              <div class="relative py-5 ">
                <input
                  autocomplete="off"
                  id="Apellido"
                  name="Apellido"
                  type="text"
                  class="peer placeholder-transparent h-10  w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue hover:border-gray-600"
                  placeholder="Apellido"
                />
                <label
                  for="Apellido"
                  class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm"
                  >Apellido</label
                >
              </div>

              <div class="relative py-5 ">
                <input
                  autocomplete="off"
                  id="email"
                  name="email"
                  type="email"
                  class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue hover:border-gray-600"
                  placeholder="E-mail"
                />
                <label
                  for="password"
                  class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm"
                  >E-mail</label
                >
              </div>
              <div class="relative py-5 ">
                <input
                  autocomplete="off"
                  id="clave"
                  name="clave"
                  type="clave"
                  class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue hover:border-gray-600"
                  placeholder="Clave"
                />
                <label
                  for="password"
                  class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm"
                  >Clave</label
                >
              </div>
            </div>
            <div class="py-5">
              <input type="checkbox" name="" id="" /> Acepto los
              <a
                href="https://www.mercadolibre.com.co/ayuda/terminos-y-condiciones-de-uso_991"
                class="text-blue"
                >Términos y Condiciones</a
              >
              y autorizo el uso de mis datos de acuerdo a la
              <a
                href="https://www.mercadolibre.com.co/privacidad"
                class="text-blue"
              >
                Declaración de Privacidad</a
              >
              y la
              <a
                href="https://www.mercadolibre.com.co/ayuda/autorizacion-para-el-tratamiento-de-datos_20748"
                class="text-blue"
              >
                Autorización de Tratamiento de Datos</a
              >.
            </div>
          </div>
          <div class="relative p-8">
            <button class="bg-blue text-white rounded-md  p-3">
              Continuar
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection