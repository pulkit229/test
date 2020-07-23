@extends('layouts.app')

@section('content')
<div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">{{ __('Register') }}</h2>
                    <form method="POST" action="{{ route('register') }}" >
                            @csrf
                        <div class="input-group">
                              <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="NAME"  name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        </div>
                         <div class="input-group">
                                 <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"  placeholder="Email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>
                           <div class="input-group">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              
                        </div>
                          <div class="input-group">
                                <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                              
                        </div>

                        <div class="form_div form_space">
                            <div class="rts">
                                <div class="input-group">
                                    
                                       <input id="dob" type="date" class="form-control input--style-1 js-datepicker  @error('dob') is-invalid @enderror" placeholder="BIRTHDATE" name="dob" value="{{ old('dob') }}" required autocomplete="name" autofocus>
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                            <div class="rts">
                                <div class="input-group">
                                    <div class="rs-select2">
                                        <select name="gender" class="form-control">
                                            <option disabled="disabled" selected="selected">GENDER</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                            <option>Other</option>
                                        </select>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <div class="rs-select2 ">
                                <select name="class" class="form-control">
                                    <option disabled="disabled" class="form-control" selected="selected">CLASS</option>
                                    <option>Class 1</option>
                                    <option>Class 2</option>
                                    <option>Class 3</option>
                                </select>
                               
                            </div>
                        </div>
                        <div class="form_div form_space">
                            <div class="rts">
                                <div class="input-group">
                                    <input id="registration_code" class="input--style-1 form-control @error('registration_code') is-invalid @enderror" type="text" placeholder="REGISTRATION CODE" name="registration_code" required autocomplete="registration_code" autofocus>
                                     
                                </div>
                            </div>
                        </div>
                        <div class="p-t-20">
                          <button type="submit" class="btn btn-primary btn btn--radius btn_purple">
                                    {{ __('Register') }}
                                </button>
                        </div>
                        
  <a class="back_button" href='{{ url("/") }}'> Go back to Home</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
