
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
            <div class="card-body !p-10">

                <form id="customer-frm" class="user" method="POST">
        @csrf
<div id="details" class="tabcontent">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="form-group row">
          <table style= "width:100%">
            <tr>
              <td>
                <label for="status" class="col ng-binding">Status</label>
              </td>
              <td style="width: 70%">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <label class="switch">
                    <input type="checkbox" name="status">
                    <span class="slider round"></span>
                  </label>
                </div>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

                </form>
              <form action="POST">
        <div> <a href="{{ route('customer.add') }}" class="btn btn-primary mx-auto shadow-2xl" type="button"> Add Customer </a></div>
          <div class="mb-3">
              <label for="name">Name</label>
             <input type="text" class="form-control" id="name" placeholder="Name"  >
            </div>  
            <div class="mb-3">
              <label for="namearabic">Name Arabic</label>
             <input type="text" class="form-control" id="namearabic" placeholder="Name in Arabic"  >
            </div>  
            <div class="mb-3">
              <label for="address">Address</label>
             <input type="text" class="form-control" id="address" placeholder="Address"  >
            </div>  
            <div class="mb-3">
              <label for="addressarabic">Address Arabic</label>
             <input type="text" class="form-control" id="addressarabic" placeholder="Address in Arabic"  >
            </div>
            <div class="mb-3">
              <label for="mobileno">Mobile No</label>
             <input type="text" class="form-control" id="mobileno" placeholder="Mobile No"  >
            </div> 
            <div class="mb-3">
              <label for="name">Action</label>
             <input type="text" class="form-control" id="name" placeholder="Name"  >
            </div>   
              </form>
        
            </div>
          </div>
        </div>
        <!-- [ breadcrumb ] end -->

        <!-- [ Main Content ] start -->
        <div class="grid  ">
  
        </div>
        <!-- [ Main Content ] end -->
@endsection()
