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
<div id="def">
  <a href="footer_default.php"> Load footer defautl</a>
</div>
<div id="horiz_menu">
	<ul>


 <div id="map_form" class="form_icon">
          </div>
        <a href="" class="show-popup-form-b"><li>Update map</li></a>
    <div class="admin-form form_icon popup-form-b popup-content">
<div id="map_form" class="form_icon">
<p>Данные карты<a href=""><img src="images/X.png"></a></p>
<span>Вставьте код карты из гугла, расположенный между href="код"</span>
          <form action="map_data.php" method="POST" >
            <div id="map">
              
              <textarea name="map_url"></textarea>
              <input type="submit" value="Update">
             
            </div>
          </form>
        </div>
        </div>

        <div id="email_form" class="form_icon">
          </div>
        <a href="" class="show-popup-form-a"><li>Update email in form</li></a>
    <div class="admin-form form_icon popup-form-a popup-content">
<div id="email_form" class="form_icon">
<p>Обновить имеил<a href=""><img src="images/X.png"></a></p>
<span>На данный имеил будут высылаться данные формы</span>
          <form action="email_data.php" method="POST" >
            <div id="email">
              <input type="text" name="email">
              
              <input type="submit" value="Update">
       
            </div>
          </form>
        </div>
        </div>
	</ul>
</div>

	<?
		include('menu.php');

		$res=mysql_query("SELECT * FROM footer");
		while ($row=mysql_fetch_array($res)) {
		
	?>


		



		
		<div id="main3" style=" transform: scale(1.1); float:left;  position:absolute;margin-left: 270px; margin-top:90px; ">
		<div id="map">
			


<div id="name_1_form" class="form_other">
					</div>
				<a href="" class="show-popup-form-1"><h2><? echo $row[name_1];  ?></h2></a>
    <div class="admin-form form_other popup-form-1 popup-content">
<div id="name_1_form" class="form_other">
<p>Название на карте<a href=""><img src="images/X.png"></a></p>
					<form action="footer_name_1_data.php" method="POST" >
						<div id="name_form">
							<input type="text" name="name_1" value="<? echo $row[name_1];  ?>"> 
							<input type="submit" value="Update ">
					
						</div>
					</form>
				</div>
				</div>

			<div id="slog_1_form" class="form_other">
					</div>
				<a href="" class="show-popup-form-2"><p><? echo $row[slog_1];  ?></p></a>
    <div class="admin-form form_other popup-form-2 popup-content">
<div id="slog_1_form" class="form_other">
<p>Описание карты<a href=""><img src="images/X.png"></a></p>
					<form action="footer_slog_1_data.php" method="POST" >
						<div id="slog_1_form">
							<input type="text" name="slog_1" value="<? echo $row[slog_1];  ?>">
							<input type="submit" value="Update slog_1 ">
							
						</div>
					</form>
				</div>
				</div>
		<!-- 	<img src="images/map.png"> -->

					<iframe src="<? echo $row[map_url];  ?>"style="border:0" ></iframe>
		</div>

		<div id="form">
		

				<div id="name_2_form" class="form_other">
					</div>
				<a href="" class="show-popup-form-3"><h2><? echo $row[name_2];  ?></h2></a>
    <div class="admin-form form_other popup-form-3 popup-content">
<div id="name_2_form" class="form_other">
<p>Название формы<a href=""><img src="images/X.png"></a></p>
					<form action="footer_name_2_data.php" method="POST" >
						<div id="name_form">
							<input type="text" name="name_2" value="<? echo $row[name_2];  ?>">
							<input type="submit" value="Update">
							
						</div>
					</form>
				</div>
				</div>
			

				<div id="slog_2_form" class="form_other">
					</div>
				<a href="" class="show-popup-form-4"><p><? echo $row[slog_2];  ?></p></a>
    <div class="admin-form form_other popup-form-4 popup-content">
<div id="slog_2_form" class="form_other">
<p>Описание формы<a href=""><img src="images/X.png"></a></p>
					<form action="footer_slog_2_data.php" method="POST" >
						<div id="slog_2_form">
							<input type="text" name="slog_2" value="<? echo $row[slog_2]; } ?>">
							<input type="submit" value="Update">
				
						</div>
					</form>
				</div>
				</div>
		<form action="tiket_form.php" method="POST">
			<input type="text" placeholder="Your Full Name" name="name" value="">
			<input type="text" placeholder="Your Company" name="company">
			<input type="email" placeholder="Enter Your Email" name="email">
			<textarea placeholder="Write your Message Here" name="message"></textarea>
			<div id="form_but">
				
				<input type="submit" value="Send it right away" class="form_but_send">
			</div>
		</form>
			
		</div>

		
	</div>

</body>
<script type="text/javascript">
	$(document).ready(function () {
    PopUpHide1();
});

function PopUpShow1() {
    $("#name_1_form").show();
}

function PopUpHide1() {
    $("#name_1_form").hide();
}

 </script>

 <script type="text/javascript">
	$(document).ready(function () {
    PopUpHide2();
});

function PopUpShow2() {
    $("#name_2_form").show();
}

function PopUpHide2() {
    $("#name_2_form").hide();
}

 </script>

  <script type="text/javascript">
	$(document).ready(function () {
    PopUpHide3();
});

function PopUpShow3() {
    $("#slog_1_form").show();
}

function PopUpHide3() {
    $("#slog_1_form").hide();
}

 </script>

   <script type="text/javascript">
	$(document).ready(function () {
    PopUpHide4();
});

function PopUpShow4() {
    $("#slog_2_form").show();
}

function PopUpHide4() {
    $("#slog_2_form").hide();
}

</script>
   <script type="text/javascript">
	$(document).ready(function () {
    PopUpHide5();
});

function PopUpShow5() {
    $("#map_form").show();
}

function PopUpHide5() {
    $("#map_form").hide();
}
 </script>

    <script type="text/javascript">
	$(document).ready(function () {
    PopUpHide6();
});

function PopUpShow6() {
    $("#email_form").show();
}

function PopUpHide6() {
    $("#email_form").hide();
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