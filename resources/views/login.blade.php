@extends('master')
@section('content')
    <div class="box">
        <div class="container">

            <div class="top">
                <span>Have an account? &nbsp; &nbsp; <a href="/register"
                        style="text-decoration:none;color:#fff"><b>Register</b></a></span>
                <header>Login</header>
            </div>
            <form action="login" method="post">
            @csrf
                <div class="input-field">
                    <input type="text" class="input" placeholder="Username" name="name" required>
                    
                </div>
                <div class="input-field">
                    <input type="email" class="input" placeholder="Email" name="email" required>
                   
                </div>

                <div class="input-field">
                    <input type="Password" class="input" placeholder="Password" name="password" required>
                    
                </div>

                <div class="input-field">
                    <input type="submit" class="submit" value="Login" id="">
                </div>


            </form>
        </div>
    </div>
@endsection 
