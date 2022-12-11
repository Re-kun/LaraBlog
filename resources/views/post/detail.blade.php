<x-main>
    <section>
        @if($post->image)
        <img src="{{ asset("storage/$post->image ")}}" alt="image" loading="lazy" class="w-[40rem] h-72 object-cover my-7 rounded-xl">
        @else
        <img src="{{ asset("image/1.png")}}" alt="image" loading="lazy" class="w-[40rem] h-72 object-cover my-7 rounded-xl mx-auto">
        @endif
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-4xl mt-14">{{ $post->title }}</h1>
                <p class="text-slate-600">{{ $post->created_at->diffForHumans() }}</p>
            </div>
            <div class="mt-20">
                <a href="/blog"> <- Back</a>
            </div>
        </div>
        
        <div class="mt-7">
            <p>{{ $post->body }}</p>
        </div>

    </section>
</x-main>