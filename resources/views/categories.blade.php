<x-layout>
    @foreach($categories as $category)
        <div class="bg-white shadow overflow-hidden sm:rounded-lg m-8">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    <a href="category/{{$category->slug}}">{{$category->name}}</a></h3>
                <p>Articles written: {{$category->posts->count()}}</p>
            </div>

        </div>
    @endforeach
</x-layout>
