<div>
    <section class="card mt-8">


        <div class="py-12 px-4 bg-gray-50">
            <h1 class="font-bold text-gray-500 text-2xl">Metodo de Pagos Agregado</h1>
        </div>
        <div class="card-body divide-y divide-gray-200 relative">

            <div wire:loading.flex
                class="absolute w-full h-full bg-gray-100 bg-opacity-25 z-30 items-center justify-center">
                <x-spinner size="20" />
            </div>
            @forelse ($paymentMethods as $paymentMethod)


                <article class="text-sm py-2 text-gray-700">

                    <div class="flex justify-between items-center">
                        <div>
                            <h2><span class="font-bold">{{ $paymentMethod->billing_details->name }}</span>
                                xxxx-{{ $paymentMethod->card->last4 }}

                                @if ($paymentMethod->id == auth()->user()->defaultPaymentMethod()->id)

                                    (Default)
                                @endif

                            </h2>
                            <span>Expira:
                                {{ $paymentMethod->card->exp_month }}/{{ $paymentMethod->card->exp_year }}</span>
                        </div>

                        <div class="flex text-gray-500 divide-x divide-gray-500">

                            @unless($paymentMethod->id == auth()->user()->defaultPaymentMethod()->id)

                                <i class="fas fa-star hover:text-gray-700 cursor-pointer  p-3"
                                    wire:click="defaultPaymentMethod('{{ $paymentMethod->id }}')"></i>

                                <i class="fas fa-trash hover:text-gray-700 cursor-pointer p-3 ml-4"
                                    wire:click="deletePaymentMethod('{{ $paymentMethod->id }}')"></i>

                            @endunless
                        </div>
                    </div>
                </article>

            @empty

                <article class="py-4">
                    <h1 class="text-sm">No cuenta con ningun metodo de pagor</h1>
                </article>

            @endforelse

        </div>
    </section>
</div>
