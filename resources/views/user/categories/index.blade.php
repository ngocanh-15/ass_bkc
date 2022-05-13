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
            <h2><a href=""> Categories<small>Table</small> </a></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li><a href="{{url('user/categories/create')}}">Add<i class="fa fa-plus"></i></a></li>
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
                            <th>Category name</th>
                            <th>Edit</th>
                          </tr>
                        </thead>

                        <tbody>
                          @foreach($categories as $each)
                          <tr>
                            <td>{{$each->categories_id}}</td>
                            <td>{{$each->name }}</td>
                            <td>
                              <center>
                                <a href="{{ url('/user/categories/edit/' . $each->categories_id) }}">Edit</a>
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
