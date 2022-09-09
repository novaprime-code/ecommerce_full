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
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Settings 1</a>
                </li>
                <li><a href="#">Settings 2</a>
                </li>
              </ul>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <br>
          @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
          <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" action="{{route('category.store')}}" method="post">
@csrf
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Category Name<span class="required"></span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="cat-name" required="required" name="name" class="form-control col-md-7 col-xs-12" placeholder="Category Name">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Sub Category Of<span class="reqsuired"></span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <select type="text" id="first-name" name="category_id"  class="form-control col-md-7 col-xs-12">
                    <option value="">No Sub Category</option>
                    @foreach ($categories as $category)
                    
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
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