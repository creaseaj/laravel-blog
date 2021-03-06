 @props(['posts','currentCategory'])
 <x-post-featured-card :post="$posts[0]"/>
    <div class="grid grid-cols-6">
        @foreach ($posts->skip(1) as $post)
            <x-post-card
                :post="$post"
                class="col-span-{{ $loop->iteration < 3 ? '3' : '2'}}"/>
        @endforeach
    </div>
