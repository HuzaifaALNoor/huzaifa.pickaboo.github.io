<?php  include "inc/header.php";  ?>


 <body>
<header id="home">

<div class="container">
<div class="row">
<div class="col-md-2 logo">
	<a href="index.php"><img src="Pickaboo.png"></a>
</div>

<div class="col-md-5 search">
<form class="searchbar" action="/action_page.php">
	<i class="fas fa-search"></i>
  <input type="text" placeholder="Search.." name="search">
  <button type="submit">Search</button>
</form>
</div>

<div class="col-md-5 topnav">

	<ul class="nav  justify-content-end">
		<li class="nav-item">
			<button id="mylgnBtn" class="nav-link bg-danger" href="#"><i class="fas fa-user"></i>Sign In</button>


			<div id="mylgModal" class="loginmodal">

				  <!-- Modal content -->
				  <div class="loginmodal-content">
				    <span class="close">&times;</span>
				    <div class="container">
				  <form action="/action_page.php">
				    <div class="row">
				      
				      <div class="login-page">

				        E-mail or Mobile 
				        <input type="text" name="username" placeholder="Username" required>
				        Password
				        <input type="password" name="password" placeholder="Password" required>
				        
				      </div>


				    <div class="login-page-btn">
				    	<div class="signbtn">
				    	<input type="submit" value="SIGN IN">
				    	</div>
				      	<a href="#">Not a Member ? <span>Sign up Now</span> </a><br>
				      	<a href="#">Forgot password?</a>
				 	 </div>


				        <div class="login-page">
				        <a href="#" class="fb bttn">
				          <i class="fab fa-facebook fa-fw"></i> Login with Facebook
				         </a>

				        <a href="#" class="google bttn"><i class="fab fa-google fa-fw">
				          </i> Login with Google+
				        </a>
				      </div>
				      
				    </div>
				  </form>
				</div>
				  </div>

				</div>

				<!-- End Modal -->


		</li>
		<li class="nav-item">
			<button class="nav-link bg-success" href="#"><i class="fas fa-question-circle"></i>Need Help</button>
		</li>
		<li class="nav-item">
			<button class="nav-link cart-color"  href="#"><i class="fas fa-shopping-cart"></i>Cart</button>
		</li>

		<div  class="language">
	    <button class="languagebtn"><img src="english.png">English 
	      <i class="fa fa-caret-down"></i>
	    </button>
	    <div class="language-content">
	      <a href="#"><img src="english.png"> English</a>
	      <a href="#"><img src="bangla.png">Bangla</a>
	    </div>
	  </div> 

	</ul>

</div>
</div>
</div>
<!-- Menu Area Start -->

<div class="topnavbar">
<div id="myNavbar" class=" navbar" >
<!-- 	<div class="imagelogo">
		<img src="pickaboo2.png">
	</div> -->

  
  <div class="dropdown">
    <button class="dropbtn">Mobiles 

    </button>
    <div class="dropdown-content">
    	<div class="row">
    	<ul class="col-sm-4">
    		<li><h5> <a href="#"><span style="color: #000;"></span>Smartphones</a></h5></li>
    		<div class="row">
    			<div class="col-sm-6">
    				<ul class="list-text">
    		 <a href="#">Xiaomi</a>
    		 <a href="#">Apple</a>
    		 <a href="#">Samsung</a>
    		 <a href="#">Huawei</a>
    		 <a href="#">Vivo</a>
    		 <a href="#">BlackBerry</a>
    		 <a href="#">Lenevo</a>
    			</ul>
		    	</div>
		    	<div class="col-sm-6">
    				<ul class="list-text">
    		 <a href="#">Nokia</a>
    		 <a href="#">Micromax</a>
    		 <a href="#">Symphony</a>
    		 <a href="#">OnePlus</a>
    			</ul>
		    	</div>
		    </div>
    	</ul>

    	<ul class="col-sm-4">
    		<li><h5> <a href="#"><span style="color: #000;"></span>FEATURE PHONES</a></h5></li>
    		<div class="row">
    			<div class="col-sm-6">
    				<ul class="list-text">
			    		 <a href="#">Samsung</a>
			    		 <a href="#">Nokia</a>
			    		 <a href="#">Symphony</a>
			    		 <a href="#">BlackBerry</a>
			    		 <a href="#">Micromax</a>
    			</ul>
		    	</div>
		    </div>
    	</ul>
    </div>
  </div>
  </div>



