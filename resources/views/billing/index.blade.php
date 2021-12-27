<x-app-layout>

   <div class="py-12">

        @livewire('subscriptions')
        <div class="max-w-5xl mx-auto px-4 sm:px-8">
            @livewire('payment-method-create')
            @livewire('payment-method-list')
        </div>
   </div>
</x-app-layout>