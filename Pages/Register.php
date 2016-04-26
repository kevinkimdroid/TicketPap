<?php

?>
<html>
<head>
<link href="../css/bootstrap.min.css" type="text/css" rel="stylesheet">
<title>Ticket | Register</title>
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
<ul class="nav navbar-nav pull-left">
<li class="Active"><a href="index.php">Home</a></li>
<li class="dropdown">
<a href="#" data-toggle="dropdown" class="dropdown-toggle">Event Types<b class="caret"></b></a>
<ul>
</ul>
</li>
<li><a href="Tickets.php">About Us</a></li>
<li><a href="contact.php">About TicketPap</a></li>
<li><a href="Tickets.php">Contact</li>
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
<Legend>Register</style></Legend>
</div>
<div class="form-group">
<div class="col-mod-12">
<Label>Username<input type="email" name="email" placeholder="Email" class="form-control">
</div>
<div class="col-mod-12">
<Label>Email<input type="email" name="email" placeholder="Email" class="form-control">
</div>
<div class="col-mod-12">
<Label>Password<input type="password" placeholder="Password" class="form-control">
</div>
<div class="col-mod-12">
<Label>Confirm Password<input type="password" placeholder="Password" class="form-control"> 
</div
<div class="col-mod-12">
<input type="submit" value="Login" class="btn btn-primary">
</div>
</fieldset> 
</form>
</div>
</div>
</body>
</html>