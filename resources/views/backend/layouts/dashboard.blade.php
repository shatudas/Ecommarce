@extends('backend.layouts.index')

@section('backcontent')


<main class="main-content">
 <!--page title start-->

 <div class="page-title">
  <div class="container-fluid p-0">
   <div class="row">
    <div class="col-8">
     <h4 class="mb-0"> Dashboard</h4>
     <ol class="breadcrumb mb-0 pl-0 pt-1 pb-0">
      <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
      <li class="breadcrumb-item active">Dashboard</li>
     </ol>
    </div>
    <div class="col-4">
    </div>
   </div>
  </div>
 </div>


 <div class="container-fluid">
  <div class="row">

   <div class="col-xl-3 col-sm-6 mb-4">
    <form method="post" action="">
     @php
     $vardata=DB::table('users')->where('status',1)->get();
     @endphp
     <div class="card card-shadow">
      <div class="card-body ">
       <i class="icon-people text-primary f30"></i>
       <h6 class="mb-0 mt-3">New Users</h6>
       <p class="f12 mb-0">{{ Count($vardata) }}&nbsp;&nbsp;&nbsp;User</p>
      </div>
     </div>
    </form>
   </div>

   <div class="col-xl-3 col-sm-6 mb-4">
    @php
    $varstatus=DB::table('invoece')->get();
    @endphp
    <div class="card card-shadow">
     <div class="card-body ">
      <i class="icon-basket-loaded text-info f30"></i>
      <h6 class="mb-0 mt-3">Total Order Placed</h6>
      <p class="f12 mb-0">{{ Count($varstatus) }}&nbsp;&nbsp;&nbsp;New Order Placed</p>
     </div>
    </div>
   </div>

   <div class="col-xl-3 col-sm-6 mb-4">
    @php
    $varpanding=DB::table('invoece')->where('status',0)->get();
    @endphp
    <div class="card card-shadow">
     <div class="card-body ">
      <img src="{{ asset('backend') }}/Dual Ring-10s-38px.gif">
      <h6 class="mb-0 mt-3">Order Pading</h6>
      <p class="f12 mb-0">{{ Count($varpanding) }}&nbsp;&nbsp;&nbsp;Order Pading</p>
     </div>
    </div>
   </div>

   <div class="col-xl-3 col-sm-6 mb-4">
    @php
    $varproseccing=DB::table('invoece')->where('status',1)->get();
    @endphp
    <div class="card card-shadow">
     <div class="card-body ">
     <i class="fa fa-spinner fa-spin" style="font-size:24px"></i>
      <h6 class="mb-0 mt-3">Product Processing</h6>
      <p class="f12 mb-0">{{ Count($varproseccing) }}&nbsp;&nbsp;&nbsp;Product Processing</p>
     </div>
    </div>
   </div>

   <div class="col-xl-3 col-sm-6 mb-4">
    @php
    $varshiping=DB::table('invoece')->where('status',2)->get();
    @endphp
    <div class="card card-shadow">
     <div class="card-body">
      <i class="fa fa-spinner fa-spin" style="font-size:24px"></i>
      <h6 class="mb-0 mt-3">Product Shiping</h6>
      <p class="f12 mb-0">{{ Count($varshiping) }}&nbsp;&nbsp;&nbsp;Product Shiping</p>
     </div>
    </div>
   </div>

   <div class="col-xl-3 col-sm-6 mb-4">
    @php
    $varComplated=DB::table('invoece')->where('status',3)->get();
    @endphp
    <div class="card card-shadow">
     <div class="card-body ">
     <img src="{{ asset('backend') }}/8e2b58f62b56eb8a7f10045781b47def.svg" style="height:38px;">
      <h6 class="mb-0 mt-3">Product Complated</h6>
      <p class="f12 mb-0">{{ Count($varComplated) }}&nbsp;&nbsp;&nbsp;Product Complated</p>
     </div>
    </div>
   </div>

  </div>
 </div>

</main>


@endsection