@extends('layouts.default')

@section('page')
    <!-- [ breadcrumb ] start -->
    <div class="page-header">
        <div class="page-block">
            <div class="page-header-title">
                {{-- <h5 class="mb-0 font-medium">Customer Master</h5> --}}
            </div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="../dashboard/index.html">Master</a></li>
                <li class="breadcrumb-item"><a href="javascript: void(0)">Accounts</a></li>
                <li class="breadcrumb-item" aria-current="page">Customers</li>
            </ul>
            {{-- <div class="button"> <a href="#!"> Add Customer </a></div> --}}
        </div>
    </div>
    <!-- [ breadcrumb ] end -->

    <!-- [ Main Content ] start -->
    <div class="col-sm-12 col-xl-12">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Customer Master</h6>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Code</th>
                        <th scope="col">Name</th>
                        <th scope="col">Name Arabic</th>
                        <th scope="col">Address</th>
                        <th scope="col">Address Arabic</th>
                        <th scope="col">Mobile No</th>
                        <th scope="col">
                            <a href="{{ route('customer.add') }}" type="submit" class="btn btn-primary"><i class="fa fa-plus me-2"></i>Add Customer</a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cust as $customer)
                        <tr>
                            <th scope="row">{{ $customer->id }}</th>
                            <td>{{ $customer->code }}</td>
                            <td>{{ $customer->name }}</td>
                            <td>{{ $customer->arabic_name }}</td>
                            <td>{{ $customer->address }}</td>
                            <td>{{ $customer->arabic_address }}</td>
                            <td>{{ $customer->mobile_no }}</td>
                            <td><a href="{{ route('customer.edit', ['id' => $customer->id]) }}">Edit</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{-- <div class="grid  ">
       <table>
        <thead>
          <th>ID</th>
          <th>Code</th>
          <th>Name</th>
          <th>Arabic Name</th>
          <th>Address</th>
          <th>Arabic Address</th>
          <th>Mobile No</th>
          <th><a href="{{ route('customer.add') }}">Add Customer</a></th>
        </thead>
        <tbody>
          @foreach ($cust as $customer)
            <tr>
              <td>{{ $customer ->id }}</td>
              <td>{{ $customer ->code }}</td>
              <td>{{ $customer ->name }}</td>
              <td>{{ $customer ->arabic_name }}</td>
              <td>{{ $customer ->address }}</td>
              <td>{{ $customer ->arabic_address }}</td>
              <td>{{ $customer ->mobile_no }}</td>
              <td><a href="{{ route('customer.edit',['id' => $customer->id]) }}">Edit</a></td>
            </tr>
          @endforeach
        </tbody>
       </table>
        </div> --}}
    <!-- [ Main Content ] end -->
@endsection()
