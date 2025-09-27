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


            <div class="col-sm-12 col-xl-12">
                <div class="bg-light rounded h-100 p-4">



                    <form action="{{ route('customer.add') }}" method="POST" id="frm-customer" name="customer_form">
                        @csrf
                        <table class="table">
                            <thead>
                                <th>
                                    <h6 class="mb-3"">Add New Customer</h6>
                                </th>
                                <th>
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-save me-2"></i>Save Customer</button>
                                </th>
                            </thead>
                        </table>

                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-details-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-details" type="button" role="tab" aria-controls="nav-details"
                                    aria-selected="true">Details</button>
                                <button class="nav-link" id="nav-address-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-address" type="button" role="tab" aria-controls="nav-address"
                                    aria-selected="false">National Address</button>
                                <button class="nav-link" id="nav-branches-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-branches" type="button" role="tab"
                                    aria-controls="nav-branches" aria-selected="false">Branches</button>
                            </div>
                        </nav>
                        <div class="tab-content pt-3" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-details" role="tabpanel"
                                aria-labelledby="nav-details-tab">

                                <div class="row mb-3">
                                    <label for="inputcode" class="col-sm-2 col-form-label">Code</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control " id="inputcode" name="code" readonly
                                         value="{{ old('code') }}"
                                         class="@error('code') is-invalid @enderror">
                                    </div>

                                    <div class="form-check form-switch col">
                                        <input class="form-check-input" type="checkbox" role="switch" id="status"
                                            name="status" checked>
                                        <label class="form-check-label" for="status">Activate</label>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputname" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputname" name="name"
                                         value="{{ old('name') }}"
                                         class="@error('name') is-invalid @enderror">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputnamearb" class="col-sm-2 col-form-label">Name Arabic</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputnamearb" name="namearabic"
                                         value="{{ old('namearabic') }}"
                                         class="@error('namearabic') is-invalid @enderror">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="address" class="col-sm-2 col-form-label">Address</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="address" name="address"
                                         value="{{ old('address') }}"
                                         class="@error('address') is-invalid @enderror">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="addressarb" class="col-sm-2 col-form-label">Address Arabic</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="addressarb" name="addressarabic"
                                         value="{{ old('addressarb') }}"
                                         class="@error('addressarb') is-invalid @enderror">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="mobileno" class="col-sm-2 col-form-label">Mobile No</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="mobileno" name="mobileno"
                                         value="{{ old('mobileno') }}"
                                         class="@error('mobileno') is-invalid @enderror">
                                    </div>
                                </div>


                            </div>
                            <div class="tab-pane fade" id="nav-address" role="tabpanel"
                                aria-labelledby="nav-address-tab">

                                <div class="row mb-3">
                                    <label for="selelrname" class="col-sm-2 col-form-label">Seller Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="sellername" name="sellername"
                                         value="{{ old('sellername') }}"
                                         class="@error('sellername') is-invalid @enderror">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="vatno" class="col-sm-2 col-form-label">VAT No</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="vatno" maxlength="15" name="vatno"
                                         value="{{ old('vatno') }}"
                                         class="@error('vatno') is-invalid @enderror">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="crno" class="col-sm-2 col-form-label">CR No</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="crno" maxlength="20" name="crno"
                                         value="{{ old('crno') }}"
                                         class="@error('crno') is-invalid @enderror">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="inputEmail3" name="email"
                                         value="{{ old('email') }}"
                                         class="@error('email') is-invalid @enderror">
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="nav-branches" role="tabpanel"
                                aria-labelledby="nav-branches-tab">
                                Sit consetetur eirmod lorem ea magna sadipscing ipsum elitr invidunt, dolores lorem erat
                                ipsum ut aliquyam eos lorem sed. Nonumy aliquyam ea justo eos dolores dolores duo dolores.
                                Aliquyam dolor sea dolores sit takimata no erat vero. At lorem justo tempor lorem duo, stet
                                kasd aliquyam ipsum voluptua labore at.
                            </div>
                        </div>



                    </form>
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
