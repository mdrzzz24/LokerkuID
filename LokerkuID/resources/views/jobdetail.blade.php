@extends('navfooter')
@section('body')
<div class="container text-center">
    <h3 class="text-center mt-4">Job Detail</h3>
    <div class="row mt-3">
      <div class="col-sm-6">
        <div style="height: 400px;" class="card-body text-start border border-2 p-5 rounded-3">
            <img style="height: 100px;" src="assets/bsr.jpeg" alt="PT BSR Indonesia">
            <h5 class="card-title fw-semibold">Business Analyst</h5>
            <h6>PT BSR INDONESIA</h6>
            <img style="height:20px; padding-right:10px;" src="assets/pin.png" alt="">Joglo, Jakarta<br>
            <img style="height:20px; padding-right:10px;" src="assets/dollar-symbol.png" alt="">The company does not display salary<br>
            <img style="height:20px; padding-right:10px;" src="assets/clock.png" alt="">Full-Time<br>
            <img style="height:20px; padding-right:10px;" src="assets/suitcase.png" alt="">1 - 3 years working experience<br>
            <button class="btn btn-primary mt-4">Apply Job</button>
          </div>
      </div>
      <div class="col-sm-6">
        <div style="height: 400px;" class="card-body px-4 border border-2 rounded-3">
            <h5 class="text-center">About Company</h5>
            <h6 class="text-start mt-3">PT BSR INDONESIA</h6>
            <p class="text-start">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus, doloremque ullam voluptate unde ipsa quo. Ipsum, ipsa, inventore mollitia maiores ab quod doloribus veritatis, atque dolore unde eos obcaecati aliquid velit blanditiis sapiente quas dicta reiciendis. Impedit, veritatis rerum sapiente vel consequuntur minus voluptates aliquid, esse laboriosam reiciendis doloribus ea?</p>
            <p class="text-start">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio modi iure repudiandae maiores iusto quia pariatur nam sunt suscipit quas neque sequi velit numquam est culpa expedita voluptates facere itaque ab, adipisci accusantium corrupti nisi ea! Voluptates culpa ipsam commodi reiciendis omnis ea atque mollitia non quos maxime, quaerat accusantium.</p>
        </div>
      </div>
    </div>
  </div>
<div class="container">
    <div class="row mt-3">
      <div class="col-sm-6">
        <div class="card-body text-start border border-2 p-3 rounded-3">
            <h5>Job Description</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus adipisci quaerat harum quibusdam vitae vero repellendus doloremque nulla fugiat numquam. At amet dolor nihil dolorum sunt doloribus soluta nostrum temporibus?</p>
        </div>
        <div class="card-body text-start border border-2 p-3 rounded-3 mt-3 mb-3">
            <h5>Required Skills</h5>
            <label style="background-color: rgb(222, 222, 222); padding:7px; border-radius:25px; border:2px solid gray;" for="">Data Manipulation</label>
            <label style="background-color: rgb(222, 222, 222); padding:7px; border-radius:25px; border:2px solid gray;" for="">MySQL</label>
            <label style="background-color: rgb(222, 222, 222); padding:7px; border-radius:25px; border:2px solid gray;" for="">Data Analyst</label>
        </div>
        <div class="card-body text-start border border-2 p-3 rounded-3 mt-3 mb-3">
            <h5>Basic Requirements</h5>
            <div class="container">
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit sint, porro quos aperiam quo nam.</li>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, ex!</li>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque aspernatur consequatur et doloremque.</li>
            </div>
        </div>
    </div>
    </div>
  </div>

@endsection