<div class="dropdown">
    <button class="dropbtn">Computer 

    </button>
    <div class="dropdown-content">
    	<div class="row">
    	<ul class="col-sm-4">
    		<li><h5> <a href="#"><span style="color: #000;"></span>Smartphones</a></h5></li>
    		<div class="row">
    			<div class="col-sm-6">
    				<ul class="list-text">
    		 <a href="#">Asus</a>
    		 <a href="#">Acer</a>
    		 <a href="#">Samsung</a>
    		 <a href="#">Dell</a>
    		 <a href="#">Vivo</a>
    		 <a href="#">Lenevo</a>
    		 <a href="#">Hp</a>
    			</ul>
		    	</div>
		    	<div class="col-sm-6">
    				<ul class="list-text">
    		 <a href="#">Apple</a>
    		 <a href="#">Macbook</a>

    			</ul>
		    	</div>
		    </div>
    	</ul>

    	<ul class="col-sm-4">
    		<li><h5> <a href="#"><span style="color: #000;"></span>Desktop</a></h5></li>
    		<li><h5> <a href="#"><span style="color: #000;"></span>Laptop & Desktop Accessories</a></h5></li>
    		<div class="row">
    			<div class="col-sm-6">
    				<ul class="list-text">
			    		 <a href="#">Keyboards</a>
			    		 <a href="#">Mouse</a>
			    		 <a href="#">Headphone</a>
			    		 <a href="#">Printer</a>
			    		 <a href="#">Powersupply</a>
    			</ul>
		    	</div>
		    </div>
    	</ul>
    	<li style="list-style: none;"><h5> <a href="#"><span style="color: #000;"></span>Gaming Console</a></h5></li>

    </div>
  </div>
  </div>


<div class="dropdown">
    <button class="dropbtn">Electronics 

    </button>
    <div class="dropdown-content">
    	<div class="row">
    	<ul class="col-sm-4">
    		<li><h5> <a href="#"><span style="color: #000;"></span>Television</a></h5></li>
    		<div class="row">
    			<div class="col-sm-6">
    				<ul class="list-text">
    		 <a href="#">LED TV</a>
    		 <a href="#">Smart TV</a>
    		 <a href="#">TV accessories</a>

    			</ul>
		    	</div>
		    	<div class="col-sm-6">
    				<ul class="list-text">
    		 <a href="#">Nokia</a>
    		 <a href="#">Micromax</a>
    		 <a href="#">Symphony</a>
    		 <a href="#">OnePlus</a>
    			</ul>
		    	</div>
		    </div>
    	</ul>

    	<ul class="col-sm-4">
    		<li><h5> <a href="#"><span style="color: #000;"></span>FEATURE PHONES</a></h5></li>
    		<div class="row">
    			<div class="col-sm-6">
    				<ul class="list-text">
			    		 <a href="#">Samsung</a>
			    		 <a href="#">Nokia</a>
			    		 <a href="#">Symphony</a>
			    		 <a href="#">BlackBerry</a>
			    		 <a href="#">Micromax</a>
    			</ul>
		    	</div>
		    </div>
    	</ul>
    </div>
  </div>
  </div>


