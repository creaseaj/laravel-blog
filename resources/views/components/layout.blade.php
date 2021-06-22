@props(['currentCategory','categories'])
<!doctype html>

<title>Laravel From Scratch Blog</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
<body style="font-family: Open Sans, sans-serif">
    <section class="px-6 py-8">
        <nav class="md:flex md:justify-between md:items-center">
            <div>
                <a href="/">
                    <img src="/images/logo.svg" alt="Laracasts Logo" width="165" height="16">
                </a>
            </div>

            <div class="mt-8 md:mt-0">
                <a href="/" class="text-xs font-bold uppercase">Home Page</a>

                <a href="#" class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
                    Subscribe for Updates
                </a>
            </div>
        </nav>

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
                            {{ request()->routeIs('home') ? 'bg-blue-500 text-white' : ''}}" >All</a>
                        @foreach ($categories as $item)
                            <a href="/category/{{$item->slug}}" class="
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

        {{$slot}}

        <footer class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16">
            <img src="/images/lary-newsletter-icon.svg" alt="" class="mx-auto -mb-6" style="width: 145px;">
            <h5 class="text-3xl">Stay in touch with the latest posts</h5>
            <p class="text-sm mt-3">Promise to keep the inbox clean. No bugs.</p>

            <div class="mt-10">
                <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">

                    <form method="POST" action="#" class="lg:flex text-sm">
                        <div class="lg:py-3 lg:px-5 flex items-center">
                            <label for="email" class="hidden lg:inline-block">
                                <img src="/images/mailbox-icon.svg" alt="mailbox letter">
                            </label>

                            <input id="email" type="text" placeholder="Your email address"
                                   class="lg:bg-transparent py-2 lg:py-0 pl-4 focus-within:outline-none">
                        </div>

                        <button type="submit"
                                class="transition-colors duration-300 bg-blue-500 hover:bg-blue-600 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8"
                        >
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
        </footer>
    </section>
</body>
