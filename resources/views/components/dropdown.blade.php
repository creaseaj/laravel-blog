@props(['trigger'])
<div class="relative items-center lg:inline-flex bg-gray-100 rounded-xl">
    <div x-data="{ show:false}" >
        {{-- Trigger --}}
        <div @click="show = ! show" @click.away="show = false">

            {{$trigger}}
        </div>

        {{-- Dropdown links --}}
    <div x-show="show" class="absolute py-2 w-full bg-gray-100 rounded-xl mt-2 z-50 overflow-auto max-h-52" style="display:none">
        {{$slot}}

    </div>
</div>
</div>
