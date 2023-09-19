<x-layouts.app>


  <h1> Create new post</h1>

  <form action="{{ route('posts.store') }}" method="POST" >
    @csrf

    <label for="POST">

      Title <br>

      <input name="title" type="text">

    </label> <br>

    <label for="">

      Body <br>

      <textarea name="body">

      </textarea>

    </label> <br>

    <button type="submit">Enviar</button>
    <br>

  </form>
  <br>
  <a href="{{ route('posts.index') }}">Regresar</a>

</x-layouts.app>