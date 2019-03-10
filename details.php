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

<div class="col-md-12">
<div class="row">
<div class="col-md-9 imagelgbig">
	<div class="row">
		<div class="col-md-6">
			<div class="easyzoom easyzoom--adjacent2 easyzoom--overlay easyzoom--with-thumbnails">
				<a href="img/84.png">
					<img src="img/84.png" alt="" width="400" height="400" />
				</a>
			</div>

			<ul class="thumbnails">
				<li>
					<a href="img/84.png" data-standard="img/84.png">
						<img src="img/84.png" alt="" />
					</a>
				</li>
				<li>
					<a href="img/7.png" data-standard="img/7.png">
						<img src="img/7.png" alt="" />
					</a>
				</li>
				<li>
					<a href="img/9.png" data-standard="img/9.png">
						<img src="img/9.png" alt="" />
					</a>
				</li>
				<li>
					<a href="img/2.png" data-standard="img/2.png">
						<img src="img/2.png" alt="" />
					</a>
				</li>
				<li>
					<a href="img/10.png" data-standard="img/10.png">
						<img src="img/10.png" alt="" />
					</a>
				</li>
			</ul>
			</div>

			<div class="col-md-6 pddetails">
				<h1>Product Name</h1>
				<h3>৳32000</h3>
				<h6><i class="fas fa-circle"></i>Exchange Offer Available</h6>
				<h6><i class="fas fa-circle"></i>Earn 659.8 Club Points</h6>
				<h6 class="purple"><i class="fas fa-undo-alt"></i>3 Days Easy Return</h6>
				



				<div class="col-lg-6 qty-valid">
                <div class="input-group">
                <span class="input-group-btn">
                    <button type="button" class="quantity-left-minus btn btn-danger btn-number"  data-type="minus" data-field="">
                      <i class="fas fa-minus-square"></i>
                    </button>
                </span>
                <input type="text" id="quantity" name="quantity" class="form-control input-number count" value="10" min="1" max="100">
                <span class="input-group-btn">
                    <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="">
                        <i class="fas fa-plus-square"></i>
                    </button>
                </span>
           		 </div>
                </div>


                <h5>* Please fill up the required fields</h5>


                <button class="addcartbtn">Add to cart</button>
                <button class="buybtn">Buy Now</button>
			</div>

	</div>

<div class="col-md-12" id="detailsDiv">
		<button class="tablink active" onclick="openPage('Details', this, '#fff')" id="defaultOpen">Details</button>
		<button class="tablink" onclick="openPage('Specifications', this, '#fff')">Specifications</button>
		<button class="tablink" onclick="openPage('Return', this, '#fff')">Return & Replacement Policy</button>

		<div id="Details" class="tabcontent">
			<h3>Realme 2 Pro Smartphone</h3>
			<ul>
			<li>OS: Android 8.1 (Oreo) ColorOS 5.2</li>
		    <li>Processor: Qualcomm SDM660 Snapdragon 660 </li>
		    <li>Chipset: Octa-core 1.95 GHz</li>
		    <li>GPU：Adreno GPU 512</li>
		    <li>RAM: 8GB</li>
		    <li>ROM: 128GB</li>
		    <li>Display: 6.3” IPS (In-Cell) LCD (2340x1080) FHD+ Display; 408 ppi</li>
		    <li>Rear Camera: 16 MP (f/1.7) + 2 MP (f/2.4) Dual Camera; Back LED Flash</li>
		    <li>Front Camera: 16 MP (f/2.0)</li>
		    <li>Battery: Non-removable Li-Ion 3500 mAh battery; 5V 2A Charger</li>
		    <li>Sensors: M-sensor, Gravity Sensor, Gyro-meter, Fingerprint Sensor, Light and Proximity Sensor, OTG</li>
		    </ul>
		</div>

		<div id="Specifications" class="tabcontent">
			<table class="table table-bordered details_tbl">
