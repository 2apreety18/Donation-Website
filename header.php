<!DOCTYPE html>
<html>
    <head>
        <title>Simple CRUD</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    </head>
    <body>

         <!--Navbar-->
  <nav class="navbar navbar-default navbar-fixed-top" style="background-color: #ffffff";>
  <div class="container-fluid">
    <div class="navbar-header" style="font-size: 25px">
      <a class="navbar-brand" href="home.html">Home</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#"> About </a></li>
       <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Events<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="search.html"> Flood </a></li>
            <li><a href="search.html"> Health </a></li>
            <li><a href="search.html"> Education </a></li>
          </ul>
        </li>
      <li><a href="search.html"> Organizations</a></li>
      <li><a href="#">Contact us</a></li>
    </ul>
     
    <form class="navbar-form navbar-right">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search by events / Orgs">
      </div>
      <button type="submit" class="btn btn-danger">Submit</button>
    </form>

     <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="fa fa-facebook-square" style="font-size: 25px"></span></a></li>
    </ul>


  </div>
</nav>

        <div class="container">
            <div class="row">
                <h4>Welcome, <?=$_SESSION['name'];?>&nbsp;<small><a  href="http://localhost/370web/logout.php">Logout</a></small></h4>
            </div>