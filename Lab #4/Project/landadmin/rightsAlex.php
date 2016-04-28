<!DOCTYPE html>
<html>
<head>
	<title>Landing constructor</title>
	<link rel="stylesheet" type="text/css" href="AdminStyle.css">
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700,800' rel='stylesheet' type='text/css'>

<script src="http://code.jquery.com/jquery-2.0.2.min.js"></script>
<link href="Dstyle.css" rel="stylesheet" type="text/css">
<link href="Tstyle.css" rel="stylesheet" type="text/css">
<link href="Mstyle.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
 <style type="text/css">
      html, body, #map-canvas { height: 100%; margin: 0; padding: 0;}
    </style>
</head>
<body>


	<?
		include('menu.php');

		$res=mysql_query("SELECT * FROM rights");
		while ($row=mysql_fetch_array($res)) {
		
	?>


		



		
	
<section id="s4" style=" transform: scale(0.8); float:left;  position:absolute;margin-left: 100px; margin-top:200px;">
	<div id="main4">
		<p>
				   <a href="" class="show-popup-form-1"><? echo $row[rights];  ?></a>
    <div class="admin-form contacts_form popup-form-1 popup-content"><div id="rights_form" class="form">
				<form action="footer_rights_data.php" method="POST" >
						<div id="rights_form">
							<input type="text" name="rights">
							<input type="submit" value="Update rights ">
							
						</div>
					</form>	
				</div></div>
				






				 <span>
				 <a href="" class="show-popup-form-2"><? echo $row[company]; } ?></a>
    <div class="admin-form rights_form popup-form-2 popup-content"><div id="company_form" class="form">
					<form action="footer_company_data.php" method="POST" >
						<div id="company_form">
							<input type="text" name="company">
							<input type="submit" value="Update company ">
							
						</div>
					</form>
				</div></div>
				 </span></p>
		
		</div>
</section>


<div class="box">
	<a class="button" href="#popup1">Let me Pop up</a>
</div>

<div id="popup1" class="overlay">
	<div class="popup">
		<h2>Here i am</h2>
		<a class="close" href="#">&times;</a>
		<div class="content">
			Thank to pop me out of that button, but now i'm done so you can close this window.
		</div>



<!-- <div id="content">
  <section>
 
    <a href="" class="show-popup-form-2">show form2</a>
    <div class="admin-form rights_form popup-form-2 popup-content">FORM2!!</div>
    <a href="" class="show-popup-form-3">show form3</a>
    <div class="admin-form rights_form popup-form-3 popup-content">FORM3!!</div>
  </section>
</div> -->

</body>

</html>