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

                    <h6 class="mb-4">Horizontal Form</h6>
                    <form action="POST" id="frm-customer">

                        <h6 class="mb-4">Basic Navs & Tabs</h6>

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
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control " id="inputcode" readonly>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputname" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputname">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputnamearb" class="col-sm-2 col-form-label">Name Arabic</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputnamearb">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="address" class="col-sm-2 col-form-label">Address</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="address">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="addressarb" class="col-sm-2 col-form-label">Address Arabic</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="addressarb">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="mobileno" class="col-sm-2 col-form-label">Mobile No</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="mobileno">
                                    </div>
                                </div>


                            </div>
                            <div class="tab-pane fade" id="nav-address" role="tabpanel" aria-labelledby="nav-address-tab">

                                <div class="row mb-3">
                                    <label for="selelrname" class="col-sm-2 col-form-label">Seller Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="sellername">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="vatno" class="col-sm-2 col-form-label">VAT No</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="vatno" maxlength="15">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="crno" class="col-sm-2 col-form-label">CR No</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="crno" maxlength="20">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="inputEmail3">
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


                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="inputPassword3">
                            </div>
                        </div>
                        <fieldset class="row mb-3">
                            <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                        value="option1" checked>
                                    <label class="form-check-label" for="gridRadios1">
                                        First radio
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2"
                                        value="option2">
                                    <label class="form-check-label" for="gridRadios2">
                                        Second radio
                                    </label>
                                </div>
                            </div>
                        </fieldset>
                        <div class="row mb-3">
                            <legend class="col-form-label col-sm-2 pt-0">Checkbox</legend>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                                    <label class="form-check-label" for="gridCheck1">
                                        Check me out
                                    </label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Sign in</button>
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