<div class="dropdown">
    <button class="dropbtn">Lifestyle 

    </button>
    <div class="dropdown-content">
    	<div class="row">
    	<ul class="col-sm-4">
    		<li><h5> <a href="#"><span style="color: #000;"></span>Smartphones</a></h5></li>
    		<div class="row">
    			<div class="col-sm-6">
    				<ul class="list-text">
    		 <a href="#">Xiaomi</a>
    		 <a href="#">Apple</a>
    		 <a href="#">Samsung</a>
    		 <a href="#">Huawei</a>
    		 <a href="#">Vivo</a>
    		 <a href="#">BlackBerry</a>
    		 <a href="#">Lenevo</a>
    			</ul>
		    	</div>
		    	<div class="col-sm-6">
    				<ul class="list-text">
    		 <a href="#">Nokia</a>
    		 <a href="#">Micromax</a>
    		 <a href="#">Symphony</a>
    		 <a href="#">OnePlus</a>
    			</ul>
		    	</div>
		    </div>
    	</ul>

    	<ul class="col-sm-4">
    		<li><h5> <a href="#"><span style="color: #000;"></span>FEATURE PHONES</a></h5></li>
    		<div class="row">
    			<div class="col-sm-6">
    				<ul class="list-text">
			    		 <a href="#">Samsung</a>
			    		 <a href="#">Nokia</a>
			    		 <a href="#">Symphony</a>
			    		 <a href="#">BlackBerry</a>
			    		 <a href="#">Micromax</a>
    			</ul>
		    	</div>
		    </div>
    	</ul>
    </div>
  </div>
  </div>


<div class="dropdown">
    <button class="dropbtn">Vehicles 

    </button>
    <div class="dropdown-content">
    	<div class="row">
    	<ul class="col-sm-4">
    		<li><h5> <a href="#"><span style="color: #000;"></span>Smartphones</a></h5></li>
    		<div class="row">
    			<div class="col-sm-6">
    				<ul class="list-text">
    		 <a href="#">Xiaomi</a>
    		 <a href="#">Apple</a>
    		 <a href="#">Samsung</a>
    		 <a href="#">Huawei</a>
    		 <a href="#">Vivo</a>
    		 <a href="#">BlackBerry</a>
    		 <a href="#">Lenevo</a>
    			</ul>
		    	</div>
		    	<div class="col-sm-6">
    				<ul class="list-text">
    		 <a href="#">Nokia</a>
    		 <a href="#">Micromax</a>
    		 <a href="#">Symphony</a>
    		 <a href="#">OnePlus</a>
    			</ul>
		    	</div>
		    </div>
    	</ul>

    	<ul class="col-sm-4">
    		<li><h5> <a href="#"><span style="color: #000;"></span>FEATURE PHONES</a></h5></li>
    		<div class="row">
    			<div class="col-sm-6">
    				<ul class="list-text">
			    		 <a href="#">Samsung</a>
			    		 <a href="#">Nokia</a>
			    		 <a href="#">Symphony</a>
			    		 <a href="#">BlackBerry</a>
			    		 <a href="#">Micromax</a>
    			</ul>
		    	</div>
		    </div>
    	</ul>
    </div>
  </div>
  </div>

  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="functionNavbar()">&#9776;</a>
</div>
</div>

</header>
<!-- End Menu Content -->

<!-- Slider Area Start -->
<section class="slidersection">

<div class="container">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/s1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/s2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/s3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>


</div>
</div>


<div class="container controls">
    <ul class="nav">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" ><a href="#"><small>Orko Wearable Smart Locator</small></a></li> <span >|</span>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"><a href="#"><small>Stay Fabulous</small></a></li><span >|</span>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"><a href="#"><small>Wish The Best</small></a></li>
    </ul>
 </div>

</section>
<!-- Slider End -->


<div class="container">
	<div class="imagebanner">
	<div class="row">
		<div class="col-md-6 ">
			<a href=""><img src="img/left.jpg" class="img-fluid" alt="Responsive image"></a>
		</div>
		<div class="col-md-6 ">
			<a href=""><img src="img/right.jpg" class="img-fluid" alt="Responsive image"></a>
		</div>
	</div>
	</div>
