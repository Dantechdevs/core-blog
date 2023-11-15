@extends("pages.layouts.master")

@section('content')
<div class="d-flex justify-content-center align-items-center">
    <div class="col-md-6">
        @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif
<div class="tab-content">
<div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
    <form action="{{ route('login') }} " method="post">
     @csrf
      <!-- Email input -->
      <div class="form-outline mb-4">
        <input type="email" name="email" class="form-control" value="{{ old("email") }}" />
        <label class="form-label" for="loginName">Email </label>
        @error('email')
            <p class="text-danger">{{ $message }}</p>
        @enderror
      </div>

      <!-- Password input -->
      <div class="form-outline mb-4" >
        
        <input type="password" name="password" class="form-control" id="myInput" />
        <label class="form-label" for="loginPassword">Password</label> br
        <input type="checkbox" onclick="myFunction()">Show Password
        @error('password')
            <p class="text-danger">{{ $message }}</p>
        @enderror
      </div>

      <!-- 2 column grid layout -->
      <div class="row mb-4">
        <div class="col-md-6 d-flex justify-content-center">
          <!-- Checkbox -->
          <div class="form-check mb-3 mb-md-0">
            <input class="form-check-input" type="checkbox" value="" id="loginCheck" checked />
            <label class="form-check-label" for="loginCheck"> Remember Me</label>
          </div>
        </div>

        <div class="col-md-6 d-flex justify-content-center">
          <!-- Simple link -->
          <a href="#!">Forgot password?</a>
        </div>
      </div>

      <!-- Submit button -->
      <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

      <!-- Register buttons -->
      <div class="text-center">
        <p>Not a member? <a href="{{ route("register") }}">Register</a></p>
      </div>
    </form>
  </div>
</div>
</div>
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
}
</script>
@endsection