<x-layouts.app>

    <h1 class="my-4 font-serif text-3xl text-center text-sky-600 dark:text-sky-500">Inicio</h1>
    @auth
        <div class="text-white">Authenticated User: {{ Auth::user()->name}}</div>
    @endauth


</x-layouts.app>
