<?php 
require('function.php');
require('header.php');
session_start();
if($_SESSION['name']){

}else{
	echo "Please log in.";
	die();
}
?>
<nav class="navbar navbar-inverse">
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
					<li><a href="/">Home <span class="sr-only">(current)</span></a></li>
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
					<li><a href="/login.php">Sign Out</a></li>

				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container -->
	</div><!-- /.container-fluid -->
</nav>

<?php 
//For submit_places
if(isset($_POST['submit_new'])){
	$places = $_POST['places'];
	$category = $_POST['category'];
	$spot = $_POST['spot'];

	// if(istableExist('places')){
		//Insert into column

		// Create connection
	$conn = mysqli_connect("localhost", "root", "toor", $cgDB="cg_db");
		// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
		//insert for places
	$sql = "INSERT INTO places (places)
	VALUES ('$places')";

	if (mysqli_query($conn, $sql)) {
		echo '<div class="container alert alert-success" role="alert">Place successfully inserted.</div>';
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
		//insert for categories
	$sql = "INSERT INTO categories (categories, parent)
	VALUES ('$category', '$places')";

	if (mysqli_query($conn, $sql)) {
		echo '<div class="container alert alert-success" role="alert">Place successfully inserted.</div>';
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
		//insert for spots
	$sql = "INSERT INTO spots (spots, sibling)
	VALUES ('$spot', '$category')";

	if (mysqli_query($conn, $sql)) {
		echo '<div class="container alert alert-success" role="alert">Place successfully inserted.</div>';
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);


	// }
	// else{
	// 	echo '<div class="container alert alert-danger" role="alert">Faild.</div>';
	// }
}
?>
<form action="dashboard.php" method="POST">
	<div class="row dash_places">
		<div class="container">
			<h1>Welcome, Admin.</h1>
			<p>Create or modify tables.</p>
			<hr>
			<div class="col-sm-8">
				<div class="container">
					<div class="dash_place">
						<div class="col-sm-3">
							<label for="places">Create new place: </label>
						</div>
						<div class="col-sm-4" id="places">
							<input type="text" name="places" id="places" class="form-control" placeholder="Place name.">
						</div>
					</div>


				</div>
				<div class="container">
					<div class="dash_place">
						<div class="col-sm-3">
							<label for="category">Create new Category: </label>
						</div>
						<div class="col-sm-4" id="category">
							<input type="text" name="category" id="category" class="form-control" placeholder="Category name.">
						</div>
					</div>
				</div>
				<div class="container">
					<div class="dash_place">
						<div class="col-sm-3">
							<label for="spot">Create new spot: </label>
						</div>
						<div class="col-sm-4" id="spot">
							<input type="text" name="spot" id="spot" class="form-control" placeholder="Spot name.">
						</div>
					</div>
				</div>
				<div class="container">
					<div class="col-sm-7 text-right">
						<input type="submit" value="Create" name="submit_new" class="btn btn-warning">
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="col-sm-5">
					<h3>Places</h3>
					<ul>
						<li>Dhaka</li>
						<li>Chittaging</li>
						<li>Barishal</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</form>
</body>
</html>
<?php require('footer.php'); ?>
