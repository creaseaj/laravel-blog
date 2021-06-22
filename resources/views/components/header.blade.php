<header class="max-w-xl mx-auto mt-20 text-center mb-10">
    <h1 class="text-4xl">
        Latest <span class="text-blue-500">Laravel From Scratch</span> News
    </h1>



    <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-8">
        <!--  Category -->
            <x-dropdown>
                <x-slot name="trigger">
                    <button
                        class="py-2 pl-3 pr-9 text-sm font-semibold  lg:w-32 text-left flex lg:inline-flex ">
                        {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories'}}
                        <x-down-arrow class="absolute pointer-events-none"/>
                    </button>
                </x-slot>
                <a href="/" class="
                    block text-left px-3 text-sm leading-6
                    hover:bg-blue-500 focus:bg-blue-500 hover:text-white
                    {{ isset($currentCategory) ? '' : 'bg-blue-500 text-white' }}" >All</a>
                @foreach ($categories as $item)
                    <a href="/?category={{$item->slug}}" class="
                        block text-left px-3 text-sm leading-6
                        hover:bg-blue-500 focus:bg-blue-500 hover:text-white
                        {{ isset($currentCategory) && $currentCategory->is($item) ? 'bg-blue-500 text-white' : ''}}
                        " >{{ucwords($item->name)}}</a>
                @endforeach
            </x-dropdown>

            <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
                <form method="GET" action="#">
                    <input type="text" name="search" placeholder="Find something"
                        value="{{request('search')}}"
                           class="bg-transparent placeholder-black font-semibold text-sm">
                </form>
            </div>
    </div>

</header>
