
@extends('layouts.default')

@section('page')
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
          <div class="page-block">
            <div class="page-header-title">
              <h5 class="mb-0 font-medium">Default</h5>
            </div>
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="../dashboard/index.html">Master</a></li>
              <li class="breadcrumb-item"><a href="javascript: void(0)">Accounts</a></li>
              <li class="breadcrumb-item" aria-current="page">Customers</li>
            </ul>
          </div>
        </div>
        <!-- [ breadcrumb ] end -->

        <!-- [ Main Content ] start -->
        <div class="grid grid-cols-12 gap-x-6">
       <table>
        <thead>
          <th>ID</th>
          <th>Code</th>
          <th>Name</th>
          <th>Arabic Name</th>
          <th>Address</th>
          <th>Arabic Address</th>
          <th>Mobile No</th>
          <th>Action</th>
        </thead>
        <tbody>
          @foreach ($cust as $customer )
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
        </div>
        <!-- [ Main Content ] end -->
@endsection()
