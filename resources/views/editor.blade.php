@extends('master')
@section('content')
<form action="\upload" method="post" enctype="multipart/form-data">
    @csrf
  
{{-- <div class="banner">
    <input type="file" accept="image/*" id="banner-upload" name="image" >
   <label for="banner-upload" class="banner-upload-btn"><img src="{{ asset ('images/upload.png')}}"alt="upload banner"></label>
</div> --}}

<div class="blog">
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