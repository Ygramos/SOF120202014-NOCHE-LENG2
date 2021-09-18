@extends('layouts.UserLayout.UserLayout')

@section('content')
    <div class=" w-full bg-yellow-400 cursor-pointer">
        <div
            class="absolute   bg-white w-10 text-center items-center justify-center  rounded-sm mr-1  left-0  mt-20 shadow-xl">
            <div class="text-blue  py-6">
                <svg xmlns="http://www.w3.org/2000/svg" class="md:h-10 md:w-10 w-5 m-auto" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M15 19l-7-7 7-7" />
                </svg>
            </div>
        </div>
        <div class="bg-white absolute w-10 text-center items-center justify-center rounded-sm ml-1  right-0 mt-20 shadow-xl">
            <div class="text-blue  py-6">
                <svg xmlns="http://www.w3.org/2000/svg" class="md:h-10 md:w-10 w-5 m-auto" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5l7 7-7 7" />
                </svg>
            </div>
        </div>
        <div class="items-cente bg-green-500 ">
            <img class="slider" src="{{ asset('img/banner/baner1.png') }}" />

            {{-- <div class="items-center ">
                <div class="justify-center items-center text-center mt-6 space-y-3">
                    <div class="">
                        <button class=" w-3 h-3 mx-1 rounded-full focus:outline-none
                        bg-red-500">
                        </button>
                    </div>
                </div>
            </div> --}}
        </div>

    </div>
    <div class=" m-10 cursor-pointer">
        <div class=" bg-white h-28 shadow-xl border  grid grid-cols-4">
            <div class="flex">
                <img class="  my-auto  h-14 w-28 "
                    src="https://http2.mlstatic.com/resources/frontend/homes-korriban/assets/images/payments/credit-card.svg"
                    alt="" srcset="">
                <div class="my-auto text-left ">
                    <div>Hasta 48 cuotas</div>
                    <div class=" text-blue ">ver mas</div>
                </div>
            </div>
            <div class="flex">
                <img class="  my-auto  h-14 w-28 "
                    src="https://http2.mlstatic.com/resources/frontend/homes-korriban/assets/images/payments/transfer.svg"
                    alt="" srcset="">
                <div class="my-auto text-left ">
                    <div>Transferencia desde tu banco</div>
                    <div class=" text-blue ">ver mas</div>
                </div>
            </div>
            <div class="flex">
                <img class="  my-auto  h-14 w-28 "
                    src="https://http2.mlstatic.com/resources/frontend/homes-korriban/assets/images/payments/payment-agreement.svg"
                    alt="" srcset="">
                <div class="my-auto text-left ">
                    <div>Paga en efectivos</div>
                    <div class=" text-blue ">ver mas</div>
                </div>
            </div>
            <div class="flex">
                <img class="  my-auto  h-14 w-28 "
                    src="https://http2.mlstatic.com/resources/frontend/homes-korriban/assets/images/payments/view-more.svg"
                    alt="" srcset="">
                <div class="my-auto text-left ">
                    <div>Más medios de pago</div>
                    <div class=" text-blue ">ver mas</div>
                </div>
            </div>
        </div>

        <div class="mt-10  mb-5 flex">
            <div class=" text-3xl text-gray-600">Ofertas</div>
            <div class="  text-blue text-xl px-5 pt-2">Ver mas</div>
        </div>
        <div class=" grid grid-cols-5  gap-8">
            <div
                class="border-2 dropdown  container w-72 mx-auto  bg-white rounded-xl shadow-lg  hover:shadow-2xl hover:slide-in-up-leave-active ">
                <img class=" h-72" src="https://http2.mlstatic.com/D_Q_NP_2X_673886-MCO45114237021_032021-AB.webp"
                    alt="" srcset="">
                <div class=" dropdown-content hidden text-gray-700 text-lg pt-1 bg-white p-4">$119.950°° </div>

                <div class="p-4 text-gray-800 border-t ">
                    <div class="text-3xl flex">
                        $ 146.900 <div class="text-green-600 text-lg mx-2">62% OFF</div>
                    </div>
                    <div class="text-green-600 text-base font-semibold mx-2">Envío gratis</div>
                </div>
                <div class=" P-4 dropdown-content hidden text-gray-700 pt-1 bg-white">Repeat Tee - Camiseta Manga Corta
                    De
                    Hombre Para Entrenamien</div>
            </div>

            <div
                class="border-2 dropdown  container w-72 mx-auto  bg-white rounded-xl shadow-lg  hover:shadow-2xl hover:slide-in-up-leave-active ">
                <img class=" h-72" src="https://http2.mlstatic.com/D_Q_NP_2X_976312-MCO44530410383_012021-AB.webp"
                    alt="" srcset="">
                <div class=" dropdown-content hidden text-gray-700 text-lg pt-1 bg-white p-4">$119.950°° </div>

                <div class="p-4 text-gray-800 border-t ">
                    <div class="text-3xl flex">
                        $ 146.900 <div class="text-green-600 text-lg mx-2">62% OFF</div>
                    </div>
                    <div class="text-green-600 text-base font-semibold mx-2">Envío gratis</div>
                </div>
                <div class=" P-4 dropdown-content hidden text-gray-700 pt-1 bg-white">Repeat Tee - Camiseta Manga Corta
                    De
                    Hombre Para Entrenamien</div>
            </div>

            <div
                class="border-2 dropdown  container w-72 mx-auto  bg-white rounded-xl shadow-lg  hover:shadow-2xl hover:slide-in-up-leave-active ">
                <img class=" h-72" src=" https://http2.mlstatic.com/D_Q_NP_2X_772268-MCO31353742728_072019-AB.webp"
                    alt="" srcset="">
                <div class=" dropdown-content hidden text-gray-700 text-lg pt-1 bg-white p-4">$119.950°° </div>

                <div class="p-4 text-gray-800 border-t ">
                    <div class="text-3xl flex">
                        $ 146.900 <div class="text-green-600 text-lg mx-2">62% OFF</div>
                    </div>
                    <div class="text-green-600 text-base font-semibold mx-2">Envío gratis</div>
                </div>
                <div class=" P-4 dropdown-content hidden text-gray-700 pt-1 bg-white">Repeat Tee - Camiseta Manga Corta
                    De
                    Hombre Para Entrenamien</div>
            </div>

            <div
                class="border-2 dropdown  container w-72 mx-auto  bg-white rounded-xl shadow-lg  hover:shadow-2xl hover:slide-in-up-leave-active ">
                <img class=" h-72" src="https://http2.mlstatic.com/D_Q_NP_2X_795898-MCO43537279152_092020-AB.webp "
                    alt="" srcset="">
                <div class=" dropdown-content hidden text-gray-700 text-lg pt-1 bg-white p-4">$119.950°° </div>

                <div class="p-4 text-gray-800 border-t ">
                    <div class="text-3xl flex">
                        $ 146.900 <div class="text-green-600 text-lg mx-2">62% OFF</div>
                    </div>
                    <div class="text-green-600 text-base font-semibold mx-2">Envío gratis</div>
                </div>
                <div class=" P-4 dropdown-content hidden text-gray-700 pt-1 bg-white">Repeat Tee - Camiseta Manga Corta
                    De
                    Hombre Para Entrenamien</div>
            </div>

            <div
                class="border-2 dropdown  container w-72 mx-auto  bg-white rounded-xl shadow-lg  hover:shadow-2xl hover:slide-in-up-leave-active ">
                <img class=" h-72" src="https://http2.mlstatic.com/D_Q_NP_2X_889031-MCO41174851153_032020-AB.webp"
                    alt="" srcset="">
                <div class=" dropdown-content hidden text-gray-700 text-lg pt-1 bg-white p-4">$119.950°° </div>

                <div class="p-4 text-gray-800 border-t ">
                    <div class="text-3xl flex">
                        $ 146.900 <div class="text-green-600 text-lg mx-2">62% OFF</div>
                    </div>
                    <div class="text-green-600 text-base font-semibold mx-2">Envío gratis</div>
                </div>
                <div class=" P-4 dropdown-content hidden text-gray-700 pt-1 bg-white">Repeat Tee - Camiseta Manga Corta
                    De
                    Hombre Para Entrenamien</div>
            </div>




        </div>
        <div class="mt-10  mb-5 flex">
            <div class=" text-3xl text-gray-600">También puede interesarte</div>
            <div class="  text-blue text-xl px-5 pt-2">Ver mas</div>
        </div>
        <div class=" grid grid-cols-5  gap-8">


            <div
                class="border-2 dropdown  container w-72 mx-auto  bg-white rounded-xl shadow-lg  hover:shadow-2xl hover:slide-in-up-leave-active ">
                <img class=" h-72" src="https://http2.mlstatic.com/D_Q_NP_2X_860932-MCO45582641755_042021-AB.webp"
                    alt="" srcset="">
                <div class=" dropdown-content hidden text-gray-700 text-lg pt-1 bg-white p-4">$119.950°° </div>

                <div class="p-4 text-gray-800 border-t ">
                    <div class="text-3xl flex">
                        $ 146.900 <div class="text-green-600 text-lg mx-2">62% OFF</div>
                    </div>
                    <div class="text-green-600 text-base font-semibold mx-2">Envío gratis</div>
                </div>
                <div class=" P-4 dropdown-content hidden text-gray-700 pt-1 bg-white">Repeat Tee - Camiseta Manga Corta
                    De
                    Hombre Para Entrenamien</div>
            </div>

            <div
                class="border-2 dropdown  container w-72 mx-auto  bg-white rounded-xl shadow-lg  hover:shadow-2xl hover:slide-in-up-leave-active ">
                <img class=" h-72" src="https://http2.mlstatic.com/D_Q_NP_2X_601679-MCO44948566298_022021-AB.webp"
                    alt="" srcset="">
                <div class=" dropdown-content hidden text-gray-700 text-lg pt-1 bg-white p-4">$119.950°° </div>

                <div class="p-4 text-gray-800 border-t ">
                    <div class="text-3xl flex">
                        $ 146.900 <div class="text-green-600 text-lg mx-2">62% OFF</div>
                    </div>
                    <div class="text-green-600 text-base font-semibold mx-2">Envío gratis</div>
                </div>
                <div class=" P-4 dropdown-content hidden text-gray-700 pt-1 bg-white">Repeat Tee - Camiseta Manga Corta
                    De
                    Hombre Para Entrenamien</div>
            </div>

            <div
                class="border-2 dropdown  container w-72 mx-auto  bg-white rounded-xl shadow-lg  hover:shadow-2xl hover:slide-in-up-leave-active ">
                <img class=" h-72" src="https://http2.mlstatic.com/D_Q_NP_2X_731151-MCO45114233650_032021-AB.webp"
                    alt="" srcset="">
                <div class=" dropdown-content hidden text-gray-700 text-lg pt-1 bg-white p-4">$119.950°° </div>

                <div class="p-4 text-gray-800 border-t ">
                    <div class="text-3xl flex">
                        $ 146.900 <div class="text-green-600 text-lg mx-2">62% OFF</div>
                    </div>
                    <div class="text-green-600 text-base font-semibold mx-2">Envío gratis</div>
                </div>
                <div class=" P-4 dropdown-content hidden text-gray-700 pt-1 bg-white">Repeat Tee - Camiseta Manga Corta
                    De
                    Hombre Para Entrenamien</div>
            </div>

            <div
                class="border-2 dropdown  container w-72 mx-auto  bg-white rounded-xl shadow-lg  hover:shadow-2xl hover:slide-in-up-leave-active ">
                <img class=" h-72" src="https://http2.mlstatic.com/D_Q_NP_2X_733858-MCO45114233735_032021-AB.webp"
                    alt="" srcset="">
                <div class=" dropdown-content hidden text-gray-700 text-lg pt-1 bg-white p-4">$119.950°° </div>

                <div class="p-4 text-gray-800 border-t ">
                    <div class="text-3xl flex">
                        $ 146.900 <div class="text-green-600 text-lg mx-2">62% OFF</div>
                    </div>
                    <div class="text-green-600 text-base font-semibold mx-2">Envío gratis</div>
                </div>
                <div class=" P-4 dropdown-content hidden text-gray-700 pt-1 bg-white">Repeat Tee - Camiseta Manga Corta
                    De
                    Hombre Para Entrenamien</div>
            </div>

            <div
                class="border-2 dropdown  container w-72 mx-auto  bg-white rounded-xl shadow-lg  hover:shadow-2xl hover:slide-in-up-leave-active ">
                <img class=" h-72" src="https://http2.mlstatic.com/D_Q_NP_2X_603580-MCO44404761035_122020-AB.webp"
                    alt="" srcset="">
                <div class=" dropdown-content hidden text-gray-700 text-lg pt-1 bg-white p-4">$119.950°° </div>

                <div class="p-4 text-gray-800 border-t ">
                    <div class="text-3xl flex">
                        $ 146.900 <div class="text-green-600 text-lg mx-2">62% OFF</div>
                    </div>
                    <div class="text-green-600 text-base font-semibold mx-2">Envío gratis</div>
                </div>
                <div class=" P-4 dropdown-content hidden text-gray-700 pt-1 bg-white">Repeat Tee - Camiseta Manga Corta
                    De
                    Hombre Para Entrenamien</div>
            </div>




        </div>

        <div class="mt-10  mb-5 flex">
            <div class=" text-3xl text-gray-600">Beneficios de Mercado Puntos</div>
            <div class="  text-blue text-xl px-5 pt-2">Ver todos los beneficios
            </div>
        </div>
        <div class=" grid grid-cols-2 gap-10">
            <div class=" rounded-xl">
                <img class="h-80 w-full rounded-xl"
                    src="https://http2.mlstatic.com/resources/frontend/statics/loyal/partners/disneyplus/widget/characters-carousel-widget@2x.jpg"
                    alt="">
                <div class=" absolute -mt-32 ml-12 flex">


                    <img src="https://http2.mlstatic.com/resources/frontend/statics/loyal/partners/vdp/disney-brand@2x.png?v=1"
                        alt="" srcset="">
                    <div class="absolute -mt-32 ml-12 flex z-20 text-white w-full bg-gray-900">
                        <div class=" font-semibold text-4xl">4 Meses de regalo </div>
                        <div>
                            Disney +
                        </div>
                    </div>


                </div>
            </div>
            <div>
                <img class="h-80 w-full rounded-xl"
                    src="https://http2.mlstatic.com/resources/frontend/statics/loyal/partners/hbomax/widget/friends-widget@2x.jpg"
                    alt="">
            </div>
        </div>

    </div>


@endsection

<style>
    /* .dropdown:hover>.dropdown-content {
        display: block;
    } */

</style>
