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
	<a href="serv_default.php"> Load services defautl</a>
</div>
<div id="horiz_menu">
	<ul>

				
				<div id="icon1_form" class="form_img">
					</div>
				<a href="" class="show-popup-form-a"><li>Icon 1</li></a>
    <div class="admin-form form_img popup-form-a popup-content">
    	<div id="icon1_form" class="form_img">
    			<p>Заргрузить иконку №1 <a href=""><img src="images/X.png"></a></p>
    			<span>Загрузите новое изображение для сервиса в формате jpg или png. </span>
					<form action="icon1_data.php" method="POST" enctype="multipart/form-data">
						<div id="icon1">
						<div class="subm">
							<input type="file" name="icon1" required>
						</div>
							
							<input type="submit" value="Update">
							
						</div>
					</form>
				</div>
				</div>
	
	
<div id="icon2_form" class="form_img">
					</div>
				<a href="" class="show-popup-form-b"><li>Icon 2</li></a>
    <div class="admin-form form_img popup-form-b popup-content">
    	<div id="icon2_form" class="form_img">
    	<p>Заргрузить иконку №2 <a href=""><img src="images/X.png"></a></p>
    			<span>Загрузите новое изображение для сервиса в формате jpg или png. </span>
					<form action="icon2_data.php" method="POST" enctype="multipart/form-data">
						<div id="icon2">
							
							<div class="subm">
							<input type="file" name="icon2" required>
							</div>
							<input type="submit" value="Update">
							
						</div>
					</form>
				</div>
				</div>





<div id="icon3_form" class="form_img">
					</div>
				<a href="" class="show-popup-form-c"><li>Icon 3</li></a>
    <div class="admin-form form_img popup-form-c popup-content">
    	<div id="icon3_form" class="form_img">
    	<p>Заргрузить иконку №3 <a href=""><img src="images/X.png"></a></p>
    			<span>Загрузите новое изображение для сервиса в формате jpg или png. </span>
					<form action="icon3_data.php" method="POST" enctype="multipart/form-data">
						<div id="icon3">
						<div class="subm">
							<input type="file" name="icon3" required>
						</div>
							
							<input type="submit" value="Update">
							
						</div>
					</form>
				</div>
				</div>
	
				<div id="icon4_form" class="form_img">
					</div>
				<a href="" class="show-popup-form-d"><li>Icon 4</li></a>
    <div class="admin-form form_img popup-form-d popup-content">
    	<div id="icon4_form" class="form_img">
    	<p>Заргрузить иконку №4 <a href=""><img src="images/X.png"></a></p>
    			<span>Загрузите новое изображение для сервиса в формате jpg или png. </span>
					<form action="icon4_data.php" method="POST" enctype="multipart/form-data">
						<div id="icon4">
						<div class="subm">
							<input type="file" name="icon4" required>
						</div>
							
							<input type="submit" value="Update">
							
						</div>
					</form>
				</div>
				</div>


	</ul>

