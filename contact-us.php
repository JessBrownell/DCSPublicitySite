<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible">
		<title>Dealer Chargeback Solutions</title>
		<link rel="stylesheet" type="text/css" href="main-style.css">
		<link rel="stylesheet" type="text/css" href="css/chargeback-recovery.css">
		<script src="https://kit.fontawesome.com/1305c304ce.js" crossorigin="anonymous"></script>
		<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&family=Source+Sans+Pro&display=swap" rel="stylesheet">
	</head>
	<body>
		<nav>
			<div class="logo">
				<img src="imgs/fullLogoBlack.png" class="logoImg"><br>
				<h4 class="title">Dealer Chargeback Solutions</h4>
			</div>
			<div class="dropdown">
				<button class="dropbtn">
					<i class="fas fa-bars"></i>
				</button>
				<div class="dropdown-content">
					<a href="index.html">Home</a>
					<a href="tru-defend.html">Tru-Defend</a>
					<a href="tru-time.html">Tru-Time</a>
					<a href="tru-support.html">Tru-Support</a>
					<a href="tru-review.html">Tru-Review</a>
					<a href="blog.html">Blog</a>
					<a href="book-a-demo.php">Book a Demo</a>
					<a href="contact-us.php">Contact Us</a>
				</div>
			</div>
		</nav>

		<div class="heading-section">
			<h4>GET IN TOUCH</h4>
			<h6 style="color: grey">Want to get in touch? We'd love to hear from you! Here's how you can reach us.</h6>
		</div>

		<div class="section" id="top" style="min-height: 200px">
			<div class="row">
				<div class="col3">
					<div class="card" style="text-align: center; min-height: 200px;">
						<p><i class="icon fas fa-envelope-open"></i></p>
						<h3>EMAIL</h3>
						<p>info@dealerchargeback.com</p>
					</div>
				</div>

				<div class="col3">
					<div class="card" style="text-align: center; min-height: 200px;">
						<p><i class="icon fas fa-phone"></i></p>
						<h3>PHONE</h3>
						<p>1 (800) 280 2028</p>
					</div>
				</div>

				<div class="col3">
					<div class="card" style="text-align: center; min-height: 200px;">
						<p><i class="icon fas fa-compass"></i></i></p>
						<h3>LOCATION</h3>
						<p>9595 Wilshire Boulevard</p>
						<p>Suite 900 –751</p>
						<p>Beverly Hills, CA, 90212</p>
					</div>
				</div>
			</div>		
		</div>

		<?php include('validate.php'); ?>

		<div class="section" id="middle">
			<h4 class="keyTitle">CONTACT FORM</h4>
			<form id="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				<div class="card" style="width: 80%; margin-left: auto; margin-right: auto;">
					<div class="row">
						<div class="col" style="width: 100%">
							<label for="company">Dealership</label> <span class="error">* <?php echo $errors['dealerErr'];?></span>
							<input type="text" id="Dealership" name="Dealership" placeholder="Dealership" value="<?php echo $Dealership?>">

							<label for="fname">First Name</label> <span class="error">* <?php echo $errors['firstErr'];?></span>
							<input type="text" id="First" name="First" placeholder="First" value="<?php echo $First?>"><br>

							<label for="lname">Last Name</label> <span class="error">* <?php echo $errors['lastErr'];?></span>
							<input type="text" id="Last" name="Last" placeholder="Last" value="<?php echo $Last?>"><br>

							<label for="email">Email</label> <span class="error">* <?php echo $errors['emailErr'];?></span>
							<input type="text" id="Email" name="Email" placeholder="Email" value="<?php echo $Email?>">

							<label for="phone">Phone</label> <span class="error">* <?php echo $errors['phoneErr'];?></span>
							<input type="text" id="Phone" name="Phone" placeholder="Phone" value="<?php echo $Phone?>">
						</div>
						
						<div class="col" style="width: 100%">
							<label for="Comment">Comment</label><br>
							<textarea id="Comment" name="Comment" style="height:200px" value="<?php echo $Comment?>"></textarea>	
						</div>
						<input type="submit" value="Submit">	
					</div>
				</div>
			</form>
		</div>


	</body>

	<div class="footer">
		<div class="footer-content">
			<div class="services">
				<p class="fHeader">Services</p>
				<a href="tru-defend.html">Tru-Defend</a><br>
				<a href="tru-time.html">Tru-Time</a><br>
				<a href="tru-support.html">Tru-Support</a><br>
				<a href="tru-review.html">Tru-Review</a><br>
			</div>
			<div class="about">
				<p class="fHeader">About</p>
				<a href="book-a-demo.php">Book a Demo</a><br>
				<a href="contact-us.php">Contact Us</a>
			</div>
			<div class="address">
				<p class="fHeader">Dealer Chargeback Solutions - D.C.S</p>
				<p>9595 Wilshire Boulevard</p>
				<p>Suite 900 –751</p>
				<p>Beverly Hills, CA, 90212</p>
			</div>
		</div>
		<div class="footer-bottom">
			<p>Dealer Chargeback Services - 2020</p>
		</div>
	</div>
</html>