
@extends('layout.main')
@push('title')
    <title>Register</title>    
@endpush
@section('main-section')

<div class="container item-align-center mt-5 ">
    <div class="row centered-form ">
    <div class="col-xs-12  col-sm-offset-2 col-md-offset-4 m-auto border shadow-lg rounded p-3 ">
        <div class="panel panel-default">
            <div class="panel-heading">
                    <h4 class="panel-title text-center mb-3">User Registration</h4>
                     </div>
                     <div class="panel-body">
                    <form action="{{url('/')}}/register" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">    <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="First Name" value={{old('first_name')}}>

                                </div>
                                <span class="text-danger">
                                    @error('first_name')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="last_name" id="last_name" class="form-control input-sm" placeholder="Last Name" value={{old('last_name')}}>
                                </div>
                                <span class="text-danger">
                                    @error('last_name')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address" value={{old('email')}}>
                            <span class="text-danger">
                                @error('email')
                                {{$message}}
                                @enderror
                            </span>
                        </div>

                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
                                </div>
                                <span class="text-danger">
                                    @error('password')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password">
                                </div>
                                <span class="text-danger ">
                                    @error('password_confirmation')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        
                        <input type="submit" value="Register" class="btn btn-info btn-block">
                        
                    </form>
    
                    <span>Already have account? </span> <a href="/login">Login</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

