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
<form action="\upload" method="post" enctype="multipart/form-data">
    @csrf
  
{{-- <div class="banner">
    <input type="file" accept="image/*" id="banner-upload" name="image" >
   <label for="banner-upload" class="banner-upload-btn"><img src="{{ asset ('images/upload.png')}}"alt="upload banner"></label>
</div> --}}

<div class="blog">
    <div class="input-field">
        <input type="hidden" class="input"  name="blogid" value=" {{ Session::get('user')['id'] }}" required>
        
    </div>
    <textarea type="text" class="title" placeholder="Blog title..." name="title"></textarea>
    <textarea type="text" class="article" placeholder="Start writing here..." name="description"></textarea>
</div>

<div class="blog-options">
    {{-- <button class="btn dark publish-btn">publish</button> --}}
    <input type="file" accept="image/*" id="image-upload"name="image"  >
    <button class="btn dark publish-btn">publish</button>
    {{-- <button type="submit"><label for="image-upload" class="btn grey upload-btn">Upload Image</label></button> --}}
</div>
</form>
@endsection