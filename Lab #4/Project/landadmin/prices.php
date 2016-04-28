<?
include('protection.php');
if($_COOKIE['login']==$log && $_COOKIE['password']==$pass){
	// echo '<a href="logout.php">Log Out</a>';
}

else{

	header('location: reg.php');
}
?>
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

		$res=mysql_query("SELECT * FROM prices");
		while ($row=mysql_fetch_array($res)) {
		
	?>

<div id="def">
  <a href="prices_default.php"> Load prices defautl</a>
</div>
		

<div id="serv_wrap" style=" transform: scale(1.1); float:left;  position:absolute;margin-left: 250px; background-color:white; margin-top:100px;">
		<div id="services">
			
			<div id="name_form" class="form_other">
					</div>
				<a href="" class="show-popup-form-a"><h2><? echo $row[name];  ?></h2></a>
    <div class="admin-form form_other popup-form-a popup-content">
<div id="name_form" class="form_other">
<p>Название<a href=""><img src="images/X.png"></a></p>
					<form action="name_prices_data.php" method="POST" >
						<div id="name_form">
							<input type="text" name="name" value="<? echo $row[name];  ?>">
							<input type="submit" value="Update">
							
						</div>
					</form>
				</div>
				</div>

			
	<div id="discript_prices_form" class="form_other">
					</div>
				<a href="" class="show-popup-form-b"><h3><? echo $row[discript];  ?></h3></a>
    <div class="admin-form form_other popup-form-b popup-content">
<div id="discript_prices_form" class="form_other">
<p>Описание<a href=""><img src="images/X.png"></a></p>
					<form action="discript_prices_data.php" method="POST" >
									<div id="discript_prices_form">
										<input type="text" name="discript" value="<? echo $row[discript];  ?>">
										<input type="submit" value="Update">
										
									</div>
								</form>
				</div>
				</div>
			

		
<div id="slog_prices_form" class="form_other">
					</div>
				<a href="" class="show-popup-form-c"><p><? echo $row[slog];  ?></p></a>
    <div class="admin-form form_other popup-form-c popup-content">
<div id="slog_prices_form" class="form_other">
<p>Слоган<a href=""><img src="images/X.png"></a></p>
					<form action="slog_prices_data.php" method="POST" >
									<div id="slog_prices_form">
										<input type="text" name="slog" value="<? echo $row[slog];  ?>">
										<input type="submit" value="Update">
									
									</div>
								</form>
				</div>
				</div>
			<div id="plans">
				<div id="plan1">
					<div id="plan_head1">
						

<div id="plan_1_prices_form" class="form_other">
					</div>
				<a href="" class="show-popup-form-d"><h2><? echo $row[price_name_1];  ?></h2></a>
    <div class="admin-form form_other popup-form-d popup-content">
<div id="plan_1_prices_form" class="form_other">
<p>Назване плана<a href=""><img src="images/X.png"></a></p>
					<form action="plan_1_prices_data.php" method="POST" >
						<div id="plan_1_prices_form">
							<input type="text" name="plan_prices" value="<? echo $row[price_name_1];  ?>">
							<input type="submit" value="Update">
							
						</div>
					</form>
				</div>
				</div>
					

<div id="plan_slog_1_form" class="form_other">
					</div>
				<a href="" class="show-popup-form-e"><h3><? echo $row[plan_slog_1];  ?></h3></a>
    <div class="admin-form form_other popup-form-e popup-content">
<div id="plan_slog_1_form" class="form_other">
<p>Слоган плана<a href=""><img src="images/X.png"></a></p>
					<form action="plan_slog_1_data.php" method="POST" >
						<div id="plan_slog_1_form">
							<input type="text" name="plan_slog_1" value="<? echo $row[plan_slog_1];  ?>">
							<input type="submit" value="Update">
						

						</div>
					</form>
				</div>
				</div>
				</div>
					<div id="plan_main1">
						

					
<div id="price_discript_1_1_form" class="form_other">
					</div>
				<a href="" class="show-popup-form-f"><p><? echo $row[price_discript_1_1];  ?></p></a>
    <div class="admin-form form_other popup-form-f popup-content">
<div id="price_discript_1_1_form" class="form_other">
<p>Описание<a href=""><img src="images/X.png"></a></p>
					<form action="price_discript_1_1_data.php" method="POST" >
						<div id="price_discript_1_1_form">
							<input type="text" name="price_discript_1_1" value="<? echo $row[price_discript_1_1];  ?>">
							<input type="submit" value="Update ">
							
							</div>
					</form>
				</div>
				</div>
				

					
<div id="price_discript_1_2_form" class="form_other">
					</div>
				<a href="" class="show-popup-form-g"><p><? echo $row[price_discript_1_2];  ?></p></a>
    <div class="admin-form form_other popup-form-g popup-content">
<div id="price_discript_1_2_form" class="form_other">
<p>Описание<a href=""><img src="images/X.png"></a></p>
					<form action="price_discript_1_2_data.php" method="POST" >
						<div id="price_discript_1_2_form">
							<input type="text" name="price_discript_1_2" value="<? echo $row[price_discript_1_2];  ?>">
							<input type="submit" value="Update ">
							
						</div>
					</form>
				</div>
				</div>

			


				<div id="price_discript_1_3_form" class="form_other">
					</div>
				<a href="" class="show-popup-form-h"><p><? echo $row[price_discript_1_3];  ?></p></a>
    <div class="admin-form form_other popup-form-h popup-content">
<div id="price_discript_1_3_form" class="form_other">
<p>Описание<a href=""><img src="images/X.png"></a></p>
					<form action="price_discript_1_3_data.php" method="POST" >
						<div id="price_discript_1_3_form">
							<input type="text" name="price_discript_1_3" value="<? echo $row[price_discript_1_3];  ?>">
							<input type="submit" value="Update ">
							
						</div>
					</form>
				</div>
				</div>
					
<div id="price_discript_1_4_form" class="form_other">
					</div>
				<a href="" class="show-popup-form-h"><p><? echo $row[price_discript_1_4];  ?></p></a>
    <div class="admin-form form_other popup-form-h popup-content">
<div id="price_discript_1_4_form" class="form_other">
<p>Описание<a href=""><img src="images/X.png"></a></p>
					<form action="price_discript_1_4_data.php" method="POST" >
						<div id="price_discript_1_4_form">
							<input type="text" name="price_discript_1_4" value="<? echo $row[price_discript_1_4];  ?>">
							<input type="submit" value="Update">
							
						</div>
					</form>
				</div>
				</div>

				


<div id="price_1_form" class="form_other">
					</div>
				<h1><a href="" class="show-popup-form-i"><? echo $row[price_1];  ?></a>
    <div class="admin-form form_other popup-form-i popup-content">
<div id="price_1_form" class="form_other">
<p>Цена<a href=""><img src="images/X.png"></a></p>
					<form action="price_1_data.php" method="POST" >
						<div id="price_1_form">
							<input type="text" name="price_1" value="<? echo $row[price_1];  ?>">
							<input type="submit" value="Update ">
							
						</div>
					</form>
				</div>
				</div>


				<span>/m</span></h1>





					</div>
					<div id="plan_foot1">
						<div id="plan_foot_button1">
							<a href=""><p>Subscribe</p></a>
						</div>
					</div>
				</div>



				<div id="plan2">
					<div id="plan_head2">
						<div id="plan_2_prices_form" class="form_other">
					</div>
				<a href="" class="show-popup-form-j"><h2><? echo $row[price_name_2];  ?></h2></a>
    <div class="admin-form form_other popup-form-j popup-content">
<div id="plan_2_prices_form" class="form_other">
<p>Название плана<a href=""><img src="images/X.png"></a></p>
					<form action="plan_2_prices_data.php" method="POST" >
						<div id="plan_2_prices_form">
							<input type="text" name="plan_prices" value="<? echo $row[price_name_2];  ?>">
							<input type="submit" value="Update">
							
						</div>
					</form>
				</div>
				</div>
				<div id="plan_slog_2_form" class="form_other">
					</div>
				<a href="" class="show-popup-form-k"><h3><? echo $row[plan_slog_2];  ?></h3></a>
    <div class="admin-form form_other popup-form-k popup-content">
<div id="plan_slog_2_form" class="form_other">
<p>Слоган плана<a href=""><img src="images/X.png"></a></p>
					<form action="plan_slog_2_data.php" method="POST" >
						<div id="plan_slog_2_form">
							<input type="text" name="plan_slog_2" value="<? echo $row[plan_slog_2];  ?>">
							<input type="submit" value="Update">
							
						</div>
					</form>
				</div>
				</div>
				</div>
					<div id="plan_main2">
						<div id="price_discript_2_1_form" class="form_other">
					</div>
				<a href="" class="show-popup-form-l"><p><? echo $row[price_discript_2_1];  ?></p></a>
    <div class="admin-form form_other popup-form-l popup-content">
<div id="price_discript_2_1_form" class="form_other">
<p>Описание<a href=""><img src="images/X.png"></a></p>
					<form action="price_discript_2_1_data.php" method="POST" >
						<div id="price_discript_2_1_form">
							<input type="text" name="price_discript_2_1" value="<? echo $row[price_discript_2_1];  ?>">
							<input type="submit" value="Update ">
							
						</div>
					</form>
				</div>
				</div>
						
				
				<div id="price_discript_2_2_form" class="form_other">
					</div>
				<a href="" class="show-popup-form-m"><p><? echo $row[price_discript_2_2];  ?></p></a>
    <div class="admin-form form_other popup-form-m popup-content">
<div id="price_discript_2_2_form" class="form_other">
<p>Описание<a href=""><img src="images/X.png"></a></p>
					<form action="price_discript_2_2_data.php" method="POST" >
						<div id="price_discript_2_2_form">
							<input type="text" name="price_discript_2_2" value="<? echo $row[price_discript_2_2];  ?>">
							<input type="submit" value="Update ">
						
						</div>
					</form>
				</div>
				</div>

				<div id="price_discript_2_3_form" class="form_other">
					</div>
				<a href="" class="show-popup-form-n"><p><? echo $row[price_discript_2_3];  ?></p></a>
    <div class="admin-form form_other popup-form-n popup-content">
<div id="price_discript_2_3_form" class="form_other">
<p>Описание<a href=""><img src="images/X.png"></a></p>
					<form action="price_discript_2_3_data.php" method="POST" >
						<div id="price_discript_2_3_form">
							<input type="text" name="price_discript_2_3" value="<? echo $row[price_discript_2_3];  ?>">
							<input type="submit" value="Update">
					
						</div>
					</form>
				</div>
				</div>
						<div id="price_discript_2_4_form" class="form_other">
					</div>
				<a href="" class="show-popup-form-o"><p><? echo $row[price_discript_2_4];  ?></p></a>
    <div class="admin-form form_other popup-form-o popup-content">
<div id="price_discript_2_4_form" class="form_other">
<p>Описание<a href=""><img src="images/X.png"></a></p>
					<form action="price_discript_2_4_data.php" method="POST" >
						<div id="price_discript_2_4_form">
							<input type="text" name="price_discript_2_4" value="<? echo $row[price_discript_2_4];  ?>">
							<input type="submit" value="Update">
						
						</div>
					</form>
				</div>
				</div>
					<div id="price_2_form" class="form_other">
					</div>
				<h1><a href="" class="show-popup-form-p"><? echo $row[price_2];  ?></a>
    <div class="admin-form form_other popup-form-p popup-content">
<div id="price_2_form" class="form_other">
<p>Цена<a href=""><img src="images/X.png"></a></p>
					<form action="price_2_data.php" method="POST" >
						<div id="price_2_form">
							<input type="text" name="price_2" value="<? echo $row[price_2];  ?>">
							<input type="submit" value="Update">
						
						</div>
					</form>
				</div>
				</div>


				<span>/m</span></h1>
					</div>
					<div id="plan_foot2">
						<div id="plan_foot_button2">
							<a href=""><p>Subscribe</p></a>
						</div>
					</div>
				</div>




				<div id="plan3">
					<div id="plan_head3">
								<div id="plan_3_prices_form" class="form_other">
					</div>
				<a href="" class="show-popup-form-q"><h2><? echo $row[price_name_3];  ?></h2></a>
    <div class="admin-form form_other popup-form-q popup-content">
<div id="plan_3_prices_form" class="form_other">
<p>Название плана<a href=""><img src="images/X.png"></a></p>
					<form action="plan_3_prices_data.php" method="POST" >
						<div id="plan_3_prices_form">
							<input type="text" name="plan_prices" value="<? echo $row[price_name_3];  ?>">
							<input type="submit" value="Update name ">
							
						</div>
					</form>
				</div>
				</div>
						<div id="plan_slog_3_form" class="form_other">
					</div>
				<a href="" class="show-popup-form-r"><h3><? echo $row[plan_slog_3];  ?></h3></a>
    <div class="admin-form form_other popup-form-r popup-content">
<div id="plan_slog_3_form" class="form_other">
<p>Слоган плана<a href=""><img src="images/X.png"></a></p>
					<form action="plan_slog_3_data.php" method="POST" >
						<div id="plan_slog_3_form">
							<input type="text" name="plan_slog_3" value="<? echo $row[plan_slog_3];  ?>">
							<input type="submit" value="Update slogan ">
						
						</div>
					</form>
				</div>
				</div>
				</div>
					<div id="plan_main3">
									
<div id="price_discript_3_1_form" class="form_other">
					</div>
				<a href="" class="show-popup-form-s"><p><? echo $row[price_discript_3_1];  ?></p></a>
    <div class="admin-form form_other popup-form-s popup-content">
<div id="price_discript_3_1_form" class="form_other">
<p>Описание<a href=""><img src="images/X.png"></a></p>
					<form action="price_discript_3_1_data.php" method="POST" >
						<div id="price_discript_3_1_form">
							<input type="text" name="price_discript_3_1" value="<? echo $row[price_discript_3_1];  ?>">
							<input type="submit" value="Update">
						
						</div>
					</form>
				</div>
				</div>
					<div id="price_discript_3_2_form" class="form_other">
					</div>
				<a href="" class="show-popup-form-t"><p><? echo $row[price_discript_3_2];  ?></p></a>
    <div class="admin-form form_other popup-form-t popup-content">
<div id="price_discript_3_2_form" class="form_other">
<p>Описание<a href=""><img src="images/X.png"></a></p>
					<form action="price_discript_3_2_data.php" method="POST" >
						<div id="price_discript_3_2_form">
							<input type="text" name="price_discript_3_2" value="<? echo $row[price_discript_3_2];  ?>">
							<input type="submit" value="Update ">
							
						</div>
					</form>
				</div>
				</div>

						<div id="price_discript_3_3_form" class="form_other">
					</div>
				<a href="" class="show-popup-form-u"><p><? echo $row[price_discript_3_3];  ?></p></a>
    <div class="admin-form form_other popup-form-u popup-content">
<div id="price_discript_3_3_form" class="form_other">
<p>Описание<a href=""><img src="images/X.png"></a></p>
					<form action="price_discript_3_3_data.php" method="POST" >
						<div id="price_discript_3_3_form">
							<input type="text" name="price_discript_3_3" value="<? echo $row[price_discript_3_3];  ?>">
							<input type="submit" value="Update">
						
						</div>
					</form>
				</div>
				</div>
						<div id="price_discript_3_4_form" class="form_other">
					</div>
				<a href="" class="show-popup-form-v"><p><? echo $row[price_discript_3_4];  ?></p></a>
    <div class="admin-form form_other popup-form-v popup-content">
<div id="price_discript_3_4_form" class="form_other">
<p>Описание<a href=""><img src="images/X.png"></a></p>
					<form action="price_discript_3_4_data.php" method="POST" >
						<div id="price_discript_3_4_form">
							<input type="text" name="price_discript_3_4" value="<? echo $row[price_discript_3_4];  ?>">
							<input type="submit" value="Update">
						
						</div>
					</form>
				</div>
				</div>
					<div id="price_3_form" class="form_other">
					</div>
				<h1><a href="" class="show-popup-form-w"><? echo $row[price_3];  ?></a>
    <div class="admin-form form_other popup-form-w popup-content">
<div id="price_3_form" class="form_other">
<p>Цена<a href=""><img src="images/X.png"></a></p>
					<form action="price_3_data.php" method="POST" >
						<div id="price_3_form">
							<input type="text" name="price_3" value="<? echo $row[price_3]; } ?>">
							<input type="submit" value="Update ">
							
						</div>
					</form>
				</div>
				</div>


				<span>/m</span></h1>

					</div>
					<div id="plan_foot3">
						<div id="plan_foot_button3">
							<a href=""><p>Subscribe</p></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


</body>
<script type="text/javascript">
	$(document).ready(function () {
    PopUpHide1();
});

function PopUpShow1() {
    $("#name_form").show();
}

function PopUpHide1() {
    $("#name_form").hide();
}

 </script>

 <script type="text/javascript">
	$(document).ready(function () {
    PopUpHide2();
});

function PopUpShow2() {
    $("#discript_prices_form").show();
}

function PopUpHide2() {
    $("#discript_prices_form").hide();
}

 </script>
 <script type="text/javascript">
	$(document).ready(function () {
    PopUpHide3();
});

function PopUpShow3() {
    $("#slog_prices_form").show();
}

function PopUpHide3() {
    $("#slog_prices_form").hide();
}

 </script>

  <script type="text/javascript">
	$(document).ready(function () {
    PopUpHide4();
});

function PopUpShow4() {
    $("#plan_1_prices_form").show();
}

function PopUpHide4() {
    $("#plan_1_prices_form").hide();
}

 </script>
  <script type="text/javascript">
	$(document).ready(function () {
    PopUpHide5();
});

function PopUpShow5() {
    $("#plan_2_prices_form").show();
}

function PopUpHide5() {
    $("#plan_2_prices_form").hide();
}

 </script>
  <script type="text/javascript">
	$(document).ready(function () {
    PopUpHide6();
});

function PopUpShow6() {
    $("#plan_3_prices_form").show();
}

function PopUpHide6() {
    $("#plan_3_prices_form").hide();
}

 </script>

   <script type="text/javascript">
	$(document).ready(function () {
    PopUpHide7();
});

function PopUpShow7() {
    $("#plan_slog_1_form").show();
}

function PopUpHide7() {
    $("#plan_slog_1_form").hide();
}

 </script>
   <script type="text/javascript">
	$(document).ready(function () {
    PopUpHide8();
});

function PopUpShow8() {
    $("#plan_slog_2_form").show();
}

function PopUpHide8() {
    $("#plan_slog_2_form").hide();
}

 </script>
   <script type="text/javascript">
	$(document).ready(function () {
    PopUpHide9();
});

function PopUpShow9() {
    $("#plan_slog_3_form").show();
}

function PopUpHide9() {
    $("#plan_slog_3_form").hide();
}

 </script>

    <script type="text/javascript">
	$(document).ready(function () {
    PopUpHide10();
});

function PopUpShow10() {
    $("#price_discript_1_1_form").show();
}

function PopUpHide10() {
    $("#price_discript_1_1_form").hide();
}

 </script>
    <script type="text/javascript">
	$(document).ready(function () {
    PopUpHide11();
});

function PopUpShow11() {
    $("#price_discript_2_1_form").show();
}

function PopUpHide11() {
    $("#price_discript_2_1_form").hide();
}

 </script>
    <script type="text/javascript">
	$(document).ready(function () {
    PopUpHide12();
});

function PopUpShow12() {
    $("#price_discript_3_1_form").show();
}

function PopUpHide12() {
    $("#price_discript_3_1_form").hide();
}

 </script>

     <script type="text/javascript">
	$(document).ready(function () {
    PopUpHide13();
});

function PopUpShow13() {
    $("#price_discript_1_2_form").show();
}

function PopUpHide13() {
    $("#price_discript_1_2_form").hide();
}

 </script>
     <script type="text/javascript">
	$(document).ready(function () {
    PopUpHide14();
});

function PopUpShow14() {
    $("#price_discript_2_2_form").show();
}

function PopUpHide14() {
    $("#price_discript_2_2_form").hide();
}

 </script>
     <script type="text/javascript">
	$(document).ready(function () {
    PopUpHide15();
});

function PopUpShow15() {
    $("#price_discript_3_2_form").show();
}

function PopUpHide15() {
    $("#price_discript_3_2_form").hide();
}

 </script>
      <script type="text/javascript">
	$(document).ready(function () {
    PopUpHide16();
});

function PopUpShow16() {
    $("#price_discript_1_3_form").show();
}

function PopUpHide16() {
    $("#price_discript_1_3_form").hide();
}

 </script>
      <script type="text/javascript">
	$(document).ready(function () {
    PopUpHide17();
});

function PopUpShow17() {
    $("#price_discript_2_3_form").show();
}

function PopUpHide17() {
    $("#price_discript_2_3_form").hide();
}

 </script>
      <script type="text/javascript">
	$(document).ready(function () {
    PopUpHide18();
});

function PopUpShow18() {
    $("#price_discript_3_3_form").show();
}

function PopUpHide18() {
    $("#price_discript_3_3_form").hide();
}

 </script>

  
      <script type="text/javascript">
	$(document).ready(function () {
    PopUpHide19();
});

function PopUpShow19() {
    $("#price_discript_1_4_form").show();
}

function PopUpHide19() {
    $("#price_discript_1_4_form").hide();
}

 </script>
 
      <script type="text/javascript">
	$(document).ready(function () {
    PopUpHide20();
});

function PopUpShow20() {
    $("#price_discript_2_4_form").show();
}

function PopUpHide20() {
    $("#price_discript_2_4_form").hide();
}

 </script>

      <script type="text/javascript">
	$(document).ready(function () {
    PopUpHide21();
});

function PopUpShow21() {
    $("#price_discript_3_4_form").show();
}

function PopUpHide21() {
    $("#price_discript_3_4_form").hide();
}

 </script>

   
      <script type="text/javascript">
	$(document).ready(function () {
    PopUpHide22();
});

function PopUpShow22() {
    $("#price_1_form").show();
}

function PopUpHide22() {
    $("#price_1_form").hide();
}

 </script>
       <script type="text/javascript">
	$(document).ready(function () {
    PopUpHide23();
});

function PopUpShow23() {
    $("#price_2_form").show();
}

function PopUpHide23() {
    $("#price_2_form").hide();
}

 </script>
        <script type="text/javascript">
	$(document).ready(function () {
    PopUpHide24();
});

function PopUpShow24() {
    $("#price_3_form").show();
}

function PopUpHide24() {
    $("#price_3_form").hide();
}

 </script>
 
<script type="text/javascript">
// plugin
$.fn.popup = (function() {
  // Save module scope to self
  var self = this; 
  // .popup-content
  var context;
  // .popup-overlay
  var overlay;
  // .popup-container
  var container;
  // Default options
  var options = {
    animationDuration: 300
  }
  // Settings
  var settings = {
    popupContainerSettings: {
        position: 'fixed',
        height: '100%',
        width: '100%',
        display: 'none',
        zIndex: 0
      },
      overlaySettings: {
          position: 'absolute',
          height: '100%',
          width: '100%',
          top: 0,
          left: 0,
          background: 'rgb(0,0,0)',
          opacity: '0.6'
      },
      contentSettings: {
          position: 'absolute',
          top: '50%',
          left: '50%',
          transform: 'translate(-50%,-50%)',
          display: 'block'
        }
  }
  var showPopupContainer = function() {
    container = $('<div/>',{ class: 'popup-container' });
    container.css(settings.popupContainerSettings);
    
    overlay = $('<div/>',{ class: 'popup-overlay'});
    overlay.css(settings.overlaySettings)
      .appendTo(container);
    
    // Make deep copy of .popup-content and append it
    container.append($(context).clone().css(settings.contentSettings))   
             .appendTo('body').fadeIn(options.animationDuration,addClickListener);
  }
  var removePopupContainer = function(e) {
      // if clicked on .popup-content or child of .popup-content - do not exit; //fixed
      if ( $(e.target).is('.popup-content') || $(e.target).parents('.popup-content').length ) return;
      // else exit
      $('.popup-container').fadeOut(options.animationDuration,function() {
        removeClickListener();
        $(this).remove();
      });
  }


var removePopupContainer = function(e) {console.log( this );
      // if clicked on .popup-content or child of .popup-content - do not exit; //fixed
      if ( $(e.target).is('.popup-content') || $(e.target).parents('.popup-content').length ) return;
      // else exit
      $('.popup-container').fadeOut(options.animationDuration,function() {
        removeClickListener();
        $(this).remove();
      });
  }

  // Listen if user clicked outside of .popup-content OR .popup-close when .popup-container faded-in
  var addClickListener = function() {
    $('body').click(removePopupContainer);
    $('.popup-close').click(removePopupContainer);
  }
  // Remove these listeners when .popup-container is faded-out
  var removeClickListener = function() {
    $('body').off('click',removePopupContainer);
    $('.popup-close').off('click',removePopupContainer);
  }
  
  // Facade for showing up .popup-container
  this.popup = function(opts) {
    context = this;
    options = opts || {};
    showPopupContainer();
  }
  
  return this.popup;
})();

// Usage

var links = $("[class^='show-popup-form-']");

links.each(function(index,link) {
  $(link).click(function(e) {
    e.preventDefault();
    var formNumber = $(link).attr('class').slice(-1);
    $('.popup-form-' + formNumber).popup({
      animationDuration: 200
    });
  });
});
</script>

</html>