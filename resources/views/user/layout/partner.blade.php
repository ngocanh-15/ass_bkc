@extends('user/layouts')
@section('content')
<!-- page content -->

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
          <div class="x_title">
            <h2>Admin<small>Partner</small></h2>
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
                  <th>Name Partner</th>
                  <th>Birthday</th>
                  <th>Gender</th>
                  <th>Phone number</th>
                  <th>Address</th>
                  <th>Identity Card</th>
                  <th>Email Address</th>
                </tr>
              </thead>

              <tbody>
                
                <tr>
                  <td>1</td>
                  <td>1</td>
                  <td>
                    1
                  </td>
                  <td>1</td>
                  <td>1</td>			
                  <td>1</td>
                  <td>1</td>
                </tr>
                
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