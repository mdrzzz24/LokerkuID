@extends('navfooter')
@section('body')
      <img style="width: 100%; filter: brightness(50%);" src="assets/meja.jpg" alt="">
      <div class="container">
        <h1 style="margin-top:-70px;" class="position-absolute top-50 start-50 translate-middle fw-bolder text-light">Find a job</h1>
        <h6 style="margin-top:-40px;" class="position-absolute top-50 start-50 translate-middle-x text-light">Find your dream job at LokerkuID</h6>
        <div class="container">
          <form  action="" method="post">
            <div class="container">
              <input style="margin-top: 10px; width:30%; background-color:rgba(255, 255, 255, 0.553) !important; border:2px !important; border-style:solid !important; border-color:white !important;"
              name="find" type="text" class="form-control position-absolute top-50 start-50 translate-middle" placeholder="Find a job">
              <input style="margin-top: 40px;" name="find" class="btn btn-outline-light position-absolute top-50 start-50 translate-middle-x" type="submit" value="Find">
            </div>
          </form>
        </div>
      </div>
    </div>
      <div class="container">
        <h3 class="mt-4 mb-3 text-center fw-semibold">Suggestion Job</h3>
        <div class="row mb-4">
            <div class="col-sm-6 mb-3 mb-sm-0">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title fw-semibold">Business Analyst</h5>
                  <h6>PT BSR INDONESIA</h6>
                  <img style="height:20px; padding-right:10px;" src="assets/pin.png" alt="">Joglo, Jakarta<br>
                  <img style="height:20px; padding-right:10px;" src="assets/dollar-symbol.png" alt="">The company does not display salary<br>
                  <a href="jobdetail" class="btn btn-primary mt-2">See detail</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
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
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title fw-semibold">Sales Manager Advertising</h5>
                    <h6>Ubiklan</h6>
                    <img style="height:20px; padding-right:10px;" src="assets/pin.png" alt="">Cengkareng, Jakarta Barat<br>
                    <img style="height:20px; padding-right:10px;" src="assets/dollar-symbol.png" alt="">The company does not display salary<br>
                    <a href="jobdetail" class="btn btn-primary mt-2">See detail</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                  <div class="card">
                      <div class="card-body">
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
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title fw-semibold">Franchise Manager</h5>
                    <h6>PT Nuvens Prima Retail</h6>
                    <img style="height:20px; padding-right:10px;" src="assets/pin.png" alt="">Jakarta Barat<br>
                    <img style="height:20px; padding-right:10px;" src="assets/dollar-symbol.png" alt="">Rp 8.000.000<br>
                    <a href="jobdetail" class="btn btn-primary mt-2">See detail</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                  <div class="card">
                      <div class="card-body">
                        <h5 class="card-title fw-semibold">Content Creator</h5>
                        <h6>Bengawan Jaya Abadi</h6>
                        <img style="height:20px; padding-right:10px;" src="assets/pin.png" alt="">Sukoharjo<br>
                        <img style="height:20px; padding-right:10px;" src="assets/dollar-symbol.png" alt="">Rp 3.000.000<br>
                        <a href="jobdetail" class="btn btn-primary mt-2">See detail</a>
                      </div>
                    </div>
              </div>
          </div>
          <center>
              <button class="submit btn btn-primary">See More</button>
          </center>
          <div class="container-fluid">
            <h3 class="mt-4 mb-3 text-center fw-semibold">Job Category</h3>
            <div class="container text-center">
                <center>
                <div style="width: 70%;" class="row align-items-start text-start mb-5 border border-2 rounded-2 p-3">
                  <div class="col">
                    <a href='' style='text-decoration:none;'>Administrasi</a><br>
                    <a href='' style='text-decoration:none;'>Akuntansi dan Keuangan</a><br>
                    <a href='' style='text-decoration:none;'>Customer Care</a><br>
                    <a href='' style='text-decoration:none;'>Hospitality & Travel</a><br>
                    <a href='' style='text-decoration:none;'>Human Resource</a><br>
                    <a href='' style='text-decoration:none;'>Kecantikan</a><br>
                    <a href='' style='text-decoration:none;'>Management Consulting</a><br>
                    <a href='' style='text-decoration:none;'>Pelayanan Profesional</a><br>
                    <a href='' style='text-decoration:none;'>Perbankan</a><br>
                    <a href='' style='text-decoration:none;'>Property & Real Estate</a><br>
                    <a href='' style='text-decoration:none;'>Restaurant</a><br>
                    <a href='' style='text-decoration:none;'>Telekomunikasi</a><br>
                  </div>
                  <div class="col">
                    <a href='' style='text-decoration:none;'>Advertising & Public Relations</a><br>
                    <a href='' style='text-decoration:none;'>Asuransi</a><br>
                    <a href='' style='text-decoration:none;'>Desain</a><br>
                    <a href='' style='text-decoration:none;'>Hotel</a><br>
                    <a href='' style='text-decoration:none;'>Information Technology</a><br>
                    <a href='' style='text-decoration:none;'>Kesehatan dan Kedokteran</a><br>
                    <a href='' style='text-decoration:none;'>Pabrik dan Manufaktur</a><br>
                    <a href='' style='text-decoration:none;'>Pendidikan Dan Pelatihan</a><br>
                    <a href='' style='text-decoration:none;'>Pertambangan Dan Energi</a><br>
                    <a href='' style='text-decoration:none;'>Purchasing / Pembelian</a><br>
                    <a href='' style='text-decoration:none;'>Retail</a><br>
                    <a href='' style='text-decoration:none;'>Transportasi & Logistik</a><br>
                  </div>
                  <div class="col">
                    <a href='' style='text-decoration:none;'>Agrikultur</a><br>
                    <a href='' style='text-decoration:none;'>Automotive</a><br>
                    <a href='' style='text-decoration:none;'>Event</a><br>
                    <a href='' style='text-decoration:none;'>Hukum & Keamanan</a><br>
                    <a href='' style='text-decoration:none;'>Internet & New Media</a><br>
                    <a href='' style='text-decoration:none;'>Konstruksi dan Bangunan</a><br>
                    <a href='' style='text-decoration:none;'>Pekerjaan Umum</a><br>
                    <a href='' style='text-decoration:none;'>Penjualan / Pemasaran</a><br>
                    <a href='' style='text-decoration:none;'>Programmer</a><br>
                    <a href='' style='text-decoration:none;'>Research & Development</a><br>
                    <a href='' style='text-decoration:none;'>Teknik</a><br>
                  </div>
                </div>
            </center>
              </div>
          </div>
      </div>
         @endsection
{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
