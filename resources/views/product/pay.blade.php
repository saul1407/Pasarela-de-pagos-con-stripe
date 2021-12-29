<x-app-layout>

    <div class="container py-12 grid grid-cols-12 gap-6">


        <div class="col-span-7">
            <div class="card">
                <div class="card-body">
                    <div class="flex">
                        <img class="w-48 h-28 object-cover" src="{{Storage::url($product->image)}}" alt="">
                        <div class="ml-4 flex justify-between items-center self-start flex-1">
                          
                                <h1 class="text-lg uppercase text-gray-600">{{$product->title}}</h1>
                                <span>${{$product->price}}</span>
                            
                        </div>                      
                    </div>
                    <hr class="mb-2">
                    <p class="text-sm">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur placeat amet sit similique tempora saepe accusamus necessitatibus commodi, aut quos aliquam inventore vitae quae, aliquid ipsa. Harum in <a href="#" class="font-bold text-blue-500">Temino y Condiciones</a> cumque voluptatem.
                   </p>
                </div>
            </div>
        </div>

        <div class="col-span-5">
            @livewire('product-pay', ['product' => $product])
        </div>

    </div>
</x-app-layout>
