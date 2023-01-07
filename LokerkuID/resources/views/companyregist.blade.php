@extends('user.navfooter')
@section('body')
<div class="container w-75 mt-5 p-5">
    <h3 class="text-center fw-semibold">
        Company Register
    </h3>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Company Name</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="LokerkuID">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@lokerku.id">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Password">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Password">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Company Description</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
</div>
<center>
    <button class="btn btn-primary m-3">Register</button>
</center>
@endsection