</div>

	<?
		include('menu.php');

		$res=mysql_query("SELECT * FROM serv");
		while ($row=mysql_fetch_array($res)) {
		
	?>

<div id="f_block_wrap" style=" transform: scale(1.1); float:left;  position:absolute;margin-left: 255px; margin-top:100px;">
		<div id="first_block">
			<div class="one_element">
				<img src="<? echo $row[icon1];  ?>">
				
				
				
					

<div id="name_1_form" class="form_other">
					</div>
				<a href="" class="show-popup-form-1"><h2><? echo $row[name_1];  ?></h2></a>
    <div class="admin-form form_other popup-form-1 popup-content">
    	<div id="name_1_form" class="form_other">
    	<p>Название сервиса №1 <a href=""><img src="images/X.png"></a></p>
					<form action="serv_name_1_data.php" method="POST" >
						<div id="name_1_form">
							<input type="text" name="name_1" value="<? echo $row[name_1];  ?>">
							<input type="submit" value="Update">
							
						</div>
					</form>
				</div>
				</div>
		

			


<div id="serv_discription_1_form" class="form_other">
					</div>
				<a href="" class="show-popup-form-2"><p><? echo $row[discript_1];  ?></p></a>
    <div class="admin-form form_other popup-form-2 popup-content">
    	<div id="serv_discription_1_form" class="form_other">
    	<p>Описание сервиса №1 <a href=""><img src="images/X.png"></a></p>
					<form action="serv_discription_1.php" method="POST" >
										<div id="serv_discription_1_form">
											<!-- <input type="text" name="discript_1" value="<? echo $row[discript_1];  ?>"> -->
											<textarea name="discript_1"   style="width: 340px;height: 60px;	border-radius: 3px;	background-color: #1D2226;	border: 1px solid #1D2226;	margin-left: 20px;	margin-bottom: 10px; margin-top:10px; color: white;"><? echo $row[discript_1];  ?></textarea>
											<input type="submit" value="Update">
											
										</div>
									</form>
				</div>
				</div>
				</div>

			<div class="one_element">
				<img src="<? echo $row[icon2];  ?>">
				
<div id="name_2_form" class="form_other">
					</div>
				<a href="" class="show-popup-form-3"><h2><? echo $row[name_2];  ?></h2></a>
    <div class="admin-form form_other popup-form-3 popup-content">
    	<div id="name_2_form" class="form_other">
    		<p>Название сервиса №2 <a href=""><img src="images/X.png"></a></p>
					<form action="serv_name_2_data.php" method="POST" >
						<div id="name_2_form">
							<input type="text" name="name_2" value="<? echo $row[name_2];  ?>">
							<input type="submit" value="Update">
							
						</div>
					</form>
				</div>
				</div>
		





<div id="serv_discription_2_form" class="form_other">
					</div>
				<a href="" class="show-popup-form-4"><p><? echo $row[discript_2];  ?></p></a>
    <div class="admin-form form_other popup-form-4 popup-content">
    	<div id="serv_discription_2_form" class="form_other">
<p>Описание сервиса №2 <a href=""><img src="images/X.png"></a></p>
					<form action="serv_discription_2.php" method="POST" >
										<div id="serv_discription_2_form">
											<!-- <input type="text" name="discript_2" value="<? echo $row[discript_2];  ?>"> -->
											<textarea name="discript_2"   style="width: 340px;height: 60px;	border-radius: 3px;	background-color: #1D2226;	border: 1px solid #1D2226;	margin-left: 20px;	margin-bottom: 10px; margin-top:10px; color: white;"><? echo $row[discript_2];  ?></textarea>
											<input type="submit" value="Update">
											
										</div>
									</form>
				</div>
				</div>
				</div>
			<div class="one_element">
				<img src="<? echo $row[icon3];  ?>">
				<div id="name_3_form" class="form_other">
					</div>
				<a href="" class="show-popup-form-5"><h2><? echo $row[name_3];  ?></h2></a>
    <div class="admin-form form_other popup-form-5 popup-content">
    	<div id="name_3_form" class="form_other">
    	<p>Название сервиса №3 <a href=""><img src="images/X.png"></a></p>
					<form action="serv_name_3_data.php" method="POST" >
						<div id="name_3_form">
							<input type="text" name="name_3" value="<? echo $row[name_3];  ?>">
							<input type="submit" value="Update">
							
						</div>
					</form>
				</div>
				</div>
				<div id="serv_discription_3_form" class="form_other">
					</div>
				<a href="" class="show-popup-form-6"><p><? echo $row[discript_3];  ?></p></a>
    <div class="admin-form form_other popup-form-6 popup-content">
    	<div id="serv_discription_3_form" class="form_other">
    	<p>Описание сервиса №3 <a href=""><img src="images/X.png"></a></p>
					<form action="serv_discription_3.php" method="POST" >
										<div id="serv_discription_3_form">
											<!-- <input type="text" name="discript_3" value="<? echo $row[discript_3];  ?>"> -->
											<textarea name="discript_3"   style="width: 340px;height: 60px;	border-radius: 3px;	background-color: #1D2226;	border: 1px solid #1D2226;	margin-left: 20px;	margin-bottom: 10px; margin-top:10px; color: white;"><? echo $row[discript_3];  ?></textarea>
											<input type="submit" value="Update">
											
										</div>
									</form>
				</div>
				</div>
				</div>
			<div class="one_element">
				<img src="<? echo $row[icon4];  ?>">
					<div id="name_4_form" class="form_other">
					</div>
				<a href="" class="show-popup-form-7"><h2><? echo $row[name_4];  ?></h2></a>
    <div class="admin-form form_other popup-form-7 popup-content">
    	<div id="name_4_form" class="form_other">
    	<p>Название сервиса №4 <a href=""><img src="images/X.png"></a></p>
					<form action="serv_name_4_data.php" method="POST" >
						<div id="name_4_form">
							<!-- <input type="text" name="name_4" value="<? echo $row[name_4];  ?>"> -->
							<textarea name="discript_4"   style="width: 340px;height: 60px;	border-radius: 3px;	background-color: #1D2226;	border: 1px solid #1D2226;	margin-left: 20px;	margin-bottom: 10px; margin-top:10px; color: white;"><? echo $row[discript_4];  ?></textarea>
							<input type="submit" value="Update">
							
						</div>
					</form>
				</div>
				</div>
				<div id="serv_discription_4_form" class="form_other">
					</div>
				<a href="" class="show-popup-form-8"><p><? echo $row[discript_4];  ?></p></a>
    <div class="admin-form form_other popup-form-8 popup-content">
    	<div id="serv_discription_4_form" class="form_other">
    	<p>Описание сервиса №4 <a href=""><img src="images/X.png"></a></p>
					<form action="serv_discription_4.php" method="POST" >
										<div id="serv_discription_4_form">
											<input type="text" name="discript_4" value="<? echo $row[discript_4];}  ?>">
											<input type="submit" value="Update">
											
										</div>
									</form>
				</div>
				</div>
				</div>
			</div>
		</div>
	</div>


</body>


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
    $("#name_3_form").show();
}

function PopUpHide3() {
    $("#name_3_form").hide();
}

 </script>
 <script type="text/javascript">
	$(document).ready(function () {
    PopUpHide4();
});

function PopUpShow4() {
    $("#name_4_form").show();
}

function PopUpHide4() {
    $("#name_4_form").hide();
}

 </script>


 </script>

 <script type="text/javascript">
	$(document).ready(function () {
    PopUpHide5();
});

function PopUpShow5() {
    $("#serv_discription_1_form").show();
}

function PopUpHide5() {
    $("#serv_discription_1_form").hide();
}

</script>

 <script type="text/javascript">
	$(document).ready(function () {
    PopUpHide6();
});

function PopUpShow6() {
    $("#serv_discription_2_form").show();
}

function PopUpHide6() {
    $("#serv_discription_2_form").hide();
}

</script>
 <script type="text/javascript">
	$(document).ready(function () {
    PopUpHide7();
});

function PopUpShow7() {
    $("#serv_discription_3_form").show();
}

function PopUpHide7() {
    $("#serv_discription_3_form").hide();
}

</script>
 <script type="text/javascript">
	$(document).ready(function () {
    PopUpHide8();
});

function PopUpShow8() {
    $("#serv_discription_4_form").show();
}

function PopUpHide8() {
    $("#serv_discription_4_form").hide();
}

</script>
 <script type="text/javascript">
	$(document).ready(function () {
    PopUpHide9();
});

function PopUpShow9() {
    $("#icon1_form").show();
}

function PopUpHide9() {
    $("#icon1_form").hide();
}

</script>
 <script type="text/javascript">
	$(document).ready(function () {
    PopUpHide10();
});

function PopUpShow10() {
    $("#icon2_form").show();
}

function PopUpHide10() {
    $("#icon2_form").hide();
}

</script>
 <script type="text/javascript">
	$(document).ready(function () {
    PopUpHide11();
});

function PopUpShow11() {
    $("#icon3_form").show();
}

function PopUpHide11() {
    $("#icon3_form").hide();
}

</script>
 <script type="text/javascript">
	$(document).ready(function () {
    PopUpHide12();
});

function PopUpShow12() {
    $("#icon4_form").show();
}

function PopUpHide12() {
    $("#icon4_form").hide();
}

</script>

</html>