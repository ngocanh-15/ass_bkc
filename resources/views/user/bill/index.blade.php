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
        <h2><a href=""> Bill<small>Table</small> </a></h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li><a href="">Add<i class="fa fa-plus"></i></a></li>
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
              <th>Product</th>
              <th>Unit Price</th>
              <th>Quantity</th>
              <th>Into Money</th>
              <th>Total Price</th>
              <th>Edit</th>
              <th>Show</th>
            </tr>
          </thead>

          <tbody>
          @foreach($bill as $each)
            <tr>
              <td>{{$each->bill_id}}</td>
              <td>{{$each->product_id }}</td>
              <td>{{$each->unit_price}}</td>
              <td>{{$each->quantity}}</td>
              <td>{{$each->into_money}}</td>
              <td>{{$each->totalprice}}</td>
              <td>
                <center>
                  <a href="{{ url('/user/bill/edit/' . $each->bill_id, $each->product_id) }}"><i class="fa fa-pencil"></i></a>
                </center>
              </td>
              <td>
                <center>
                  <a href="{{ url('/user/bill/show/' . $each->bill_id, $each->product_id) }}">Show</a>
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
