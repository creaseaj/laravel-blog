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
    </x-dropdown>    <!-- I begin to speak only when I am certain what I will say is not better left unsaid - Cato the Younger -->

