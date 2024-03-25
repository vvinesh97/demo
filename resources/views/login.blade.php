@extends("layouts.master")
@section("title","Login")
@section("content")
<div class="mask d-flex align-items-center h-100 gradient-custom-3" style="margin:100px">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Login</h2>
              @if(session()->has("message"))
              <p>{{session()->get("message")}}</p>
              @endif
              <form action="{{route('dologin')}}" method="post">
                @csrf
                <div class="form-outline mb-4">
                    <label class="form-label"   for="email">Email address</label>
                    <input type="email"  id="email" class="form-control @error('email') is-invalid @enderror" name="email" />
                    @error('email')
                    <span class="text-danger">{{ $message }}</span>
                     @enderror
                </div>
                <div class="form-outline mb-4">
                    <label class="form-label"  for="password">Password</label>
                    <input type="password"  id="password" class="form-control  @error('password') is-invalid @enderror" name="password"  />
                    @error('password')
                    <span class="text-danger">{{ $message }}</span>
                     @enderror
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <a href="{{ route('forgetPassword') }}">Forgot password?</a>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>
                <div class="text-center">
                    <p>Don't have an account ? <a href="{{ route('register') }}">Register</a></p>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
</div>
@endsection