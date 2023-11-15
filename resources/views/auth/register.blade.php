@extends('pages.layouts.master')
@section('content')
    <div class="d-flex justify-content-center align-items-center">
        <div class="col-md-6">
            @include('errors.messages')

            <!-- Pills content -->
            <div class="tab-content">

                <div class="tab-pane fade show active">
                    <form action="{{ route('register') }}" method="post">
                        @csrf
                        <!-- Name input -->
                        <div class="form-outline mb-4">
                            <input type="text" id="registerName" name="name" class="form-control" value="{{ old("name") }}" />
                            <label class="form-label" for="registerName">Full Name</label>
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror

                        </div>

                        <!-- Username input -->
                        <div class="form-outline mb-4">
                            <input type="text" id="registerUsername" name="username" class="form-control" value="{{ old("username") }}" />
                            <label class="form-label" for="registerUsername">Username</label> @error('username')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror

                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="email" id="registerEmail" name="email" class="form-control"  value="{{ old("email") }}" />
                            <label class="form-label" for="registerEmail">Email</label> @error('email')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror

                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input type="password" id="myInput" name="password" class="form-control" />
                            <label class="form-label" for="registerPassword">Password</label> @error('password')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror

                        </div>

                        <!-- Repeat Password input -->
                        <div class="form-outline mb-4">
                            <input type="password" id="myInput2" name="confirmPassword"
                                class="form-control" />
                            <label class="form-label" for="registerRepeatPassword">Repeat password</label>
                            @error('confirmPassword')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <br>
                            <input type="checkbox" onclick="myFunction()">Show Password
                        </div>

                        <!-- Checkbox -->
                        <div class="form-check d-flex justify-content-center mb-4">
                            <input class="form-check-input me-2" type="checkbox" value="" id="registerCheck" checked
                                aria-describedby="registerCheckHelpText" />
                            <label class="form-check-label" for="registerCheck">
                              By signing in you agree to our <a href="">Terms & Conditions</a>
                            </label>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block mb-3">Sign in</button>
                    </form>
                </div>
            </div>
            <!-- Pills content -->

        </div>
    </div>
    <script type="text/javascript"> 
        function myFunction() {
          var x = document.getElementById("myInput");
          if (x.type === "password") {
            x.type = "text";
          } else {
            x.type = "password";
          }
          var y = document.getElementById("myInput2");
  if (y.type === "password") {
    y.type = "text";
  } else {
    y.type = "password";
  }
        }
        </script>
@endsection
@section('name')
    <x-auth-card>
    @section('title', __('Register'))

    @include('errors.messages')

    <x-form action="{{ route('register') }}">
        <x-form.input type="text" :label="__('Name')" name="name">{{ old('name') }}</x-form.input>
        <x-form.input type="text" :label="__('Username')" name="username">{{ old('username') }}
        </x-form.input>
        <x-form.input type="email" :label="__('Email')" name="email">{{ old('email') }}</x-form.input>

        <x-form.input type="password" :label="__('Password')" name='password'></x-form.input>
        <x-form.input type="password" :label="__('Confirm Password')" name='confirmPassword'></x-form.input>
        <div class="flex items-center justify-end mt-4">
            <p><a href="{{ route('login') }}" class="pt-2 mr-5 underline">{{ __('Already registered?') }}</a></p>
            <x-form.submit>{{ __('Register') }}</x-form.submit>
        </div>
    </x-form>
</x-auth-card>
@endsection
