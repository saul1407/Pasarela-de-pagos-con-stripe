<div>
    @if (auth()->user()->hasDefaultPaymentMethod())
        @if (auth()->user()->subscribed($name))

            @if (auth()->user()->subscribedToPrice($price, $name))

                @if (auth()->user()->subscription($name)->onGracePeriod())

                <div>
                    <button wire:click="resumeToPlan" wire:loading.attr="disabled" wire:target="resumeToPlan" type="button"
                        class="w-full px-3 py-3 text-sm shadow rounded-lg text-white hover:text-white bg-red-600 hover:bg-indigo-500 transition-colors duration-700 transform flex items-center justify-center">
                        <x-spinner wire:loading wire:target="resumeToPlan" class="mr-2" size="8" />
                        Reanudar Suscription
                    </button>
                </div>

                   
                @else
                   <article>
                    <button wire:click="cancelingToPlan" wire:loading.attr="disabled" wire:target="cancelingToPlan" type="button"
                        class="w-full px-3 py-3 text-sm shadow rounded-lg text-white hover:text-white bg-red-600 hover:bg-indigo-500 transition-colors duration-700 transform flex items-center justify-center">
                        <x-spinner wire:loading wire:target="cancelingToPlan" class="mr-2" size="8" />
                        Cancerla
                    </button>
                </article>

                    
                @endif
            @else

                <button wire:click="changingPrice" wire:loading.attr="disabled" wire:target="changingPrice"
                    type="button"
                    class="w-full px-3 py-3 text-sm shadow rounded-lg text-white hover:text-white bg-blue-600 hover:bg-indigo-500 transition-colors duration-700 transform flex items-center justify-center">
                    <x-spinner wire:loading wire:target="changingPrice" class="mr-2" size="8" />
                    Cambiar de plan
                </button>

                

            @endif

        @else
            
            <div class="form-group">
                <input wire:model="coupon" class="form-control" type="text" placeholder="Ingresar un codigo">
            </div>
            <a  wire:click="newSubscrition" wire:loading.attr="disabled" type="button"
                wire:target="newSubscrition"
                class="cursor-pointer w-full px-3 py-3 text-sm shadow rounded-lg {{ $textColor }} hover:text-white {{ $bgColor }} hover:bg-indigo-500 transition-colors duration-700 transform flex items-center justify-center">
                <x-spinner wire:loading wire:target="changingPrice" class="mr-2" size="8" />
                suscribirse
            </a>

            
        @endif
    @else

        <button type="button"
            class="w-full px-3 py-3 text-sm shadow rounded-lg {{ $textColor }} hover:text-white {{ $bgColor }} hover:bg-indigo-500 transition-colors duration-700 transform flex items-center justify-center">

            Agregar Metodor de pagor

        </button>


    @endif
</div>