<!-- 				  <thead>
				    <tr>
				      <th scope="col"></th>				      
				      <th scope="col">Handle</th>
				    </tr>
				  </thead> -->
				  <tbody>
				    <tr>
				      <th class="firstrow" scope="row">Brand</th>
				      <td>Realme</td>
				    </tr>
				    <tr>
				      <th scope="row">SKU</th>
				      <td>RLM2PCPL</td>
				    </tr>
				    <tr>
				      <th scope="row">Offers</th>
				      <td><i class="fas fa-circle"></i>Exchange Offer Available</td>
				    </tr>
				    <tr>
				      <th scope="row">Express Delivery</th>
				      <td>Yes</td>
				    </tr>
				    <tr>
				      <th scope="row">Warranty Information</th>
				      <td>12 Months Brand Warranty</td>
				    </tr>
				    <tr>
				      <th scope="row">EMI Available</th>
				      <td>12 Months</td>
				    </tr>
				    <tr>
				      <th scope="row">Processor</th>
				      <td>Octa Core</td>
				    </tr>
				    <tr>
				      <th scope="row">Connectivity</th>
				      <td>Wi-Fi: 802.11a/b/g/n/ac, 2.4GHz, 5GHz; Bluetooth: 5.0</td>
				    </tr>
				    <tr>
				      <th scope="row">Battery mAh</th>
				      <td>Non-removable Li-Ion 3500 mAh Battery</td>
				    </tr>
				    <tr>
				      <th scope="row"> Camera</th>
				      <td>16 MP+2MP</td>
				    </tr>
				    
				  </tbody>
				</table>
		</div>

		<div id="Return" class="tabcontent">
			<h3>Return & Replacement Policy</h3>
			<p>You can return this product for a full refund within 3 calendar days of receiving your order.<br>
				Please read the Return and Replacement Policy Page thoroughly before requesting a return or replacement for your purchased item.<br>
				If your purchased item meets all the requirements, your return can be initiated via two options -<br>

			    Option 1: Communicating with us by Facebook chat or through Live Chat on Pickaboo website.<br>

			    Option 2: By calling Pickaboo’s Customer Service on 09666745745.<br>

			    Option 3: Directly drop off the product at the office premises or by post by Sundarban Courier Service.
			</p>
		</div>
</div>





</div> <!-- col-md-9 end -->


<div class="col-md-3">
	<div class="sidebar">
		<img src="img/1000.gif" class="img-fluid" alt="Responsive image">

		<h3>Product Review</h3>
		<span class="fa fa-star checked"></span>
		<span class="fa fa-star checked"></span>
		<span class="fa fa-star checked"></span>
		<span class="fa fa-star"></span>
		<span class="fa fa-star"></span>

		<h3>Warranty</h3>
		<p>12 Months Brand Warranty</p>

		<h3>Payment Methods</h3>
		<p>Cash/Card on delivery</p>
		<p>bKash/Online payment</p>

		<h3>Payment Security Guarenteed</h3>

		<div class="payment-img">
		<img src="img/visa.png" class="img-fluid" alt="Responsive image">
		<img src="img/ms.png" class="img-fluid" alt="Responsive image">
		<img src="img/america.png" class="img-fluid" alt="Responsive image">
		<img src="img/bkash.jpg" class="img-fluid" alt="Responsive image">
	</div>
	</div>
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


<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="js/easyzoom.js"></script>
	<script>
		// Instantiate EasyZoom instances
		var $easyzoom = $('.easyzoom').easyZoom();

		// Setup thumbnails example
		var api1 = $easyzoom.filter('.easyzoom--with-thumbnails').data('easyZoom');

		$('.thumbnails').on('click', 'a', function(e) {
			var $this = $(this);

			e.preventDefault();

			// Use EasyZoom's `swap` method
			api1.swap($this.data('standard'), $this.attr('href'));
		});

		// Setup toggles example
		var api2 = $easyzoom.filter('.easyzoom--with-toggle').data('easyZoom');

		$('.toggle').on('click', function() {
			var $this = $(this);

			if ($this.data("active") === true) {
				$this.text("Switch on").data("active", false);
				api2.teardown();
			} else {
				$this.text("Switch off").data("active", true);
				api2._init();
			}
		});
	</script>

<script>
	function openPage(pageName,elmnt,color) {
	var i, tabcontent, tablinks;
		tabcontent = document.getElementsByClassName("tabcontent");
		for (i = 0; i < tabcontent.length; i++) {
		tabcontent[i].style.display = "none";
	}
		tablinks = document.getElementsByClassName("tablink");
		for (i = 0; i < tablinks.length; i++) {
		tablinks[i].style.backgroundColor = "";
		
	}
	document.getElementById(pageName).style.display = "block";
		elmnt.style.backgroundColor = color;
		
	}

	// Get the element with id="defaultOpen" and click on it
	document.getElementById("defaultOpen").click();
</script>

<script>
// Add active class to the current button (highlight it)
var header = document.getElementById("detailsDiv");
var btns = header.getElementsByClassName("tablink");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  current[0].className = current[0].className.replace(" active", "");
  this.className += " active";
  });
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
