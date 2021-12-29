<x-app-layout>
    <div class="container py-10">
        <div class="grid grid-cols-3 gap-6">

            @foreach ($products as $product)
                
              <div class="card">
                  <div class="flex px-4 py-2 bg-gray-800 justify-between items-center">
                      <span class="text-white text-xl font-bold">{{$product->price}} USD</span>
                      <a href="{{ route('product.pay', $product) }}" class="btn btn-secondary">Comprar</a>
                  </div>
                  <img class="h-56 w-full object-cover" src="{{Storage::url($product->image)}}" alt="">
                  <div class="card-body">
                     <h1 class="text-xl font-bold text-gray-500 uppercase">{{$product->title}}</h1>
                     <p class="text-gray-600 text-sm mt-1">{{Str::limit($product->description,150)}}</p>
                  </div>
              </div>
            @endforeach
        </div>
    </div>
</x-app-layout>

