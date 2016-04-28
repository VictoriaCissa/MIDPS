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

		$res=mysql_query("SELECT * FROM numbers");
		while ($row=mysql_fetch_array($res)) {
		
	?>
<div id="def">
  <a href="numbers_default.php"> Load numbers defautl</a>
</div>

		
<div id="counters_wrap" style=" transform: scale(1.1); float:left;  position:absolute;margin-left: 250px; margin-top:100px;">
		<div id="counters">
		

<div id="name_form" class="form_other">
					</div>
				<a href="" class="show-popup-form-1"><h2><? echo $row[name];  ?></h2></a>
    <div class="admin-form form_other popup-form-1 popup-content">
    	<div id="name_form" class="form_other">
    	<p>Название<a href=""><img src="images/X.png"></a></p>
					<form action="name_number_data.php" method="POST" >
						<div id="name_form">
							<input type="text" name="name" value="<? echo $row[name];  ?>">
							<input type="submit" value="Update">
							
						</div>
					</form>
				</div>
				</div>


			

			
<div id="slog_numbers_form" class="form_other">
					</div>
				<a href="" class="show-popup-form-2"><h3><? echo $row[slog];  ?></h3></a>
    <div class="admin-form form_other popup-form-2 popup-content">
    	<div id="slog_numbers_form" class="form_other">
    	<p>Слоган<a href=""><img src="images/X.png"></a></p>
					<form action="slog_numbers_data.php" method="POST" >
						<div id="slog_numbers_form">
							<input type="text" name="slog" value="<? echo $row[slog];  ?>">
							<input type="submit" value="Update">
							
						</div>
					</form>
				</div>
				</div>
			<div class="counter">
				

			<div id="number_1_numbers_form" class="form_other">
					</div>
				<a href="" class="show-popup-form-3"><h1><? echo $row[number_1];  ?></h1></a>
    <div class="admin-form form_other popup-form-3 popup-content">
    	<div id="number_1_numbers_form" class="form_other">
    	<p>Обновить счетчик №1<a href=""><img src="images/X.png"></a></p>
					<form action="number_1_numbers_data.php" method="POST" >
									<div id="number_1_numbers_form">
										<input type="text" name="number_1" value="<? echo $row[number_1];  ?>">
										<input type="submit" value="Update">
										
									</div>
								</form>
				</div>
				</div>

				

					<div id="fact_1_form" class="form_other">
					</div>
				<a href="" class="show-popup-form-4"><p><? echo $row[fact_1];  ?></p></a>
    <div class="admin-form form_other popup-form-4 popup-content">
<div id="fact_1_form" class="form_other">
<p>Обновить описание №1<a href=""><img src="images/X.png"></a></p>
					<form action="fact_1_numbers_data.php" method="POST" >
									<div id="fact_1_form">
										<input type="text" name="fact_1" value="<? echo $row[fact_1];  ?>">
										<input type="submit" value="Update">
										
									</div>
								</form>
				</div>
				</div>

			</div>



			<div class="counter">
				<div id="number_2_numbers_form" class="form_other">
					</div>
				<a href="" class="show-popup-form-5"><h1><? echo $row[number_2];  ?></h1></a>
    <div class="admin-form form_other popup-form-5 popup-content">
    	<div id="number_2_numbers_form" class="form_other">
    	<p>Обновить счетчик №2<a href=""><img src="images/X.png"></a></p>
					<form action="number_2_numbers_data.php" method="POST" >
									<div id="number_2_numbers_form">
										<input type="text" name="number_2" value="<? echo $row[number_2];  ?>">
										<input type="submit" value="Update">
										
									</div>
								</form>
				</div>
				</div>
				<div id="fact_2_form" class="form_other">
					</div>
				<a href="" class="show-popup-form-6"><p><? echo $row[fact_2];  ?></p></a>
    <div class="admin-form form_other popup-form-6 popup-content">
<div id="fact_2_form" class="form_other">
<p>Обновить описание №2<a href=""><img src="images/X.png"></a></p>
					<form action="fact_2_numbers_data.php" method="POST" >
									<div id="fact_2_form">
										<input type="text" name="fact_2" value="<? echo $row[fact_2];  ?>">
										<input type="submit" value="Update">
										
									</div>
								</form>
				</div>
				</div>
			</div>
			<div class="counter">
				<div id="number_3_numbers_form" class="form_other">
					</div>
				<a href="" class="show-popup-form-7"><h1><? echo $row[number_3];  ?></h1></a>
    <div class="admin-form form_other popup-form-7 popup-content">
    	<div id="number_3_numbers_form" class="form_other">
    	<p>Обновить счетчик №3<a href=""><img src="images/X.png"></a></p>
					<form action="number_3_numbers_data.php" method="POST" >
									<div id="number_3_numbers_form">
										<input type="text" name="number_3" value="<? echo $row[number_3];  ?>">
										<input type="submit" value="Update">
										
									</div>
								</form>
				</div>
				</div>
				<div id="fact_3_form" class="form_other">
					</div>
				<a href="" class="show-popup-form-8"><p><? echo $row[fact_3];  ?></p></a>
    <div class="admin-form form_other popup-form-8 popup-content">
<div id="fact_3_form" class="form_other">
<p>Обновить описание №3<a href=""><img src="images/X.png"></a></p>
					<form action="fact_3_numbers_data.php" method="POST" >
									<div id="fact_3_form">
										<input type="text" name="fact_3" value="<? echo $row[fact_3];  ?>">
										<input type="submit" value="Update">
										
									</div>
								</form>
				</div>
				</div>
			</div>
			<div class="counter">
				
							
							
								
						
			
<div id="number_4_numbers_form" class="form_other">
					</div>
				<a href="" class="show-popup-form-9"><h1><? echo $row[number_4];  ?></h1></a>
    <div class="admin-form form_other popup-form-9 popup-content">
    	<div id="number_4_numbers_form" class="form_other">
    	<p>Обновить счетчик №4<a href=""><img src="images/X.png"></a></p>
					<form action="number_4_numbers_data.php" method="POST" >
									<div id="number_4_numbers_form">
										<input type="text" name="number_4" value="<? echo $row[number_4];  ?>">
										<input type="submit" value="Update">
										
									</div>
								</form>
				</div>
				</div>

<div id="fact_4_form" class="form_other">
					</div>
				<a href="" class="show-popup-form-a"><p><? echo $row[fact_4];  ?></p></a>
    <div class="admin-form form_other popup-form-a popup-content">
<div id="fact_4_form" class="form_other">
<p>Обновить описание №4<a href=""><img src="images/X.png"></a></p>
					<form action="fact_4_numbers_data.php" method="POST" >
									<div id="fact_4_form">
										<input type="text" name="fact_4" value="<? echo $row[fact_4]; } ?>">
										<input type="submit" value="Update">
										
									</div>
								</form>
				</div>
				</div>

				<div id="fact_4_form" class="form_other">
					</div>
				<a href="" class="show-popup-form-9"><h1><? echo $row[number_4];  ?></h1></a>
    <div class="admin-form form_other popup-form-9 popup-content">
    	<div id="number_4_numbers_form" class="form_other">
					<form action="number_4_numbers_data.php" method="POST" >
									<div id="number_4_numbers_form">
										<input type="text" name="number_4">
										<input type="submit" value="Update">
										
									</div>
								</form>
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
    $("#slog_numbers_form").show();
}

