<x-layouts.app>


    <h1> Edit Form</h1>

    <form action="{{ route('posts.update', $post) }}" method="POST">
        @csrf

        <label for="POST">

            Title <br>

            <input name="title" type="text" value="{{old('title', $post->title)}}">

            @error('title')

                <br>
                <small style="color: red"> {{ $message }}</small>
            @enderror

        </label> <br>

        <label for="">

            Body <br>

            <textarea name="body" >{{old('body', $post->body)}}</textarea>

            @error('body')

                <br>
                <small style="color: red"> {{ $message }}</small>
            @enderror

        </label> <br>

        <button type="submit">Enviar</button>
        <br>

    </form>
    <br>

    <a href="{{ route('posts.index') }}">Regresar</a>

    </x-layouts.app>
