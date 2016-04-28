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
	<a href="header_default.php"> Load header defautl</a>
</div>

<div id="horiz_menu">
	
	<ul>
	

<div id="fb_form" class="form_icon">
					</div>
				<a href="" class="show-popup-form-a"><li>Facebook</li></a>
    <div class="admin-form form_icon popup-form-a popup-content">
    	<div id="fb_form" class="form_icon">
    		<p>Изменить ссылку на Facebook <a href=""><img src="images/X.png"></a></p>
    		<span>Введите ссылку на ваш аккаунт Facebook</span>
					<form action="fb_data.php" method="POST" >
						<div id="fb">
							<input type="text" name="url_1">
							<input type="submit" value="Update">
							
						</div>
					</form>
				</div>
			</div>

				<div id="twitter_form" class="form_icon">
					</div>
				<a href="" class="show-popup-form-b"><li>Twitter</li></a>
    <div class="admin-form form_icon popup-form-b popup-content">
    	<div id="twitter_form" class="form_icon">
    	<p>Изменить ссылку на Twitter <a href=""><img src="images/X.png"></a></p>
    		<span>Введите ссылку на ваш аккаунт Twitter</span>
					<form action="twitter_data.php" method="POST" >
						<div id="twitter">
							<input type="text" name="url_2">
							<input type="submit" value="Update">
							
						</div>
					</form>
				</div>
			</div>


				<div id="yt_form" class="form_icon">
					</div>
				<a href="" class="show-popup-form-c"><li>Youtube</li></a>
    <div class="admin-form form_icon popup-form-c popup-content">
    	<div id="yt_form" class="form_icon">
    	<p>Изменить ссылку на Youtube <a href=""><img src="images/X.png"></a></p>
    		<span>Введите ссылку на ваш аккаунт Youtube</span>
					<form action="yt_data.php" method="POST" >
						<div id="yt">
							<input type="text" name="url_3">
							<input type="submit" value="Update">
							
						</div>
					</form>
				</div>
			</div>
		<!-- <a href=""><li>Logo upload</li></a> -->





<div id="logo_form" class="form_img">
					</div>
				<a href="" class="show-popup-form-d"><li>Logo</li></a>
    <div class="admin-form form_img popup-form-d popup-content">
    	<div id="logo_form" class="form_img">
    	<p>Изменить логотип <a href=""><img src="images/X.png"></a></p>
    	<span>размер файла должен быть 74х131 пиксель в формате jpg или png.</span>
					<form action="logo_data.php" method="POST" enctype="multipart/form-data">
						<div id="logo">
						<div class="subm">
							<input type="file" name="logo" required>
						</div>
							
							<input type="submit" value="Update">
							
						</div>
					</form>
				</div>
			</div>


				<div id="bg_top_img_form" class="form_img">
					</div>
				<a href="" class="show-popup-form-e"><li>Background</li></a>
    <div class="admin-form form_img popup-form-e popup-content">
    	<div id="bg_top_img_form" class="form_img">
    	<p>Изменить фоновое изображение <a href=""><img src="images/X.png"></a></p>
    	<span>Загрузите фоновое изображение в формате jpg. После загрузки нажмите F5</span>
					<form action="bg_top_img_data.php" method="POST" enctype="multipart/form-data">
						<div id="bg_top_img">
						<div class="subm">
							<input type="file" name="bg_top_img" required>
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

		$res=mysql_query("SELECT * FROM header");
		while ($row=mysql_fetch_array($res)) {
		
	?>

<section id="s1" style=" transform: scale(0.85); float:left; margin-top: 20px; position:absolute;margin-left: 100px;">
	<div id="main">
		<div id="header">
			<div id="logo">
				<img src="<? echo $row[logo] ?>">
			</div>

			<div id="connecting">
				<p>Stay connected</p>
				<div id="img1">
					<a href=""><div id="img1_hov">
					</div></a>
				</div>
				<div id="img2">
					<a href=""><div id="img2_hov">
					</div></a>
				</div>
				<div id="img3">
					<a href=""><div id="img3_hov">
					</div></a>
				</div>
			</div>
		</div>
		
	<div id="land_discript">
			<div id="big_discript">
				
				<div id="big_discript_form" class="form_other">
					</div>
				<a href="" class="show-popup-form-1"><p><? echo $row[big_discript];   ?></p></a>
    <div class="admin-form form_other popup-form-1 popup-content">
    	<div id="big_discript_form" class="form_other">
    	<p>Название компании <a href=""><img src="images/X.png"></a></p>
					<form action="big_discript_data.php" method="POST" >
						<div id="big_discript_form">
							<input type="text" name="big_discript" value="<? echo $row[big_discript];   ?>">
							<input type="submit" value="Update">
							
						</div>
					</form>
				</div>
			</div>



			</div>



 
			<div id="small_discript">
				<a href="javascript:PopUpShow1()"></a>
				
					


<div id="s_discript_form" class="form_other">
					</div>
				<a href="" class="show-popup-form-2"><p><? readfile("s_discript.txt"); ?></p></a>
    <div class="admin-form form_other popup-form-2 popup-content">
    	<div id="s_discript_form" class="form_other">
    	<p>Описание компании<a href=""><img src="images/X.png"></a></p>
					<form action="s_discript_data.php" method="POST" >
						<div id="s_discript_form">
							<!-- <input type="text" name="s_discript" value="<? readfile("s_discript.txt"); ?>"> -->
							<textarea name="s_discript"   style="width: 340px;height: 60px;	border-radius: 3px;	background-color: #1D2226;	border: 1px solid #1D2226;	margin-left: 20px;	margin-bottom: 10px; margin-top:10px; color: white;"><? readfile("s_discript.txt"); ?></textarea>
							<input type="submit" value="Update">
							
						</div>
					</form>
				</div>
			</div>



			</div>

			<div id="contact_button">
				<div id="contact_us_b">
					<a href=""><p>Contact us now</p></a>
				</div>
				<div id="note">
					
				<div id="note_form" class="form_other">
					</div>
				<a href="" class="show-popup-form-3"><p><? echo $row[note];   ?></p></a>
    <div class="admin-form form_other popup-form-3 popup-content">
    	<div id="note_form" class="form_other">
    	<p>Заметка к кнопке<a href=""><img src="images/X.png"></a></p>
					<form action="note_data.php" method="POST" >
						<div id="note_form">
							<input type="text" name="note" value="<? echo $row[note];}   ?>">
							<input type="submit" value="Update note">
					
						</div>
					</form>
				</div>
			</div>

					
				</div>
				</div>
				




			</div>
		</div>
		
	</div>

</section>

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
    PopUpHide();
});

function PopUpShow() {
    $("#big_discript_form").show();
}

function PopUpHide() {
    $("#big_discript_form").hide();
}

</script>

<script type="text/javascript">
	$(document).ready(function () {
    PopUpHide1();
});

function PopUpShow1() {
    $("#s_discript_form").show();
}

function PopUpHide1() {
    $("#s_discript_form").hide();
}

</script>


<script type="text/javascript">
	$(document).ready(function () {
    PopUpHide2();
});

function PopUpShow2() {
    $("#note_form").show();
}

function PopUpHide2() {
    $("#note_form").hide();
}

</script>

<script type="text/javascript">
	$(document).ready(function () {
    PopUpHide3();
});

function PopUpShow3() {
    $("#fb_form").show();
}

function PopUpHide3() {
    $("#fb_form").hide();
}

</script>

<script type="text/javascript">
	$(document).ready(function () {
    PopUpHide4();
});

function PopUpShow4() {
    $("#twitter_form").show();
}

function PopUpHide4() {
    $("#twitter_form").hide();
}

</script>

<script type="text/javascript">
	$(document).ready(function () {
    PopUpHide5();
});

function PopUpShow5() {
    $("#yt_form").show();
}

function PopUpHide5() {
    $("#yt_form").hide();
}

</script>

<script type="text/javascript">
	$(document).ready(function () {
    PopUpHide6();
});

function PopUpShow6() {
    $("#logo_form").show();
}

function PopUpHide6() {
    $("#logo_form").hide();
}

</script>

<script type="text/javascript">
	$(document).ready(function () {
    PopUpHide7();
});

function PopUpShow7() {
    $("#bg_top_img_form").show();
}

function PopUpHide7() {
    $("#bg_top_img_form").hide();
}

</script>


</html>