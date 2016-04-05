<?php 
require('function.php');
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
        <a class="navbar-brand" href="#">Cholo Ghuri</a>
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
          <li class="active"><a href="/">Home <span class="sr-only">(current)</span></a></li>
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
          <li><a href="/login.php">Sign In</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
  </div><!-- /.container-fluid -->
</nav>
<!-- Start Place section -->
<div class="row">
  <div class="container">
    <div class="cgf_top text-center">
      <h1 class="">Welcome To Cholo Ghuri</h1>
      <p>Traveling made easier than ever.</p>
    </div>
    <div class="container cgf_area">
    </div>
  </div>
  <div class="row places">
    <div class="container">
      <h3>Please select a Place:</h3>
      <?php 
      $conn = mysqli_connect(HOST, USER, PWD, CGBD);
      $query =  "SELECT * FROM places";
      $result = mysqli_query($conn, $query);
      if (mysqli_num_rows($result) > 0) {
    // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
          echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
        }
      } else {
        echo "0 results";
      }

      mysqli_close($conn);
      var_dump($result);
      ?>
      <div class="btn btn-success place col-md-3 text-center">
        <a href="#">Cox's Bazar</a>
      </div>

    </div>

  </div>

</div>
<!-- End Place section -->

<?php require('footer.php'); ?>