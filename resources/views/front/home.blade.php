@extends('front.layout.layout');

@section('slider')
<div id="carouselBlk">
	<div id="myCarousel" class="carousel slide">
		<div class="carousel-inner">
		  <div class="item active">
		  <div class="container">
			<a href="register.html"><img style="width:100%" src="{{asset('themes/images/carousel/1.png')}}" alt="special offers"/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
		  </div>
		  </div>
		  <div class="item">
		  <div class="container">
			<a href="register.html"><img style="width:100%" src="{{asset('themes/images/carousel/2.png')}}" alt=""/></a>
				<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
		  </div>
		  </div>
		  <div class="item">
		  <div class="container">
			<a href="register.html"><img src="{{asset('themes/images/carousel/3.png')}}" alt=""/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
			
		  </div>
		  </div>
		   <div class="item">
		   <div class="container">
			<a href="register.html"><img src="{{asset('themes/images/carousel/4.png')}}" alt=""/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
		   
		  </div>
		  </div>
		   <div class="item">
		   <div class="container">
			<a href="register.html"><img src="{{asset('themes/images/carousel/5.png')}}" alt=""/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
			</div>
		  </div>
		  </div>
		   <div class="item">
		   <div class="container">
			<a href="register.html"><img src="{{asset('themes/images/carousel/6.png')}}" alt=""/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
		  </div>
		  </div>
		</div>
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
	  </div> 
</div>    
@endsection

@section('content')
<div class="span9">		
    <div class="well well-small">
    <h4>Featured Products <small class="pull-right">200+ featured products</small></h4>
    <div class="row-fluid">
    <div id="featured" class="carousel slide">
    <div class="carousel-inner">
      <div class="item active">
      <ul class="thumbnails">
        <li class="span3">
          <div class="thumbnail">
          <i class="tag"></i>
            <a href="product_details.html"><img src="{{asset('themes/images/products/b1.jpg')}}" alt=""></a>
            <div class="caption">
              <h5>Product name</h5>
              <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
            </div>
          </div>
        </li>
        <li class="span3">
          <div class="thumbnail">
          <i class="tag"></i>
            <a href="product_details.html"><img src="{{asset('themes/images/products/b2.jpg')}}" alt=""></a>
            <div class="caption">
              <h5>Product name</h5>
              <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
            </div>
          </div>
        </li>
        <li class="span3">
          <div class="thumbnail">
          <i class="tag"></i>
            <a href="product_details.html"><img src="{{asset('themes/images/products/b3.jpg')}}" alt=""></a>
            <div class="caption">
              <h5>Product name</h5>
               <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
            </div>
          </div>
        </li>
        <li class="span3">
          <div class="thumbnail">
          <i class="tag"></i>
            <a href="product_details.html"><img src="{{asset('themes/images/products/b4.jpg')}}" alt=""></a>
            <div class="caption">
              <h5>Product name</h5>
               <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
            </div>
          </div>
        </li>
      </ul>
      </div>
       <div class="item">
      <ul class="thumbnails">
        <li class="span3">
          <div class="thumbnail">
          <i class="tag"></i>
            <a href="product_details.html"><img src="{{asset('themes/images/products/5.jpg')}}" alt=""></a>
            <div class="caption">
              <h5>Product name</h5>
              <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
            </div>
          </div>
        </li>
        <li class="span3">
          <div class="thumbnail">
          <i class="tag"></i>
            <a href="product_details.html"><img src="{{asset('themes/images/products/6.jpg')}}" alt=""></a>
            <div class="caption">
              <h5>Product name</h5>
              <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
            </div>
          </div>
        </li>
        <li class="span3">
          <div class="thumbnail">
            <a href="product_details.html"><img src="{{asset('themes/images/products/7.jpg')}}" alt=""></a>
            <div class="caption">
              <h5>Product name</h5>
               <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
            </div>
          </div>
        </li>
        <li class="span3">
          <div class="thumbnail">
            <a href="product_details.html"><img src="{{asset('themes/images/products/8.jpg')}}" alt=""></a>
            <div class="caption">
              <h5>Product name</h5>
               <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
            </div>
          </div>
        </li>
      </ul>
      </div>
       <div class="item">
      <ul class="thumbnails">
        <li class="span3">
          <div class="thumbnail">
            <a href="product_details.html"><img src="{{asset('themes/images/products/9.jpg')}}" alt=""></a>
            <div class="caption">
              <h5>Product name</h5>
              <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
            </div>
          </div>
        </li>
        <li class="span3">
          <div class="thumbnail">
            <a href="product_details.html"><img src="{{asset('themes/images/products/10.jpg')}}" alt=""></a>
            <div class="caption">
              <h5>Product name</h5>
              <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
            </div>
          </div>
        </li>
        <li class="span3">
          <div class="thumbnail">
            <a href="product_details.html"><img src="{{asset('themes/images/products/11.jpg')}}" alt=""></a>
            <div class="caption">
              <h5>Product name</h5>
               <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
            </div>
          </div>
        </li>
        <li class="span3">
          <div class="thumbnail">
            <a href="product_details.html"><img src="{{asset('themes/images/products/1.jpg')}}" alt=""></a>
            <div class="caption">
              <h5>Product name</h5>
               <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
            </div>
          </div>
        </li>
      </ul>
      </div>
       <div class="item">
      <ul class="thumbnails">
        <li class="span3">
          <div class="thumbnail">
            <a href="product_details.html"><img src="{{asset('themes/images/products/2.jpg')}}" alt=""></a>
            <div class="caption">
              <h5>Product name</h5>
              <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
            </div>
          </div>
        </li>
        <li class="span3">
          <div class="thumbnail">
            <a href="product_details.html"><img src="{{asset('themes/images/products/3.jpg')}}" alt=""></a>
            <div class="caption">
              <h5>Product name</h5>
              <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
            </div>
          </div>
        </li>
        <li class="span3">
          <div class="thumbnail">
            <a href="product_details.html"><img src="{{asset('themes/images/products/4.jpg')}}" alt=""></a>
            <div class="caption">
              <h5>Product name</h5>
               <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
            </div>
          </div>
        </li>
        <li class="span3">
          <div class="thumbnail">
            <a href="product_details.html"><img src="{{asset('themes/images/products/5.jpg')}}" alt=""></a>
            <div class="caption">
              <h5>Product name</h5>
               <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
            </div>
          </div>
        </li>
      </ul>
      </div>
      </div>
      <a class="left carousel-control" href="#featured" data-slide="prev">‹</a>
      <a class="right carousel-control" href="#featured" data-slide="next">›</a>
      </div>
      </div>
</div>
<h4>Latest Products </h4>
      <ul class="thumbnails">
        <li class="span3">
          <div class="thumbnail">
            <a  href="product_details.html"><img src="{{asset('themes/images/products/6.jpg')}}" alt=""/></a>
            <div class="caption">
              <h5>Product name</h5>
              <p> 
                Lorem Ipsum is simply dummy text. 
              </p>
             
              <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
            </div>
          </div>
        </li>
        <li class="span3">
          <div class="thumbnail">
            <a  href="product_details.html"><img src="{{asset('themes/images/products/7.jpg')}}" alt=""/></a>
            <div class="caption">
              <h5>Product name</h5>
              <p> 
                Lorem Ipsum is simply dummy text. 
              </p>
             <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
            </div>
          </div>
        </li>
        <li class="span3">
          <div class="thumbnail">
            <a  href="product_details.html"><img src="{{asset('themes/images/products/8.jpg')}}" alt=""/></a>
            <div class="caption">
              <h5>Product name</h5>
              <p> 
                Lorem Ipsum is simply dummy text. 
              </p>
               <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
            </div>
          </div>
        </li>
        <li class="span3">
          <div class="thumbnail">
            <a  href="product_details.html"><img src="{{asset('themes/images/products/9.jpg')}}" alt=""/></a>
            <div class="caption">
              <h5>Product name</h5>
              <p> 
                Lorem Ipsum is simply dummy text. 
              </p>
              <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
            </div>
          </div>
        </li>
        <li class="span3">
          <div class="thumbnail">
            <a  href="product_details.html"><img src="{{asset('themes/images/products/10.jpg')}}" alt=""/></a>
            <div class="caption">
              <h5>Product name</h5>
              <p> 
                Lorem Ipsum is simply dummy text. 
              </p>
              <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
            </div>
          </div>
        </li>
        <li class="span3">
          <div class="thumbnail">
            <a  href="product_details.html"><img src="{{asset('themes/images/products/11.jpg')}}" alt=""/></a>
            <div class="caption">
              <h5>Product name</h5>
              <p> 
                Lorem Ipsum is simply dummy text. 
              </p>
               <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
            </div>
          </div>
        </li>
      </ul>	

</div>
@endsection