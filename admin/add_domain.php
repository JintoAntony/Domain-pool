<?php session_start();
?>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Online Appointment System</title>
  <link rel="stylesheet" href="css/style_admin.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
  <script src="js/slides.min.jquery.js"></script>
  
</head>

<body>
	<div id="header-wrap">
		<header class="group">
			<h2><a href="" style="background: url(images/logos.png) no-repeat" title="Online Appointment System">Domain Pool</a>
			<div id="call" >
				
				<span style="position: relative;color:#49A56A;font-weight: 700;font-style: normal;font-size: 48px;
			padding: 0px 0px 5px 10px;text-shadow: 0px 1px 1px rgba(255,255,255,0.8);">Domain Pool</span>
				
			</div><!-- end call --></h2>
			<nav class="group">
				<ul>
					<li class="home"><a href="admin_home.php">Domain Management</a></li>
					<li><a href="buyer_management.php">Buyer Management</a></li>
					<li><a href="seller_management.php">Seller Management</a></li>
					<li><a href="logout.php" title="">Logout</a></li>
				</ul>
			</nav>
		</header>
	</div><!-- end header wrap -->
	
<div id="container">
	
  <!--	 <span style="position: relative;color: #771F8D;font-weight: 700;font-style: normal;font-size: 30px;
			padding: 0px 0px 5px 0px;text-shadow: 0px 1px 1px rgba(255,255,255,0.8);"> 	 </span> -->
      <p> &nbsp;  </p>
	  
	
	<div id="option">



	<center><h2 style="color:green;font-size:30px;">Add Domain</h2></center> <br/> <br/> <br/>
				
	    <form action="process_add_domain.php" method="post">
				
	<input style="color:green; height: 30px; width: 250px;"  type="text" name="domain_name" id="domain_name">
				
	<select id="domain_extension" name="domain_extension" style="color:green; height: 30px; width: 250px;">
        <option value="" selected="selected">--Select--</option>
	    <option value=".in">.in</option>
		<option value=".com">.com</option>
	    <option value=".ac.in">.ac.in</option>
        <option value=".org">.org</option>
		<option value=".co.uk">.co.uk</option>
		<option value=".mx">.mx</option>
		<option value=".net">.net</option>
		<option value=".eu">.eu</option>
        <option value=".info">.info</option>
		<option value=".mobi">.mobi</option>
		<option value=".us.com">.us.com</option>
	</select>&nbsp; 
    <input type="text" placeholder="Enter Price" name="domain_price" id="domain_price" style="color:green; height: 30px; width: 250px;">
				
	<input style="color:green; height: 30px; width: 70px;" type="submit" name="user" id="user" value="Add">
		
</form>
	


</div>
		
</div> <!--! end container -->
	
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p> &nbsp;  </p>
<p> &nbsp;  </p>
<p> &nbsp;  </p>
<p> &nbsp;  </p>
<p> &nbsp;  </p>



	
<footer class="group">
		<div id="footer-left">
			<p>Copyright <a href="#" class="green">spiderguts</a> </br>
			Designed by <a href="#" class="green">spiderguts</a></p>
		</div>
			
		<div id="footer-right">
			<ul>
				<li><a href="#">option1</a></li>
				<li><a href="#">option2</a></li>
				<li><a href="#">option3</a></li>
				<li><a href="#">option4</a></li>
				<li><a href="#">option5</a></li>
			</ul>
		</div>
				
		
	</footer>
	
	
<script>
		$(function(){
			$('#slides').slides({
				preload: true,
				generateNextPrev: true,	
			});
		});
</script>

</body>
</html>



















