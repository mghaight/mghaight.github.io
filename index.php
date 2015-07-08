
<?php
    if (isset($_POST["submit"])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $from = 'Contact Form'; 
        $to = 'mghaight@email.wm.edu'; 
        $subject = 'Message from Contact Form';
        
        $body = "From: $name\n E-Mail: $email\n Message:\n $message";
 
        // Check if name has been entered
        if (!$_POST['name']) {
            $errName = 'Please enter your name';
        }
        
        // Check if email has been entered and is valid
        if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errEmail = 'Please enter a valid email address';
        }
        
        //Check if message has been entered
        if (!$_POST['message']) {
            $errMessage = 'Please enter your message';
        }

// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage) {
    if (mail ($to, $subject, $body, $from)) {
        $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
    } else {
        $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
    }
}
    }
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<link rel="stylesheet" type="text/css" href="styles/font-awesome.css">
<link rel="stylesheet" type="text/css" href="styles/cyborg-bootstrap.css">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-theme.css">
<link rel="stylesheet" type="text/css" href="styles/custom.css">

<style>

body {
	line-height:180%;
	text-align:justify;
}

</style>

<title>haigmac</title>
</head>

<body>

<h1 id="header-text">haigmac</h1>
<img class="img-responsive" src="head.jpg" alt="Sunset">

<div class="container">

<h3>About</h3>
<hr>
<p>Welcome to my corner of the internet. If you've stumbled here by accident, my name is Mackenzie Haight. I am a sophomore at the College of William &amp; Mary which is in Virginia. I'm a Virginia native but hope after school to travel frequently. I have a list of cities where I'd like to live including: Portland, OR; Boulder, CO; and London, GBR. <a href="#projects">Here</a> you can find a repertoire of my work in a range of disciplines including links to a number of my projects outside of this site. If you stumble across something that strikes your fancy, please <a href="#contact">contact me</a>. In the words of Albert Einstein: <q>I have no special talent. I am only passionately curious.</q></p>

<br>

<h3>Things I Do</h3>
<hr>
<div class="row">
	<div class="col-md-3"><center><i class="fa fa-clock-o fa-5x"></i></center><p>Distance runner at the College of William &amp; Mary. Training to beat the clock.</p></div>
    <div class="col-md-3"><center><i class="fa fa-code fa-5x"></i></center><p>Studying computer science. Passionate about web and mobile app development.</p></div>
    <div class="col-md-3"><center><i class="fa fa-compass fa-5x"></i></center><p>Always looking for the next adventure. Never in my comfort zone.</p></div>
    <div class="col-md-3"><center><i class="fa fa-picture-o fa-5x"></i></center><p>Maker of visual art. Paint, photo, film, mixed media and installation.</p></div>
</div>

<br>

<h3>Curriculum Vitae</h3>
<hr>
<p><center><a target="_blank" id="cv"><i class="fa fa-file fa-5x"></i></a></center></p>

<br>

<a name="contact"></a>
<h3>Contact</h3>
<hr>
<div class="row">
	<div class="col-md-6">
		<form role="form" action="index.php" method="post">
  			<div class="form-group">
    			<input type="name" class="form-control" name="name" id="name" placeholder="Name">
                <?php echo "<p class='text-danger'>$errName</p>";?>
  			</div>
  			<div class="form-group">
    			<input type="email" class="form-control" name="email" id="email" placeholder="Email Address">
                <?php echo "<p class='text-danger'>$errEmail</p>";?>
  			</div>
  			<div class="form-group">
  				<textarea class="form-control" rows="5" name="message" id="message" placeholder="Message"></textarea>
                <?php echo "<p class='text-danger'>$errMessage</p>";?>
			</div>
  			<button type="submit" class="btn btn-primary disabled">Submit</button>
            <?php echo $result; ?>	
		</form>
	</div>
    <div class="col-md-6">
    	<p>Contact me with good ideas, funny pictures, wishes to collaborate or if you just want to talk. I am always interested in undertaking new projects. Just shoot me an email.</p><p> <strong>While I'm figuring out PHP in all of its stupidness, just shoot me an email at <a href="mailto:mghaight@email.wm.edu">mghaight@email.wm.edu</a>!</strong></p>
    </div>
</div>

<br>

<h3>Social</h3>
<hr>
<center><a href="https://instagram.com/mghaight/" target="_blank"><i id="instagram" class="fa fa-instagram fa-5x"></i></a><a href="https://www.linkedin.com/in/mghaight" target="_blank"><i id="linkedin" class="fa fa-linkedin fa-5x"></i></a><br><a href="https://twitter.com/mcknzhght" target="_blank"><i id="twitter" class="fa fa-twitter fa-5x"></i></a><a href="http://haigmac.tumblr.com" target="_blank"><i id="tumblr" class="fa fa-tumblr-square fa-5x"></i></a></center>
            
<br>

<a name="projects"></a>
<h3>Projects</h3>
<hr>
<div class="custom-list">
<p>What I am currently working on:</p>
<ul>
	<li>My <a target="_blank">training log</a> for the upcoming cross country season</li>
	<li>Check out <a target="_blank">my flickr</a> to see some of my shots</li>
	<li><a target="_blank">deviantART</a> is where I host the rest of my portfolio</li>
	<li>My code lives at <a target="_blank">GitHub</a></li>
</ul>
</div>

<br>

<h3>Thanks</h3>
<hr>
<div class="custom-list">
<p>I have the following to thank for this website:</p>
<ul>
	<li><a href="https://unsplash.com" target="_blank">Unsplash</a> for the freely licensed photo</li>
	<li><a href="http://fortawesome.github.io/Font-Awesome/" target="_blank">Font Awesome</a> for the icons</li>
	<li><a href="http://getbootstrap.com" target="_blank">Bootstrap</a> for a great framework</li>
	<li>HTML/CSS/JS</li>
</ul>
</div>

<br>

<center>&copy; 2015</center>

<br>

</div>



<script type="text/javascript" src="scripts/jquery-2.1.4.js"></script>
<script type="text/javascript" src="scripts/bootstrap.js"></script>

</body>
</html>