</div>



<!-- Hot Deals -->

<div class="container">
	<div class="col-md-12 hotdeals">
		<h5>*Hotdeals*</h5>
	</div>

	<div class="col-md-12 hotsection">
		<div class="row">
			<div class="hot-products">
				<a href="details.php">
					<div class="hotproduct">
						<img src="img/98.png" class="img-fluid" alt="Responsive image">
						<div class="hot-details">
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>

							<p>Product Name</p>

							<p>৳3200</p>
							
							<button>Buy Now</button>
							
						</div>
					</div>

				</a>
			</div>

			<div class="hot-products">
				<a href="details.php">
					<div class="hotproduct">
						<img src="img/99.png" class="img-fluid" alt="Responsive image">
						<div class="hot-details">
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>

							<p>Product Name</p>

							<p>৳2000</p>
							
							<button>Buy Now</button>
							
						</div>
					</div>

				</a>
			</div>


			<div class="hot-products">
				<a href="details.php">
					<div class="hotproduct">
						<img src="img/97.png" class="img-fluid" alt="Responsive image">
						<div class="hot-details">
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>

							<p>Product Name</p>

							<p>৳1600</p>
							
							<button>Buy Now</button>
							
						</div>
					</div>

				</a>
			</div>


			<div class="hot-products">
				<a href="details.php">
					<div class="hotproduct">
						<img src="img/2.png" class="img-fluid" alt="Responsive image">
						<div class="hot-details">
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>

							<p>Product Name</p>

							<p>৳18000</p>
							
							<button>Buy Now</button>
							
						</div>
					</div>

				</a>
			</div>


			<div class="hot-products">
				<a href="details.php">
					<div class="hotproduct">
						<img src="img/34.png" class="img-fluid" alt="Responsive image">
						<div class="hot-details">
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>

							<p>Product Name</p>

							<p>৳32000</p>
							
							<button>Buy Now</button>
							
						</div>
					</div>

				</a>
			</div>



		</div>
		
	</div>
</div>


<!-- Hot Deals End -->

<!-- Categorywise Product -->

<div class="container">
	<div class="col-md-12 pd-category">
		<div class="row">
			<div class="sidebar-box">
				<div class="box-header">
					<img src="img/2.png">
				<h3>Mobiles</h3>
				</div>
				
					<li><a href="">Smartphones</a></li>
					<li><a href="">Smartphones</a></li>
					<li><a href="">Smartphones</a></li>
				</div>

				<div class="categorypd">
					<div class="row categorypd">
					<div class="cat-products">
					<a href="details.php">
						<div class="catproduct">
							<img src="img/10.png" class="img-fluid" alt="Responsive image">
							<div class="cat-pro">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>

								<h5>Product Name jndkjvndfjk jndjkdfkvndfk mcnkd</h5>

								<p class="tkbd"><span>৳</span>32000</p>
								
							</div>
						</div>

					</a>
					</div>


					<div class="cat-products">
					<a href="details.php">
						<div class="catproduct">
							<img src="img/9.png" class="img-fluid" alt="Responsive image">
							<div class="cat-pro">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>

								<h5>Product Name jndkjvndfjk jndjkdfkvndfk mcnkd</h5>

								<p class="tkbd"><span>৳</span>25000</p>
								
							</div>
						</div>

					</a>
					</div>


					<div class="cat-products">
					<a href="details.php">
						<div class="catproduct">
							<img src="img/8dbfb6ff2b.png" class="img-fluid" alt="Responsive image">
							<div class="cat-pro">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>

								<h5>Product Name jndkjvndfjk jndjkdfkvndfk mcnkd</h5>

								<p class="tkbd"><span>৳</span>22000</p>
								
							</div>
						</div>

					</a>
					</div>


					<div class="cat-products">
					<a href="details.php">
						<div class="catproduct">
							<img src="img/7.png" class="img-fluid" alt="Responsive image">
							<div class="cat-pro">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>

								<h5>Product Name jndkjvndfjk jndjkdfkvndfk mcnkd</h5>

								<p class="tkbd"><span>৳</span>20000</p>
								
							</div>
						</div>

					</a>
					</div>


					<div class="cat-products">
					<a href="details.php">
						<div class="catproduct">
							<img src="img/3.png" class="img-fluid" alt="Responsive image">
							<div class="cat-pro">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>

								<h5>Product Name jndkjvndfjk jndjkdfkvndfk mcnkd</h5>

								<p class="tkbd"><span>৳</span>18000</p>
								
							</div>
						</div>

					</a>
					</div>

					<div class="cat-products">
					<a href="details.php">
						<div class="catproduct">
							<img src="img/19.png" class="img-fluid" alt="Responsive image">
							<div class="cat-pro">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>

								<h5>Product Name jndkjvndfjk jndjkdfkvndfk mcnkd</h5>

								<p class="tkbd"><span>৳</span>22000</p>
								
							</div>
						</div>

					</a>
					</div>

				</div>
				</div>

				<div class="col-md-2 side-img-bar">
					<div class="side_image">
					<a href="details.php"><img src="img/52.png"></a>
					</div>
				</div>
		</div>
	</div>

