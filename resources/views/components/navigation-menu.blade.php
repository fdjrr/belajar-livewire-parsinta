<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">{{ config('app.name') }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <x-nav-link :active="Route::is('home')" href="{{ route('home') }}">Home</x-nav-link>
                <x-nav-link :active="Route::is('about')" href="{{ route('about') }}">About</x-nav-link>
                <x-nav-link :active="Route::is('contact')" href="{{ route('contact') }}">Contact</x-nav-link>
                <x-nav-link :active="Route::is('timeline')" href="{{ route('timeline') }}">Timeline</x-nav-link>
                {{-- <x-nav-link :active="Route::is('posts.*')" href="{{ route('posts.index') }}">Posts</x-nav-link> --}}
                <x-nav-link :active="Route::is('users.*')" href="{{ route('users.index') }}">Users</x-nav-link>
            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                @auth
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary">Logout</button>
                </form>
                @else
                <x-nav-link href="{{ route('login') }}">Login</x-nav-link>
                @endauth
            </ul>
        </div>
    </div>
</nav>
