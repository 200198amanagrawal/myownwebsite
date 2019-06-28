<html>
<head>
	<meta charset="utf-8">
    <link rel="shortcut icon" href="themes/images/ico/favicon.ico">
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
        
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="1.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="2.js"></script>
  <script type="text/javascript">
    $('.multiple-items').slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 3
});
  </script>
	<link rel="stylesheet" href="1.css">
</head>
<body  style="background-color: white;">
<div class="container-fluid" id="top">
    <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">MyownWebsite</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <form class="navbar-form navbar-left">
       
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" name="search" style="width:500px">
        <div class="input-group-btn">
          <a href="search.php" class="btn btn-default" role="button" style="background-color:yellow;">
            <i class="glyphicon glyphicon-search" style="height:20px;"></i>
          </a>
        </div>
      </div>
    </form>
    <ul class="nav navbar-nav">
      <li><a href="#" style="margin-right: 10px;font-size: 18px;"><?php 
      session_start();
      echo $_SESSION["name"];?></a></li>
    </ul>
    <ul class="nav navbar-nav" style="color:white;">
        <li><a href="#" style="margin-right: 0px;font-size: 18px;">Any help needed</a></li>
        <li><!--<span class="glyphicon glyphicon-shopping-cart" style="margin:12px;font-size: 20px;"></span>--><a href="add.php">Your order</a></li>
        <li><span class="glyphicon glyphicon-log-out" id="logout" data-toggle="modal" data-target="#myModal2" style="margin:12px;padding-top: 5px;"></span>Logout</li>

    </ul>
</div>
  </div>
</nav>
</div>
<br>
<br>
<br>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li class="dropdown mega-dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" href="#">Electronics <span class="caret"></span></a>
        <ul class="dropdown-menu mega-dropdown-menu row">
          <li class="col-sm-3">
            <ul>
              <li class="dropdown-header">New in Stores</li>                            
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                              <div class="carousel-inner">
                                <div class="item active">
                                    <a href="#"><img src="http://placehold.it/254x150/3498db/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 1"></a>
                                    <h4><small>Summer dress floral prints</small></h4>                                        
                                    <button class="btn btn-primary" type="button">49,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>       
                                </div><!-- End Item -->
                                <div class="item">
                                    <a href="#"><img src="http://placehold.it/254x150/ef5e55/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 2"></a>
                                    <h4><small>Gold sandals with shiny touch</small></h4>                                        
                                    <button class="btn btn-primary" type="button">9,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>        
                                </div><!-- End Item -->
                                <div class="item">
                                    <a href="#"><img src="http://placehold.it/254x150/2ecc71/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 3"></a>
                                    <h4><small>Denin jacket stamped</small></h4>                                        
                                    <button class="btn btn-primary" type="button">49,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>      
                                </div><!-- End Item -->                                
                              </div><!-- End Carousel Inner -->
                            </div><!-- /.carousel -->
                            <li class="divider"></li>
                            <li><a href="#">View all Collection <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
            </ul>
          </li>
          <li class="col-sm-3">
            <ul>
              <li class="dropdown-header">Mobiles</li>
              <li><a href="#">Unique Features</a></li>
              <li><a href="#">Covers </a></li>
              <li><a href="#">All new ranges</a></li>
              <li><a href="#">Newsletter Form</a></li>
              <li><a href="#">Amazing offers</a></li>
              <li class="divider"></li>
              <li class="dropdown-header">Refrigerators</li>
              <li><a href="#">Amazing offers</a></li>
              <li><a href="#">All new ranges</a></li>
              <li><a href="#">All brands</a></li>
              <li><a href="#">All features</a></li>
            </ul>
          </li>
          <li class="col-sm-3">
            <ul>
              <li class="dropdown-header">Laptops</li>
              <li><a href="#">Easy to customize</a></li>
              <li><a href="#">Glyphicons</a></li>
              <li><a href="#">Pull Right Elements</a></li>
              <li class="divider"></li>
              <li class="dropdown-header">Others</li>
              <li><a href="#">Coloured Headers</a></li>
              <li><a href="#">Primary Buttons & Default</a></li>
              <li><a href="#">Calls to action</a></li>
            </ul>
          </li>
          <li class="col-sm-3">
            <ul>
              <li class="dropdown-header">Accessories</li>
              <li><a href="#">Earphones</a></li>
              <li><a href="#">Headsets</a></li>
              <li><a href="#">Responsive Dropdown </a></li>             
              <li class="divider"></li>                                                    
            </ul>
          </li>
        </ul>
      </li>
      <li class="dropdown mega-dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" href="#">For Women<span class="caret"></span></a>
        <ul class="dropdown-menu mega-dropdown-menu row">
          <li class="col-sm-3">
            <ul>
              <li class="dropdown-header">New in Stores</li>                            
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                              <div class="carousel-inner">
                                <div class="item active">
                                    <a href="#"><img src="http://placehold.it/254x150/3498db/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 1"></a>
                                    <h4><small>Summer dress floral prints</small></h4>                                        
                                    <button class="btn btn-primary" type="button">49,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>       
                                </div><!-- End Item -->
                                <div class="item">
                                    <a href="#"><img src="http://placehold.it/254x150/ef5e55/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 2"></a>
                                    <h4><small>Gold sandals with shiny touch</small></h4>                                        
                                    <button class="btn btn-primary" type="button">9,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>        
                                </div><!-- End Item -->
                                <div class="item">
                                    <a href="#"><img src="http://placehold.it/254x150/2ecc71/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 3"></a>
                                    <h4><small>Denin jacket stamped</small></h4>                                        
                                    <button class="btn btn-primary" type="button">49,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>      
                                </div><!-- End Item -->                                
                              </div><!-- End Carousel Inner -->
                            </div><!-- /.carousel -->
                            <li class="divider"></li>
                            <li><a href="#">View all Collection <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
            </ul>
          </li>
          <li class="col-sm-3">
            <ul>
              <li class="dropdown-header">Your Eyes</li>
              <li><a href="#">Unique Features</a></li>
              <li><a href="#">Covers </a></li>
              <li><a href="#">All new ranges</a></li>
              <li><a href="#">Newsletter Form</a></li>
              <li><a href="#">Amazing offers</a></li>
              <li class="divider"></li>
              <li class="dropdown-header">Tops</li>
              <li><a href="#">Amazing offers</a></li>
              <li><a href="#">All new ranges</a></li>
              <li><a href="#">All brands</a></li>
              <li><a href="#">All features</a></li>
            </ul>
          </li>
          <li class="col-sm-3">
            <ul>
              <li class="dropdown-header">Jeans And Leggings</li>
              <li><a href="#">Easy to customize</a></li>
              <li><a href="#">Glyphicons</a></li>
              <li><a href="#">Pull Right Elements</a></li>
              <li class="divider"></li>
              <li class="dropdown-header">Others</li>
              <li><a href="#">Coloured Headers</a></li>
              <li><a href="#">Primary Buttons & Default</a></li>
              <li><a href="#">Calls to action</a></li>
            </ul>
          </li>
          <li class="col-sm-3">
            <ul>
              <li class="dropdown-header">Accessories</li>
              <li><a href="#">Earphones</a></li>
              <li><a href="#">Headsets</a></li>
              <li><a href="#">Responsive Dropdown </a></li>             
              <li class="divider"></li>                                                    
            </ul>
          </li>
        </ul>
      </li>
      <li class="dropdown mega-dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" href="#">For Mens <span class="caret"></span></a>
        <ul class="dropdown-menu mega-dropdown-menu row">
          <li class="col-sm-3">
            <ul>
              <li class="dropdown-header">New in Stores</li>                            
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                              <div class="carousel-inner">
                                <div class="item active">
                                    <a href="#"><img src="http://placehold.it/254x150/3498db/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 1"></a>
                                    <h4><small>Summer dress floral prints</small></h4>                                        
                                    <button class="btn btn-primary" type="button">49,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>       
                                </div><!-- End Item -->
                                <div class="item">
                                    <a href="#"><img src="http://placehold.it/254x150/ef5e55/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 2"></a>
                                    <h4><small>Gold sandals with shiny touch</small></h4>                                        
                                    <button class="btn btn-primary" type="button">9,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>        
                                </div><!-- End Item -->
                                <div class="item">
                                    <a href="#"><img src="http://placehold.it/254x150/2ecc71/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 3"></a>
                                    <h4><small>Denin jacket stamped</small></h4>                                        
                                    <button class="btn btn-primary" type="button">49,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>      
                                </div><!-- End Item -->                                
                              </div><!-- End Carousel Inner -->
                            </div><!-- /.carousel -->
                            <li class="divider"></li>
                            <li><a href="#">View all Collection <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
            </ul>
          </li>
          <li class="col-sm-3">
            <ul>
              <li class="dropdown-header">Perfect Perfumes</li>
              <li><a href="#">Unique Features</a></li>
              <li><a href="#">Covers </a></li>
              <li><a href="#">All new ranges</a></li>
              <li><a href="#">Newsletter Form</a></li>
              <li><a href="#">Amazing offers</a></li>
              <li class="divider"></li>
              <li class="dropdown-header">Your Footwear</li>
              <li><a href="#">Amazing offers</a></li>
              <li><a href="#">All new ranges</a></li>
              <li><a href="#">All brands</a></li>
              <li><a href="#">All features</a></li>
            </ul>
          </li>
          <li class="col-sm-3">
            <ul>
              <li class="dropdown-header">Laptops</li>
              <li><a href="#">Easy to customize</a></li>
              <li><a href="#">Glyphicons</a></li>
              <li><a href="#">Pull Right Elements</a></li>
              <li class="divider"></li>
              <li class="dropdown-header">Others</li>
              <li><a href="#">Coloured Headers</a></li>
              <li><a href="#">Primary Buttons & Default</a></li>
              <li><a href="#">Calls to action</a></li>
            </ul>
          </li>
          <li class="col-sm-3">
            <ul>
              <li class="dropdown-header">Accessories</li>
              <li><a href="#">Earphones</a></li>
              <li><a href="#">Headsets</a></li>
              <li><a href="#">Responsive Dropdown </a></li>             
              <li class="divider"></li>                                                    
            </ul>
          </li>
        </ul>
      </li>
      <li class="dropdown mega-dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" href="#">Babies and kids <span class="caret"></span></a>
        <ul class="dropdown-menu mega-dropdown-menu row">
          <li class="col-sm-3">
            <ul>
              <li class="dropdown-header">New in Stores</li>                            
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                              <div class="carousel-inner">
                                <div class="item active">
                                    <a href="#"><img src="http://placehold.it/254x150/3498db/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 1"></a>
                                    <h4><small>Summer dress floral prints</small></h4>                                        
                                    <button class="btn btn-primary" type="button">49,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>       
                                </div><!-- End Item -->
                                <div class="item">
                                    <a href="#"><img src="http://placehold.it/254x150/ef5e55/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 2"></a>
                                    <h4><small>Gold sandals with shiny touch</small></h4>                                        
                                    <button class="btn btn-primary" type="button">9,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>        
                                </div><!-- End Item -->
                                <div class="item">
                                    <a href="#"><img src="http://placehold.it/254x150/2ecc71/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 3"></a>
                                    <h4><small>Denin jacket stamped</small></h4>                                        
                                    <button class="btn btn-primary" type="button">49,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>      
                                </div><!-- End Item -->                                
                              </div><!-- End Carousel Inner -->
                            </div><!-- /.carousel -->
                            <li class="divider"></li>
                            <li><a href="#">View all Collection <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
            </ul>
          </li>
          <li class="col-sm-3">
            <ul>
              <li class="dropdown-header">Diappers</li>
              <li><a href="#">Unique Features</a></li>
              <li><a href="#">Covers </a></li>
              <li><a href="#">All new ranges</a></li>
              <li><a href="#">Newsletter Form</a></li>
              <li><a href="#">Amazing offers</a></li>
              <li class="divider"></li>
              <li class="dropdown-header">Refrigerators</li>
              <li><a href="#">Amazing offers</a></li>
              <li><a href="#">All new ranges</a></li>
              <li><a href="#">All brands</a></li>
              <li><a href="#">All features</a></li>
            </ul>
          </li>
          <li class="col-sm-3">
            <ul>
              <li class="dropdown-header">Laptops</li>
              <li><a href="#">Easy to customize</a></li>
              <li><a href="#">Glyphicons</a></li>
              <li><a href="#">Pull Right Elements</a></li>
              <li class="divider"></li>
              <li class="dropdown-header">Others</li>
              <li><a href="#">Coloured Headers</a></li>
              <li><a href="#">Primary Buttons & Default</a></li>
              <li><a href="#">Calls to action</a></li>
            </ul>
          </li>
          <li class="col-sm-3">
            <ul>
              <li class="dropdown-header">Accessories</li>
              <li><a href="#">Earphones</a></li>
              <li><a href="#">Headsets</a></li>
              <li><a href="#">Responsive Dropdown </a></li>             
              <li class="divider"></li>                                                    
            </ul>
          </li>
        </ul>
      </li>
      <li class="dropdown mega-dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" href="#">House and Furnitures <span class="caret"></span></a>
        <ul class="dropdown-menu mega-dropdown-menu row">
          <li class="col-sm-3">
            <ul>
              <li class="dropdown-header">New in Stores</li>                            
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                              <div class="carousel-inner">
                                <div class="item active">
                                    <a href="#"><img src="http://placehold.it/254x150/3498db/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 1"></a>
                                    <h4><small>Summer dress floral prints</small></h4>                                        
                                    <button class="btn btn-primary" type="button">49,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>       
                                </div><!-- End Item -->
                                <div class="item">
                                    <a href="#"><img src="http://placehold.it/254x150/ef5e55/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 2"></a>
                                    <h4><small>Gold sandals with shiny touch</small></h4>                                        
                                    <button class="btn btn-primary" type="button">9,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>        
                                </div><!-- End Item -->
                                <div class="item">
                                    <a href="#"><img src="http://placehold.it/254x150/2ecc71/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 3"></a>
                                    <h4><small>Denin jacket stamped</small></h4>                                        
                                    <button class="btn btn-primary" type="button">49,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>      
                                </div><!-- End Item -->                                
                              </div><!-- End Carousel Inner -->
                            </div><!-- /.carousel -->
                            <li class="divider"></li>
                            <li><a href="#">View all Collection <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
            </ul>
          </li>
          <li class="col-sm-3">
            <ul>
              <li class="dropdown-header">Mobiles</li>
              <li><a href="#">Unique Features</a></li>
              <li><a href="#">Covers </a></li>
              <li><a href="#">All new ranges</a></li>
              <li><a href="#">Newsletter Form</a></li>
              <li><a href="#">Amazing offers</a></li>
              <li class="divider"></li>
              <li class="dropdown-header">Refrigerators</li>
              <li><a href="#">Amazing offers</a></li>
              <li><a href="#">All new ranges</a></li>
              <li><a href="#">All brands</a></li>
              <li><a href="#">All features</a></li>
            </ul>
          </li>
          <li class="col-sm-3">
            <ul>
              <li class="dropdown-header">Laptops</li>
              <li><a href="#">Easy to customize</a></li>
              <li><a href="#">Glyphicons</a></li>
              <li><a href="#">Pull Right Elements</a></li>
              <li class="divider"></li>
              <li class="dropdown-header">Others</li>
              <li><a href="#">Coloured Headers</a></li>
              <li><a href="#">Primary Buttons & Default</a></li>
              <li><a href="#">Calls to action</a></li>
            </ul>
          </li>
          <li class="col-sm-3">
            <ul>
              <li class="dropdown-header">Accessories</li>
              <li><a href="#">Earphones</a></li>
              <li><a href="#">Headsets</a></li>
              <li><a href="#">Responsive Dropdown </a></li>             
              <li class="divider"></li>                                                    
            </ul>
          </li>
        </ul>
      </li>
      <li class="dropdown mega-dropdown" style="margin-left:40px;"><a href="#" class="dropdown-toggle" data-toggle="dropdown" href="#">Others<span class="caret"></span></a>
        <ul class="dropdown-menu mega-dropdown-menu row">
          <li class="col-sm-3">
            <ul>
              <li class="dropdown-header">New in Stores</li>                            
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                              <div class="carousel-inner">
                                <div class="item active">
                                    <a href="#"><img src="http://placehold.it/254x150/3498db/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 1"></a>
                                    <h4><small>Summer dress floral prints</small></h4>                                        
                                    <button class="btn btn-primary" type="button">49,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>       
                                </div><!-- End Item -->
                                <div class="item">
                                    <a href="#"><img src="http://placehold.it/254x150/ef5e55/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 2"></a>
                                    <h4><small>Gold sandals with shiny touch</small></h4>                                        
                                    <button class="btn btn-primary" type="button">9,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>        
                                </div><!-- End Item -->
                                <div class="item">
                                    <a href="#"><img src="http://placehold.it/254x150/2ecc71/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 3"></a>
                                    <h4><small>Denin jacket stamped</small></h4>                                        
                                    <button class="btn btn-primary" type="button">49,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>      
                                </div><!-- End Item -->                                
                              </div><!-- End Carousel Inner -->
                            </div><!-- /.carousel -->
                            <li class="divider"></li>
                            <li><a href="#">View all Collection <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
            </ul>
          </li>
          <li class="col-sm-3">
            <ul>
              <li class="dropdown-header">Mobiles</li>
              <li><a href="#">Unique Features</a></li>
              <li><a href="#">Covers </a></li>
              <li><a href="#">All new ranges</a></li>
              <li><a href="#">Newsletter Form</a></li>
              <li><a href="#">Amazing offers</a></li>
              <li class="divider"></li>
              <li class="dropdown-header">Refrigerators</li>
              <li><a href="#">Amazing offers</a></li>
              <li><a href="#">All new ranges</a></li>
              <li><a href="#">All brands</a></li>
              <li><a href="#">All features</a></li>
            </ul>
          </li>
          <li class="col-sm-3">
            <ul>
              <li class="dropdown-header">Laptops</li>
              <li><a href="#">Easy to customize</a></li>
              <li><a href="#">Glyphicons</a></li>
              <li><a href="#">Pull Right Elements</a></li>
              <li class="divider"></li>
              <li class="dropdown-header">Others</li>
              <li><a href="#">Coloured Headers</a></li>
              <li><a href="#">Primary Buttons & Default</a></li>
              <li><a href="#">Calls to action</a></li>
            </ul>
          </li>
          <li class="col-sm-3">
            <ul>
              <li class="dropdown-header">Accessories</li>
              <li><a href="#">Earphones</a></li>
              <li><a href="#">Headsets</a></li>
              <li><a href="#">Responsive Dropdown </a></li>             
              <li class="divider"></li>                                                    
            </ul>
          </li>
        </ul>
      </li>
    </ul>
  </div>
