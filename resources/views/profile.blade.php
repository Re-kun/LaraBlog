<x-main>
    <div class="flex flex-col items-center mt-20">
        <img src="{{ asset("image/kazuma.png") }}" alt="" class="rounded-full">
        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{ Auth::user()->name }}</h5>
        <span class="text-sm text-gray-500 dark:text-gray-400">{{ Auth::user()->email }}</span>
        <div class="flex justify-center w-full mt-10 px-20">
            <div class="px-7 py-5 text-center">
                <h1 class="font-semibold text-2xl">{{ Auth::user()->posts->count() }}</h1>
                <p class="text-sm text-gray-500">Post</p>
            </div>
            <div class="px-7 py-5 text-center">
                <h1 class="font-semibold text-2xl">0</h1>
                <p class="text-sm text-gray-500">Follower</p>
            </div>       
            <div class="px-4 py-5 text-center">
                <h1 class="font-semibold text-2xl">0</h1>
                <p class="text-sm text-gray-500">Followed</p>
            </div>
        </div>
        <a href="#" class="px-28 sm:px-32 ml-5 md:ml-3 md:px-28 py-2 mr-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 ">Follow</a>
    </div>

    <div>
        <div class="pt-20 text-4xl border-b border-gray-200 pb-4 mb-16"></div>
        <div class="flex justify-between w-full items-center">
            <a href="/post/create" class="bg-white border border-gray-300 hover:bg-gray-100 text-sm ml-2 p-2 rounded-lg">+ Add Post</a>
            <a href="/category" class="mr-2"> 
                <img src="{{ asset("icon/category.svg") }}" width="20" alt="">
            </a>
        </div>
        <div class="grid mt-8 gap-2 xl:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 ">
            @foreach(Auth::user()->posts as $post)
                <div class="w-[95%] md:mx-auto sm:mx-36">
                    <div class="max-w-sm mb-5 rounded-lg ">
                        <div>
                            <img class="object-cover h-48 rounded-lg w-96" src="{{ asset("image/megumin.png") }}" alt="">
                        </div>
                        <div class="p-5 mt-3 bg-white border border-gray-200 shadow-md">
                            <div class="grid grid-cols-4 gap-4 mb-2">
                                <a href="" class="text-sm py-1 text-center rounded-md bg-slate-200 text-slate-500">{{ $post->category->name }}</a>
                            </div>
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $post->title }}</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700">{{ $post->created_at->diffForHumans() }}</p>
                            <div class="flex items-center">
                                <a href="{{ route("post.edit", $post->slug) }}">
                                    <img src="{{ asset("icon/edit.svg") }}" width="19" alt="">
                                </a>
                                <form action="{{ route("post.destroy", $post->slug) }}" method="POST" class="mt-2">
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
    </div>
</x-main> 