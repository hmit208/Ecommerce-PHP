<?php require_once "phpuploader/include_phpuploader.php" ?>
<?php session_start(); ?>
<?php require_once './includes/dbcon.php'; ?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from responsivewebinc.com/premium/mackart/red/items.html by HTTrack Website Copier/3.x [XR&CO'2013], Tue, 07 Jan 2014 08:07:23 GMT -->
<head>

<style>
.AjaxUploaderQueueTable{display:none !important;}

</style>
	
	
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <!-- Title and other stuffs -->
  <title>Items - MacKart</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">

  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>

  <!-- Stylesheets -->
  <link href="style/bootstrap.css" rel="stylesheet">
  <!-- Pretty Photo -->
  <link href="style/prettyPhoto.css" rel="stylesheet">
  <!-- Sidebar nav -->
  <link href="style/sidebar-nav.css" rel="stylesheet">
  <!-- Flex slider -->
  <link href="style/flexslider.css" rel="stylesheet">
  <!-- Font awesome icon -->
  <link rel="stylesheet" href="style/font-awesome.css"> 
  <!-- Main stylesheet -->
  <link href="style/style.css" rel="stylesheet">
  <!-- Stylesheet for Color -->
  <link href="style/red.css" rel="stylesheet">
 
  
  <!-- HTML5 Support for IE -->
  <!--[if lt IE 9]>
  <script src="js/html5shim.js"></script>
  <![endif]-->

  <!-- Favicon -->
  <link rel="shortcut icon" href="img/favicon/favicon.png">
</head>

<body>

<!-- Header starts -->
  <header>
    <div class="container">
      <div class="row">

        <div class="col-md-4">
          <!-- Logo. Use class "color" to add color to the text. -->
          <div class="logo">
            <h1><a href="#">Mac<span class="color bold">Kart</span></a></h1>
            <p class="meta">online shopping is fun!!!</p>
          </div>
        </div>

        <div class="col-md-5 col-md-offset-3">
          
          <!-- Search form -->
            <form class="form-inline" role="form">
			  <div class="form-group">
				<input type="email" class="form-control" id="search" placeholder="Search">
			  </div>
			  
			  <button type="submit" class="btn btn-default">Search</button>
			</form>

          <div class="hlinks">
            <span>

              <!-- item details with price -->
              <a href="#cart" role="button" data-toggle="modal">3 Item(s) in your <i class="icon-shopping-cart"></i></a> -<span class="bold">$25</span>  

            </span>


              <!-- Login and Register link -->
              <span class="lr"><a href="#login" role="button" data-toggle="modal">Login</a> or <a href="#register" role="button" data-toggle="modal">Register</a></span>

          </div>

        </div>

      </div>
    </div>
  </header>
  <!-- Header ends -->
  
  
  <!-- Cart, Login and Register form (Modal) -->

    <!-- Cart Modal starts -->
<div id="cart" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4>Shopping Cart</h4>
			</div>
			<div class="modal-body">

				<table class="table table-striped tcart">
				  <thead>
					<tr>
					  <th>Name</th>
					  <th>Quantity</th>
					  <th>Price</th>
					</tr>
				  </thead>
				  <tbody>
					<tr>
					  <td><a href="single-item.html">HTC One</a></td>
					  <td>2</td>
					  <td>$250</td>
					</tr>
					<tr>
					  <td><a href="single-item.html">Apple iPhone</a></td>
					  <td>1</td>
					  <td>$502</td>
					</tr>
					<tr>
					  <td><a href="single-item.html">Galaxy Note</a></td>
					  <td>4</td>
					  <td>$1303</td>
					</tr>
					<tr>
					  <th></th>
					  <th>Total</th>
					  <th>$2405</th>
					</tr>
				  </tbody>
				</table>

			</div>
			<div class="modal-footer">
				<a href="index-2.html" class="btn">Continue Shopping</a>
				<a href="checkout.html" class="btn btn-danger">Checkout</a>
			</div>
		</div>
	</div>
</div>

<!-- Cart modal ends -->

  <!-- Login Modal starts -->
<div id="login" class="modal fade">
<div class="modal-dialog">
		<div class="modal-content">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h4>Login</h4>
  </div>
  <div class="modal-body">

                    <div class="form">

                                      <form class="form-horizontal">   
                                          <div class="form-group">
                                            <label class="control-label col-md-3" for="username">Username</label>
                                            <div class="col-md-9">
                                              <input type="text" class="form-control" id="username">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="control-label col-md-3" for="email">Password</label>
                                            <div class="col-md-9">
                                              <input type="password" class="form-control" id="password">
                                            </div>
                                          </div>
                                          <div class="form-group">
											<div class="col-md-9 col-md-offset-3">
                                             <div class="checkbox inline">
                                                <label>
                                                   <input type="checkbox" id="inlineCheckbox1" value="agree"> Remember Password
                                                </label>
                                             </div>
											 </div>
                                          </div> 
                                          
                                          <div class="form-group">
										  <div class="col-md-9 col-md-offset-3">
                                            <button type="submit" class="btn btn-default">Login</button>
                                            <button type="reset" class="btn btn-default">Reset</button>
                                          </div>
										  </div>
                                      </form>
                                    </div> 

  </div>
  <div class="modal-footer">
    <p>Dont have account? <a href="register.html">Register</a> here.</p>
  </div>
  </div>
  </div>
</div>

<!-- Login modal ends -->

  <!-- Register Modal starts -->

<div id="register" class="modal fade">
<div class="modal-dialog">
		<div class="modal-content">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h4>Register</h4>
  </div>
  <div class="modal-body">
    <div class="form">
                                      <form class="form-horizontal">
                                          <div class="form-group">
                                            <label class="control-label col-md-3" for="name">Name</label>
                                            <div class="col-md-9">
                                              <input type="text" class="form-control" id="name">
                                            </div>
                                          </div>   
                                          <div class="form-group">
                                            <label class="control-label col-md-3" for="email">Email</label>
                                            <div class="col-md-9">
                                              <input type="text" class="form-control" id="email">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="control-label col-md-3">Drop Down</label>
                                            <div class="col-md-9">                               
                                                <select class="form-control">
                                                <option>&nbsp;</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                </select>  
                                            </div>
                                          </div>           
                                          <div class="form-group">
                                            <label class="control-label col-md-3" for="username1">Username</label>
                                            <div class="col-md-9">
                                              <input type="text" class="form-control" id="username1">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="control-label col-md-3" for="password1">Password</label>
                                            <div class="col-md-9">
                                              <input type="password" class="form-control" id="password1">
                                            </div>
                                          </div>
                                          <div class="form-group">
										  <div class="col-md-9 col-md-offset-3">
                                             <div class="checkbox inline">
                                                <label>
                                                   <input type="checkbox" id="inlineCheckbox2" value="agree"> Agree with Terms and Conditions
                                                </label>
                                             </div>
											</div>
                                          </div> 
                                          
                                          <div class="form-group">
											<div class="col-md-9 col-md-offset-3">
                                            <button type="submit" class="btn btn-default">Register</button>
                                            <button type="reset" class="btn btn-default">Reset</button>
											</div>
                                          </div>
                                      </form>
                                    </div>
  </div>
  <div class="modal-footer">
    <p>Already have account? <a href="login.html">Login</a> here.</p>
  </div>
  </div>
  </div>
</div>

<!-- Register modal ends -->

  <!-- Navigation -->
          <div class="navbar bs-docs-nav" role="banner">
           
             <div class="container">
               <div class="navbar-header">
				  <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
      
				</div>
               <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
                 <ul class="nav navbar-nav">
                   <li><a href="index-2.html"><i class="icon-home"></i></a></li>
                   <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Account <b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li><a href="myaccount.html">My Account</a></li>
                        <li><a href="view-cart.html">View Cart</a></li>
                        <li><a href="checkout.html">Checkout</a></li>
                        <li><a href="wish-list.html">Wish List</a></li>
                        <li><a href="order-history.html">Order History</a></li>
                        <li><a href="edit-profile.html">Edit Profile</a></li>
                        <li><a href="confirmation.html">Confirmation</a></li>
                      </ul>
                   </li>                   
                   <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li><a href="general.html">General</a></li>
                        <li><a href="login.html">Login</a></li>
                        <li><a href="register.html">Register</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="blog-single.html">Blog Single</a></li>
                        <li><a href="404.html">404</a></li>
                      </ul>
                   </li>
                   <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Smartphones <b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li><a href="items.html">HTC</a></li>
                        <li><a href="items.html">Samsung</a></li>
                        <li><a href="items.html">Apple</a></li>
                        <li><a href="items.html">Motorola</a></li>
                        <li><a href="items.html">Nokia</a></li>
                      </ul>
                   </li>
                   <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tablets <b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li><a href="items.html">Samsung</a></li>
                        <li><a href="items.html">Micromax</a></li>
                        <li><a href="items.html">Apple</a></li>
                      </ul>
                   </li>                                      
                   <li><a href="support.html">Support</a></li>
                   <li><a href="contact.html">Contact</a></li>
                 </ul>
               </nav>
              </div>
           </div>



<!-- Items -->

<div class="items">
  <div class="container">
    <div class="row">


	
	

<!-- Main content -->
      <div class="col-md-9 col-sm-9">

        <!-- Breadcrumb -->
        <ul class="breadcrumb">
          <li><a href="index-2.html">Home</a> <span class="divider">/</span></li>

          <li class="active">Create Product</li>
        </ul>



                          <div class="clearfix"></div>

              <div class="row">

         <?php 
$link=open_database_connection();

InsertData();

close_database_connection($link);
	
		 
		 ?>

              </div>


            </div>                                                                    



    </div>
  </div>
</div>

<!-- Recent items carousel starts -->

  	<div style="width:200px;float:left;position: relative;top: -259px;left: 120px;">
		<?php
			$uploader=new PhpUploader();
			
			$uploader->MultipleFilesUpload=false;
			$uploader->InsertText="Upload File (Max 10M)";
			
			$uploader->MaxSizeKB=1024000;	
			$uploader->AllowedFileExtensions="jpeg,jpg,gif,png,zip";
			
			//Where'd the files go?
			$uploader->SaveDirectory="./uploads";
			
			$uploader->Render();
		?>
		</div>

<div class="recent-posts">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="bor"></div>
        <h4 class="title">Recent Items</h4>
        <div class="carousel_nav pull-right">
          <!-- Navigation -->
          <a class="prev" id="car_prev" href="#"><i class="icon-chevron-left"></i></a>
          <a class="next" id="car_next" href="#"><i class="icon-chevron-right"></i></a>
        </div>
        <div class="clearfix"></div>
        <ul class="rps-carousel">
            <!-- Recent items #1 -->
            <!-- Each item should be enclosed inside "li"  tag. -->
            <li>
                <div class="rp-item"> 
                  <div class="rp-image">    
                  <!-- Image -->    
                    <a href="single-item.html"><img src="img/photos/2.png" alt=""/></a>
                  </div>
                  <div class="rp-details">
                    <!-- Title and para -->
                    <h5><a href="single-item.html">HTC One V <span class="price pull-right">$225</span></a></h5>
                    <div class="clearfix"></div>
                    <!-- Description -->
                    <p>Travel far away to a space station.</p>         
                  </div>                
                </div>        
            </li>
            <!-- Recent items #2 -->
            <li>
                <div class="rp-item"> 
                  <div class="rp-image">        
                    <a href="single-item.html"><img src="img/photos/3.png" alt=""/></a>
                  </div>
                  <div class="rp-details">
                    <!-- Title and para -->
                    <h5><a href="single-item.html">Sony Xperia Pro <span class="price pull-right">$525</span></a></h5>
                    <div class="clearfix"></div>
                    <p>Travel far away to a space station.</p>         
                  </div>                
                </div>        
            </li>
            <li>
                <div class="rp-item"> 
                  <div class="rp-image">        
                    <a href="single-item.html"><img src="img/photos/4.png" alt=""/></a>
                  </div>
                  <div class="rp-details">
                    <!-- Title and para -->
                    <h5><a href="single-item.html">Samsung Pop <span class="price pull-right">$255</span></a></h5>
                    <div class="clearfix"></div>
                    <p>Travel far away to a space station.</p>         
                  </div>                
                </div>        
            </li>
            <li>
                <div class="rp-item"> 
                  <div class="rp-image">        
                    <a href="single-item.html"><img src="img/photos/5.png" alt=""/></a>
                  </div>
                  <div class="rp-details">
                    <!-- Title and para -->
                    <h5><a href="single-item.html">Motorola Droid <span class="price pull-right">$325</span></a></h5>
                    <div class="clearfix"></div>
                    <p>Travel far away to a space station.</p>         
                  </div>                
                </div>        
            </li>
            <li>
                <div class="rp-item"> 
                  <div class="rp-image">        
                    <a href="single-item.html"><img src="img/photos/6.png" alt=""/></a>
                  </div>
                  <div class="rp-details">
                    <!-- Title and para -->
                    <h5><a href="single-item.html">Blackberry Force <span class="price pull-right">$125</span></a></h5>
                    <div class="clearfix"></div>
                    <p>Travel far away to a space station.</p>         
                  </div>                
                </div>        
            </li>
            <li>
                <div class="rp-item"> 
                  <div class="rp-image">        
                    <a href="single-item.html"><img src="img/photos/7.png" alt=""/></a>
                  </div>
                  <div class="rp-details">
                    <!-- Title and para -->
                    <h5><a href="single-item.html">Pantech One <span class="price pull-right">$253</span></a></h5>
                    <div class="clearfix"></div>
                    <p>Travel far away to a space station.</p>         
                  </div>                
                </div>        
            </li>                                                                                               
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- Recent Posts ends -->

<!-- Newsletter starts -->

<div class="container newsletter">
  <div class="row">
    <div class="col-md-12">
      <div class="well">
               <h5><i class="icon-envelope-alt"></i> Hot Offers - Don't Miss Anything!!!</h5>
               <p>Nulla facilisi. Sed justo dui, scelerisque ut consectetur vel, eleifend id erat. Morbi auctor adipiscing tempor. Phasellus condimentum rutrum aliquet.</p>
               <form class="form-inline" role="form">
					<div class="form-group">
						<input type="email" class="form-control" id="search" placeholder="Subscribe">
					</div>
					<button type="submit" class="btn btn-default">Subscribe</button>
				</form>
      </div>
    </div>
  </div>
</div>

<!-- Newsletter ends -->

<!-- Footer starts -->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-12">

            <div class="row">

              <div class="col-md-4">
                <div class="widget">
                  <h5>Contact</h5>
                  <hr />
                    <div class="social">
                      <a href="#"><i class="icon-facebook facebook"></i></a>
                      <a href="#"><i class="icon-twitter twitter"></i></a>
                      <a href="#"><i class="icon-linkedin linkedin"></i></a>
                      <a href="#"><i class="icon-google-plus google-plus"></i></a> 
                    </div>
                  <hr />
                  <i class="icon-home"></i> &nbsp; 123, Some Area. Los Angeles, CA, 54321.
                  <hr />
                  <i class="icon-phone"></i> &nbsp; +239-3823-3434
                  <hr />
                  <i class="icon-envelope-alt"></i> &nbsp; <a href="mailto:#">someone@company.com</a>
                  <hr />
                  <div class="payment-icons">
                    <img src="img/payment/americanexpress.gif" alt="" />
                    <img src="img/payment/visa.gif" alt="" />
                    <img src="img/payment/mastercard.gif" alt="" />
                    <img src="img/payment/discover.gif" alt="" />
                    <img src="img/payment/paypal.gif" alt="" />
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="widget">
                  <h5>About Us</h5>
                  <hr />
                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras elementum dolor eget nisi fermentum quis hendrerit magna vestibulum. Curabitur pulvinar ornare vulputate scelerisque scelerisque ut consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras elementum dolor eget nisi fermentum quis hendrerit magna vestibulum.</p> 
                </div>
              </div>

              <div class="col-md-4">
                <div class="widget">
                  <h5>Links Goes Here</h5>
                  <hr />
                  <div class="two-col">
                    <div class="col-left">
                      <ul>
                        <li><a href="#">Condimentum</a></li>
                        <li><a href="#">Etiam at</a></li>
                        <li><a href="#">Fusce vel</a></li>
                        <li><a href="#">Vivamus</a></li>
                        <li><a href="#">Pellentesque</a></li>
                        <li><a href="#">Vivamus</a></li>
                      </ul>
                    </div>
                    <div class="col-right">
                      <ul>
                        <li><a href="#">Condimentum</a></li>
                        <li><a href="#">Etiam at</a></li>
                        <li><a href="#">Fusce vel</a></li>
                        <li><a href="#">Vivamus</a></li>
                        <li><a href="#">Pellentesque</a></li>
                        <li><a href="#">Vivamus</a></li>
                      </ul>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
              
            </div>

            <hr />
            <!-- Copyright info -->
            <p class="copy">Copyright &copy; 2012 | <a href="#">Your Site</a> - <a href="#">Home</a> | <a href="#">About Us</a> | <a href="#">Service</a> | <a href="#">Contact Us</a></p>
      </div>
    </div>
  <div class="clearfix"></div>
  </div>
</footer> 	

<!-- Footer ends -->

<!-- Scroll to top -->
<span class="totop"><a href="#"><i class="icon-chevron-up"></i></a></span> 

<!-- JS -->
<script src="js/jquery.js"></script> <!-- jQuery -->
<script src="js/bootstrap.js"></script> <!-- Bootstrap -->
<script src="js/jquery.prettyPhoto.js"></script> <!-- Pretty Photo -->
<script src="js/filter.js"></script> <!-- Filter for support page -->

<script src="js/jquery.flexslider-min.js"></script> <!-- Flex slider -->
<script src="js/nav.js"></script> <!-- Sidebar navigation -->
<script src="js/jquery.carouFredSel-6.1.0-packed.js"></script> <!-- Carousel for recent posts -->
<script src="js/custom.js"></script> <!-- Custom codes -->

</body>

<!-- Mirrored from responsivewebinc.com/premium/mackart/red/items.html by HTTrack Website Copier/3.x [XR&CO'2013], Tue, 07 Jan 2014 08:07:23 GMT -->
</html>

<?php

function InsertData()
{

    global $link; 

$sql="SELECT `id`, `title`, `status`, `short_description`, `picture`, `price`, `is_hot`
FROM products";

$result = mysql_query($sql, $link);

    $posts = array();
    while ($row = mysql_fetch_assoc($result)) {
	
        $posts[] = $row;
    }
    
?>

<form class="form-horizontal" action="saveProduct.php" method="POST" style="float:left;">
<fieldset>

<!-- Form Name -->
<legend>Create New Product</legend>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="txt_title">Title</label>
  <div class="controls">
    <input id="txt_title" name="txt_title" type="text" placeholder="title here" class="input-xlarge" required="">
    <p class="help-block">please insert title</p>
  </div>
</div>

<!-- Multiple Radios -->
<div class="control-group">
  <label class="control-label" for="Status">Status</label>
  <div class="controls">
    <label class="radio" for="Status-0">
      <input type="radio" name="Status" id="Status-0" value="Available" checked="checked" required="required">
      Available
    </label>
    <label class="radio" for="Status-1">
      <input type="radio" name="Status" id="Status-1" value="Disabled" required="required">
      Disabled
    </label>
  </div>
</div>

<!-- Textarea -->
<div class="control-group">
  <label class="control-label" for="txt_description">Description</label>
  <div class="controls">                     
    <textarea id="txt_description" name="txt_description">Description Here</textarea>
  </div>
</div>

<!-- File Button --> 
<div class="control-group">



  <label class="control-label" for="filebutton">Picture</label>
  <div class="controls">
  

	
		<script type='text/javascript'>
	function CuteWebUI_AjaxUploader_OnTaskComplete(task)
	{
		//alert(task.FileName + " is uploaded!");
		document.getElementById('filebutton').value=task.FileName;
	}
	</script>	
  
  
    <input style="display:none;"id="filebutton" name="filebutton" class="input-file" type="text">
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="txt_price">Price</label>
  <div class="controls">
    <input id="txt_price" name="txt_price" type="text" placeholder="enter price here" class="input-small" required="">
    <p class="help-block">enter price here</p>
  </div>
</div>

<!-- Multiple Checkboxes (inline) -->
<div class="control-group">
  <label class="control-label" for="ishot">Is Hot</label>
  <div class="controls">
    <label class="checkbox inline" for="ishot-0">
      <input type="checkbox" name="ishot" id="ishot-0" value="Yes" required="required">
      Yes
    </label>
  </div>
</div>

<!-- Button (Double) -->
<div class="control-group">
  <label class="control-label" for="button1id">Submit</label>
  <div class="controls">
    <button id="button1id" name="button1id" class="btn btn-success">Save</button>
    <button id="button2id" name="button2id" class="btn btn-danger">Cancel</button>
  </div>
</div>

</fieldset>
</form>



<?php
	
	
	

}

?>


