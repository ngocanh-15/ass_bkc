@extends('bkc')
@section('bkc')
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3> <small> products </small> </h3>
      </div>
      <form method="GET">
        <div class="title_right">
          <div class="col-md-5 col-sm-5   form-group pull-right top_search">
            <div class="input-group">
              <input type="text" name="keyword" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                  <button class="btn btn-default" type="submit">Go!</button>
              </span>
            </div>
          </div>
        </div>
      </form>
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12">
        <div class="x_panel">
          <div class="x_title">
            <div class="clearfix"></div>
          </div>
          <div class="x_content">

            <div class="row">
            @foreach($product as $product)
              <div class="col-md-55">
                <div class="thumbnail">
                  <div class="image view view-first">
                    <img style="width: 100%; display: block;" src="{{asset('product/')}}/{{$product->image}}" alt="image" />
                    <div class="mask">
                      <p>{{$product->name }}</p>
                      <div class="tools tools-bottom">
                        <p>{{$product->product_id }} - {{$product->categories_id }}</p>
                      </div>
                    </div>
                  </div>
                  <div class="caption">
                    <p>{{$product->unit_price }}$</p>
                  </div>
                </div>
              </div>
            @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- /page content -->
@endsection