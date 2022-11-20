<x-main>
    <x-search_input></x-search_input>

    <div>
        <h1 class="pt-16 pb-24 text-4xl text-center">Latest Post</h1>
        <div class="grid gap-2 xl:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 ">
            
        @foreach($posts as $post)
            <div class="w-[95%] md:mx-auto sm:mx-36">
                <div class="max-w-sm mb-5 rounded-lg ">
                    <div>
                        <img class="object-cover h-48 rounded-lg w-96" src="{{ asset("image/megumin.png") }}" alt="">
                    </div>
                    <div class="p-5 mt-3 bg-white border border-gray-200 shadow-md">
                        <div class="grid grid-cols-4 gap-4 mb-2">
                            <p class="text-sm py-1 text-center rounded-md bg-slate-200 text-slate-500">{{ $post->category->name }}</p>
                        </div>
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $post->title }}</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700">{{ $post->created_at->diffForHumans() }}</p>

                    </div>
                </div>
            </div>
        @endforeach
        
        </div>
    </div>
</x-main>