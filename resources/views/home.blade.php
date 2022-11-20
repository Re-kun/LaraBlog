<x-main>
    {{-- jumbotron --}}
    <x-jumbotron></x-jumbotron>

    {{-- content --}}
    <x-content></x-content>

    {{-- feature --}}
    <x-feature></x-feature>

    {{-- post --}}
        <h2 class="pt-32 mt-40 pb-24  text-center text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Latest Post</h2>
        <div class="grid gap-2 xl:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 ">
            
            <div class="w-[95%] md:mx-auto sm:mx-36">
                <div class="max-w-sm mb-5 rounded-lg ">
                    <div>
                        <img class="object-cover h-48 rounded-lg w-96" src="{{ asset("image/kazuma2.png") }}" alt="">
                    </div>
                    <div class="p-5 mt-3 bg-white border border-gray-200 shadow-md">
                        <div class="grid grid-cols-4 gap-4 mb-2">
                            <div class="px-2 py-1 text-center rounded-md bg-slate-200 text-slate-500">Ikan</div>
                        </div>
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Noteworthy technology acquisitions 2021</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>

                    </div>
                </div>
            </div>

            <div class="w-[95%] md:mx-auto sm:mx-36">
                <div class="max-w-sm mb-5 rounded-lg ">
                    <div>
                        <img class="object-cover h-48 rounded-lg w-96" src="{{ asset("image/aqua.png") }}" alt="">
                    </div>
                    <div class="p-5 mt-3 bg-white border border-gray-200 shadow-md">
                        <div class="grid grid-cols-4 gap-4 mb-2">
                            <div class="px-2 py-1 text-center rounded-md bg-slate-200 text-slate-500">Ikan</div>
                        </div>
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Noteworthy technology acquisitions 2021</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>

                    </div>
                </div>
            </div>

            <div class="w-[95%] md:mx-auto sm:mx-36">
                <div class="max-w-sm mb-5 rounded-lg ">
                    <div>
                        <img class="object-cover h-48 rounded-lg w-96" src="{{ asset("image/megumin.png") }}" alt="">
                    </div>
                    <div class="p-5 mt-3 bg-white border border-gray-200 shadow-md">
                        <div class="grid grid-cols-4 gap-4 mb-2">
                            <div class="px-2 py-1 text-center rounded-md bg-slate-200 text-slate-500">Ikan</div>
                        </div>
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Noteworthy technology acquisitions 2021</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>

                    </div>
                </div>
            </div>
            
        </div>
    </div>
</x-main>