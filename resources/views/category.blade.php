<x-main>
    <h1 class="pt-16 pb-24 text-4xl text-center font-semibold">Categories</h1>
    <a href="/post/create" class="bg-white border border-gray-300 hover:bg-gray-100 text-sm ml-2 p-2  rounded-lg">+ Add Category</a>
    <div class="grid grid-cols-3 mt-7 gap-y-5 ">
        @foreach($categories as $category)
        <div class="w-[95%] md:mx-auto sm:mx-36">
            <div class="max-w-sm mb-5 rounded-lg ">
                <div>
                    <img class="object-cover h-48 rounded-lg w-96" src="{{ asset("image/megumin.png") }}" alt="">
                </div>
                <div class="p-5 mt-3 bg-white border border-gray-200 shadow-md">
                    <div class="grid grid-cols-4 gap-4 mb-2">
                        <p class="text-sm py-1 text-center rounded-md bg-slate-200 text-slate-500">{{ $category->post->count() }} Posts</p>
                    </div>
                    <a href="{{ route("category.show", $category->slug) }}">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $category->name }}</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700">ini adalah sebuah category</p>
                    <div class="flex items-center">
                        <a >
                            <img src="{{ asset("icon/edit.svg") }}" width="19" alt="">
                        </a>
                        <form method="POST" class="mt-2">
                            @method("DELETE")
                            @csrf
                            <button type="submit">
                                <img src="{{ asset("icon/remove.svg") }}" width="25" alt="" class="ml-2">
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</x-main>