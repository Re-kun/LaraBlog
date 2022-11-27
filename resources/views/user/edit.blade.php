<x-main>
    <div class="px-2 mt-20 sm:px-20 sm:px-40">
        <h1 class="pb-10 text-3xl font-semibold text-center">Edit User</h1>
        <form class="w-full" enctype="multipart/form-data" action="{{ route("user.update", $user->username) }}" method="POST">
            @method("PUT")
            @csrf
            <div class="mb-6">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">name</label>
                <input type="name" value=" {{ old("name") ?? $user->name }}" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="name">
                @error("name")
                     <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">username</label>
                <input type="username" value=" {{ old("username") ?? $user->username }}" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="username">
                @error("username")
                     <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </form>                             
    
    </div>
</x-main>