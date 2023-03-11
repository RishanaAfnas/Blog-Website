@extends('master')
@section('content')
<div class="box">
    <div class="container">

        <div class="top">
            <span>Have an account?  &nbsp; &nbsp; <a href="/login" style="text-decoration:none;color:#fff"><b>login</b></a></span> 
            <header>Register</header>
        </div>
  <form action="register" method="post">
    @csrf
        <div class="input-field">
            
            <input type="text" class="input" placeholder="Username"  name="name" required >
            <i class='bx bx-user' ></i>
        </div>
        <div class="input-field">
            <input type="email" class="input" placeholder="Email" name="email" required >
            <i class='bx bx-envelope' ></i>
        </div>

        <div class="input-field">
            <input type="Password" class="input" placeholder="Password" name="password" required >
            <i class='bx bx-lock-alt'></i>
        </div>

        <div class="input-field">
            <input type="submit" class="submit" value="Register" id="">
        </div>

     
    </form>
    </div>
</div>  
@endsection
