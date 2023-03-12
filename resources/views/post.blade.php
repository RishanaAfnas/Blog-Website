@extends('master')
@section('content')
    <nav class="navbar">
        <img src="{{ asset('images/logo.png') }}" class="logo" alt="">
        <ul class="links-container">
            <li class="link-item"><a href="/post" class="link">Blogs</a></li>
            <li class="link-item"><a href="/editor" class="link">editor</a></li>
            @if (Session::has('user'))
                <li class="nav-item dropdown drop user-name">
                    <a class="nav-link dropdown-toggle text-primary fw-bold" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false" style="text-transform: uppercase">
                        {{ Session::get('user')['name'] }}
                    </a>
                    <ul class="dropdown-menu ">
                        <li><a class="dropdown-item" href="/logout" style="font-size: 15px">Logout </a></li>
                        <li><a class="dropdown-item" href="{{ 'update/' . Session::get('user')['id'] }}"
                                style="font-size: 15px">Update </a></li>

                    </ul>
                </li>
            @endif
        </ul>
    </nav>
    <header class="blog mt-5">
        <h1>Our Blog</h1>
    </header>
    <div class="row">
        @foreach ($post as $item)
            <div class="left-column">
                <div class="card">
                    <h2>{{ $item['title'] }}</h2>

                    <img src="{{ Storage::url($item->image_path) }}" alt="blog " />

                    <p>{{ $item['description'] }}</p>
                </div>
            </div>

            <div class="right-column">
                <div class="card">
                    <img src="{{ Storage::url($item->image_path) }}" alt="popular" />

                </div>

            </div>
        @endforeach
    </div>

    <footer>
        <h6>&copy;2023</h6>
    </footer>
@endsection
