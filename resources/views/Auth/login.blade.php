@extends('Front.layouts.master')

@section('styles')
<style>
 
 
    div .clogin{
        background-color: rgb(241, 69, 7);
        color: aliceblue;
        text-decoration-style: dashed

    }
   .clogin :hover{
  
        position: relative;
        top: 4px;
        left: 4px;
   }
   .clogin {
  background: rgb(241, 69, 7);
  background: linear-gradient(0deg, rgb(241, 69, 7); 0%,  rgb(241, 69, 7); 100%);
  border: none;
}
.clogin:hover {
   background: rgb(241, 69, 7);;
background: linear-gradient(0deg,  rgb(241, 69, 7); 0%, rgba(2,126,251,1) 100%);
}



</style>
@endsection

@section('content')
<div class="container my-5">

    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="row justify-content-between my-5">
                <div class="col-md-4">
                   <div class="card  text-center  @if(URL('admin/login')== URL::current()) clogin @endif ">
                
                
                    <i class="fa fa-user-circle" aria-hidden="true"></i>
                   
                
                    <h3>
                        <a href="{{URL('admin/login')}}">
                        admin
                    </a>
                    </h3>
                   </div>
                </div>
                <div class="col-md-4 ">
                    <div class="card text-center  @if(URL('formateur/login') == URL::current()) clogin @endif">
                     <i class="fa fa-user-circle" aria-hidden="true"></i>
                     <h3> <a href=" {{URL('formateur/login')}} ">
                         formateur
                         </a>
                     </h3>
                    </div>
                 </div>

                 <div class="col-md-4">
                    <div class="card text-center  @if(URL('stagaire/login') == URL::current()) clogin @endif">
                     <i class="fa fa-user-circle" aria-hidden="true"></i>
                     <h3> <a href=" {{URL('stagaire/login')}} ">
                         stagaire
                         </a>
                     </h3>
                    </div>
                 </div>
            </div>

        </div>
    </div>    
  
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection