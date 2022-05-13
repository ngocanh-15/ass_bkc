@extends('user/layouts')
@section('content')
<!-- page content -->

<div class="clearfix"></div>
<br>
<br>
<div class="row">
  <div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <div class="x_title">
        <h2><a href=""> Products <small>list</small> </a></h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li><a href="{{url('user/product/create')}}">Add<i class="fa fa-plus"></i></a></li>
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
              <th>Image</th>
              <th>Unit Price</th>
              <th>Quantity</th>
              <th>Status</th>
              <th>Date</th>
              <th>User</th>
              <th>Category</th>
              <th>Edit</th>
            </tr>
          </thead>

          <tbody>
          @foreach($product as $each)
            <tr>
              <td>{{$each->product_id }}</td>
              <td>{{$each->name }}</td>
              <td><img width="100px" src="{{asset('product/')}}/{{$each->image}}"></td>
              <td>{{$each->unit_price }}</td>
              <td>{{$each->quantity }}</td>			
              <td>{{$each->status }}</td>
              <td>{{$each->date }}</td>
              <td>{{$each->user_id }}</td>
              <td>{{$each->categories_id }}</td>
              <td>
                <center>
                  <a href="{{ url('/user/product/edit/' . $each->product_id) }}"><i class="fa fa-pencil"></i></a>
                </center>
              </td>
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
