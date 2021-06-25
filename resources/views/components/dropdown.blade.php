@props(['trigger'])
<div class="relative items-center lg:inline-flex bg-gray-100 rounded-xl">
    <div  >
        {{-- Trigger --}}

            <button
            class="py-2 pl-3 pr-9 text-sm font-semibold  lg:w-32 text-left flex lg:inline-flex ">
            Categories

        </button>


        {{-- Dropdown links --}}
    <div class="absolute py-2 w-full bg-gray-100 rounded-xl mt-2 z-50 overflow-auto max-h-52" style="display:none">
        {{$slot}}
        <div>Item 1</div>
        <div>Item 2</div>

    </div>
</div>
</div>
