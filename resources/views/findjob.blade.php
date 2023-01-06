@extends('navfooter')
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
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                          <div class="card border border-1">
                                            <div class="card-body text-start mx-3">
                                              <h5 class="card-title fw-semibold">Business Analyst</h5>
                                              <h6>PT BSR INDONESIA</h6>
                                              <img style="height:20px; padding-right:10px;" src="assets/pin.png" alt="">Joglo, Jakarta<br>
                                              <img style="height:20px; padding-right:10px;" src="assets/dollar-symbol.png" alt="">The company does not display salary<br>
                                              <a href="jobdetail" class="btn btn-primary mt-2">See detail</a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="card border border-1">
                                                <div class="card-body text-start mx-3">
                                                  <h5 class="card-title fw-semibold">Ecommerce Specialist</h5>
                                                  <h6>PT Sumber Sinergi Makmur</h6>
                                                  <img style="height:20px; padding-right:10px;" src="assets/pin.png" alt="">Sawah Besar, Jakarta<br>
                                                  <img style="height:20px; padding-right:10px;" src="assets/dollar-symbol.png" alt="">Rp 5.000.000<br>
                                                  <a href="jobdetail" class="btn btn-primary mt-2">See detail</a>
                                                </div>
                                              </div>
                                        </div>
                                      </div>
                                      <div class="row mb-4">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <div class="card border border-1">
                                              <div class="card-body text-start mx-3">
                                                <h5 class="card-title fw-semibold">Sales Manager Advertising</h5>
                                                <h6>Ubiklan</h6>
                                                <img style="height:20px; padding-right:10px;" src="assets/pin.png" alt="">Cengkareng, Jakarta Barat<br>
                                                <img style="height:20px; padding-right:10px;" src="assets/dollar-symbol.png" alt="">The company does not display salary<br>
                                                <a href="jobdetail" class="btn btn-primary mt-2">See detail</a>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-sm-6">
                                              <div class="card border border-1">
                                                  <div class="card-body text-start mx-3">
                                                    <h5 class="card-title fw-semibold">Sales Executive</h5>
                                                    <h6>PT Cartrack Technologies Indonesia</h6>
                                                    <img style="height:20px; padding-right:10px;" src="assets/pin.png" alt="">Jakarta Barat<br>
                                                    <img style="height:20px; padding-right:10px;" src="assets/dollar-symbol.png" alt="">The company does not display salary<br>
                                                    <a href="jobdetail" class="btn btn-primary mt-2">See detail</a>
                                                  </div>
                                                </div>
                                          </div>
                                      </div>
                                      <div class="row mb-4">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <div class="card border border-1">
                                              <div class="card-body text-start mx-3">
                                                <h5 class="card-title fw-semibold">PHP Programmer</h5>
                                                <h6>PT Cakra Tekno Nusantara</h6>
                                                <img style="height:20px; padding-right:10px;" src="assets/pin.png" alt="">Jakarta Selatan<br>
                                                <img style="height:20px; padding-right:10px;" src="assets/dollar-symbol.png" alt="">The company does not display salary<br>
                                                <a href="jobdetail" class="btn btn-primary mt-2">See detail</a>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-sm-6">
                                              <div class="card border border-1">
                                                  <div class="card-body text-start mx-3">
                                                    <h5 class="card-title fw-semibold">Web Programmer</h5>
                                                    <h6>PT Floo Integra Digital</h6>
                                                    <img style="height:20px; padding-right:10px;" src="assets/pin.png" alt="">Sidoarjo<br>
                                                    <img style="height:20px; padding-right:10px;" src="assets/dollar-symbol.png" alt="">Rp 7.000.000<br>
                                                    <a href="jobdetail" class="btn btn-primary mt-2">See detail</a>
                                                  </div>
                                                </div>
                                          </div>
                                      </div>
                                      <div class="row mb-4">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <div class="card border border-1">
                                              <div class="card-body text-start mx-3">
                                                <h5 class="card-title fw-semibold">Franchise Manager</h5>
                                                <h6>PT Nuvens Prima Retail</h6>
                                                <img style="height:20px; padding-right:10px;" src="assets/pin.png" alt="">Jakarta Barat<br>
                                                <img style="height:20px; padding-right:10px;" src="assets/dollar-symbol.png" alt="">Rp 8.000.000<br>
                                                <a href="jobdetail" class="btn btn-primary mt-2">See detail</a>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-sm-6">
                                              <div class="card border border-1">
                                                  <div class="card-body text-start mx-3">
                                                    <h5 class="card-title fw-semibold">Content Creator</h5>
                                                    <h6>Bengawan Jaya Abadi</h6>
                                                    <img style="height:20px; padding-right:10px;" src="assets/pin.png" alt="">Sukoharjo<br>
                                                    <img style="height:20px; padding-right:10px;" src="assets/dollar-symbol.png" alt="">Rp 3.000.000<br>
                                                    <a href="jobdetail" class="btn btn-primary mt-2">See detail</a>
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

      </div>
         @endsection
