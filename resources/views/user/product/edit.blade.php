@extends('user/layouts')
@section('content')
  <div class="row">
    <div class="col-md-12 col-sm-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Edit<small>to</small></h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <form class="" action="" method="POST" novalidate>
          @csrf
            <span class="section">Products </span>
            @foreach ($product as $each)
            <div class="field item form-group">
              <label class="col-form-label col-md-3 col-sm-3  label-align">Code<span
                  class="required">*</span></label>
              <div class="col-md-6 col-sm-6">
                <input class="form-control" type="text" name="product_id" value="{{$each->product_id }}">
              </div>
            </div>
            <div class="field item form-group">
              <label class="col-form-label col-md-3 col-sm-3  label-align">Name<span
                  class="required">*</span></label>
              <div class="col-md-6 col-sm-6">
                <input class="form-control" type="text" name="name" value="{{$each->name }}">
              </div>
            </div>
            <div class="field item form-group">
              <label class="col-form-label col-md-3 col-sm-3  label-align">Image<span
                  class="required">*</span></label>
              <div class="col-md-6 col-sm-6">
                <img name="images" width="100px" src="{{asset('product/')}}/{{$each->image }}">
	              <input class="form-control" type="file" name="image" value="{{$each->image }}">
              </div>
            </div>
            <div class="field item form-group">
              <label class="col-form-label col-md-3 col-sm-3  label-align">Unit Price<span
                  class="required">*</span></label>
              <div class="col-md-6 col-sm-6">
                <input class="form-control" type="text" name="unit_price" value="{{$each->unit_price }}" /></div>
            </div>
            <div class="field item form-group">
              <label class="col-form-label col-md-3 col-sm-3  label-align">Quantity<span
                  class="required">*</span></label>
              <div class="col-md-6 col-sm-6">
	              <input class="form-control" type="text" name="quantity" value="{{$each->quantity}}">
              </div>
            </div>
            <div class="field item form-group">
              <label class="col-form-label col-md-3 col-sm-3  label-align">Status<span
                  class="required">*</span></label>
              <div class="col-md-6 col-sm-6">
                <input class="form-control" type="text" value="{{$each->status}}" name="status"/>
              </div>
            </div>
            <div class="field item form-group">
              <label class="col-form-label col-md-3 col-sm-3  label-align">Date<span
                  class="required">*</span></label>
              <div class="col-md-6 col-sm-6">
                <input class="form-control" type="date" name="date" value="{{$each->date}}">
              </div>
            </div>
            <div class="field item form-group">
              <label class="col-form-label col-md-3 col-sm-3  label-align">User<span
                  class="required">*</span></label>
              <div class="col-md-6 col-sm-6">
                <input class="form-control" type="text" name="user_id" value="{{$each->user_id}}">
              </div>
            </div>
            <div class="field item form-group">
              <label class="col-form-label col-md-3 col-sm-3  label-align">Category<span
                  class="required">*</span></label>
              <div class="col-md-6 col-sm-6">
                <input class="form-control" type="text" name="categories_id" value="{{$each->categories_id}}">
              </div>
            </div>
            @endforeach
            <div class="ln_solid">
              <div class="form-group">
                <div class="col-md-6 offset-md-3">
                  <button type='submit' class="btn btn-primary">Submit</button>
                  <a href="{{url('user/product/index')}}">back</a>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection