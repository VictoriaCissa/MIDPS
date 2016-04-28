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
  <a href="preview_default.php"> Load preview defautl</a>
</div>
<div id="horiz_menu" style="margin-right:100px;">
	<ul>
		

		<div id="img_form" class="form_img">
          </div>
        <a href="" class="show-popup-form-a"><li>Change preview image</li></a>
    <div class="admin-form form_img popup-form-a popup-content">
      <div id="img_form" class="form_img">
      <p>Загрузить изображение <a href=""><img src="images/X.png"></a></p>
      <span>Загрузить новое preview изображение продукта. Формат изображение jpg или png</span>
          <form action="img_data.php" method="POST" enctype="multipart/form-data">
            <div id="img">
            <div class="subm">
               <input type="file" name="img" required>
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

		$res=mysql_query("SELECT * FROM preview");
		while ($row=mysql_fetch_array($res)) {
		
	?>


<div id="amazing_think" style=" transform: scale(1.1); float:left;  position:absolute;margin-left: 260px; margin-top:100px; background-color:white;">
		




<div id="name_form" class="form_other">
					</div>
				<a href="" class="show-popup-form-1"><h2><? echo $row[name];  ?></h2></a>
    <div class="admin-form form_other popup-form-1 popup-content">
    	<div id="name_form" class="form_other">
					<form action="name_data.php" method="POST" >
          <p>Называние <a href=""><img src="images/X.png"></a></p>
						<div id="name_form">
							<input type="text" name="name" value="<? echo $row[name];  ?>">
							<input type="submit" value="Update">
							
						</div>
					</form>
				</div>
				</div>
		
		

		<div id="preview_discript_form" class="form_other">
					</div>
				<a href="" class="show-popup-form-2"><h3><? echo $row[discript];  ?></h3></a>
    <div class="admin-form form_other popup-form-2 popup-content">
    	<div id="preview_discript_form" class="form_other">
      <p>Описание <a href=""><img src="images/X.png"></a></p>
					<form action="preview_discript_data.php" method="POST" >
								<div id="preview_discript_form">
									<input type="text" name="discript" value="<? echo $row[discript];  ?>">
									<input type="submit" value="Update">
									
								</div>
							</form>
				</div>
				</div>



		<div id="preview_slog_form" class="form_other">
					</div>
				<a href="" class="show-popup-form-3"><p><? echo $row[slog];  ?></p></a>
    <div class="admin-form form_other popup-form-3 popup-content">
    <div id="preview_slog_form" class="form_other">
    <p>Слоган <a href=""><img src="images/X.png"></a></p>
					<form action="preview_slog_data.php" method="POST" >
										<div id="preview_slog_form">
											<!-- <input type="text" name="slog" value="<? echo $row[slog];  ?>"> -->
                      <textarea name="slog"   style="width: 340px;height: 60px; border-radius: 3px; background-color: #1D2226;  border: 1px solid #1D2226;  margin-left: 20px;  margin-bottom: 10px; margin-top:10px; color: white;"><? echo $row[slog];  ?></textarea>
											<input type="submit" value="Update">
											
										</div>
									</form>
				</div>
				</div>
		<img src="<? echo $row[img]; } ?>">
		
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
    $("#img_form").show();
}

function PopUpHide1() {
    $("#img_form").hide();
}

 </script>

 <script type="text/javascript">
	$(document).ready(function () {
    PopUpHide2();
});

function PopUpShow2() {
    $("#name_form").show();
}

function PopUpHide2() {
    $("#name_form").hide();
}

 </script>
  <script type="text/javascript">
	$(document).ready(function () {
    PopUpHide3();
});

function PopUpShow3() {
    $("#preview_discript_form").show();
}

function PopUpHide3() {
    $("#preview_discript_form").hide();
}

 </script>

   <script type="text/javascript">
	$(document).ready(function () {
    PopUpHide4();
});

function PopUpShow4() {
    $("#preview_slog_form").show();
}

function PopUpHide4() {
    $("#preview_slog_form").hide();
}

 </script>

</html>