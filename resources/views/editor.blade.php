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
    <form action="\upload" method="post" enctype="multipart/form-data">
        @csrf
        <div class="blog">
            <div class="input-field">
                <input type="hidden" class="input" name="blogid" value=" {{ Session::get('user')['id'] }}" required>
            </div>
            <textarea type="text" class="title " placeholder="Blog title..." name="title" required></textarea>
            <textarea type="text" class="article" placeholder="Start writing here..." name="description" required></textarea>
        </div>
        <div class="blog-options">
            <input type="file" accept="image/*" id="image-upload"name="image" required>
            <button class="btn dark publish-btn">publish</button>

        </div>
    </form>
@endsection
