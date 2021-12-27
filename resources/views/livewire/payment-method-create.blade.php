<div>
    {{-- In work, do what you enjoy. --}}


    {{-- <x-spinner  size="8"/> --}}

    <article class="card">
       
        <form action="" id="formCard">
            <div class="card-body relative">
                <div wire:loading.flex
                class="absolute w-full h-full bg-gray-100 bg-opacity-25 z-30 items-center justify-center">
                <x-spinner size="20" />
            </div>
                <h1 class="text-2xl font-bold text-gray-600">Agregar Methodo de Pagos</h1>

                <div class="flex mt-4">
                    <span class="text-xl text-gray-700">Informacion de la tarjeta</span>
                    <div class="flex-1 ml-4">

                        <div class="form-group">
                            <input id="card-holder-name" class="form-control" type="text"
                                placeholder="Nombre De Titular De Las tarjeta" required>
                        </div>

                        <!-- Stripe Elements Placeholder -->
                        <div class="form-control" id="card-element"></div>
                        <span id="cardErrors"></span>
                    </div>
                </div>


            </div>
            <div class="card-footer flex justify-end">
                <button class="btn btn-primary" id="card-button" data-secret="{{ $intent->client_secret }}">
                    Update Payment Method
                </button>
            </div>
        </form>
    </article>

    @slot('js')

        <script>
            
            document.addEventListener('livewire:load', function(){

                stripe();
            });

            livewire.on('resetStripe', function() {

                document.getElementById('formCard').reset();
                stripe();
               
                

            });
        </script>

        <script>
            function stripe() {

                const stripe = Stripe("{{env('STRIPE_KEY')}}");

                const elements = stripe.elements();
                const cardElement = elements.create('card');

                cardElement.mount('#card-element');

                //Gerenar Toker
                const cardHolderName = document.getElementById('card-holder-name');
                const cardButton = document.getElementById('card-button');
                const formCard = document.getElementById('formCard');
                const clientSecret = cardButton.dataset.secret;

                formCard.addEventListener('submit', async (e) => {

                    e.preventDefault();

                    const {
                        setupIntent,
                        error
                    } = await stripe.confirmCardSetup(
                        clientSecret, {
                            payment_method: {
                                card: cardElement,
                                billing_details: {
                                    name: cardHolderName.value
                                }
                            }
                        }
                    );

                    if (error) {
                        // Display "error.message" to the user...
                        document.getElementById('cardErrors').textContent = error.message;

                    } else {
                        // The card has been verified successfully...
                        livewire.emit('paymentMethodCreate', setupIntent.payment_method)
                    }
                });
            }
        </script>

    @endslot


</div>
