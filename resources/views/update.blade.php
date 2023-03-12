@extends('master')
@section('content')
    <div class="box">
        <div class="container">
            <div class="top">
                <header>Update</header>
            </div>
            <form action="\edituser" method="post">
                @csrf
                <div class="input-field">
                    <input type="hidden" class="input" name="id"value="{{ $data['id'] }} " required>
                </div>
                <div class="input-field">
                    <input type="text" class="input" placeholder="Username" name="name" value="{{ $data['name'] }}"
                        required>
                </div>
                <div class="input-field">
                    <input type="email" class="input" placeholder="Email" name="email"{{ $data['email'] }} required>
                </div>
                <div class="input-field">
                    <input type="Password" class="input" placeholder="Password" name="password" required>
                </div>
                <div class="input-field">
                    <input type="submit" class="submit" value="Update" id="">
                </div>
            </form>
        </div>
    </div>
@endsection
