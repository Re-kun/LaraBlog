<x-main>
    <h1 class="pt-16 pb-24 text-4xl font-semibold text-center">Users</h1>
    <a href="{{ route("user.create") }}" class="p-2 ml-2 text-sm bg-white border border-gray-300 rounded-lg hover:bg-gray-100">+ Add User</a>
    
    <div class="grid gap-y-5 mt-7 xl:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 ">
        @foreach($users as $user)
        <div class="w-[95%] md:mx-auto sm:mx-36">
            <div class="max-w-sm mb-5 rounded-lg ">
                <div class="p-5 mt-3 bg-white border border-gray-200 shadow-md">

                    <div class="flex items-center justify-between">
                        <div>
                            <a href="{{ route("user.show", $user->username) }}">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $user->name }}</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700">{{ $user->username }}</p>
                        </div>
                       <img src="{{ asset("image/kazuma.png") }}" alt="" class="w-20 p-1 mt-5 rounded-full sm:block">
                    </div>

                    <div class="flex items-center">
                        <a href="{{ route("user.edit", $user->username) }}">
                            <img src="{{ asset("icon/edit.svg") }}" width="19" alt="">
                        </a>
                        <form method="POST" action="{{ route("user.destroy", $user->username) }}" class="mt-2">
                            @method("DELETE")
                            @csrf
                            <button type="submit">
                                <img src="{{ asset("icon/remove.svg") }}" width="25" alt="" class="ml-2">
                            </button>
                        </form>
                    </div>
                    <p class="px-4 py-1 text-sm text-center rounded-md bg-slate-200 text-slate-500">Admin</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</x-main>