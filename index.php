<!DOCTYPE html>
<html>
<head>
	<title>Example Domain</title>

    <meta charset="utf-8" />
   	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script><link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/body.css">
	
</head>
<body>
	<div class="container-fluid">
  		<div id="header" class="row">
			<?php include 'includes/header.html';?>
		</div>
		<div class="row">
			<div class="base" id="welcome">
				<div id="welcome_div">
					<p><strong>Notable Labs is a service</strong> to help your oncologist identify<br>promising treatment options <strong>for you.</strong></p>
					<img src="images/arrow-down.png" id="arrow_img">
				</div>
			</div>
		</div>
		<div class="row" id="process">
			<h1 id="process_title">Our Process</h1>
		
			<div class="row" id="process_icons">
				<div class="col-md-2 process_icon process_div">
					<img src="images/icon-1.svg" id="process_img1">
					<img src="images/arrow-copy-3.svg" class="process_arrow">
					<p class="regular">Your doctor sends<br>a sample of your tumor<br>to Notable Labs.</p>
				</div>
				<div class="col-md-2 process_icon process_div">
					<img src="images/icon-2.svg" id="process_img2">
					<img src="images/arrow-copy-3.svg" class="process_arrow">
					<p class="regular">Based on your tumor<br>we choose a panel of<br>FDA-approved drugs that have<br>published anti-cancer effects.</p>
				</div>
				<div class="col-md-2 process_icon process_div">
					<img src="images/icon-3.svg" id="process_img3">
					<img src="images/arrow-copy-3.svg" class="process_arrow"> 
					<p class="regular">We test<br>thousands of combinations<br>of these drugs against<br>your tumor.</p>
				</div>
				<div class="col-md-2 process_icon process_div">
					<img src="images/icon-4.svg" id="process_img4">
					<img src="images/arrow-copy-3.svg" class="process_arrow">
					<p class="regular">We provide<br>a report of the results to<br>your doctor within<br>several days.</p>
				</div>
				<div class="col-md-2 process_icon process_div">
					<img src="images/icon-5.svg" id="process_img5">
					<p class="regular">Your doctor uses<br>our report to make<br>treatment recommendations<br>for you.</p>
				</div>
			</div>
		</div>
		<div class="row shadow" id="lab">
			<div class="col-md-6">
				<div id="video">
				<p></p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="text_box_right">
					<h1 class="regular_heading">Our Lab</h1>
					<p class="regular justify">
						We’ve built our lab with you, the patient, in mind. Our custom robotic platform handles every aspect of the testing process to ensure results are delivered to your doctor quickly and reliably. 
					</p>
				</div>
			</div>
		</div>
		<div class="row shadow" id="trials">
			<div class="col-md-6">
				<div class="text_box_left">
					<h1 class="regular_heading">Notable Clinical Trials</h1>
					<p class="regular justify">
						Notable is helping oncologists in clinical trials at Princess Margaret Cancer Center and the University of Florida to identify treatment options for leukemia patients who have failed previous standard therapies. 
					</p>
				</div>
			</div>
			<div class="col-md-6">
				<img src="images/map.png" id="map">
			</div>
		</div>
		<div class="row shadow" id="story">
			<div class="col-md-6">
				<img src="images/father-son.png" id="father">
			</div>
			<div class="col-md-6">
				<div class="text_box_right">
					<h1 class="regular_heading">Our Story</h1>
					<p class="regular justify">
						Matt started Notable with one patient in mind: his dad Marc. When Marc was diagnosed with brain cancer in 2013, Matt was frustrated with the limited treatment options available to him. Notable’s mission is to help patients like Marc find promising therapies that their doctor can prescribe for them today.
					</p>
				</div>
			</div>
		</div>
	</div>	
</body>    
</html>