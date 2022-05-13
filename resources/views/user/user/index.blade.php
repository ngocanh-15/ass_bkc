@extends('user/layouts')
@section('content')
<!-- page content -->

  <div class="clearfix"></div>

  <div class="row">
    <div class="col-md-12 col-sm-12 ">
      <div class="x_panel">
        <div class="x_title">
          <h2>Teammates<small>List</small></h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
            
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="row">
                <div class="col-sm-12">
                  <div class="card-box table-responsive">
          <table id="datatable" class="table table-striped table-bordered" style="width:100%">
            <thead>
              <tr>
                <th>Code</th>
                <th>Name</th>
                <th>Avatar</th>
                <th>Phone Number</th>
                <th>Email Address</th>
                <th>Date of Birth</th>
                <th>Address</th>
                <th>Citizen Identity Card _ No</th>
                <th>Date create</th>
              </tr>
            </thead>

            <tbody>
              @foreach ($user as $each)
  <tr>
    <td>{{$each->user_id}}</td>
    <td>{{$each->name}}</td>
    <td>{{$each->image}}</td>
    <td>{{$each->phone_number}}</td>
    <td>{{$each->email}}</td>			
    <td>{{$each->DoB}}</td>
    <td>{{$each->address}}</td>
    <td>{{$each->CIC_no}}</td>
    <td>{{$each->date}}</td>
  </tr>
  @endforeach
            </tbody>
          </table>
        </div>
        </div>
    </div>
  </div>
      </div>
    </div>

<!-- /page content -->
@endsection