<?php
header ("Content-Type: text/html; charset=utf-8");
header('Cache-Control: no-cache, no-store, must-revalidate'); // HTTP 1.1.
header('Pragma: no-cache'); // HTTP 1.0.
header('Expires: 0'); // Proxies.
?>

<html>
<head>
<title>Landing Page</title>
<meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
<meta name="discription" content="Ключевые слова через запятую">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700,800' rel='stylesheet' type='text/css'>
<link href="Dstyle.css" rel="stylesheet" type="text/css">
<link href="Tstyle.css" rel="stylesheet" type="text/css">
<link href="Mstyle.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
 <style type="text/css">
	  html, body, #map-canvas { height: 100%; margin: 0; padding: 0;}
	  #menu{
		display: none;
	  }
	</style>
	<script type="text/javascript"
	  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD1UMQlom8Q1i6gHbSmTVuibhDtj_LQC6I">
	</script>
	<script type="text/javascript">
	  function initialize() {
		var mapOptions = {
		  center: { lat: -34.397, lng: 150.644},
		  zoom: 8
		};
		var map = new google.maps.Map(document.getElementById('map-canvas'),
			mapOptions);
	  }
	  google.maps.event.addDomListener(window, 'load', initialize);
	</script>

</head>
<body>
	<?
		include('menu.php');

		$res=mysql_query("SELECT * FROM header");
		while ($row=mysql_fetch_array($res)) {
		
	?>
<section id="s1">
	<div id="main">
		<div id="header">
			<div id="logo">
				<img src="<? echo $row[logo];  ?>">
			</div>

			<div id="connecting">
				<p>Stay connected</p>
				<div id="img1">
					<a href="http://<?      $str = $row[url_1];;
								$str = preg_replace('#^https?://#', '', rtrim($str,'/'));
								echo $str;  ?>" target="_blank"><div id="img1_hov">
					</div></a>

				</div>
				<div id="img2">
					<a href="http://<?      $str = $row[url_2];;
								$str = preg_replace('#^https?://#', '', rtrim($str,'/'));
								echo $str;  ?>" target="_blank"><div id="img2_hov">
					</div></a>
				</div>
				<div id="img3">
					<a href="http://<?      $str = $row[url_3];;
								$str = preg_replace('#^https?://#', '', rtrim($str,'/'));
								echo $str;  ?>" target="_blank"><div id="img3_hov">
					</div></a>
				</div>
			</div>
		</div>
			

		<div id="land_discript">
			<div id="big_discript">
				<p><? echo $row[big_discript];   ?></p>
			</div>
			<div id="small_discript">
				<p><? readfile("s_discript.txt"); ?></p>
			</div>

			<div id="contact_button">
				<div id="contact_us_b">
					<a href=""><p>Add your comment</p></a>
				</div>
				<div id="note">
					<p><? echo $row[note];}   ?></p>
				</div>
				
			</div>
		</div>
		
	</div>

</section>

<section id="s2">
	<div id="f_block_wrap">


<?

$res=mysql_query("SELECT * FROM serv");
		while ($row=mysql_fetch_array($res)) {

?>

		<div id="first_block">
			<div class="one_element">
				<img src="<? echo $row[icon1];   ?>">
				<h2><? echo $row[name_1];   ?></h2>
				<p><? echo $row[discript_1];   ?></p>
			</div>
			<div class="one_element">
				<img src="<? echo $row[icon2];   ?>">
				<h2><? echo $row[name_2];   ?></h2>
				<p><? echo $row[discript_2];   ?></p>
			</div>
			<div class="one_element">
				<img src="<? echo $row[icon3];   ?>">
				<h2><? echo $row[name_3];   ?></h2>
				<p><? echo $row[discript_3];   ?></p>
			</div>
			<div class="one_element">
				<img src="<? echo $row[icon4];   ?>">
				<h2><? echo $row[name_4];   ?></h2>
				<p><? echo $row[discript_4];  } ?> </p>
			</div>
		</div>
	</div>
<?