function PopUpHide2() {
    $("#slog_numbers_form").hide();
}

 </script>
 <script type="text/javascript">
	$(document).ready(function () {
    PopUpHide3();
});

function PopUpShow3() {
    $("#number_1_numbers_form").show();
}

function PopUpHide3() {
    $("#number_1_numbers_form").hide();
}

 </script>
 <script type="text/javascript">
	$(document).ready(function () {
    PopUpHide4();
});

function PopUpShow4() {
    $("#number_2_numbers_form").show();
}

function PopUpHide4() {
    $("#number_2_numbers_form").hide();
}

 </script>
 <script type="text/javascript">
	$(document).ready(function () {
    PopUpHide5();
});

function PopUpShow5() {
    $("#number_3_numbers_form").show();
}

function PopUpHide5() {
    $("#number_3_numbers_form").hide();
}

 </script>
 <script type="text/javascript">
	$(document).ready(function () {
    PopUpHide6();
});

function PopUpShow6() {
    $("#number_4_numbers_form").show();
}

function PopUpHide6() {
    $("#number_4_numbers_form").hide();
}

 </script>
 <script type="text/javascript">
	$(document).ready(function () {
    PopUpHide7();
});

function PopUpShow7() {
    $("#fact_1_form").show();
}

function PopUpHide7() {
    $("#fact_1_form").hide();
}

 </script>
 <script type="text/javascript">
	$(document).ready(function () {
    PopUpHide8();
});

function PopUpShow8() {
    $("#fact_2_form").show();
}

function PopUpHide8() {
    $("#fact_2_form").hide();
}

 </script>
 <script type="text/javascript">
	$(document).ready(function () {
    PopUpHide9();
});

function PopUpShow9() {
    $("#fact_3_form").show();
}

function PopUpHide9() {
    $("#fact_3_form").hide();
}

 </script>
 <script type="text/javascript">
	$(document).ready(function () {
    PopUpHide10();
});

function PopUpShow10() {
    $("#fact_4_form").show();
}

function PopUpHide10() {
    $("#fact_4_form").hide();
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