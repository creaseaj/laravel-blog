<x-layout>
    <x-header/>
    @if ($posts->count())
   <x-posts-grid :posts='$posts'/>
   {{$posts->links()}}
    @else
    <p class="text-center">No Posts Yet!</p>
    @endif
</x-layout>

