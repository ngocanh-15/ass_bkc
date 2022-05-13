@extends('user/layouts')
@section('content')
<!-- page content -->
<div class="row">
  <!-- form color picker -->
  <div class="col-md-6 col-sm-12  ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Bill</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <br />
        <form class="form-horizontal form-label-left">
        @foreach($bill as $each)
          <div class="form-group row">
            <label class="control-label col-md-3 col-sm-3  ">Code</label>
            <div class="col-md-9 col-sm-9  ">
              <input type="text" class="demo1 form-control" value="{{$each->bill_id}}" />
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-md-3 col-sm-3  ">Product</label>
            <div class="col-md-9 col-sm-9  ">
              <div class="input-group demo2">
                @foreach($product as $item)
                <input type="text" value="code:{{$item->product_id }} - name:{{$item->name }}" class="form-control" />
                @endforeach
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-md-3 col-sm-3  ">Product Image</label>
            <div class="col-md-9 col-sm-9  ">
              <div class="input-group demo2">
                @foreach($product as $item)
                <img width="100px" src="{{asset('product/')}}/{{$item->image}}">
                @endforeach
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-md-3 col-sm-3  ">Unit Price</label>
            <div class="col-md-9 col-sm-9  ">
              <input type="text" class="form-control" value="{{$each->unit_price}}">
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-md-3 col-sm-3  ">Quantity</label>
            <div class="col-md-9 col-sm-9  ">
              <input type="text" class="form-control" value="{{$each->quantity}}">
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-md-3 col-sm-3  ">Into Money</label>
            <div class="col-md-9 col-sm-9  ">
              <input type="text" class="form-control" value="{{$each->into_money}}">
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-md-3 col-sm-3  ">Total Price</label>
            <div class="col-md-9 col-sm-9  ">
              <input type="text" class="form-control" value="{{$each->totalprice}}">
            </div>
          </div>
          @endforeach
          <div class="form-group row">
            <div class="col-md-9 offset-md-3">
              <button class="btn btn-success"><a href="{{url('user/bill/index')}}">back</a></button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- /form color picker -->
  <!-- form input mask -->
  <div class="col-md-6 col-sm-12  ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Bill Information</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <br />
        <form class="form-horizontal form-label-left">
        @foreach ($bill_info as $unit)
          <div class="form-group row">
            <label class="control-label col-md-3 col-sm-3 col-xs-3">Code</label>
            <div class="col-md-9 col-sm-9 col-xs-9">
              <input type="text" class="form-control" name="bill_info_id" value="{{$unit->bill_info_id}}" data-inputmask="'mask': '99/99/9999'">
              <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-md-3 col-sm-3 col-xs-3">Date create</label>
            <div class="col-md-9 col-sm-9 col-xs-9">
              <input type="text" class="form-control" name="date" value="{{$unit->date}}"  data-inputmask="'mask' : '(999) 999-9999'">
              <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-md-3 col-sm-3 col-xs-3">Bill name</label>
            <div class="col-md-9 col-sm-9 col-xs-9">
              <input type="text" class="form-control" name="name" value="{{$unit->name}}" data-inputmask="'mask': '99-999999'">
              <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-md-3 col-sm-3 col-xs-3">Bill _ no</label>
            <div class="col-md-9 col-sm-9 col-xs-9">
              <input type="text" class="form-control" name="bill_id" value="{{$unit->bill_id}}" data-inputmask="'mask' : '****-****-****-****-****-***'">
              <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-md-3 col-sm-3 col-xs-3">Total Price</label>
            <div class="col-md-9 col-sm-9 col-xs-9">
              <input type="text" class="form-control" name="totalprice" value="{{$unit->totalprice}}" data-inputmask="'mask' : '99-99999999'">
              <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-md-3 col-sm-3 col-xs-3">Phone Buyer </label>
            <div class="col-md-9 col-sm-9 col-xs-9">
              <input type="text" class="form-control" name="phone_buyer" value="{{$unit->phone_buyer}}" data-inputmask="'mask' : '9999-9999-9999-9999'">
              <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-md-3 col-sm-3 col-xs-3">Delivery Address </label>
            <div class="col-md-9 col-sm-9 col-xs-9">
              <input type="text" class="form-control" name="delivery_address" value="{{$unit->delivery_address}}" data-inputmask="'mask' : '9999-9999-9999-9999'">
              <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-md-3 col-sm-3 col-xs-3">Note </label>
            <div class="col-md-9 col-sm-9 col-xs-9">
              <input type="text" class="form-control" name="note" value="{{$unit->note}}" data-inputmask="'mask' : '9999-9999-9999-9999'">
              <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-md-3 col-sm-3 col-xs-3">Status </label>
            <div class="col-md-9 col-sm-9 col-xs-9">
              <input type="text" class="form-control" name="status" value="{{$unit->status}}" data-inputmask="'mask' : '9999-9999-9999-9999'">
              <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-md-3 col-sm-3 col-xs-3">Phone Seller  </label>
            <div class="col-md-9 col-sm-9 col-xs-9">
              <input type="text" class="form-control" name="phone_seller" value="{{$unit->phone_seller}}" data-inputmask="'mask' : '9999-9999-9999-9999'">
              <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-md-3 col-sm-3 col-xs-3">Seller Address </label>
            <div class="col-md-9 col-sm-9 col-xs-9">
              <input type="text" class="form-control" name="seller_address" value="{{$unit->seller_address}}" data-inputmask="'mask' : '9999-9999-9999-9999'">
              <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-md-3 col-sm-3 col-xs-3">Bill maker </label>
            <div class="col-md-9 col-sm-9 col-xs-9">
              <input type="text" class="form-control" name="user_id" value="{{$unit->user_id}}" data-inputmask="'mask' : '9999-9999-9999-9999'">
              <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-md-3 col-sm-3 col-xs-3">Customer </label>
            <div class="col-md-9 col-sm-9 col-xs-9">
              <input type="text" class="form-control" name="id" value="{{$unit->id}}" data-inputmask="'mask' : '9999-9999-9999-9999'">
              <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
            </div>
          </div>
          <div class="ln_solid"></div>

          <!-- <div class="form-group row">
            <div class="col-md-9 offset-md-3">
              <button type="submit" class="btn btn-primary">Cancel</button>
              <button type="submit" class="btn btn-success">Submit</button>
            </div>
          </div> -->
          @endforeach
        </form>
      </div>
    </div>
  </div>
  <!-- /form input mask -->
</div>
<!-- /page content -->
@endsection