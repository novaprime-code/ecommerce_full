@extends('front.layout.layout')


@section('content')
    <div class="span9">
        <ul class="breadcrumb">
            <li>
                <a href="{{ route('home')}}">Home</a><span class="divider">/</span>
            </li>
            <li class="active"></li>
        </ul>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

        <h3>Login</h3>
        <div class="well">
            <form action="{{route('loginCheck')}}" method="post" class="form-horizontal">
                @csrf
                <div class="control-group">
                    <label for="input_email" class="control-label">Email <sup class="text-danger">*</sup></label>
                    <div class="controls">
                        <input type="text" id="email" class="form-control" placeholder="Email" name='email'>
                    </div>
                </div>
                <div class="control-group">
                    <label for="input_password " class="control-label">Password <sup class="text-danger">*</sup></label>
                    <div class="controls">
                        <input type="password" id="input_password" class="form-control" placeholder="*********" name="password">
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <input type="submit" id="user_login" value="Login" class="btn btn-primary form-control">
                    </div>
                </div>
            </form>
        </div>
        <h3>Registrations</h3>
        <div class="well">
            <form action="{{ route('user_store')}}" class="form-horizontal" method="post">
            
                    @csrf
            
                <div class="control-group">
                    <label for="input_fname" class="control-label">First Name <sup class="text-danger">*</sup></label>
                    <div class="controls">
                        <input type="text" id="input_fname" class="form-control" name="first_name" placeholder="First Name" required>
                    </div>
                </div>
                <div class="control-group">
                    <label for="input_lname" class="control-label">Last Name <sup class="text-danger">*</sup></label>
                    <div class="controls">
                        <input type="text" id="input_lname" class="form-control" placeholder="Last Name" name="last_name" required>
                    </div>
                </div>
                <div class="control-group">
                    <label for="input_email" class="control-label">Email <sup class="text-danger">*</sup></label>
                    <div class="controls">
                        <input type="text" id="input_email_register" class="form-control" placeholder="Email" name="register_email" required>
                    </div>
                </div>

                <div class="control-group">
                    <label for="input_password " class="control-label">Password <sup class="text-danger">*</sup></label>
                    <div class="controls">
                        <input type="password" id="input_password_register" class="form-control" placeholder="*********" name="register_password" required>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <input type="submit" id="user_register" value="Register" name="user_register" class="btn btn-primary form-control">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection