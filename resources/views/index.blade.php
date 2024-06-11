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
            <form class="shadow-lg p-3">
                <div class="mb-3">
                    <label for="exampleInputName1" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="exampleInputName1">
                    <div class="form-text"></div>
                  </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <div class="form-text"></div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleConfirmPassword1" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="exampleConfirmPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputAddress1" class="form-label">Address</label>
                    <input type="text" class="form-control" id="exampleInputAddress1">
                </div>
                <div class="mb-3">
                    <label for="exampleImage1" class="form-label">Image</label>
                    <input type="file" class="form-control" id="exampleImage1" accept=".png, .jpg, .jpeg">
                </div>
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">I accept Terms & Conditions</label>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                </div>
              </form>
        </div>
    </div>
</div>
@endsection