<x-layouts.app>


   <h1>blog </h1>

   <a href="{{ route('posts.create') }}">Creat new post</a>

   @foreach ($posts as $post)
   <h2>

      <a href="{{ route('posts.show', $post) }}">

         {{ $post->title }}

      </a>

   </h2>
   @endforeach

</x-layouts.app>