@extends('layouts.member_sidebar')
@section('title')
    Member Dashboard
@endsection
@section('content')
<div class="row">
  <div class="col-sm-6 mb-4 mb-xl-0">
   <div class="d-lg-flex align-items-center">
    <div>
     <h3 class="text-dark font-weight-bold mb-2">Hi, welcome back!</h3>
     <h6 class="font-weight-normal mb-2">Last login was 23 hours ago. View details</h6>
   </div>
   <div class="ml-lg-5 d-lg-flex d-none">
    <button type="button" class="btn bg-white btn-icon">
     <i class="mdi mdi-view-grid text-success"></i>
   </button>
   <button type="button" class="btn bg-white btn-icon ml-2">
     <i class="mdi mdi-format-list-bulleted font-weight-bold text-primary"></i>
   </button>
 </div>
</div>
</div>
</div>
<div class="row">
  <div class="col-sm-8 flex-column d-flex stretch-card">
   <div class="row">
    <div class="col-lg-4 d-flex grid-margin stretch-card">
     <div class="card bg-primary">
      <div class="card-body text-white">
       <h3 class="font-weight-bold mb-3">18,39 (75GB)</h3>
       <div class="progress mb-3">
        <div class="progress-bar  bg-warning" role="progressbar" style="width: 40%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
      <p class="pb-0 mb-0">Bandwidth usage</p>
    </div>
  </div>
</div>
<div class="col-lg-4 d-flex grid-margin stretch-card">
 <div class="card sale-diffrence-border">
  <div class="card-body">
   <h2 class="text-dark mb-2 font-weight-bold">$6475</h2>
   <h4 class="card-title mb-2">Sales Difference</h4>
   <small class="text-muted">APRIL 2019</small>
 </div>
</div>
</div>
<div class="col-lg-4 d-flex grid-margin stretch-card">
 <div class="card sale-visit-statistics-border">
  <div class="card-body">
   <h2 class="text-dark mb-2 font-weight-bold">$3479</h2>
   <h4 class="card-title mb-2">Visit Statistics</h4>
   <small class="text-muted">APRIL 2019</small>
 </div>
</div>
</div>
</div>
<div class="row">
  <div class="col-sm-12 grid-margin d-flex stretch-card">
   <div class="card">
    <div class="card-body">
     <div class="d-flex align-items-center justify-content-between">
      <h4 class="card-title mb-2">Sales Difference</h4>
      <div class="dropdown">
       <a href="#" class="text-success btn btn-link  px-1"><i class="mdi mdi-refresh"></i></a>
       <a href="#" class="text-success btn btn-link px-1 dropdown-toggle dropdown-arrow-none" data-toggle="dropdown" id="settingsDropdownsales">
        <i class="mdi mdi-dots-horizontal"></i></a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="settingsDropdownsales">
         <a class="dropdown-item">
          <i class="mdi mdi-grease-pencil text-primary"></i>
          Edit
        </a>
        <a class="dropdown-item">
          <i class="mdi mdi-delete text-primary"></i>
          Delete
        </a>
      </div>
    </div>
  </div>

</div>
</div>
</div>
</div>
</div>
<div class="col-sm-4 flex-column d-flex stretch-card">
 <div class="row flex-grow">
  <div class="col-sm-12 grid-margin stretch-card">
   <div class="card">
    <div class="card-body">
     <div class="row">
      <div class="col-lg-8">
       <h3 class="font-weight-bold text-dark">Canada,Ontario</h3>
       <p class="text-dark">Monday 3.00 PM</p>
       <div class="d-lg-flex align-items-baseline mb-3">
        <h1 class="text-dark font-weight-bold">23<sup class="font-weight-light"><small>o</small><small class="font-weight-medium">c</small></sup></h1>
        <p class="text-muted ml-3">Partly cloudy</p>
      </div>
    </div>
    <div class="col-lg-4">
     <div class="position-relative">
      <img src="images/dashboard/live.png" class="w-100" alt="">
      <div class="live-info badge badge-success">Live</div>
    </div>
  </div>
</div>

</div>
</div>
</div>
<div class="col-sm-12 grid-margin stretch-card">
 <div class="card">
  <div class="card-body">
   <div class="row">
    <div class="col-sm-12">
     <div class="d-flex align-items-center justify-content-between">
      <h4 class="card-title mb-0">Visits Today</h4>
      <div class="dropdown">
       <a href="#" class="text-success btn btn-link  px-1"><i class="mdi mdi-refresh"></i></a>
       <a href="#" class="text-success btn btn-link px-1 dropdown-toggle dropdown-arrow-none" data-toggle="dropdown" id="profileDropdownvisittoday"><i class="mdi mdi-dots-horizontal"></i></a>
       <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdownvisittoday">
        <a class="dropdown-item">
         <i class="mdi mdi-grease-pencil text-primary"></i>
         Edit
       </a>
       <a class="dropdown-item">
         <i class="mdi mdi-delete text-primary"></i>
         Delete
       </a>
     </div>
   </div>
 </div>
 <p class="mt-1">Calculated in last 30 days</p>
 <div class="d-lg-flex align-items-center justify-content-between">
  <h1 class="font-weight-bold text-dark">4332</h1>
  <div class="mb-3">
   <button type="button" class="btn btn-outline-light text-dark font-weight-normal">Day</button>
   <button type="button" class="btn btn-outline-light text-dark font-weight-normal">Month</button>
 </div>
