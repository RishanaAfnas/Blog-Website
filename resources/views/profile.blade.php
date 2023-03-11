@extends('master')
@section('content')
<nav class="navbar">
    <img src="{{asset ("images/logo.png")}}" class="logo" alt="">
    <ul class="links-container">
        <li class="link-item"><a href="/" class="link">home</a></li>
        <li class="link-item"><a href="/editor" class="link">editor</a></li>
        @if (Session::has('user'))
        <li class="nav-item dropdown drop user-name">
            <a class="nav-link dropdown-toggle text-primary fw-bold" href="#" role="button"
                data-bs-toggle="dropdown" aria-expanded="false" style="text-transform: uppercase">
                {{ Session::get('user')['name'] }}
            </a>
            <ul class="dropdown-menu ">
                <li><a class="dropdown-item" href="/logout" style="font-size: 15px">Logout </a></li>

            </ul>
        </li>
        @endif
    </ul>
</nav>

<header class="header">
    <div class="content">
        <h1 class="heading">
            <span class="small">welcome in the world of</span>
           
            <span class="no-fill">writing</span>
        </h1>
        <a href="/editor" class="btn">write a blog</a>
    </div>
</header>


@endsection