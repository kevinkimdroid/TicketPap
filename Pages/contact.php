<?php

?>
<html>
<head>
<link href="../css/bootstrap.min.css" type="text/css" rel="stylesheet">
<link href="../css/style.css" type="text/css" rel="stylesheet">
<title>Ticket | Contact Us</title>
</head>
<body>
<div>
<nav role="navigation" class="navbar navbar-default">
<div class="container-fluid">
<div class="navbar-header">
<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
<span class="sr-only">Toogle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a href="index.php" class="navbar-brand">TICKET PAP</a>
</div>
<div id="navbarCollapse" class="collapse navbar-collapse">
<ul class="nav navbar-nav">
<li class="Active"><a href="index.php">Home</a></li>
<li class="dropdown">
<a href="#" data-toggle="dropdown" class="dropdown-toggle">Event Types<b class="caret"></b></a>
<ul>
</ul>
</li>
<li><a href="About.php">About TicketPap</a></li>
<li><a href="contact.php">Contact</li>
</ul>
<ul class="nav navbar-nav pull-right">
<li><a href="#"></a></li>
<li class="dropdown">
<a href="#" data-toggle="dropdown" class="dropdown-toggle">Account<b class="caret"></b></a>
<ul class="dropdown-menu">
<li><a href="Login.php">Login</a></li>
<li><a href="Register.php">Register</a></li>
</ul>
</li>
</ul>
</div>
</div>
</nav>
</div>
<div class="container">
<form method="post" class="form-vertical" >
<fieldset>
<div class="col-mod-12">
<h3 class="title-bar" style="align:right;">Contact Us</h3>
</div>
<div class="form-group row">
<section class="col-mod-12">
<Label>Username<input type="email" name="email" placeholder="Username" class="form-control">
</section>
<div class="col-mod-12">
<Label>Message<Textarea name="textarea" placeholder="Please write your message" class="form-control"></textarea></label>
</div>
<div class="col-mod-12">
<input type="submit" value="Login" class="btn btn-primary">
</div>
</fieldset> 
</form>
</div>
</div>
<div class="footer">
	
</div>
<div class="ending">
&copy; 2015 - <script>document.write(new Date().getFullYear())</script> AppsLab Limited | The Future Is With You<br>
<a href="mailto:ewanguba@gmail.com">email: info@AppsLab.co.ke</a>

</body>
</html>