</div>

<!-- Mobiles Category ENd -->

<div class="container">
	<div class="col-md-12 pd-category-green">
		<div class="row">
			<div class="sidebar-box">
				<div class="box-header">
					<img src="img/2.png">
				<h3 style="color: #60BB46;">Computers</h3>
				</div>
				
					<li><a href="">Laptops</a></li>
					<li><a href="">Dextop</a></li>
					<li><a href="">Computer Accessories</a></li>
					<li><a href="">Apple Accessories</a></li>
					<li><a href="">Ganing & Consoles</a></li>
				</div>

				<div class="categorypd">
					<div class="row categorypd">
					<div class="cat-products">
					<a href="details.php">
						<div class="catproduct">
							<img src="img/27.jpg" class="img-fluid" alt="Responsive image">
							<div class="cat-pro">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>

								<h5>Product Name jndkjvndfjk jndjkdfkvndfk mcnkd</h5>

								<p class="tkbd"><span>৳</span>52000</p>
								
							</div>
						</div>

					</a>
					</div>


					<div class="cat-products">
					<a href="details.php">
						<div class="catproduct">
							<img src="img/28.jpg" class="img-fluid" alt="Responsive image">
							<div class="cat-pro">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>

								<h5>Product Name jndkjvndfjk jndjkdfkvndfk mcnkd</h5>

								<p class="tkbd"><span>৳</span>45000</p>
								
							</div>
						</div>

					</a>
					</div>


					<div class="cat-products">
					<a href="details.php">
						<div class="catproduct">
							<img src="img/51.jpg" class="img-fluid" alt="Responsive image">
							<div class="cat-pro">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>

								<h5>Product Name jndkjvndfjk jndjkdfkvndfk mcnkd</h5>

								<p class="tkbd"><span>৳</span>4000</p>
								
							</div>
						</div>

					</a>
					</div>


					<div class="cat-products">
					<a href="">
						<div class="catproduct">
							<img src="img/30.png" class="img-fluid" alt="Responsive image">
							<div class="cat-pro">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>

								<h5>Product Name jndkjvndfjk jndjkdfkvndfk mcnkd</h5>

								<p class="tkbd"><span>৳</span>5000</p>
								
							</div>
						</div>

					</a>
					</div>


					<div class="cat-products">
					<a href="">
						<div class="catproduct">
							<img src="img/33.png" class="img-fluid" alt="Responsive image">
							<div class="cat-pro">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>

								<h5>Product Name jndkjvndfjk jndjkdfkvndfk mcnkd</h5>

								<p class="tkbd"><span>৳</span>60000</p>
								
							</div>
						</div>

					</a>
					</div>

					<div class="cat-products">
					<a href="">
						<div class="catproduct">
							<img src="img/37.jpg" class="img-fluid" alt="Responsive image">
							<div class="cat-pro">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>

								<h5>Product Name jndkjvndfjk jndjkdfkvndfk mcnkd</h5>

								<p class="tkbd"><span>৳</span>22000</p>
								
							</div>
						</div>

					</a>
					</div>

				</div>
				</div>

				<div class="col-md-2 side-img-bar">
					<div class="side_image">
						<img src="img/433.png">
					</div>
				</div>
		</div>
	</div>

