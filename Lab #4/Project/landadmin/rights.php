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
  <a href="rights_default.php"> Load rights defautl</a>
</div>

	<?
		include('menu.php');

		$res=mysql_query("SELECT * FROM rights");
		while ($row=mysql_fetch_array($res)) {
		
	?>


		



		
	
<section id="s4" style=" transform: scale(0.8); float:left;  position:absolute;margin-left: 100px; margin-top:200px;">
	<div id="main4">
		<p style="float:left; ">
				   <a href="" class="show-popup-form-1" ><? echo $row[rights];  ?></a>
    <div class="admin-form form_other popup-form-1 popup-content"><div id="rights_form" class="form_other">
				<p>Запись о правах<a href=""><img src="images/X.png"></a></p>
        <form action="footer_rights_data.php" method="POST" >
						<div id="rights_form">
							<input type="text" name="rights" value="<? echo $row[rights];  ?>">
							<input type="submit" value="Update ">
							
						</div>
					</form>	
				</div></div>
				






				 <span style="line-height:70px; margin-left:5px;">
				 <a href="" class="show-popup-form-2"><? echo $row[company];  ?></a>
    <div class="admin-form form_other popup-form-2 popup-content">
    	<div id="company_form" class="form_other">
      <p>Правообладатель<a href=""><img src="images/X.png"></a></p>
					<form action="footer_company_data.php" method="POST" >
						<div id="company_form">
							<input type="text" name="company" value="<? echo $row[company]; } ?>">
							<input type="submit" value="Update ">
							
						</div>
					</form>
		</div>
	</div>
				 </span></p>
		
		</div>
</section>




<!-- <div id="content">
  <section>
 
    <a href="" class="show-popup-form-2">show form2</a>
    <div class="admin-form rights_form popup-form-2 popup-content">FORM2!!</div>
    <a href="" class="show-popup-form-3">show form3</a>
    <div class="admin-form rights_form popup-form-3 popup-content">FORM3!!</div>
  </section>
</div> -->

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

</html>