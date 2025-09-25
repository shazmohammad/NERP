
@extends('layouts.default')

@section('page')
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
          <div class="page-block">
            <div class="page-header-title">
              <h5 class="mb-0 font-medium">Customer Master</h5>
            </div>
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="../dashboard/index.html">Master</a></li>
              <li class="breadcrumb-item"><a href="javascript: void(0)">Accounts</a></li>
              <li class="breadcrumb-item" aria-current="page">Customers</li>
            </ul>
            <div> <a href="#!" class="btn btn-primary mx-auto shadow-2xl" type="button"> Add Customer </a></div>
            <div class="card-body !p-10">
            <div class="mb-3">
              <label for="name">Name</label>
             <input type="text" class="form-control" id="name" placeholder="Name"  >
            </div>  
            </div>
          </div>
        </div>
        <!-- [ breadcrumb ] end -->

        <!-- [ Main Content ] start -->
        <div class="grid  ">
  
        </div>
        <!-- [ Main Content ] end -->
@endsection()