</div>


<!-- Computer Category End -->

<div class="container">
	<div class="col-md-12 pd-category-purple">
		<div class="row">
			<div class="sidebar-box">
				<div class="box-header">
					<img src="img/2.png">
				<h3 style="color: #92278F;">Electronics</h3>
				</div>
				
					<li><a href="">Cameras</a></li>
					<li><a href="">Safety Security</a></li>
					<li><a href="">Home Appliances</a></li>
					<li><a href="">Audio Player System</a></li>
					<li><a href="">Health Care Devices</a></li>
				</div>

				<div class="categorypd">
					<div class="row categorypd">
					<div class="cat-products">
					<a href="">
						<div class="catproduct">
							<img src="img/33.png" class="img-fluid" alt="Responsive image">
							<div class="cat-pro">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>

								<h5>Product Name jndkjvndfjk jndjkdfkvndfk mcnkd</h5>

								<p class="tkbd"><span>৳</span>32000</p>
								
							</div>
						</div>

					</a>
					</div>


					<div class="cat-products">
					<a href="">
						<div class="catproduct">
							<img src="img/34.png" class="img-fluid" alt="Responsive image">
							<div class="cat-pro">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>

								<h5>Product Name jndkjvndfjk jndjkdfkvndfk mcnkd</h5>

								<p class="tkbd"><span>৳</span>42000</p>
								
							</div>
						</div>

					</a>
					</div>


					<div class="cat-products">
					<a href="">
						<div class="catproduct">
							<img src="img/41.png" class="img-fluid" alt="Responsive image">
							<div class="cat-pro">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>

								<h5>Product Name jndkjvndfjk jndjkdfkvndfk mcnkd</h5>

								<p class="tkbd"><span>৳</span>62000</p>
								
							</div>
						</div>

					</a>
					</div>


					<div class="cat-products">
					<a href="">
						<div class="catproduct">
							<img src="img/37.jpg" class="img-fluid" alt="Responsive image">
							<div class="cat-pro">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>

								<h5>Product Name jndkjvndfjk jndjkdfkvndfk mcnkd</h5>

								<p class="tkbd"><span>৳</span>25000</p>
								
							</div>
						</div>

					</a>
					</div>


					<div class="cat-products">
					<a href="">
						<div class="catproduct">
							<img src="img/47.jpg" class="img-fluid" alt="Responsive image">
							<div class="cat-pro">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>

								<h5>Product Name jndkjvndfjk jndjkdfkvndfk mcnkd</h5>

								<p class="tkbd"><span>৳</span>2200</p>
								
							</div>
						</div>

					</a>
					</div>

					<div class="cat-products">
					<a href="">
						<div class="catproduct">
							<img src="img/55.png" class="img-fluid" alt="Responsive image">
							<div class="cat-pro">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>

								<h5>Product Name jndkjvndfjk jndjkdfkvndfk mcnkd</h5>

								<p class="tkbd"><span>৳</span>6000</p>
								
							</div>
						</div>

					</a>
					</div>

				</div>
				</div>

				<div class="col-md-2 side-img-bar">
					<div class="side_image">
						<img src="img/411.png">
					</div>
				</div>
		</div>
	</div>

</div>


<!-- Electronics Category End -->

<div class="container">
	<div class="col-md-12 pd-category">
		<div class="row">
			<div class="sidebar-box">
				<div class="box-header">
					<img src="img/2.png">
				<h3>Lifestyles</h3>
				</div>
				
					<li><a href="">Shaver $ Trimmer</a></li>
					<li><a href="">Hairstyle</a></li>
					<li><a href="">Mens Perfumes</a></li>
					<li><a href="">Mens Accessories</a></li>
					<li><a href="">Women Perfumes & Fraggnance</a></li>
					<li><a href="">Women Watches & Accessories</a></li>
				</div>

				<div class="categorypd">
					<div class="row categorypd">
					<div class="cat-products">
					<a href="">
						<div class="catproduct">
							<img src="img/97.png" class="img-fluid" alt="Responsive image">
							<div class="cat-pro">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>

								<h5>Product Name jndkjvndfjk jndjkdfkvndfk mcnkd</h5>

								<p class="tkbd"><span>৳</span>2200</p>
								
							</div>
						</div>

					</a>
					</div>


					<div class="cat-products">
					<a href="">
						<div class="catproduct">
							<img src="img/35.png" class="img-fluid" alt="Responsive image">
							<div class="cat-pro">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>

								<h5>Product Name jndkjvndfjk jndjkdfkvndfk mcnkd</h5>

								<p class="tkbd"><span>৳</span>3000</p>
								
							</div>
						</div>

					</a>
					</div>


					<div class="cat-products">
					<a href="">
						<div class="catproduct">
							<img src="img/88.png" class="img-fluid" alt="Responsive image">
							<div class="cat-pro">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>

								<h5>Product Name jndkjvndfjk jndjkdfkvndfk mcnkd</h5>

								<p class="tkbd"><span>৳</span>2200</p>
								
							</div>
						</div>

					</a>
					</div>


					<div class="cat-products">
					<a href="">
						<div class="catproduct">
							<img src="img/89.png" class="img-fluid" alt="Responsive image">
							<div class="cat-pro">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>

								<h5>Product Name jndkjvndfjk jndjkdfkvndfk mcnkd</h5>

								<p class="tkbd"><span>৳</span>3000</p>
								
							</div>
						</div>

					</a>
					</div>


					<div class="cat-products">
					<a href="">
						<div class="catproduct">
							<img src="img/99.png" class="img-fluid" alt="Responsive image">
							<div class="cat-pro">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>

								<h5>Product Name jndkjvndfjk jndjkdfkvndfk mcnkd</h5>

								<p class="tkbd"><span>৳</span>3000</p>
								
							</div>
						</div>

					</a>
					</div>

					<div class="cat-products">
					<a href="">
						<div class="catproduct">
							<img src="img/56.png" class="img-fluid" alt="Responsive image">
							<div class="cat-pro">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>

								<h5>Product Name jndkjvndfjk jndjkdfkvndfk mcnkd</h5>

								<p class="tkbd"><span>৳</span>2500</p>
								
							</div>
						</div>

					</a>
					</div>

				</div>
				</div>

				<div class="col-md-2 side-img-bar">
					<div class="side_image">
						<img src="img/422.png">
					</div>
				</div>
		</div>
	</div>

</div>


<!-- Lifestyle Category End -->


<!-- Categorywise Product End -->


<div class="container bottom">
	<div class="col-md-12 bottomimg">
		<img src="img/lowerimg.png" class="img-fluid bottom-hover-image" alt="Responsive image">
			  <div class="overlay">
			    <img src="img/lowerimg.png" class="overlay-image">
			  </div>
	</div>
</div>




<!-- Footer Area start -->


<div class="footer-top">
	<div class="container">
	<div class="col-md-12">
		<div class="row">
			<div class="col-md-3 f-firstrow">
				<h5>Get to Know Us</h5>
					<li><a href="">About us</a></li>
					<li><a href="">Privacy Policy</a></li>
					<li><a href="">Cookie Policy</a></li>
					<li><a href="">Warranty Policy</a></li>
					<li><a href="">Why Shop with Us</a></li>
					<li><a href="">FAQ</a></li>
					<li><a href="">Terms & Conditions</a></li>

			</div>


			<div class="col-md-3 f-firstrow">
				<h5>Let Us Help You</h5>

					<li><a href="">Your Account</a></li>
					<li><a href="">Your Orders</a></li>
					<li><a href="">Fastpick</a></li>
					<li><a href="">How to Place an Order</a></li>
					<li><a href="">Track Your Order</a></li>
					<li><a href="">Mobile Phone Exchange</a></li>
					<li><a href="">EMI</a></li>
					<li><a href="">About TEMP Service</a></li>
					<li><a href="">Terms & Conditions for TEMP Service</a></li>

			</div>


			<div class="col-md-3 f-firstrow">
				<h5>Get in Touch with Us</h5>

					<li><a href="">Contact Us</a></li>
					<li><a href="">Pickaboo Blog</a></li>

					<h5>Make Money With Us</h5>

					<li><a href="">Sell on Pickaboo</a></li>
					<li><a href="">Pickaboo Club</a></li>
					<li><a href="">Why Shop with Us</a></li>
					
					<h5>Payment Methods</h5>
					<img src="img/visa.png" class="img-fluid" alt="Responsive image">
					<img src="img/ms.png" class="img-fluid" alt="Responsive image">
					<img src="img/america.png" class="img-fluid" alt="Responsive image">
					<img src="img/bkash.jpg" class="img-fluid" alt="Responsive image">
			</div>


			<div class="col-md-3 f-firstrow">
				<h5>pickaboo.com</h5>

					<p><i class="fas fa-map-marker-alt"></i> House 10, Road 12</p>
					<p>Block F, Niketan, Gulshan</p>
					<p>Dhaka - 1212, Bangladesh</p>
					<p><i class="fas fa-phone"></i> +8809666745745</p>
					<p><i class="fas fa-envelope"></i> support@pickaboo.com</p>


 

			</div>
		</div>

		<hr>

		<div class="col-md-12">
			<div class="row">
				<div class="col-md-8 lastrow">
					<div class="row">
					<h5>Sign Up For NewsLetter</h5>
						<div class="col-md-8">
						<form class="bottomsearchbar" action="/action_page.php">
						  <input type="text" placeholder="Search.." name="search">
						  <button type="submit">SUBSCRIBE</button>
						</form>
						</div>
					</div>
				</div>
				<div class="col-sm-4 follow">
					<div class="row">
						<h5>Follow Us</h5>
						<div class="col-md-8 social-icon">
							<a href="" class="fab fa-facebook-square"></a>
							<a href="" class="fab fa-youtube"></a>
							<a href="" class="fab fa-google-plus-g"></a>
							<a href="" class="fab fa-instagram"></a>
						</div>
					</div>
				</div>

			</div>
		</div>

</div>
</div>
</div>

<div class="footer">
	<div class="container">
		<p>© 2019 pickaboo.com | All Rights Reserved. design using pickaboo.com, by huzaifa al noor </p>
	</div>
</div>

<!-- End Footer -->


<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>









<script>
function functionNavbar() {
  var x = document.getElementById("myNavbar");
  if (x.className === "navbar") {
    x.className += " responsive";
  } else {
    x.className = "navbar";
  }
}
</script>
<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("myNavbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>


<script>
// Get the modal
var loginmodal = document.getElementById('mylgModal');

// Get the button that opens the modal
var btn = document.getElementById("mylgnBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  loginmodal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  loginmodal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == loginmodal) {
    loginmodal.style.display = "none";
  }
}
</script>

<?php  include "inc/footer.php";  ?>
