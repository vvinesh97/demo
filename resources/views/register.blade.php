@extends("layouts.master")
@section("title","Register")
@section("content")
<div class="mask d-flex align-items-center h-100 gradient-custom-3" style="margin:100px">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>
              @if(session()->has("message"))
              <p>{{session()->get("message")}}</p>
              @endif
              <form id="registrationForm" action="{{route('save.user')}}" method="post">
                @csrf
                <div class="form-outline mb-4">
                  <label  class="form-label" for="first_name">First Name</label>
                  <input type="text"  name="first_name"  id="first_name" class="form-control form-control-lg @error('first_name') is-invalid @enderror"  />
                  @error('first_name')
                  <span class="text-danger">{{ $message }}</span>
                   @enderror
                </div>
                <div class="form-outline mb-4">
                  <label  class="form-label" for="last_name">Last Name</label>
                    <input type="text"  name="last_name" id="last_name" class="form-control form-control-lg @error('last_name') is-invalid @enderror"   />
                    @error('last_name')
                    <span class="text-danger">{{ $message }}</span>
                     @enderror
                  </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="email">Email</label>
                  <input type="email" name="email" id="email" class="form-control form-control-lg @error('email') is-invalid @enderror" />
                  @error('email')
                  <span class="text-danger">{{ $message }}</span>
                   @enderror
                </div>
                <div class="form-outline mb-4">
                  <label class="form-label" for="phone_number">Phone Number</label>
                    <input type="tel"  name="phone_number" id="phone_number"  class="form-control form-control-lg @error('phone_number') is-invalid @enderror" />
                    @error('phone_number')
                    <span class="text-danger">{{ $message }}</span>
                     @enderror
                  </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="password">Password</label>
                  <input type="password"   name="password"  id="password"class="form-control form-control-lg @error('password') is-invalid @enderror"   />
                  @error('password')
                  <span class="text-danger">{{ $message }}</span>
                   @enderror
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="confirmPassword">Confirm password</label>
                  <input type="password" name="confirmPassword" id="confirmPassword" class="form-control form-control-lg  @error('confirmPassword') is-invalid @enderror"    />
                  @error('confirmPassword')
                  <span class="text-danger">{{ $message }}</span>
                   @enderror
                </div>
                <div class="d-flex justify-content-center">
                  <button type="submit"
                  class="btn btn-primary btn-block mb-4">Register</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="{{ route('login') }}"
                    class="fw-bold text-body"><u>Login here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection