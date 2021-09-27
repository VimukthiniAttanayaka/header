<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
    <!-- Header -->
	<header>
		<div class="container-menu">
			<!-- Topbar -->
			<div class="top-bar">
				<div class="content-topbar flex-sb-m h-full container">
					<div class="left-top-bar">
						<?php echo "Island Wide Delivary"?>
					</div>
                    
					<div class="right-top-bar flex-w h-full">
                        <a href="#" class="flex-c-m trans-01 p-lr-25">
                            <?php echo "My Account"?>							
						</a>

						<a href="#" class="flex-c-m trans-01 p-lr-25">
                            <?php echo "Help & FAQs"?>
						</a>
                        
						<a href="#" class="flex-c-m trans-01 p-lr-25">
                            <?php echo "EN"?>			
						</a>

						<a href="#" class="flex-c-m trans-01 p-lr-25">
                            <?php echo "LKR"?>	                 
						</a>
					</div>
				</div>
			</div>

            <!-- Menu bar -->
			<div class="wrap-menu">
				<nav class="limiter-menu container">
					
					<!-- Logo -->		
					<a href="#" class="logo">
						<img src="images/logo.png" alt="IMG-LOGO">
					</a>

					<!-- Menu -->
					<div class="menu">
						<ul class="main-menu">
							<li class="active-menu">
								<a href="index.php">Home</a>
							</li>

							<li>
								<a href="product.php">Shop</a>
							</li>

							<li class="label1" data-label1="hot">
								<a href="shoping-cart.php">Features</a>
							</li>

							<li>
								<a href="blog.php">Blog</a>
							</li>

							<li>
								<a href="about.php">About</a>
							</li>

							<li>
								<a href="contact.php">Contact</a>
							</li>
						</ul>
					</div>	

					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m">
						<div class="icon-header-item cl2 hov-cl1 trans-01 p-l-22 p-r-11 js-show-modal-search">
							<i class="zmdi zmdi-search"></i>
                            
						</div>
                        <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="2">
							<i class="zmdi zmdi-shopping-cart"></i>
						</div>

						<a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti" data-notify="0">
							<i class="zmdi zmdi-favorite-outline"></i>
						</a>    		
					</div>
				</nav>
			</div>	
		</div>
</body>
</html>