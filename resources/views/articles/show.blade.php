<x-app-layout>

    <div class="mx-auto max-w-5xl px-4 lg:px-8 py-10">

        <div class="card">
            <div class="card-body">
                <div class="card-body mb-2">
                    <h1 class="font-bold text-xl text-gray-600 mb-2">
                        {{$article->title}}
                    </h1>
                    <div class="text-gray-700">
                        {{$article->extract}}
                    </div>
            </div>
            <img class="w-full object-center object-cover" src="{{Storage::url($article->image)}} " alt="">

            <div class="mt-5 text-zinc-400 text-xl">
                {{$article->body}}
            </div>
        </div>
    </div>
</x-app-layout>