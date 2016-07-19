<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="theme-color" content="#f28530">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="HandheldFriendly" content="true">
	
	<link href="./favicon.png" rel="shortcut icon">
	<title>Blazin' Bits | CliqBit</title>
	<meta name="description" content="CliqBit | The joke's on us. Drop the news and ditch the drama. We're the funny-focused social media app.">
	
	<script type="text/javascript" src="assets/js/jquery-3.0.0.min.js"></script>
	
	<link type="text/css" rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<a href="#" class="back-to-top"><i class="fa fa-chevron-up fa-3x" aria-hidden="true"></i></a>
	<header></header>
	<nav>
		<ul id="nav-pre">
			<li id="tagline">Share your not-so-serious side.</li>
			<li ><a id="download" href="https://itunes.apple.com/us/app/cliqbit/id1029040166?ls=1&mt=8">Download Now!</a></li>
		</ul>
		<ul id="nav">
			<li><a id="logo" href="./"><span>filler</span></a></li>
			<li><a href="./">Home</a></li>
			<li ><a id="nav-active" href="blazin">Blazin' Bits</a></li>
			<li><a href="about">About Us</a></li>
			<li><a href="contact">Contact</a></li>
			<li><a href="https://twitter.com/CliqBit"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
		</ul>
	</nav>
	<div id="content">
		<img id="demo" src="assets/img/iphoneTemplateBlazin.png" />
		<div id="rest">
			<div class="blazinImages" style="margin-top: -85vh" ></div>
			<div class="imageWrapperNo" >Loading images...</div>
			<div class="blazinImages" style="height: 30px" ></div>
		</div>
	</div>
</body>
<script type="text/javascript">
	var elementPosition = $('#demo').offset();
	var amountScrolled = 300;

	$(window).scroll(function(){
		$('.imageWrapperNo').load('./assets/includes/loadBlazin.php');
		if ($('.imageWrapperNo').length) {
			setTimeout(function(){
				$('.imageWrapperNo').removeClass('imageWrapperNo');
				$('.blazinImages').css('width',($('#demo').width() * 0.8));
				$('.postFooter').css('width',($('#demo').width() * 0.75));
				$('.image').css('width',($('#demo').width() * 0.75));
				$('.postImg').css('width',($('#demo').width() * 0.75));
				$('#funny').css('width',($('#demo').offset() + 20));
			}, 1000);
		}
		
		var scrollTop = $(window).scrollTop();
		
		if (scrollTop > amountScrolled ) {
			$('a.back-to-top').fadeIn('slow');
		} else {
			$('a.back-to-top').fadeOut('slow');
		}
		
		if(scrollTop > elementPosition.top){
			$('#rest').css('margin-top',$('#demo').height() + 80);
			$('#demo').css('position','fixed').css('top','0').css('left','50%').css('margin-left',(-0.5 * $('#demo').width()));
		} else {
			$('#demo').css('position','static').css('margin-left','auto');
			$('#rest').css('margin-top','0');
		}
	});
	
	$('a.back-to-top').click(function() {
		$('html, body').animate({
			scrollTop: 0
		}, 700);
		return false;
	});
</script>
</html>