$res=mysql_query("SELECT * FROM preview");
		while ($row=mysql_fetch_array($res)) {

?>
	<div id="amazing_think">
		<h2><? echo $row[name];  ?></h2>
		<h3><? echo $row[discript];  ?></h3>
		<p><? echo $row[slog];  ?></p>
		<img src="<? echo $row[img]; } ?>">
		
	</div>


	<?
	

		$res=mysql_query("SELECT * FROM numbers");
		while ($row=mysql_fetch_array($res)) {
		
	?>

	<div id="counters_wrap">
		<div id="counters">
			<h2><? echo $row[name];  ?></h2>
			<h3><? echo $row[slog];  ?></h3>
			<div class="counter">
				<h1><? echo $row[number_1];  ?></h1>
				<p><? echo $row[fact_1];  ?></p>
			</div>
			<div class="counter">
				<h1><? echo $row[number_2];  ?></h1>
				<p><? echo $row[fact_2];  ?></p>
			</div>
			<div class="counter">
				<h1><? echo $row[number_3];  ?></h1>
				<p><? echo $row[fact_3];  ?></p>
			</div>
			<div class="counter">
				<h1><? echo $row[number_4];  ?></h1>
				<p><? echo $row[fact_4]; } ?></p>
			</div>
		</div>
	</div>


	<?
	

		$res=mysql_query("SELECT * FROM prices");
		while ($row=mysql_fetch_array($res)) {
		
	?>

	<div id="serv_wrap">
		<div id="services">
			<h2><? echo $row[name];  ?></h2>
			<h3><? echo $row[discript];  ?></h3>
			<p><? echo $row[slog];  ?></p>

			<div id="plans">
				<div id="plan1">
					<div id="plan_head1">
						<h2><? echo $row[price_name_1];  ?></h2>
						<h3><? echo $row[plan_slog_1];  ?></h3>
					</div>
					<div id="plan_main1">
						<p><? echo $row[price_discript_1_1];  ?></p>
						<p><? echo $row[price_discript_1_2];  ?></p>
						<p><? echo $row[price_discript_1_3];  ?></p>
						<p><? echo $row[price_discript_1_4];  ?></p>
						<h1><? echo $row[price_1];  ?><span>/m</span></h1>
					</div>
					<div id="plan_foot1">
						<div id="plan_foot_button1">
							<a href=""><p>Subscribe</p></a>
						</div>
					</div>
				</div>



				<div id="plan2">
					<div id="plan_head2">
						<h2><? echo $row[price_name_2];  ?></h2>
						<h3><? echo $row[plan_slog_2];  ?></h3>
					</div>
					<div id="plan_main2">
						<p><? echo $row[price_discript_2_1];  ?></p>
						<p><? echo $row[price_discript_2_2];  ?></p>
						<p><? echo $row[price_discript_2_3];  ?></p>
						<p><? echo $row[price_discript_2_4];  ?></p>
						<h1><? echo $row[price_2];  ?><span>/m</span></h1>
					</div>
					<div id="plan_foot2">
						<div id="plan_foot_button2">
							<a href=""><p>Subscribe</p></a>
						</div>
					</div>
				</div>




				<div id="plan3">
					<div id="plan_head3">
						<h2><? echo $row[price_name_3];  ?></h2>
						<h3><? echo $row[plan_slog_3];  ?></h3>
					</div>
					<div id="plan_main3">
						<p><? echo $row[price_discript_3_1];  ?></p>
						<p><? echo $row[price_discript_3_2];  ?></p>
						<p><? echo $row[price_discript_3_3];  ?></p>
						<p><? echo $row[price_discript_3_4];  ?></p>
						<h1><? echo $row[price_3]; } ?><span>/m</span></h1>
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

	<div id="logos_wrap">
		<div id="logos">


<?
	

		$res=mysql_query("SELECT * FROM clients");
		while ($row=mysql_fetch_array($res)) {
		
	?>


			<h2><? echo $row[name];  ?></h2>
			<p><? echo $row[slog];  ?></p>
			<img src="<? echo $row[logo_1];  ?>">
			<img src="<? echo $row[logo2];  ?>">
			<img src="<? echo $row[logo_3];  ?>">
			<img src="<? echo $row[logo_4]; } ?>">
		</div>
	</div>

	<div id="clietns_say_wrap">
		<div id="clients_say">

<?
		

		$res=mysql_query("SELECT * FROM review");
		while ($row=mysql_fetch_array($res)) {
		
	?>

			<h2><? echo $row[name];  ?></h2>
			<p><? echo $row[comment];  ?></p>
			<img src="images/stars.png">
			<span>	<? echo $row[url]; } ?></span>
		</div>
	</div>
	

</section>

<section id="s3">
<?
		include('menu.php');

		$res=mysql_query("SELECT * FROM footer");
		while ($row=mysql_fetch_array($res)) {
?>
	<div id="main3">
		<div id="map">
			<h2><? echo $row[name_1];  ?></h2>
			<p><? echo $row[slog_1];  ?></p>
		<!-- 	<img src="images/map.png"> -->

					<iframe src="<? echo $row[map_url];  ?>"style="border:0" ></iframe>
		</div>
		<script>
		function sendcomment(){
			var n_field = $('#name_comment').val();
			var t_field = $('#text_comment').val();
		$.ajax({ 
	        type: 'POST', 
	        url: 'comment_control.php', 
	        data: { name: n_field, text: t_field }, 
	        dataType: 'json',
	        success: function (data) {
	        	$('#comments').html('');
	        	$.each(data, function(index, element) {
                $('#comments').append(element.name+": "+element.text+"<br>");
            });
	          // $('#comments').html(data.text+" - "+data.name);
	                    
	        }
	    });
	    return false;
	}
		</script>
		<div id="form">
			<h2><? echo $row[name_2];  ?></h2>
			<p><? echo $row[slog_2]; } ?></p>

			<form action="" method="POST">
			<input id="name_comment" type="text" placeholder="Your Name" name="name" value="">
			<textarea id="text_comment" placeholder="Write your Message Here" name="message"></textarea>
			<div id="form_but">
				
				<input type="button" value="Send it right away" class="form_but_send" onclick="sendcomment()">
			</div>
		</form>
		</div>
		<div id="comments"  style="height:400px; color:white;">
		<?
		$result = mysql_query("SELECT * from `comments`  ORDER BY id DESC LIMIT 3") or die(mysql_error());
		$return_arr = array();
		while ($row = mysql_fetch_array($result)){
		echo $row['name'].': '.$row['text'].'<br>';
		}
		?>
		</div>
	</div>
	

</section>

<section id="s4">


	<?


		$res=mysql_query("SELECT * FROM rights");
		while ($row=mysql_fetch_array($res)) {
		
	?>

	<div id="main4">
		<p><? echo $row[rights];  ?><span><? echo $row[company]; } ?></span></p>
		
		</div>
</section>

</body>
</html>
