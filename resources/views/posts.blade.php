<x-layout>
    @if ($posts->count())
   <x-posts-grid :posts='$posts'/>
    @else
    <p class="text-center">No Posts Yet!</p> 
    @endif

</x-layout>

