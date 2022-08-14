@extends('Front.layouts.master')

@section('content')

<section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" style="background-image: url({{asset('front/images/bg_5.jpg')}});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
       
        <div class="container my-5">
            <div class="row justify-content-end">
                <div class="col-md-8  py-5 px-md-5">
                    <div class="py-md-5">
                        <div class="heading-section heading-section-white ftco-animate mb-5">
                          <h2 class="mb-4">Request A Quote</h2>
                          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        </div>
                    <div class="heading-section heading-section-white ftco-animate mb-5">
                      
        
                        <div class="card-body">
                            <form method="POST" action="{{ route('register') }}" class="appointment-form ftco-animate">
                                @csrf
        
                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end text-white">{{ __('Name') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus >
        
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="row mb-3">
                                    <label for="email" class="col-md-4 col-form-label text-md-end text-white">{{ __('Email Address') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
        
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="row mb-3"> 
                                    <label for="password" class="col-md-4 col-form-label text-md-end text-white">{{ __('Password') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
        
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="row mb-3">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-end text-white">{{ __('Confirm Password') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>
        
                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection