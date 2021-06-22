<div class="rounded overflow-hidden shadow-lg content-center m-8
@if($type == 'featured')
    grid grid-cols-3
@endif
">

    <div>
        <img class="w-full" src="/images/burrito.jpg" alt="Burrito">
    </div>
    <div class="px-6 py-4 col-span-2">
        <div class="font-bold text-xl mb-2">
            @if($type=='body')
                {!! $post->title !!}
                @else
                    <a class ="hover:underline" href="posts/{{ $post->slug }}">
                        {!! $post->title !!}
                    </a>

                @endif
            </div>
        <p class="mt-1 max-w-2xl text-sm text-gray-500">
            A post by <a class="font-bold hover:text-gray-800 hover:underline" href="/author/{{$post->author->username}}">{{ $post->author->name }}</a> in
            <a class="font-bold hover:text-gray-800 hover:underline" href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</a>
        </p>
        <p class="text-gray-700 text-base">
        @if($type!='body')
            <p>
                {!!  $post->excerpt !!}
            </p>
            @endif        </p>
    </div>

    @if($type=='body')
        <div class="border-t border-gray-200">
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                {!! $post->body !!}
            </div>
        </div>

    @endif
</div>



