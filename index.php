<?php

$to = 'ashleykaguiar@gmail.com';
$subject = 'Contact Form';

$name = $_POST['name'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];

$body = <<<EMAIL

HI! This is an email. An email sent by $name.

This is their contact information:
Email: $email

This is what they had to say:
$feedback

EMAIL;

$header = "From: $email";

if($_POST){
	mail($to, $subject, $body, $header);
	$thankyou = 'Thank you for contacting me. I will get back to you as soon as possible. If its an emergency, please dial 911';
}

?>

<!DOCTYPE html>
<html>

<head>
	<title>Ashley Aguiar Design</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="css/lightbox.css" rel="stylesheet" />
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	
	
</head>

<body>
<div id="container">
<!-- Header	 -->
	<header>
		<div id="head-logo">
			<img src="img/aad-small.png"/>
		</div>
		
		<div id="head-social">
			<ul>
				<li><a href="mailto:ashleykaguiar@gmail.com?Subject=Hello" target="_top">
				<img src="img/mail.png"/>
				</a></li>	

				<li><a href="https://www.facebook.com/ashleyaguiardesign" target="_blank">
				<img src="img/facebook.png"/>
				</a></li>
			
				<li><a href="http://www.linkedin.com/pub/ashley-aguiar/75/82b/911">
				<img src="img/linkedin.png"/>
				</a></li>
			</ul>
		</div>		
	</header>
	
<!--
	
		<nav role="navigation">
         <div class="inner">
			 <a href="#nav" class="nav-collapse" id="nav-collapse">Menu</a> 
             <ul class="nav" id="nav">
                 <li class="active"><a href="#">HEY</a></li>
                 <li><a href="#">LOOK</a></li>
                 <li><a href="#">AT</a></li>
                 <li><a href="#">THIS</a></li>
                 <li><a href="#">AWESOME</a></li>
                 <li><a href="#">NAV</a></li>
             </ul>
         </div>
     </nav>
-->
<!-- Banner area or potential slider section -->

	<div id="banner">
		<img src="img/aad.png"/>
	</div>

<!-- About Me section	 -->
	
	<section id="about-me">
			<img src="img/ashley.png"/>
			<div id="about-text">
			<p>Hi! My name is Ashley and I quite enjoy exercising both sides of my brain which is
why I'm a graphic designer and web developer. I'm also an active learner and
currently pursuing my third associate degree, this time with an emphasis on web
design. When my creativity and logical side aren't trying to show each other up,
I enjoy spending time in the warm and sunny outdoors; which makes you wonder
why on earth I live in North Idaho, but I do. If you'd like to enlist my skills feel free
to contact me anytime.</p>
			</div>
	</section>
	
<!-- Skills section -->

	<section id="skills">
		<h1>Skills & Knowledge</h1>
		<div class="box">
			<p>Adobe Creative Suite</p>
			<img src="img/adobe.png"/>
		</div>
		<div class="box">
			<p>HTML5 & CSS3</p>
			<img src="img/html.png"/>
		</div>
		<div class="box">
			<p>Windows & Mac OS</p>
			<img src="img/os.png"/>
		</div>
		<div class="box">
			<p>Microsoft Office</p>
			<img src="img/office.png"/>
		</div>			
	</section>

<!-- Portfolio section -->

	<section id="portfolio">
		<h1>Portfolio</h1>
				
		<ul class="ca-port">	
		<div class="box">
			<p>Genocide Poster</p>
			<li><a href="img/big-genocide.png" data-lightbox="portfolio"><img class="ca-img" src="img/genocide.png"/></a></li>
		</div>					
		<div class="box">
			<p>ISA Poster</p>
			<li><a href="img/big-isa.png" data-lightbox="portfolio"><img class="ca-img" src="img/isa.png"/></a></li>
		</div>
		<div class="box">
			<p>Magazine Layout</p>
			<li><a href="img/big-magazine.png" data-lightbox="portfolio"><img class="ca-img" src="img/magazine.png"/></a></li>
		</div>
		<div class="box">
			<p>Car Show T-Shirt</p>
			<li><a href="img/big-cardlane.png" data-lightbox="portfolio"><img class="ca-img" src="img/cardlane.png"/></a></li>
		</div>
		<div class="box">
			<p>UX Rebrand</p>
			<li><a href="img/big-ux.png" data-lightbox="portfolio"><img class="ca-img" src="img/ux.png"/></a></li>
		</div>
		<div class="box">
			<p>Kasco Website</p>
			<li><a href="img/big-kasco.png" data-lightbox="portfolio"><img class="ca-img" src="img/kasco.png"/></a></li>
		</div>
		<div class="box">
			<p>Minion Webpage</p>
			<li><a href="img/big-minion.png" data-lightbox="portfolio"><img class="ca-img" src="img/minion.png"/></a></li>
		</div>
		<div class="box">
			<p>SomnuTech Branding</p>
			<li><a href="img/big-somnu.png" data-lightbox="portfolio"><img class="ca-img" src="img/somnu.png"/></a></li>
		</div>	
		</ul>
		
	</section>
	
<!-- Contact section -->

	<section id="contact">
		<h1>Contact</h1>
		
		<ul class="ca-menu">
		<div class="box">
			<a href="mailto:ashleykaguiar@gmail.com?Subject=Hello" target="_top">
				<p>Email Me</p>
				<li><img src="img/con-email.png"/></li>
			</a>	
		</div>
		<div class="box">
			<a href="https://www.facebook.com/ashleyaguiardesign" target="_blank">
				<p>Like Me on Facebook</p>
				<li><img src="img/con-facebook.png"/></li>
			</a>	
		</div>
		<div class="box">
			<a href="http://www.linkedin.com/pub/ashley-aguiar/75/82b/911" target="_blank">
				<p>Connect on Linked In</p>
				<li><img src="img/con-linkedin.png"/></li>
			</a>
		</div>
		<div class="box">
				<p>Call Me</p>
				<li><img src="img/con-mobile.png"/></li>
				<p id="number" class="ca-sub">208-661-9585</p>
		</div>
		
		</ul>
	</section>
	
	<section id="form">
		<p id="thankyou"><?php echo $thankyou; ?></p>
		<form method="post" action="?">
				
			<input id="name" type="text" placeholder="name" name="name" />
			<input id="email" type="email" placeholder="email" name="email" />
			<textarea id="feedback" name="feedback" placeholder="message" rows="5" cols="30"></textarea>
			<input id="submit" type="submit" value="submit form" />
				
		</form>

	</section>

<!-- Footer	 -->
	
	<footer></footer>
</div>

<script type="text/javascript" src="yass.js"></script>

<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/lightbox.min.js"></script>
</container>
</body>
</html>