@extends('admin.layout.layout')


@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Form Design <small>different form elements</small></h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <br>
          <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" action="{{route('product.update',$product->id)}}" method="post" enctype="multipart/form-data">
@csrf
          
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cat-name">Sub Category Of<span class="reqsuired"></span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <select type="text" id="cat-name" name="category_id"  class="form-control col-md-7 col-xs-12">
                    <option value="">No Sub Category</option>
                    @foreach ($categories as $category)
                    
                    <option value="{{$category->id}}" @if($product->category_id == $category->id) selected @endif>{{$category->name}}</option>
                    @endforeach
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="product_name">Product Name<span class="required"></span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="product_name" required="required" name="name" class="form-control col-md-7 col-xs-12" placeholder="Product Name" value="{{$product->name}}">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="product_price">Product Price<span class="required"></span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="product_price" required="required" name="price" class="form-control col-md-7 col-xs-12" placeholder="Product Price" value="{{$product->price}}">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Product_Img">Image<span class="required"></span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="file" id="Product_Img" required="required" name="product_img" class="form-control col-md-7 col-xs-12  " placeholder="Category Name">
                {{-- <img src="{{asset('uploads/products/'.$product->image)}}" alt="{{$product->name." image "}}" style="width:100px;height:80px;margin-top:5px;" class="img-responsive mt-3"> --}}
                <img src="{{asset('uploads/products/'.$product->image)}}" alt="{{$product->name." image "}}" style="width:100px;height:80px;margin-top:15px;" >
              
              </div>
         
            </div>
      
           
            <div class="ln_solid"></div>
            <div class="form-group">
              <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                {{-- <button class="btn btn-primary" type="button">Cancel</button>
                <button class="btn btn-primary" type="reset">Reset</button> --}}
                <input value="Submit" type="submit" class="btn btn-success">
              </div>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
@endsection