<div class="card">
    <div class="card-body relative">

        <div wire:loading.flex class="absolute w-full h-full bg-gray-100 bg-opacity-25 z-30 items-center justify-center">
            <x-spinner size="20" />

        </div>
        <form action="" id="form-card">

            <div class="form-group">
                <input class="form-control" id="card-holder-name" type="text" required>
            </div>

            <!-- Stripe Elements Placeholder -->
            <div class="form-group">
                <div class="form-control" id="card-element"></div>
            </div>

            <div class="form-group">
                <span id="error-card" class="invalid-feedback"></span>
            </div>
            <button class="btn btn-primary" id="card-button">
                Process Payment
            </button>
        </form>
    </div>

    @slot('js')

        <script>
            
            const formCard = document.getElementById('form-card');

            document.addEventListener('livewire:load', function() {

                stripe();

            });

            livewire.on('resetStripe', function() {


                document.getElementById('form-card').reset();
                stripe();
                alert("Sus compras ser procesado con exito");
            });

            livewire.on('ErrorPaymentMethod', function() {

                formCard.reset();
                
                stripe();

                document.getElementById('error-card').textContent ="Hubo un error en la comprar intetelos de nuevo";

            });

            function stripe() {

                const stripe = Stripe("{{ env('STRIPE_KEY') }}");
                const elements = stripe.elements();
                const cardElement = elements.create('card');

                cardElement.mount('#card-element');


                const cardHolderName = document.getElementById('card-holder-name');
                const cardButton = document.getElementById('card-button');
                

                formCard.addEventListener('submit', async (e) => {

                    e.preventDefault();

                    const {
                        paymentMethod,
                        error
                    } = await stripe.createPaymentMethod(
                        'card', cardElement, {
                            billing_details: {
                                name: cardHolderName.value
                            }
                        }
                    );

                    if (error) {
                        // Display "error.message" to the user...
                        document.getElementById('error-card').textContent = error.message;

                    } else {
                        // The card has been verified successfully...
                        livewire.emit('paymentMethodCreate', paymentMethod.id)
                    }
                });
            }
        </script>
    @endslot
</div>
