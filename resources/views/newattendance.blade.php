@extends('layouts.guest')


@section('content')
<header class="header-2">
    <div class="page-header min-vh-75 relative" style="background-image: url('{{ asset('vendor/soft-ui/img/curved-images/curved.jpg') }}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 text-center mx-auto">
                    <h1 class="text-white pt-5 mt-n5">
                        {{ __('Welcome to') }}
                    </h1>
                    <h2 class="text-white pt-5 mt-n5">
                        {{ __('Impala Platinum Covid19') }}
                    </h2>
                    <h2 class="text-white pt-5 mt-n5">
                        {{ __('Attendance Register') }}
                    </h2>
                    <p class="lead text-white mt-3">
                        {{ __('') }}
                    </p>
                </div>
            </div>
        </div>
        <div class="position-absolute w-100 z-index-1 bottom-0">
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 40" preserveAspectRatio="none" shape-rendering="auto">
                <defs>
                    <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                </defs>
                <g class="moving-waves">
                    <use xlink:href="#gentle-wave" x="48" y="-1" fill="rgba(255,255,255,0.40" />
                    <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.35)" />
                    <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.25)" />
                    <use xlink:href="#gentle-wave" x="48" y="8" fill="rgba(255,255,255,0.20)" />
                    <use xlink:href="#gentle-wave" x="48" y="13" fill="rgba(255,255,255,0.15)" />
                    <use xlink:href="#gentle-wave" x="48" y="16" fill="rgba(255,255,255,0.95" />
                </g>
            </svg>
        </div>
    </div>
</header>

<body>
<div class="container mt-4">
  @if(session('status'))

  <br>
  <br>
  <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  <div class="card">
    <div class="card-body">
      <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('store-form')}}">
       @csrf
        <div class="form-group">
          <label for="FirstNames">First Names:</label>
          <input type="text" id="FirstNames" name="FirstNames" class="form-control" required="">
        </div>
        <div class="form-group">
        <label for="LastName">Last Name:</label>
          <input type="text" id="LastName" name="LastName" class="form-control" required="">
        </div>
        <div class="form-group">
        <label for="idNumber">ID/Passport Number:</label>
          <input type="number" id="idNumber" name="idNumber" class="form-control" required="">
        </div>
        <div class="form-group">
        <label for="DateOfBirth">Date Of Birth:</label>
          <input type="date" id="DateOfBirth" name="DateOfBirth" class="form-control" required="">
        </div>
        <div class="form-group">
        <label for="ContactNumber">Contact Number:</label>
          <input type="text" id="ContactNumber" name="ContactNumber" class="form-control" required="">
        </div>
        <div class="form-group">
        <label for="Shaft">Shaft:</label>
          <input type="text" id="Shaft" name="Shaft" class="form-control" required="">
        </div>
        <div class="form-group">
        <label for="MedicalAid">Medical Aid:</label>
          <input type="text" id="MedicalAid" name="MedicalAid" class="form-control" required="">
        </div>
        <div class="form-group">
        <label for="MedicalNumber">Medical Aid Number:</label>
          <input type="text" id="MedicalNumber" name="MedicalNumber" class="form-control" required="">
        </div>
        <div class="form-group">
            <label for="Gender">Gender:</label>
              <input type="text" id="Gender" name="Gender" class="form-control" required="">
            </div>
            </div>
        </div>
        <button type="submit" class="btn btn-sm btn-round mb-0 ms-2 bg-gradient-success">Submit</button>
      </form>
    </div>
  </div>
</div>
</body>
@endsection
