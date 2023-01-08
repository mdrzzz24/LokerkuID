@extends('user.navfooter')
@section('body')
<div class="container">
    <div class="card-body text-start mt-3">
        <img style="height: 100px;" src="{{ asset('assets/bsr.jpeg') }}" alt="PT BSR Indonesia">
        <h5 class="card-title fw-semibold">Business Analyst</h5>
        <h6>PT BSR INDONESIA</h6>
        <img style="height:20px; padding-right:10px;" src="assets/pin.png" alt="">Joglo, Jakarta<br>
        <img style="height:20px; padding-right:10px;" src="assets/dollar-symbol.png" alt="">The company does not display salary<br>
        <img style="height:20px; padding-right:10px;" src="assets/clock.png" alt="">Full-Time<br>
        <img style="height:20px; padding-right:10px;" src="assets/suitcase.png" alt="">1 - 3 years working experience<br>
        <a href="jobdetail" class="btn btn-primary mt-2">See detail</a>
      </div>
</div>
@endsection
