
@extends('layout.main')
@push('title')
    <title>Login</title>    
@endpush
@section('main-section')

<div class="container  item-align-center mt-5  " >
    <div class="row centered-form  ">
    <div class="col-xs-12 col-sm-offset-2 col-md-offset-4 m-auto  border shadow-lg rounded p-3">
        <div class="panel panel-default ">
            <div class="panel-heading">
                    <h4 class="panel-title text-center mb-3">User Login</h4>
                     </div>
                     <div class="panel-body">
                    <form action="{{url('/')}}/directory" method="POST">
                        @csrf
    
                        @if(Session::has('fail'))
                          <div class="alert alert-danger">{{Session::get('fail')}}</div>
                        @endif
                      <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address" value={{old('email')}}>
                            <span class="text-danger">
                                @error('email')
                                {{$message}}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" id="email" class="form-control input-sm" placeholder="password" >
                            <span class="text-danger">
                                @error('password')
                                {{$message}}
                                @enderror
                            </span>
                        </div>

                       
                        
                        <input type="submit" value="Login" class="btn btn-info btn-block">

                        <span>Do not have account? </span><a href="/register">Register</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