</div>
<canvas id="visitorsToday"></canvas>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
  <div class="col-lg-2 grid-margin stretch-card">
   <div class="card">
    <div class="card-body pb-0">
     <div class="d-flex align-items-center justify-content-between">
      <h2 class="text-success font-weight-bold">18390</h2>
      <i class="mdi mdi-account-outline mdi-18px text-dark"></i>
    </div>
  </div>
  <canvas id="newClient"></canvas>
  <div class="line-chart-row-title">MY NEW CLIENTS</div>
</div>
</div>
<div class="col-lg-2 grid-margin stretch-card">
 <div class="card">
  <div class="card-body pb-0">
   <div class="d-flex align-items-center justify-content-between">
    <h2 class="text-danger font-weight-bold">839</h2>
    <i class="mdi mdi-refresh mdi-18px text-dark"></i>
  </div>
</div>
<canvas id="allProducts"></canvas>
<div class="line-chart-row-title">All Products</div>
</div>
</div>
<div class="col-lg-2 grid-margin stretch-card">
 <div class="card">
  <div class="card-body pb-0">
   <div class="d-flex align-items-center justify-content-between">
    <h2 class="text-info font-weight-bold">244</h2>
    <i class="mdi mdi-file-document-outline mdi-18px text-dark"></i>
  </div>
</div>
<canvas id="invoices"></canvas>
<div class="line-chart-row-title">NEW INVOICES</div>
</div>
</div>
<div class="col-lg-2 grid-margin stretch-card">
 <div class="card">
  <div class="card-body pb-0">
   <div class="d-flex align-items-center justify-content-between">
    <h2 class="text-warning font-weight-bold">3259</h2>
    <i class="mdi mdi-folder-outline mdi-18px text-dark"></i>
  </div>
</div>
<canvas id="projects"></canvas>
<div class="line-chart-row-title">All PROJECTS</div>
</div>
</div>
<div class="col-lg-2 grid-margin stretch-card">
 <div class="card">
  <div class="card-body pb-0">
   <div class="d-flex align-items-center justify-content-between">
    <h2 class="text-secondary font-weight-bold">586</h2>
    <i class="mdi mdi-cart-outline mdi-18px text-dark"></i>
  </div>
</div>
<canvas id="orderRecieved"></canvas>
<div class="line-chart-row-title">Orders Received</div>
</div>
</div>
<div class="col-lg-2 grid-margin stretch-card">
 <div class="card">
  <div class="card-body pb-0">
   <div class="d-flex align-items-center justify-content-between">
    <h2 class="text-dark font-weight-bold">7826</h2>
    <i class="mdi mdi-cash text-dark mdi-18px"></i>
  </div>
</div>
<canvas id="transactions"></canvas>
<div class="line-chart-row-title">TRANSACTIONS</div>
</div>
</div>
</div>
<div class="row">
  <div class="col-sm-6 grid-margin grid-margin-md-0 stretch-card">
   <div class="card">
    <div class="card-body">
     <div class="d-flex align-items-center justify-content-between">
      <h4 class="card-title">Support Tracker</h4>
      <h4 class="text-success font-weight-bold">Tickets<span class="text-dark ml-3">163</span></h4>
    </div>
    <div id="support-tracker-legend" class="support-tracker-legend"></div>
    <canvas id="supportTracker"></canvas>
  </div>
</div>
</div>
<div class="col-sm-6 grid-margin grid-margin-md-0 stretch-card">
 <div class="card">
  <div class="card-body">
   <div class="d-lg-flex align-items-center justify-content-between mb-4">
    <h4 class="card-title">Product Orders</h4>
    <p class="text-dark">+5.2% vs last 7 days</p>
  </div>
  <div class="product-order-wrap padding-reduced">
    <div id="productorder-gage" class="gauge productorder-gage"></div>
  </div>
</div>
</div>
</div>
</div>
@forelse(auth()->user()->getReferrals() as $referral)
    <h4>
        {{ $referral->program->name }}
    </h4>
    <code>
        {{ $referral->link }}
    </code>
    <p>
{{--        Number of referred users: {{ $referral->relationships()->count() }}--}}
        Number of referred members: {{ auth()->user()->getReferrals()->count() }}
    </p>
@empty
    No referrals
@endforelse
@endsection
<!-- partial -->
