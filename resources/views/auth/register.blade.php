@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <style>
                    #bgcop{
                        background-color: lightgray;
                    }
                </style>
                <div class="card-body" id="bgcop">
                    <div class="card-header" style="text-align: center">
                            <h4>{{ __('Register') }}</h4>
                    </div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row mt-2">


                            <div class="col-md-6 col-sm-7" style="margin: 0 auto">
                                <label for="name" class=" text-md-right">{{ __('Name') }}</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">


                            <div  class="col-md-6 col-sm-7" style="margin: 0 auto">
                                <label for="email" class=" text-md-right">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row" >


                            <div class="col-md-6 col-sm-7" style="margin: 0 auto">
                                <label for="password" class=" text-md-right">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">


                            <div class="col-md-6 col-sm-7" style="margin: 0 auto">
                                <label for="password-confirm" class=" text-md-right">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="form-group row">


                            <div class="col-md-6 col-sm-7" style="margin: 0 auto">
                               <div class="form-group">
                                 {{-- <label for="role">User Role</label> --}}
                                 <select class="form-control" name="role" id="role">
                                   {{-- <option disabled>Choose Role</option>
                                   <option value="1" disabled>Administrator</option> --}}
                                   <option value="2">User</option>
                                 </select>
                                 @error('role')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                             @enderror
                               </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-3">
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
@endsection
