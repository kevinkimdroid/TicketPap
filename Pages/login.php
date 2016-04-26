<?php
session_start();

?>
<html>
<head>
<link href="../css/bootstrap.min.css" type="text/css" rel="stylesheet">
<title>Ticket | Login</title>
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
<li><a href="Events.php">Events</a></li>
<li><a href="Tickets.php">Buy Tickets</a></li>
<li><a href="contact.php">Contact Us</a></li>
</ul>
<ul class="nav navbar-nav navbar-right">
<li><a href="login.php">Login</a></li>
<li><a href="Register.php">Register</a></li>
</ul>
</div>
</div>
</nav>
</div> 
<div class="help-block"></div>
<div class="container">
  <form id="checkout-form" class="smart-form" novalidate="novalidate">
<fieldset>
<Legend>Login</Legend>
<div class="form-group">
<div class="col-mod-8">
<Label>Email<input type="email" name="email" placeholder="Email" class="form-control" >
</div>
<div class="col-mod-8">
<Label>Password<input type="password" name="password" placeholder="Password" class="form-control" > 
</div>
<div class="col-mod-8">
<input type="submit" value="Login" class="btn btn-primary" size="40">
</div>
</div>
</fieldset> 
</form>
</div>

</body>
</html>