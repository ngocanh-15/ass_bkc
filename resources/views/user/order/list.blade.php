@extends('user/layouts')
@section('content')
        <!-- page content -->

            <div class="clearfix">
              <select class="form-control" style="width:100%" name="code_manuf" id="code_manuf">
                  <option><a href="{{ route('admin.car_management.list_car') }}">--------------chọn--------------</a></option>
                  @foreach($arr_mn as $manufacture)
                  <option value="{{$manufacture->code_manuf}}">{{$manufacture->name_manuf}}</option>
                  @endforeach>
                </select>
            </div>
            <br>
            <br>
            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><a href="{{ route('admin.car_management.list_car') }}"> Car<small>Table</small> </a></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a href="{{ route('admin.car_management.insert_car') }}">Add<i class="fa fa-plus"></i></a></li>
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
                          <th>Tên xe</th>
                          <th>Màu sắc</th>
                          <th>ảnh minh họa</th>
                          <th>Biển số</th>
                          <th>Thuộc loại</th>
                          <th>Thuộc Hãng</th>
                          <th>Trạng thái</th>
                          <th>Giá</th>
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                      </thead>

                      <tbody>
                        @foreach($arr_car as $each)
                        <tr>
            							<td>{{$each->code_car}}</td>
            							<td>{{$each->name_car}}</td>
            							<td>{{$each->color}}</td>
            							<td><img width="100px" src="{{asset('images/')}}/{{$each->images}}"></td>
            					    <td>{{$each->license_plates}}</td>			
            							<td>{{$each->name_type}}</td>
                          <td>{{$each->name_manuf}}</td>
            							<td>
                            @if($each->status == 0)
                            {{'còn'}}
                            @else
                            {{'hết'}}
                            @endif       
                          </td>
            							<td>{{$each->price}}</td>
                          <td>
                            <center>
                              <a href="{{ route('admin.car_management.edit_car',['code_car'=>$each->code_car]) }}"><i class="fa fa-pencil"></i></a>
                            </center>
                          </td>
                          <td>
                            <center>
                              <a href="{{ route('admin.car_management.delete_car',['code_car'=>$each->code_car]) }}"><i onclick="myFunction()" class="fa fa-close"></i></a>
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
@push('js')
  <script>
    $(document).ready(function(){
      $("#code_manuf").change(function(){
        $.ajax({
          url:'{{ route('admin.ajax.get_car_by_manufacture')}}',
          type:'GET',
          data:{
            code_manuf : $("#code_manuf").val(),
          },
          success:function(data){
            $('tbody').html(data);
          }
        })
      });
    });
  </script>
@endpush