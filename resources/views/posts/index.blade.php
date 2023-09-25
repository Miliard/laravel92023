<x-layouts.app>


    <h1> blog </h1>

    <a href="{{ route('posts.create') }}">Creat new post</a>

    @foreach ($posts as $post)

   <div style="display: flex; align-items: baseline">

    <h2>

        <a href="{{ route('posts.show', $post) }}">

            {{ $post->title }}

        </a>

    </h2>&nbsp;

    <a href="{{ route('posts.edit', $post)}}">Edit</a>

   </div>

    @endforeach

</x-layouts.app>
