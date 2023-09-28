<x-layouts.app>


    <h1> Create new post</h1>


    <form action="{{ route('posts.store') }}" method="POST">
        @csrf

        @include('posts.form-fields')

        <button type="submit">Enviar</button>
        <br>

    </form>
    <br>

    <a href="{{ route('posts.index') }}">Regresar</a>

</x-layouts.app>
