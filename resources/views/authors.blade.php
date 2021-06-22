<x-layout>
    @foreach($authors as $author)
        <div class="bg-white shadow overflow-hidden sm:rounded-lg m-8">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    <a href="author/{{$author->username}}">{{$author->name}}</a>
                </h3>
                <p>Articles written: {{$author->posts->count()}}</p>
                <p>{{$author->authorDesc}}</p>

            </div>

        </div>

    @endforeach
</x-layout>
