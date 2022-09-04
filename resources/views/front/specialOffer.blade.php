@extends('front.layout.layout')
@section('content')
<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.html">Home</a> <span class="divider">/</span></li>
		<li class="active">Special offers</li>
    </ul>
	<h4> 20% Discount Special offer<small class="pull-right"> 40 products are available </small></h4>	
	<hr class="soft"/>
	<form class="form-horizontal span6">
		<div class="control-group">
		  <label class="control-label alignL">Sort By </label>
			<select>
              <option>Priduct name A - Z</option>
              <option>Priduct name Z - A</option>
              <option>Priduct Stoke</option>
              <option>Price Lowest first</option>
            </select>
		</div>
	  </form>
	<div id="myTab" class="pull-right">
	 <a href="#listView" data-toggle="tab"><span class="btn btn-large"><i class="icon-list"></i></span></a>
	 <a href="#blockView" data-toggle="tab"><span class="btn btn-large btn-primary"><i class="icon-th-large"></i></span></a>
	</div>
<br class="clr"/>
<div class="tab-content">
	<div class="tab-pane" id="listView">
		<div class="row">	  
			<div class="span2">
			<img src="themes/images/products/b1.jpg" alt=""/>
			</div>
			<div class="span4">
				<h3>New | Available</h3>				
				<hr class="soft"/>
				<h5>Product Name </h5>
				<p>
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s ...
				</p>
				<a class="btn btn-small pull-right" href="product_details.html">View Details</a>
				<br class="clr"/>
			</div>
			<div class="span3 alignR">
			<form class="form-horizontal qtyFrm">
			<h3> $110.00</h3>
			<label class="checkbox">
				<input type="checkbox">  Adds product to compair
			</label><br/>
			  <a href="product_details.html" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
			  <a href="product_details.html" class="btn btn-large"><i class="icon-zoom-in"></i></a>
				</form>
			</div>
	</div>
	<hr class="soft"/>
	<div class="row">	  
			<div class="span2">
				<img src="themes/images/products/b2.jpg" alt=""/>
			</div>
			<div class="span4">
				<h3>New | Available</h3>				
				<hr class="soft"/>
				<h5>Product Name </h5>
				<p>
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s ...
				</p>
				<a class="btn btn-small pull-right" href="product_details.html">View Details</a>
				<br class="clr"/>
			</div>
			<div class="span3 alignR">
			<form class="form-horizontal qtyFrm">
				<h3> $110.00</h3>
				<label class="checkbox">
				<input type="checkbox">  Adds product to compair
				</label><br/>
				<a href="product_details.html" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
				<a href="product_details.html" class="btn btn-large"><i class="icon-zoom-in"></i></a>
			</form>
			</div>
	</div>
	<hr class="soft"/>
	<div class="row">	  
			<div class="span2">
				<img src="themes/images/products/b3.jpg" alt=""/>
			</div>
			<div class="span4">
				<h3>New | Available</h3>				
				<hr class="soft"/>
				<h5>Product Name </h5>
				<p>
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s ...
				</p>
				<a class="btn btn-small pull-right" href="product_details.html">View Details</a>
				<br class="clr"/>
			</div>
			<div class="span3 alignR">
			<form class="form-horizontal qtyFrm">
			<h3> $110.00</h3>
			<label class="checkbox">
			<input type="checkbox">  Adds product to compair
			</label><br/>
			  <a href="product_details.html" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
			  <a href="product_details.html" class="btn btn-large"><i class="icon-zoom-in"></i></a>
			</form>
			</div>
	</div>
	<hr class="soft"/>
	<div class="row">	  
			<div class="span2">
				<img src="themes/images/products/b4.jpg" alt=""/>
			</div>
			<div class="span4">
				<h3>New | Available</h3>				
				<hr class="soft"/>
				<h5>Product Name </h5>
				<p>
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s ...
				</p>
				<a class="btn btn-small pull-right" href="product_details.html">View Details</a>
				<br class="clr"/>
			</div>
			<div class="span3 alignR">
				<form class="form-horizontal qtyFrm">
				<h3> $110.00</h3>
				<label class="checkbox">
				<input type="checkbox">  Adds product to compair
				</label><br/>
				<a href="product_details.html" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
				<a href="product_details.html" class="btn btn-large"><i class="icon-zoom-in"></i></a>
				</form>
			</div>
	</div>
	
	<hr class="soft"/>
	<div class="row">	  
			<div class="span2">
				<img src="themes/images/products/6.jpg" alt=""/>
			</div>
			<div class="span4">
				<h3>New | Available</h3>				
				<hr class="soft"/>
				<h5>Product Name </h5>
				<p>
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s ...
				</p>
				<a class="btn btn-small pull-right" href="product_details.html">View Details</a>
				<br class="clr"/>
			</div>
			<div class="span3 alignR">
				<form class="form-horizontal qtyFrm">
				<h3> $222.00</h3>
				<label class="checkbox">
				<input type="checkbox">  Adds product to compair
				</label><br/>
				<a href="product_details.html" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
				<a href="product_details.html" class="btn btn-large"><i class="icon-zoom-in"></i></a>
				</form>
			</div>
	</div>
	<hr class="soft"/>
		<div class="row">	  
			<div class="span2">
				<img src="themes/images/products/7.jpg" alt=""/>
			</div>
			<div class="span4">
				<h3>New | Available</h3>				
				<hr class="soft"/>
				<h5>Product Name </h5>
				<p>
				
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s ...
				</p>
				<a class="btn btn-small pull-right" href="product_details.html">View Details</a>
				<br class="clr"/>
			</div>
			<div class="span3 alignR">
				<form class="form-horizontal qtyFrm">
				<h3> $222.00</h3>
				<label class="checkbox">
				<input type="checkbox">  Adds product to compair
				</label><br/>
				<a href="product_details.html" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
				<a href="product_details.html" class="btn btn-large"><i class="icon-zoom-in"></i></a>
				</form>
			</div>
		</div>
	<hr class="soft"/>
	</div>

	<div class="tab-pane  active" id="blockView">
		<ul class="thumbnails">
			<li class="span3">
			  <div class="thumbnail">
				<a href="product_details.html"><img src="themes/images/products/b1.jpg" alt=""/></a>
				<div class="caption">
				  <h5>Manicure &amp; Pedicure</h5>
				  <p> 
					Lorem Ipsum is simply dummy text. 
				  </p>
				  <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;110.00</a></h4>
				</div>
			  </div>
			</li>
			<li class="span3">
			  <div class="thumbnail">
				<a href="product_details.html"><img src="themes/images/products/b2.jpg" alt=""/></a>
				<div class="caption">
				  <h5>Manicure &amp; Pedicure</h5>
				  <p> 
					Lorem Ipsum is simply dummy text. 
				  </p>
				  <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;110.00</a></h4>
				</div>
			  </div>
			</li>
			<li class="span3">
			  <div class="thumbnail">
				<a href="product_details.html"><img src="themes/images/products/b3.jpg" alt=""/></a>
				<div class="caption">
				  <h5>Manicure &amp; Pedicure</h5>
				  <p> 
					Lorem Ipsum is simply dummy text. 
				  </p>
				   <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;110.00</a></h4>
				</div>
			  </div>
			</li>
			<li class="span3">
			  <div class="thumbnail">
				<a href="product_details.html"><img src="themes/images/products/b4.jpg" alt=""/></a>
				<div class="caption">
				  <h5>Manicure &amp; Pedicure</h5>
				  <p> 
					Lorem Ipsum is simply dummy text. 
				  </p>
				   <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;110.00</a></h4>
				</div>
			  </div>
			</li>
			<li class="span3">
			  <div class="thumbnail">
				<a href="product_details.html"><img src="themes/images/products/9.jpg" alt=""/></a>
				<div class="caption">
				  <h5>Manicure &amp; Pedicure</h5>
				  <p> 
					Lorem Ipsum is simply dummy text. 
				  </p>
				   <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;222.00</a></h4>
				</div>
			  </div>
			</li>
			<li class="span3">
			  <div class="thumbnail">
				<a href="product_details.html"><img src="themes/images/products/4.jpg" alt=""/></a>
				<div class="caption">
				  <h5>Manicure &amp; Pedicure</h5>
				  <p> 
					Lorem Ipsum is simply dummy text. 
				  </p>
				   <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;222.00</a></h4>
				</div>
			  </div>
			</li>
			<li class="span3">
			  <div class="thumbnail">
				<a href="product_details.html"><img src="themes/images/products/6.jpg" alt=""/></a>
				<div class="caption">
				  <h5>Manicure &amp; Pedicure</h5>
				  <p> 
					Lorem Ipsum is simply dummy text. 
				  </p>
				   <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;222.00</a></h4>
				</div>
			  </div>
			</li>
			<li class="span3">
			  <div class="thumbnail">
				<a href="product_details.html"><img src="themes/images/products/7.jpg" alt=""/></a>
				<div class="caption">
				  <h5>Manicure &amp; Pedicure</h5>
				  <p> 
					Lorem Ipsum is simply dummy text. 
				  </p>
				   <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;222.00</a></h4>
				</div>
			  </div>
			</li>
			<li class="span3">
			  <div class="thumbnail">
				<a href="product_details.html"><img src="themes/images/products/8.jpg" alt=""/></a>
				<div class="caption">
				  <h5>Manicure &amp; Pedicure</h5>
				  <p> 
					Lorem Ipsum is simply dummy text. 
				  </p>
				   <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;222.00</a></h4>
				</div>
			  </div>
			</li>
		  </ul>


	<hr class="soft"/>
	</div>
</div>
<a href="compair.html" class="btn btn-large pull-right">Compair Product</a>
	<div class="pagination">
		<ul>
		<li><a href="#">&lsaquo;</a></li>
		<li><a href="#">1</a></li>
		<li><a href="#">2</a></li>
		<li><a href="#">3</a></li>
		<li><a href="#">4</a></li>
		<li><a href="#">...</a></li>
		<li><a href="#">&rsaquo;</a></li>
		</ul>
	</div>
<br class="clr"/>
</div>
@endsection