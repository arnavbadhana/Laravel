@extends('layout.layout')

{{-- Heading Section --}}
@section('heading')
Add New User
@endsection

{{-- Body Content --}}
@section('body')
<div class="container">
    <div class="row">
        <div class="col">
            <form action="{{ route('user.store') }}" class="shadow-lg p-3" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-2">
                    <label for="exampleInputName1" class="form-label">Full Name</label>
                    <input type="text" 
                    class="form-control @error('fullName') is-invalid @enderror" 
                    id="exampleInputName1"
                    value="{{ old('fullName') }}" 
                    name="fullName">
                    <div class="invalid-feedback">@error('fullName') {{ $message }} @enderror</div>
                  </div>
                <div class="mb-2">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="text" 
                  class="form-control @error('email') is-invalid @enderror" 
                  id="exampleInputEmail1" 
                  aria-describedby="emailHelp" 
                  value="{{ old('email') }}" 
                  name="email">
                  <div class="invalid-feedback">@error('email') {{ $message }} @enderror</div>
                </div>
                <div class="mb-2">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" 
                  class="form-control @error('password') is-invalid @enderror" 
                  id="exampleInputPassword1"
                  name="password">
                  <div class="invalid-feedback">@error('password') {{ $message }} @enderror</div>
                </div>
                <div class="mb-2">
                    <label for="exampleConfirmPassword1" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="exampleConfirmPassword1" name="password_confirmation">
                    <div class="invalid-feedback">@error('password_confirmation') {{ $message }} @enderror</div>
                </div>
                <div class="mb-2">
                    <label for="exampleInputAddress1" class="form-label">Address</label>
                    <input type="text" 
                    class="form-control @error('address') is-invalid @enderror" id="exampleInputAddress1" 
                    value="{{ old('address') }}"
                    name="address">
                    <div class="invalid-feedback">@error('address') {{ $message }} @enderror</div>
                </div>
                <div class="mb-2">
                    <label for="exampleImage1" class="form-label">Image</label>
                    <input type="file" 
                    class="form-control @error('image') is-invalid @enderror" 
                    id="exampleImage1" accept=".png, .jpg, .jpeg" 
                    value="{{ old('image') }}"
                    name="image">
                    <div class="invalid-feedback">@error('image') {{ $message }} @enderror</div>
                </div>
                {{-- <div class="mb-2 form-check">
                  <input type="checkbox" 
                  class="form-check-input @error('tc') is-invalid @enderror" 
                  id="exampleCheck1" 
                  value="{{ old('tc') }}"
                  name="tc">
                  <label class="form-check-label" for="exampleCheck1">I accept Terms & Conditions</label>
                  <div class="invalid-feedback">@error('tc') {{ $message }} @enderror</div>
                </div> --}}
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                </div>
              </form>
        </div>
    </div>
</div>
@endsection

@section('script')
@if(Session::has('message'))
<script>

toastr.options = {
    "closeButton": true,
    "debug": false,
    "newestOnTop": false,
    "progressBar": true,
    "positionClass": "toast-top-left",
    "preventDuplicates": true,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
  }

  toastr["success"]("{{session('message')}}")

</script>
@endif
@endsection