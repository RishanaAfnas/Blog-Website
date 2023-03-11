@extends('master')
@section('content')
<header>
    <h1>Our Blog</h1>
</header>
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