</nav>






<div class="container-fluid"> 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="images/11.jpg" alt="taylor1" style="width:100%;height:300px;">
      </div>

      <div class="item">
        <img src="images/22.jpg" alt="taylor2" style="width:100%;height:300px;">
      </div>
    
      <div class="item">
        <img src="images/3.jpg" alt="taylor3" style="width:100%;height:300px;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev" style="width:65px;height:80px;margin-top:110px;">
      <span class="glyphicon glyphicon-chevron-left"></span>
      
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next" style="width:65px;height:80px;margin-top:110px;">
      <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
  </div>
</div>
<div class="container-fluid">
	<h2>Selected Items    <small>Real activity from Indian Users   </small><h4><a>See more</a></h4>
</div>
<div class="container-fluid"">
	<div id="myCarousel1" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
	<div class="row item active">
		<div class="col-sm-2">
           <div class="thumbnail"> 
		<i class="tag"></i>
                    <a href="#"><img src="images/iphone7.jpeg" alt="" style="width:70%;padding:20px;"></a>
                    <div class="caption">
                      <h5>Product name</h5>
                      <h4><a class="btn-default" href="#">VIEW</a> <span class="pull-right">$222.00</span></h4>
                    </div>
                </div>
	</div>
	<div class="col-sm-2">
        <div class="thumbnail"> 
		<a href="#"><img  src="images/iphone7.jpeg" style="width:70%;padding:20px;"></a>
		<div class="caption">
			<h5>Product name</h5>
                      <h4><a class="btn-default" href="#">VIEW</a> <span class="pull-right">$222.00</span></h4>
		</div>
    </div>
	</div>
	<div class="col-sm-2">
		<div class="thumbnail"> 
        <a href="#"><img  src="images/mi.jpeg" style="width:70%;padding:20px;"></a>
        <div class="caption">
            <h5>Product name</h5>
                      <h4><a class="btn-default" href="#">VIEW</a> <span class="pull-right">$222.00</span></h4>
        </div>
    </div>
	</div>
	<div class="col-sm-2">
		<div class="thumbnail"> 
        <a href="#"><img  src="images/ihone6.jpeg" style="width:70%;padding:20px;"></a>
        <div class="caption">
            <h5>Product name</h5>
                      <h4><a class="btn-default" href="#">VIEW</a> <span class="pull-right">$222.00</span></h4>
        </div>
    </div>
	</div>
	<div class="col-sm-2">
		<div class="thumbnail"> 
        <a href="#"><img  src="images/mi.jpeg" style="width:70%;padding:20px;"></a>
        <div class="caption">
            <h5>Product name</h5>
                      <h4><a class="btn-default" href="#">VIEW</a> <span class="pull-right">$222.00</span></h4>
        </div>
    </div>
	</div>
	<div class="col-sm-2">
		<div class="thumbnail"> 
        <a href="#"><img  src="images/ihone6.jpeg" style="width:70%;padding:20px;"></a>
        <div class="caption">
            <h5>Product name</h5>
                      <h4><a class="btn-default" href="#">VIEW</a> <span class="pull-right">$222.00</span></h4>
        </div>
    </div>
	</div>
	</div>
	<div class="row item">
		<div class="col-sm-2">
		<div class="thumbnail"> 
        <a href="#"><img  src="images/moto.jpeg" style="width:70%;padding:20px;"></a>
        <div class="caption">
            <h5>Product name</h5>
                      <h4><a class="btn-default" href="#">VIEW</a> <span class="pull-right">$222.00</span></h4>
        </div>
    </div>
	</div>
	<div class="col-sm-2">
		<div class="thumbnail"> 
        <a href="#"><img  src="images/samsung.jpeg" style="width:70%;padding:20px;"></a>
        <div class="caption">
            <h5>Product name</h5>
                      <h4><a class="btn-default" href="#">VIEW</a> <span class="pull-right">$222.00</span></h4>
        </div>
    </div>
	</div>
	<div class="col-sm-2">
		<div class="thumbnail"> 
        <a href="#"><img  src="images/vivo.jpeg" style="width:70%;padding:20px;"></a>
        <div class="caption">
            <h5>Product name</h5>
                      <h4><a class="btn-default" href="#">VIEW</a> <span class="pull-right">$222.00</span></h4>
        </div>
    </div>
	</div>
	<div class="col-sm-2">
		<div class="thumbnail"> 
        <a href="#"><img  src="images/ihone6.jpeg" style="width:70%;padding:20px;"></a>
        <div class="caption">
            <h5>Product name</h5>
                      <h4><a class="btn-default" href="#">VIEW</a> <span class="pull-right">$222.00</span></h4>
        </div>
    </div>
	</div>
	<div class="col-sm-2">
		<div class="thumbnail"> 
        <a href="#"><img  src="images/mi.jpeg" style="width:70%;padding:20px;"></a>
        <div class="caption">
            <h5>Product name</h5>
                      <h4><a class="btn-default" href="#">VIEW</a> <span class="pull-right">$222.00</span></h4>
        </div>
    </div>
	</div>
	<div class="col-sm-2">
		<div class="thumbnail"> 
        <a href="#"><img  src="images/samsung.jpeg" style="width:70%;padding:20px;"></a>
        <div class="caption">
            <h5>Product name</h5>
                      <h4><a class="btn-default" href="#">VIEW</a> <span class="pull-right">$222.00</span></h4>
        </div>
    </div>
	</div>
	</div>
</div>
 <a class="left carousel-control" href="#myCarousel1" data-slide="prev" style="width:50px;height:50px;margin-top:110px;">
      <span class="glyphicon glyphicon-chevron-left"></span>
      
    </a>
    <a class="right carousel-control" href="#myCarousel1" data-slide="next" style="width:50px;height:50px;margin-top:110px;">
      <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div>
</div>
<br>
<br>
<br>
<div class="container-fluid" >
	<div class="row">
		<div class="col-sm-4">
			<a href="#"><img src="images/11.jpg" style="width:100%;height:236px;"></a>
		</div>
		<div class="col-sm-4">
			<a href="#"><img src="images/22.jpg" style="width:100%;height:236px;"></a>
		</div>
		<div class="col-sm-4">
			<a href="#"><img src="images/3.jpg" style="width:100%;height:236px;"></a>
		</div>
	</div>
</div>
<br><br><br>
<h2 style="padding-left:20px;">Latest products</h2>
<br>
<div class="container-fluid" >
		<div class="row">
              <ul class="thumbnails xxx">
                <li class="col-sm-3">
                  <div class="thumbnail">
                    <a  href="product_details.php"><img src="images/p1.jpg" alt=""></a>
                    <div class="caption">
                      <h5>Product name</h5>
                      <p> 
                        Lorem Ipsum is simply dummy text. 
                      </p>
                     
                      <h4 style="text-align:center"><a class="btn" href="product_details.php"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                    </div>
                  </div>
                </li>
                <li class="col-sm-3">
                  <div class="thumbnail">
                    <a  href="product_details.php"><img src="images/p2.jpg" alt=""></a>
                    <div class="caption">
                      <h5>Product name</h5>
                      <p> 
                        Lorem Ipsum is simply dummy text. 
                      </p>
                     <h4 style="text-align:center"><a class="btn" href="product_details.php"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                    </div>
                  </div>
                </li>
                <li class="col-sm-3">
                  <div class="thumbnail">
                    <a  href="product_details.php"><img src="images/p3.jpg" alt="" width="160px" height="160px"></a>
                    <div class="caption">
                      <h5>Product name</h5>
                      <p> 
                        Lorem Ipsum is simply dummy text. 
                      </p>
                       <h4 style="text-align:center"><a class="btn" href="product_details.php"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                    </div>
                  </div>
                </li>
                <li class="col-sm-3">
                  <div class="thumbnail">
                    <a  href="product_details.php"><img src="images/s11.JPG" alt=""/></a>
                    <div class="caption">
                      <h5>Product name</h5>
                      <p> 
                        Lorem Ipsum is simply dummy text. 
                      </p>
                      <h4 style="text-align:center"><a class="btn" href="product_details.php"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                    </div>
                  </div>
                </li>
                <li class="col-sm-3">
                  <div class="thumbnail">
                    <a  href="product_details.php"><img src="images/s22.JPG" alt=""/></a>
                    <div class="caption">
                      <h5>Product name</h5>
                      <p> 
                        Lorem Ipsum is simply dummy text. 
                      </p>
                      <h4 style="text-align:center"><a class="btn" href="product_details.php"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                    </div>
                  </div>
                </li>
                <li class="col-sm-3">
                  <div class="thumbnail">
                    <a  href="product_details.php"><img src="images/s3.jpg" alt=""/></a>
                    <div class="caption">
                      <h5>Product name</h5>
                      <p> 
                        Lorem Ipsum is simply dummy text. 
                      </p>
                       <h4 style="text-align:center"><a class="btn" href="product_details.php"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                    </div>
                  </div>
                </li>
                <li class="col-sm-3">
                  <div class="thumbnail">
                    <a  href="product_details.php"><img src="images/kindle.png" alt=""/></a>
                    <div class="caption">
                      <h5>Product name</h5>
                      <p> 
                        Lorem Ipsum is simply dummy text. 
                      </p>
                       <h4 style="text-align:center"><a class="btn" href="product_details.php"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                    </div>
                  </div>
                </li>
                <li class="col-sm-3">
                  <div class="thumbnail">
                    <a  href="product_details.php"><img src="images/b4.jpg" alt=""/></a>
                    <div class="caption">
                      <h5>Product name</h5>
                      <p> 
                        Lorem Ipsum is simply dummy text. 
                      </p>
                       <h4 style="text-align:center"><a class="btn" href="product_details.php"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                    </div>
                  </div>
                </li>
              </ul> 

        </div>
</div>

<h3 style="padding-left: 20px">Since You Searched...</h3>
<br>
<div class="container-fluid">
  <div id="myCarousel2" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
  <div class="row item active">
    <div class="col-sm-3">
           <div class="thumbnail"> 
    <a  href="product_details.php"><img src="images/p1.jpg" alt=""/></a>
                    <div class="caption">
                      <h5>Product name</h5>
                      <p> 
                        Lorem Ipsum is simply dummy text. 
                      </p>
                       <h4 style="text-align:center"><a class="btn" href="product_details.php"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                    </div>
                </div>
  </div>
  <div class="col-sm-3">
        <div class="thumbnail"> 
    <a  href="product_details.html"><img src="images/p2.jpg" alt=""/></a>
                    <div class="caption">
                      <h5>Product name</h5>
                      <p> 
                        Lorem Ipsum is simply dummy text. 
                      </p>
                       <h4 style="text-align:center"><a class="btn" href="product_details.php"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                    </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="thumbnail"> 
        <a  href="product_details.php"><img src="images/p3.jpg" alt=""/></a>
                    <div class="caption">
                      <h5>Product name</h5>
                      <p> 
                        Lorem Ipsum is simply dummy text. 
                      </p>
                       <h4 style="text-align:center"><a class="btn" href="product_details.php"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                    </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="thumbnail"> 
        <a  href="product_details.php"><img src="images/b4.jpg" alt=""/></a>
                    <div class="caption">
                      <h5>Product name</h5>
                      <p> 
                        Lorem Ipsum is simply dummy text. 
                      </p>
                       <h4 style="text-align:center"><a class="btn" href="product_details.php"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                    </div>
    </div>
  </div>
  
  </div>
  <div class="row item">
    <div class="col-sm-3">
    <div class="thumbnail"> 
        <a  href="product_details.php"><img src="images/s11.JPG" alt=""/></a>
                    <div class="caption">
                      <h5>Product name</h5>
                      <p> 
                        Lorem Ipsum is simply dummy text. 
                      </p>
                       <h4 style="text-align:center"><a class="btn" href="product_details.php"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                    </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="thumbnail"> 
        <a  href="product_details.php"><img src="images/s2.JPG" alt=""/></a>
                    <div class="caption">
                      <h5>Product name</h5>
                      <p> 
                        Lorem Ipsum is simply dummy text. 
                      </p>
                       <h4 style="text-align:center"><a class="btn" href="product_details.php"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                    </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="thumbnail"> 
        <a  href="product_details.php"><img src="images/b4.JPG" alt=""/></a>
                    <div class="caption">
                      <h5>Product name</h5>
                      <p> 
                        Lorem Ipsum is simply dummy text. 
                      </p>
                       <h4 style="text-align:center"><a class="btn" href="product_details.php"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                    </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="thumbnail"> 
        <a  href="product_details.php"><img src="images/p4.JPG" alt=""/></a>
                    <div class="caption">
                      <h5>Product name</h5>
                      <p> 
                        Lorem Ipsum is simply dummy text. 
                      </p>
                       <h4 style="text-align:center"><a class="btn" href="product_details.php"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                    </div>
    </div>
  </div> </div>
  
</div>
 <a class="left carousel-control" href="#myCarousel2" data-slide="prev" style="width:50px;height:50px;margin-top:110px;">
      <span class="glyphicon glyphicon-chevron-left"></span>
      
    </a>
    <a class="right carousel-control" href="#myCarousel2" data-slide="next" style="width:50px;height:50px;margin-top:110px;">
      <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div>
</div>

<br>
<div class="container-fluid">
	<div class="col-sm-6">
	<h2 class="p">Find Supplies</h2>
	<br>
	<br>
	<div class="media">
    <div class="media-left">
      <img src="images/india.jpg" class="media-object" style="width:60px">
    </div>
    <div class="media-body">
      <h4 class="media-heading">India</h4>
    </div>
    <div class="media-left">
      <img src="images/usa.jpg" class="media-object" style="width:60px">
    </div>
    <div class="media-body">
      <h4 class="media-heading">U.S.A</h4>
    </div>
    <div class="media-left">
      <img src="images/Uk.jpg" class="media-object" style="width:60px">
    </div>
    <div class="media-body">
      <h4 class="media-heading">U.K. </h4>
    </div>
    <div class="media-left">
      <img src="images/china.jpg" class="media-object" style="width:60px">
    </div>
    <div class="media-body">
      <h4 class="media-heading">China</h4>
    </div>
  </div>
  <br>
  <br>
  <div class="media">
    <div class="media-left">
      <img src="images/canada.jpg" class="media-object" style="width:60px">
    </div>
    <div class="media-body">
      <h5 class="media-heading">Canada</h5>
    </div>
    <div class="media-left">
      <img src="images/india.jpg" class="media-object" style="width:60px">
    </div>
    <div class="media-body">
      <h4 class="media-heading">India</h4>
    </div>
    <div class="media-left">
      <img src="images/india.jpg" class="media-object" style="width:60px">
    </div>
    <div class="media-body">
      <h4 class="media-heading">India</h4>
    </div>
    <div class="media-body">
      <a><h4 class="media-heading" style="margin-left:20px;">More Countries..</h4></a>
    </div>
  </div>
</div>
<div class="col-sm-6">
	<h2 class="p">Our Trade Services</h2>
	<br>
	<br>
	<div class="media">
    <div class="media-left">
      <img src="images/support.jpg" class="media-object" style="width:50px">
    </div>
    <div class="media-body">
      <h4 class="media-heading">Trade Assurance</h4>
    </div>
    <div class="media-left">
      <img src="images/business.jpg" class="media-object" style="width:50px">
    </div>
    <div class="media-body">
      <h4 class="media-heading">Business Identity</h4>
    </div>
    <div class="media-left">
      <img src="images/logic.jpg" class="media-object" style="width:50px">
    </div>
    <div class="media-body">
      <h4 class="media-heading">Logistics Service</h4>
    </div>
    <br>
    <br>
    </div>
    <div class="media">
    <div class="media-left">
      <img src="images/support.jpg" class="media-object" style="width:50px">
    </div>
    <div class="media-body">
      <h4 class="images/media-heading">Trade Assurance</h4>
    </div>
    <div class="media-left">
      <img src="images/business.jpg" class="media-object" style="width:50px">
    </div>
    <div class="media-body">
      <h4 class="media-heading">Business Identity</h4>
    </div>
    <div class="media-left">
      <img src="images/logic.jpg" class="media-object" style="width:50px">
    </div>
    <div class="media-body">
      <h4 class="media-heading">Logistics Service</h4>
    </div>
    </div>
  </div>
</div>
<br>
<br>
<div class="container-fluid">
<a href="#top"><button type="button" class="btn" style="width:100%;background-color:black;color:white;">Back To Top</button></a>
<div  id="footerSection">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <h5>ACCOUNT</h5>
                <a href="login.html">YOUR ACCOUNT</a>
                <a href="login.html">PERSONAL INFORMATION</a> 
                <a href="login.html">ADDRESSES</a> 
                <a href="login.html">DISCOUNT</a>  
                <a href="login.html">ORDER HISTORY</a>
             </div>
            <div class="col-sm-3">
                <h5>INFORMATION</h5>
                <a href="contact.html">CONTACT</a>  
                <a href="register.html">REGISTRATION</a>  
                <a href="legal_notice.html">LEGAL NOTICE</a>  
                <a href="tac.html">TERMS AND CONDITIONS</a> 
                <a href="faq.html">FAQ</a>
             </div>
            <div class="col-sm-3">
                <h5>OUR OFFERS</h5>
                <a href="#">NEW PRODUCTS</a> 
                <a href="#">TOP SELLERS</a>  
                <a href="special_offer.html">SPECIAL OFFERS</a>  
                <a href="#">MANUFACTURERS</a> 
                <a href="#">SUPPLIERS</a> 
             </div>
            <div id="socialMedia" class="col-sm-3 pull-right">
                <h5>SOCIAL MEDIA </h5>
                <a href="#"><img width="60" height="60" src="images/facebook.png" title="facebook" alt="facebook"/></a>
                <a href="#"><img width="60" height="60" src="images/twitter.png" title="twitter" alt="twitter"/></a>
                <a href="#"><img width="60" height="60" src="images/youtube.png" title="youtube" alt="youtube"/></a>
             </div> 
         </div>
    </div><!-- Container End -->
    </div>
    </div>

</body>
</html>
<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header x">
        <button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button>
        <p class="modal-title">Logout</p>
      </div>
      <br>
      <br>
      <p style="text-align: center;font-size: 32px;">Do you really want to logout?</p>
      <br>
      <br><form action="logout.php" method="POST">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal" style="width:30%;background-color:#70449f;color:white;margin-left:100px;margin-right:40px;">No</button>
       <button type="submit" class="btn" style="width:30%;background-color:#70449f;color:white;">Yes</button></form>
       <br>
       <br>
       </div>
    </div>
  </div>