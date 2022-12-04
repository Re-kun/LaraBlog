<div class="my-2 ml-2">
    <button type="button" class="flex mr-3 text-sm bg-gray-800 rounded-full lg:mr-5 md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
      <span class="sr-only">Open user menu</span>
  @if(auth()->user()->image)
      <img src="{{ asset("image/re.png") }}" alt="" class="w-8 h-8 rounded-full">
  @else
      <img src="{{ asset("icon/profile.svg") }}" alt="" class="w-8 h-8  bg-white  rounded-full">
  @endif
    </button>
    <!-- Dropdown menu -->
    <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
      <div class="px-4 py-3">
        <span class="block text-sm text-gray-900 dark:text-white">{{ Auth::user()->name }}</span>
        <span class="block text-sm font-medium text-gray-500 truncate dark:text-gray-400">{{ Auth::user()->email }}</span>
      </div>
      <ul class="py-1" aria-labelledby="user-menu-button">
        <li>
          <a href="/profile" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Profile</a>
        </li>
        
        <li>
          <form action="/logout" method="POST">
            @csrf
            <button type="submit" href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Logout</button>
          </form>
        </li>
      </ul>
    </div>
</div>