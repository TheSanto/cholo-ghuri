<?php 
require('cg-parts/user.php');
require('cg-parts/core-function.php');
require('header.php');
?>
<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/">Cholo Ghuri</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<form class="navbar-form navbar-right" role="search">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search">
					</div>
					<button type="submit" class="btn btn-default">Submit</button>
				</form>
				<ul class="nav navbar-nav pull-right">
					<li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Populer Places <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Cox's Bazar</a></li>
							<li><a href="#">Jaflong, Sylhet</a></li>
							<li><a href="#">Shine of Sylhet</a></li>
							<li><a href="#">Kuakata</a></li>
							<li><a href="#">Rangamati</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#"></a></li>
						</ul>
					</li>
					<li><a href="#">Resources</a></li>
					<li><a href="#">Who we are?</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container -->
	</div><!-- /.container-fluid -->
</nav>
<?php 
$userName = "";
$passWord = "";
$usrValidity = false;
if (isset($_POST['submit'])){
	$userName = $_POST['user'];
	$passWord = $_POST['pwd'];
	if(verifyUser($userName, $passWord)){
		$usrValidity = true;
		header('Location: /dashboard.php');
	}else echo '<div class="container alert alert-danger" role="alert">Authentication failed. Try again.</div>'; 
}
?>
<div class="row">
	<div class="container">
		<div class="lg_box text-center">
			<?php 
			?>

			<h2>Please enter your username and password.</h2>
			<form action="login.php" method="POST">
				<div class="input-group">
					<span class="input-group-addon" id="sizing-addon2 user">@</span>
					<input type="text" name="user" class="form-control" placeholder="Username" aria-describedby="sizing-addon2">
				</div>
				<div class="input-group">
					<span class="input-group-addon" id="sizing-addon2">@</span>
					<input type="password" name="pwd" class="form-control" placeholder="Password" aria-describedby="sizing-addon2">
				</div>
				<input type="submit" value="Log In"  name="submit" class="btn btn-success" />
			</form>
		</div>
	</div>
</div>

</body>
</html>
<?php require('footer.php'); ?>
