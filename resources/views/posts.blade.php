<x-layout :categories='$categories' :currentCategory='$currentCategory'>
    <x-header :categories='$categories' :currentCategory='$currentCategory'/>
    @if ($posts->count())
   <x-posts-grid :posts='$posts'/>
    @else
    <p class="text-center">No Posts Yet!</p>
    @endif
</x-layout>

