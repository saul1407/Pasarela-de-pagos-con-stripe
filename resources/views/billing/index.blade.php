<x-app-layout>

    <div class="py-12">

        <div class="mx-auto">


            <!-- component -->
            <div class="min-h-screen items-center">
                <div class="">
                    <div class="text-center font-semibold">
                        <h1 class="text-5xl">
                            <span class="text-indigo-500 tracking-wide">Flexible </span>
                            <span>Plans</span>
                        </h1>
                        <p class="pt-6 text-xl text-gray-400 font-normal w-full px-8 md:w-full">
                            Choose a plan that works best for you and<br /> your team.
                        </p>
                    </div>
                    <!-- cards -->
                    <div class="my-16 sm:flex flex-wrap justify-center items-center gap-6">
                        <!-- Basic -->
                        {{-- Plan Mensual --}}
                        <div class="sm:w-1/2 md:w-1/2 lg:w-1/4 px-4 py-4 bg-white mt-6 shadow-lg rounded-lg">
                            <div class="px-6 py-8 sm:p-10 sm:pb-6">
                                <div class="flex justify-center">
                                    <span
                                        class="inline-flex px-4 py-1 rounded-full text-sm leading-5 font-semibold tracking-wide uppercase">
                                        Plan Mensual
                                    </span>
                                </div>
                                <div class="mt-4 flex justify-center text-6xl leading-none font-extrabold">
                                    $9.99
                                    <span class="ml-1 pt-8 text-2xl leading-8 font-medium text-gray-500">
                                        /Mes
                                    </span>
                                </div>
                            </div>
                            <p class="text-md mt-4">
                                Plan include :
                            </p>
                            <ul class="text-sm w-full mt-6 mb-6">
                                <li class="mb-3 flex items-center ">
                                    <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                        stroke="currentColor" fill="green" viewBox="0 0 1792 1792">
                                        <path
                                            d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                        </path>
                                    </svg>
                                    All illimited components
                                </li>
                                <li class="mb-3 flex items-center ">
                                    <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                        stroke="currentColor" fill="green" viewBox="0 0 1792 1792">
                                        <path
                                            d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                        </path>
                                    </svg>
                                    Own custom Tailwind styles
                                </li>
                                <li class="mb-3 flex items-center ">
                                    <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                        stroke="currentColor" fill="green" viewBox="0 0 1792 1792">
                                        <path
                                            d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                        </path>
                                    </svg>
                                    Unlimited Templates
                                </li>
                                <li class="mb-3 flex items-center ">
                                    <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                        stroke="currentColor" fill="green" viewBox="0 0 1792 1792">
                                        <path
                                            d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                        </path>
                                    </svg>
                                    Free premium dashboard
                                </li>
                                <li class="mb-3 flex items-center ">
                                    <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                        stroke="currentColor" fill="green" viewBox="0 0 1792 1792">
                                        <path
                                            d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                        </path>
                                    </svg>
                                    Best ranking
                                </li>
                                <li class="mb-3 flex items-center opacity-50">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" class="h-6 w-6 mr-2"
                                        fill="red" viewBox="0 0 1792 1792">
                                        <path
                                            d="M1277 1122q0-26-19-45l-181-181 181-181q19-19 19-45 0-27-19-46l-90-90q-19-19-46-19-26 0-45 19l-181 181-181-181q-19-19-45-19-27 0-46 19l-90 90q-19 19-19 46 0 26 19 45l181 181-181 181q-19 19-19 45 0 27 19 46l90 90q19 19 46 19 26 0 45-19l181-181 181 181q19 19 45 19 27 0 46-19l90-90q19-19 19-46zm387-226q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                        </path>
                                    </svg>
                                    Prenium svg
                                </li>
                                <li class="mb-3 flex items-center opacity-50">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" class="h-6 w-6 mr-2"
                                        fill="red" viewBox="0 0 1792 1792">
                                        <path
                                            d="M1277 1122q0-26-19-45l-181-181 181-181q19-19 19-45 0-27-19-46l-90-90q-19-19-46-19-26 0-45 19l-181 181-181-181q-19-19-45-19-27 0-46 19l-90 90q-19 19-19 46 0 26 19 45l181 181-181 181q-19 19-19 45 0 27 19 46l90 90q19 19 46 19 26 0 45-19l181-181 181 181q19 19 45 19 27 0 46-19l90-90q19-19 19-46zm387-226q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                        </path>
                                    </svg>
                                    My wife
                                </li>
                            </ul>
                            @livewire('subscriptions', ['price' => "price_1KB1TAH8jaaaCWunKHHqPrI4"], key("price_1KB1TAH8jaaaCWunKHHqPrI4"))
                            {{-- <x-button-subscriptions name="Cursos de striper" price="price_1KB1TAH8jaaaCWunKHHqPrI4" /> --}}
                        </div>

                        <!-- Popular -->
                        {{-- Plan Trimestral --}}
                        <div
                            class="sm:w-1/2 md:w-1/2 lg:w-1/4 px-4 py-4 bg-indigo-500 text-white mt-6 shadow-lg rounded-lg">
                            <div class="px-6 py-8 sm:p-10 sm:pb-6">
                                <div class="flex justify-center">
                                    <span
                                        class="inline-flex px-4 py-1 rounded-full text-sm leading-5 font-semibold tracking-wide uppercase">
                                        Plan Trimestral
                                    </span>
                                </div>
                                <div class="mt-4 flex justify-center text-6xl leading-none font-extrabold">
                                    $19.99
                                    <span class="ml-1 pt-8 text-2xl leading-8 font-medium text-gray-100">
                                        / 3 meses
                                    </span>
                                </div>
                            </div>
                            <p class="text-md mt-4">
                                Plan include :
                            </p>
                            <ul class="text-sm w-full mt-6 mb-6">
                                <li class="mb-3 flex items-center ">
                                    <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                        stroke="currentColor" fill="currentColor" viewBox="0 0 1792 1792">
                                        <path
                                            d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                        </path>
                                    </svg>
                                    All illimited components
                                </li>
                                <li class="mb-3 flex items-center ">
                                    <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                        stroke="currentColor" fill="currentColor" viewBox="0 0 1792 1792">
                                        <path
                                            d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                        </path>
                                    </svg>
                                    Own custom Tailwind styles
                                </li>
                                <li class="mb-3 flex items-center ">
                                    <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                        stroke="currentColor" fill="currentColor" viewBox="0 0 1792 1792">
                                        <path
                                            d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                        </path>
                                    </svg>
                                    Unlimited Templates
                                </li>
                                <li class="mb-3 flex items-center ">
                                    <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                        stroke="currentColor" fill="currentColor" viewBox="0 0 1792 1792">
                                        <path
                                            d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                        </path>
                                    </svg>
                                    Free premium dashboard
                                </li>
                                <li class="mb-3 flex items-center ">
                                    <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                        stroke="currentColor" fill="currentColor" viewBox="0 0 1792 1792">
                                        <path
                                            d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                        </path>
                                    </svg>
                                    Best ranking
                                </li>
                                <li class="mb-3 flex items-center opacity-50">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" class="h-6 w-6 mr-2"
                                        fill="currentColor" viewBox="0 0 1792 1792">
                                        <path
                                            d="M1277 1122q0-26-19-45l-181-181 181-181q19-19 19-45 0-27-19-46l-90-90q-19-19-46-19-26 0-45 19l-181 181-181-181q-19-19-45-19-27 0-46 19l-90 90q-19 19-19 46 0 26 19 45l181 181-181 181q-19 19-19 45 0 27 19 46l90 90q19 19 46 19 26 0 45-19l181-181 181 181q19 19 45 19 27 0 46-19l90-90q19-19 19-46zm387-226q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                        </path>
                                    </svg>
                                    Prenium svg
                                </li>
                                <li class="mb-3 flex items-center opacity-50">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" class="h-6 w-6 mr-2"
                                        fill="currentColor" viewBox="0 0 1792 1792">
                                        <path
                                            d="M1277 1122q0-26-19-45l-181-181 181-181q19-19 19-45 0-27-19-46l-90-90q-19-19-46-19-26 0-45 19l-181 181-181-181q-19-19-45-19-27 0-46 19l-90 90q-19 19-19 46 0 26 19 45l181 181-181 181q-19 19-19 45 0 27 19 46l90 90q19 19 46 19 26 0 45-19l181-181 181 181q19 19 45 19 27 0 46-19l90-90q19-19 19-46zm387-226q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                        </path>
                                    </svg>
                                    My wife
                                </li>
                            </ul>

                            @livewire('subscriptions', ['price' => "price_1KB1TAH8jaaaCWunh8Jb96qg"], key("price_1KB1TAH8jaaaCWunh8Jb96qg"))
                            {{-- <x-button-subscriptions name="Cursos de striper" price="price_1KB1TAH8jaaaCWunh8Jb96qg"
                                textColor="text-white" bgColor="bg-indigo-600" /> --}}
                        </div>

                        <!-- premium -->
                        {{-- Plan Anual --}}
                        <div class="sm:w-1/2 md:w-1/2 lg:w-1/4 px-4 py-4 bg-white mt-6 shadow-lg rounded-lg">
                            <div class="px-6 py-8 sm:p-10 sm:pb-6">
                                <div class="flex justify-center">
                                    <span
                                        class="inline-flex px-4 py-1 rounded-full text-sm leading-5 font-semibold tracking-wide uppercase">
                                        Plan Anual
                                    </span>
                                </div>
                                <div class="mt-4 flex justify-center text-6xl leading-none font-extrabold">
                                    $89.99
                                    <span class="ml-1 pt-8 text-2xl leading-8 font-medium text-gray-500">
                                        / años
                                    </span>
                                </div>
                            </div>
                            <p class="text-md mt-4">
                                Plan include :
                            </p>
                            <ul class="text-sm w-full mt-6 mb-6">
                                <li class="mb-3 flex items-center ">
                                    <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                        stroke="currentColor" fill="green" viewBox="0 0 1792 1792">
                                        <path
                                            d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                        </path>
                                    </svg>
                                    All illimited components
                                </li>
                                <li class="mb-3 flex items-center ">
                                    <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                        stroke="currentColor" fill="green" viewBox="0 0 1792 1792">
                                        <path
                                            d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                        </path>
                                    </svg>
                                    Own custom Tailwind styles
                                </li>
                                <li class="mb-3 flex items-center ">
                                    <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                        stroke="currentColor" fill="green" viewBox="0 0 1792 1792">
                                        <path
                                            d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                        </path>
                                    </svg>
                                    Unlimited Templates
                                </li>
                                <li class="mb-3 flex items-center ">
                                    <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                        stroke="currentColor" fill="green" viewBox="0 0 1792 1792">
                                        <path
                                            d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                        </path>
                                    </svg>
                                    Free premium dashboard
                                </li>
                                <li class="mb-3 flex items-center ">
                                    <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                        stroke="currentColor" fill="green" viewBox="0 0 1792 1792">
                                        <path
                                            d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                        </path>
                                    </svg>
                                    Best ranking
                                </li>
                                <li class="mb-3 flex items-center opacity-50">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" class="h-6 w-6 mr-2"
                                        fill="red" viewBox="0 0 1792 1792">
                                        <path
                                            d="M1277 1122q0-26-19-45l-181-181 181-181q19-19 19-45 0-27-19-46l-90-90q-19-19-46-19-26 0-45 19l-181 181-181-181q-19-19-45-19-27 0-46 19l-90 90q-19 19-19 46 0 26 19 45l181 181-181 181q-19 19-19 45 0 27 19 46l90 90q19 19 46 19 26 0 45-19l181-181 181 181q19 19 45 19 27 0 46-19l90-90q19-19 19-46zm387-226q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                        </path>
                                    </svg>
                                    Prenium svg
                                </li>
                                <li class="mb-3 flex items-center opacity-50">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" class="h-6 w-6 mr-2"
                                        fill="red" viewBox="0 0 1792 1792">
                                        <path
                                            d="M1277 1122q0-26-19-45l-181-181 181-181q19-19 19-45 0-27-19-46l-90-90q-19-19-46-19-26 0-45 19l-181 181-181-181q-19-19-45-19-27 0-46 19l-90 90q-19 19-19 46 0 26 19 45l181 181-181 181q-19 19-19 45 0 27 19 46l90 90q19 19 46 19 26 0 45-19l181-181 181 181q19 19 45 19 27 0 46-19l90-90q19-19 19-46zm387-226q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                        </path>
                                    </svg>
                                    My wife
                                </li>
                            </ul>
                            @livewire('subscriptions', ['price' => "price_1KB1TAH8jaaaCWunajYl6Fuh"], key("price_1KB1TAH8jaaaCWunajYl6Fuh"))
                            {{-- <x-button-subscriptions name="Cursos de striper" price="price_1KB1TAH8jaaaCWunajYl6Fuh" /> --}}
                        </div>
                    </div>
                </div>
            </div>

            <!-- Does this resource worth a follow? -->
            <div class="flex items-end justify-end fixed bottom-0 right-0 mb-4 mr-4 z-10">
                <div>
                    <a title="Buy me a beer" href="https://www.twitter.com/asad_codes" target="_blank"
                        class="block w-16 h-16 rounded-full transition-all shadow hover:shadow-lg transform hover:scale-110 hover:rotate-12">
                        
                    </a>
                </div>
            </div>

        </div>


        <div class="max-w-5xl mx-auto px-4 sm:px-8">
            @livewire('payment-method-create')
            @livewire('payment-method-list')
            @livewire('invoices')
        </div>
    </div>
</x-app-layout>
