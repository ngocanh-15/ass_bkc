@extends('user/layouts')
@section('content')
  <div class="row">
    <div class="col-md-12 col-sm-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Add<small>to</small></h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <form class="" action="{{ route('admin.car_management.insert_car_process') }}" method="post" novalidate>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <span class="section">Car </span>
            <div class="field item form-group">
              <label class="col-form-label col-md-3 col-sm-3  label-align">Tên Xe<span
                  class="required">*</span></label>
              <div class="col-md-6 col-sm-6">
                <input class="form-control" type="text" name="name_car">
              </div>
            </div>
            <div class="field item form-group">
              <label class="col-form-label col-md-3 col-sm-3  label-align">Biển Số<span
                  class="required">*</span></label>
              <div class="col-md-6 col-sm-6">
                <input class="form-control" type="text" name="license_plates">
              </div>
            </div>
            <div class="field item form-group">
              <label class="col-form-label col-md-3 col-sm-3  label-align">Màu Sắc<span
                  class="required">*</span></label>
              <div class="col-md-6 col-sm-6">
                <input class="form-control" type="text" name="color"  /></div>
            </div>
            <div class="field item form-group">
              <label class="col-form-label col-md-3 col-sm-3  label-align">Ảnh<span
                  class="required">*</span></label>
              <div class="col-md-6 col-sm-6">
                <input class="form-control" type="file" name="images"></div>
            </div>
            <div class="field item form-group">
              <label class="col-form-label col-md-3 col-sm-3  label-align">Giới Thiệu<span
                  class="required">*</span></label>
              <div class="col-md-6 col-sm-6">
                <input class="form-control" type="text" name="introduce" /></div>
            </div>
            <div class="field item form-group">
              <label class="col-form-label col-md-3 col-sm-3  label-align">Loại Xe</label>
              <div class="col-md-6 col-sm-6">
                <select class="form-control" style="width:100%" name="code_type">
        					<option value="0">--------------chọn--------------</option>
        					@foreach($arr_lt as $type)
        					<option value="{{$type->code_type}}">{{$type->name_type}}</option>
        					@endforeach>
        				</select>
              </div>
            </div>
            <div class="field item form-group">
              <label class="col-form-label col-md-3 col-sm-3  label-align">Hãng Xe<span
                  class="required">*</span></label>
              <div class="col-md-6 col-sm-6">
                <select class="form-control" style="width:100%" name="code_manuf">
        					<option value="0">--------------chọn--------------</option>
        					@foreach($arr_mn as $manufacture)
        					<option value="{{$manufacture->code_manuf}}">{{$manufacture->name_manuf}}</option>
        					@endforeach>
        				</select>
              </div>
            </div>
            <div class="field item form-group">
              <label class="col-form-label col-md-3 col-sm-3  label-align">Trạng Thái<span
                  class="required">*</span></label>
              <div class="col-md-6 col-sm-6">
                <select class="form-control" style="width:100%" name="status">
					<option value="0">--------------còn--------------</option>
				</select>
              </div>
            </div>
            <div class="field item form-group">
              <label class="col-form-label col-md-3 col-sm-3  label-align">Giá<span
                  class="required">*</span></label>
              <div class="col-md-6 col-sm-6">
                <input class="form-control" type="text" name="price" placeholder="đơn vị tính: triệu VNĐ"></div>
            </div>
            
            <div class="ln_solid">
              <div class="form-group">
                <div class="col-md-6 offset-md-3">
            <button type='submit' class="btn btn-primary">Submit</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection