<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="footer, address, phone, icons" />

	<title>Footer With Address And Phones</title>

	<link rel="stylesheet" href="css/demo.css">
	<link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
	
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

</head>

	<body>
	<?php


require_once("connect.php");

if(!isset($_SESSION['UserID']))
{
echo "Please Login!";
exit();
}

?>

		<header>

			

		</header>

		<!-- The content of your page would go here. -->

		<footer class="footer-distributed">

			<div class="footer-left">

			<!--	<h3>Company<span>logo</span></h3> -->

				

				
			</div>
			<center>
			<div class="footer-center">
				
				<div>
					<h2><span>จัดทำโดย นายวุฒินันท์  ชาวยศ สาขาวิชาวิศวกรรมคอมพิวเตอร์</span></h2>
					<h2><span>มหาวิทยาลัยเทคโนโลยีสุรนารี</span></h2>

				</div>
				
				
				<div>
					<i class="fa fa-facebook"></i>
					<p><a href="http://www.facebook.com/wuttinunt.ch">Wuttinunt.ch</a></p>

					<i class="fa fa-envelope"></i>
					<p><a href="mailto:wuttinunt.th@gmail.com">wuttinunt.th@gmail.com</a></p>
				</div>

			</div>
			</center>

			<div class="footer-right">

				


			</div>

		</footer>

	</body>

</html>
