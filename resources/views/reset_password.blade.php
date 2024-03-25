@extends("layouts.master")
@section("title","ForgetPassword")
@section("content")
<div class="mask d-flex align-items-center h-100 gradient-custom-3" style="margin:100px">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Forget Password</h2>
              <form action="{{route('doresetPassword')}}" method="post">
                @csrf
            
                <input type="hidden" name="id" value="{{ $user->id}}"> 
                <div class="form-outline mb-4">
                    <input type="password"   name="password"  id="password" class="form-control form-control-lg"/>
                    <label class="form-label" for="password">Password</label>
                  </div>
  
                  <div class="form-outline mb-4">
                    <input type="password" name="confirmPassword" id="confirmPassword" class="form-control form-control-lg"   />
                    <label class="form-label" for="confirmPassword">Confirm password</label>
                  </div>
                <button type="submit" class="btn btn-primary btn-block mb-4">Submit</button>
            </form>
        </div>
    </div>
</div>
</div>
</div>
</div>
@endsection