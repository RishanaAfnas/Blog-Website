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
              <li><a class="dropdown-item" href="{{"update/" .Session::get('user')['id'] }}" style="font-size: 15px">Update </a></li>

          </ul>
      </li>
      @endif
  </ul>
</nav>
<header class="blog mt-5" >
    <h1>Our Blog</h1>
</header >
<div class="row">
    @foreach($post as $item)
    <div class="left-column">
      <div class="card">
        <h2>{{$item['title']}}</h2>
       
        <img src="{{asset ("images/blog1.jpg")}}" alt="blog "/>
       
        <p>{{$item['description']}}</p>
      </div>
      
    </div>
    

    <div class="right-column">
        {{-- <div class="card">
             <h2>About Me</h2>
             <img src="img/about-me.jpg" alt="me"/>
             <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
        </div> --}}
        <div class="card">
             <h3>Popular Post</h3>
             <img src="{{asset ("images/blog3.jpg")}}" alt="popular"/>
             <img src="{{asset ("images/blog4.jpg")}}" alt="popular"/>
             <img src="{{asset ("images/blog2.jpg")}}" alt="popular"/>
        </div>
        <div class="card">
            <h3>Follow Me</h3>
            
        </div>
    </div>
   @endforeach
</div>

<footer>
   <h2>Footer</h2>
</footer>

@endsection