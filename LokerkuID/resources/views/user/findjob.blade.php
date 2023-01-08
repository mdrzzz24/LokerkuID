@extends('user.navfooter')
@section('body')
      <div class="container">
        <form action="" method="post">
            <div class="row mt-4">
                <div class="col">
                  <input type="text" class="form-control" placeholder="Find Job" aria-label="Find Job">
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Location" aria-label="Location">
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-3">Find</button>
                </div>
            </div>
            <div class="container text-center">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="border border-3 rounded-4 mb-3">
                            <h4 class="mt-3">Filter Your Search</h4>
                            <div class="cols-4 border border-1 rounded-2 mx-3">
                                <h5 class="mt-3">Near my location</h5>
                                <p>Find job near your location</p>
                                <button type="submit" class="btn btn-primary mb-3">Find</button>
                              </div>
                            <div class="cols-4 border border-1 rounded-2 mx-3 mt-3">
                                <h5 class="mt-3">Work Type</h5>
                                <div class="container text-start mx-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                          Internship
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                          Full-time
                                        </label>
                                      </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                          Part-time
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label mb-3" for="flexCheckDefault">
                                          Freelance
                                        </label>
                                      </div>
                                </div>
                            </div>
                            <div class="cols-4 border border-1 rounded-2 mx-3 mt-3 p-3">
                                <div class="container text-start">
                                    <div class="form-check form-switch">
                                      <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                      <label class="form-check-label" for="flexSwitchCheckDefault">Remote Working</label>
                                    </div>
                                </div>
                              </div>
                              <div class="cols-4 border border-1 rounded-2 mx-3 mt-3">
                                <h5 class="mt-3">Experience</h5>
                                <div class="container text-start mx-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                        Less than one year
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                        1 - 3 Years
                                        </label>
                                      </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                        3 - 5 Years
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                         5 -10 Years
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label mb-3" for="flexCheckDefault">
                                        More than 10 Years
                                        </label>
                                      </div>
                                </div>
                            </div>
                            {{-- <div class="cols-4 border border-1 rounded-2 mx-3 mt-3 mb-3">
                                <h5 class="mt-3">Job Category</h5>
                                <div class="container text-start mx-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                        Less than one year
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                        1 - 3 Years
                                        </label>
                                      </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                        3 - 5 Years
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                         5 -10 Years
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label mb-3" for="flexCheckDefault">
                                        More than 10 Years
                                        </label>
                                      </div>
                                </div>
                            </div> --}}
                            <div class="col-auto mt-3">
                                <button type="submit" class="btn btn-primary mb-3">Find</button>
                            </div>
                        </div>
                    </form>
                    </div>
                    <div class="col-sm-8">
                        <div class="container text-center">
                            <div class="row">
                                <div class="border border-3 rounded-4 p-3">
                                    <h4>Job Found</h4>
                                    <div class="row mb-4">
                                        @foreach ($job as $j)
                                        <div class="col-sm-6 mb-3 mb-sm-0 mt-3">
                                          <div class="card border border-1">
                                            <div class="card-body text-start mx-3">
                                              <h5 class="card-title fw-semibold">{{ $j->jobname }}</h5>
                                              <h6>{{ $j->recruiter }}</h6>
                                              <img style="height:20px; padding-right:10px;" src="assets/pin.png" alt="">{{ $j->city }}<br>
                                              <img style="height:20px; padding-right:10px;" src="assets/dollar-symbol.png" alt="">Rp {{ $j->salary }}/month<br>
                                              <a href="jobdetail" class="btn btn-primary mt-2">See detail</a>
                                            </div>
                                          </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                                </div>
                            </div>
                          </div>
                    </div>
                </div>
            </div>

      </div>
         @endsection
