<!DOCTYPE html>
<html>
<head>
	<title>HNG &middot; Sign in</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Numans">
    </style>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Mada">
    </style>


	<meta charset="utf-8">

</head>
<body class="container">
	<?php     
	$todayDate = date('d:m:Y');     
	$todayTime = date("h:i:sa");  
	 ?>



	<div class="form_container">

		<div class="logo">
				<img src="hng.png" alt="hng_logo">
			<div>
				<div class="nameoflogo">
					<p>HNGINTERSHIP</p>
				</div>
					<div class="signin1">
						<p>Sign in</p>
					</div>

					<div class="username_container">
						<p class="username">USERNAME</p>
					</div>
					<div class="password_container">
						<p class="password">PASSWORD</p>
					</div>

						<div class="signin">
							<p><a href="sign.html" class="signin_text"> sign in</a></p>
						</div>

							<div class="info">
								<p>if you dont have an account <br> <a href="next.html" class="click">click here</a> to create one</p>
							</div>
									<div class="time">
										<h2>Date:

										<?php echo $todayDate; ?> Time:        
										 <?php echo $todayTime; ?>       
										</h2>
									</div>
				
			</div>
			
		</div>
			
		</div>
		
	</div>

</body>
</html>