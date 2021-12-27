@props(['bgColor' => 'bg-white', 'textColor' => 'text-indigo-500', 'name', 'price'])

@if (auth()->user()->hasDefaultPaymentMethod())
    @if (auth()->user()->subscribed($name))

        @if (auth()->user()->subscribedToPrice($price, $name))

            @if (auth()->user()->subscription($name)->onGracePeriod())

                <button wire:loading.flex wire:target="resumeToPlan('{{ $name }}')" type="button"
                    class="w-full px-3 py-3 text-sm shadow rounded-lg text-white hover:text-white bg-red-600 hover:bg-indigo-500 transition-colors duration-700 transform flex items-center justify-center">
                    <x-spinner class="mr-2" size="8" />
                    Reanudar Suscription
                </button>

                <button wire:loading.remove wire:click="resumeToPlan('{{ $name }}')" type="button"
                    class="w-full px-3 py-3 text-sm shadow rounded-lg text-white hover:text-white bg-red-600 hover:bg-indigo-500 transition-colors duration-700 transform flex items-center justify-center">

                    Reanudar Suscription
                </button>
            @else
                <button wire:loading.flex wire:target="cancelingToPlan('{{ $name }}')" type="button"
                    class="w-full px-3 py-3 text-sm shadow rounded-lg text-white hover:text-white bg-red-600 hover:bg-indigo-500 transition-colors duration-700 transform flex items-center justify-center">
                    <x-spinner class="mr-2" size="8" />
                    Cancerla
                </button>

                <button wire:loading.remove wire:click="cancelingToPlan('{{ $name }}')" type="button"
                    class="w-full px-3 py-3 text-sm shadow rounded-lg text-white hover:text-white bg-red-600 hover:bg-indigo-500 transition-colors duration-700 transform flex items-center justify-center">

                    Cancerla
                </button>
            @endif
        @else

            <button wire:loading.flex wire:target="changingPrice('{{ $name }}','{{ $price }}')"
                type="button"
                class="w-full px-3 py-3 text-sm shadow rounded-lg text-white hover:text-white bg-blue-600 hover:bg-indigo-500 transition-colors duration-700 transform flex items-center justify-center">
                <x-spinner class="mr-2" size="8" />
                Cambiar de plan
            </button>

            <button wire:loading.remove wire:click="changingPrice('{{ $name }}','{{ $price }}')"
                type="button"
                class="w-full px-3 py-3 text-sm shadow rounded-lg text-white hover:text-white bg-blue-600 hover:bg-indigo-500 transition-colors duration-700 transform flex items-center justify-center">

                Cambiar de plan
            </button>

        @endif

    @else

        <button wire:loading.flex type="button"
            wire:target="newSubscrition('{{ $name }}','{{ $price }}')"
            class="w-full px-3 py-3 text-sm shadow rounded-lg {{ $textColor }} hover:text-white {{ $bgColor }} hover:bg-indigo-500 transition-colors duration-700 transform flex items-center justify-center">
            <x-spinner class="mr-2" size="8" />
            suscribirse
        </button>

        <button wire:click="newSubscrition('{{ $name }}','{{ $price }}')" wire:loading.remove
            wire:target="newSubscrition('{{ $name }}','{{ $price }}')" type="button"
            class="w-full px-3 py-3 text-sm shadow rounded-lg {{ $textColor }} hover:text-white {{ $bgColor }} hover:bg-indigo-500 transition-colors duration-700 transform flex items-center justify-center">

            suscribirse
        </button>
    @endif
@else

    <button 
         type="button"
        class="w-full px-3 py-3 text-sm shadow rounded-lg {{ $textColor }} hover:text-white {{ $bgColor }} hover:bg-indigo-500 transition-colors duration-700 transform flex items-center justify-center">

        Agregar Metodor de pagor

    </button>


@endif
