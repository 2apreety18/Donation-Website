<?php
session_start();
if (isset($_SESSION['login']) && $_SESSION['login']) {
    header('Location:http://localhost/370web/');
}
?>







<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

                     <!-- Bootstrap -->
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="jquery/parallax.min.js"></script>

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                       <!-- Carousel-->
      <script language="JavaScript" type="text/javascript">
        $(document).ready(function(){
          $('.carousel').carousel({
            interval: 1000
          })
        });    
      </script>  
                       <!--for empty spaces use container padding-->
      <style>
                  
       
       .navbar {
          color: #000000;
          background-color: #000000;
      }
      .sidebar{
        margin-bottom: 10px;
        background-color: lavender;
        text-align: center;
        min-height: 150px;
        border: 1px solid  #e5e5e5;
      }
      .login{
        margin-left: 10px;
        min-height: 480px;
        text-align: center;;
         background-color: #FFFAFA;
         
      }











   .prettyline {
  height: 5px;
  border-top: 0;
  background: #c4e17f;
  border-radius: 5px;
  background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
}



      </style>



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



                      

                         <!--Carousel-->
    
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators 
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol> -->

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="images/flood.jpg" alt="Los Angeles" style="width:100%;" >
        <div class="carousel-caption text-center">
          <h1>Currently Happening</h1>
          <h5> Massive flooding in bangladesh!</h5>
          <button type="button" class="btn btn-default">Go to the event</button>
        </div>
      </div>

      <div class="item">
        <img src="images/ngo.png" alt="Chicago" style="width:100%;">
        <div class="carousel-caption">
          <h1>Fundraiser of the month</h1>
          <p>TLorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>
      </div>
    
      <div class="item">
        <img src="images/flood2.jpg" alt="New York" style="width:100%; font: grey">
        <div class="carousel-caption">
          <h1>Top Rated Events</h1>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.!</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls-->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a> 
  </div>


<div class="parallax-window" data-parallax="scroll" data-image-src="/path/to/image.jpg"></div>


                 <!--buttons-->
  <div class="container text-center" style="padding: 80px 120px">

    <a href="signup.html" class="btn btn-success btn-lg"> Start Fundraising</a>
  </div>  
    





                                        <!--Summation-->

   <div class="container text-center" >
         <div class="row">
           <div class="col-xs-8">
             <div class="row">
               <div class="col-xs-12">
                 <div class="sidebar">
                   



      <!--inside the sidebar1-->


       <div class="row">
                                  <!--image part-->
          <div class="col-md-4">
          <div><a href="/w3images/nature.jpg" target="_blank"> <img src="images/sidebar1.jpg" width="100%"> </a></div> </div>
                                  <!--link part-->
          <div class="col-md-8">

          <h2>Events</h2>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.    
           </p>


          <div><a href="signup/signup.html" class="btn btn-info btn-md"> Let's have a look </a> </div></div>
      
      </div>











                 </div>
               </div>
             </div>
             <div class="row">
               <div class="col-xs-12">
                 <div class="sidebar">
                   






                <!--inside the sidebar1-->


       <div class="row">
                                  <!--image part-->
          <div class="col-md-4">
          <div><a href="/w3images/nature.jpg" target="_blank"> <img src="images/sidebar2.jpg" width="100%"> </a></div> </div>
                                  <!--link part-->
          <div class="col-md-8">
          <h2>Organizations</h2>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.     
           </p>

          <div><a href="signup/signup.html" class="btn btn-primary btn-md"> Let's See</a> </div></div>
      
      </div>



                 </div>
               </div>
             </div>
           </div>
           <div class="col-xs-4">
            
             <div class="login">
               

             <form action="#" method="POST"> 
               <br>
            <h4> Already have an account?</h4>
            <hr class="prettyline">
              <br> <br> 
           <!-- Text input-->
       <div class="form-group">
           <label class="col-md-4 control-label">Email</label>  
           <div class="col-md-12 inputGroupContainer">
           
          <input name="username" placeholder="E-Mail Address or username" class="form-control"  type="text">
       </div>
             <br> <br> <br>
        <div class="form-group">
           <label class="col-md-4 control-label" text-align="left" >Password</label>  <br>
           <div class="col-md-12 inputGroupContainer">

          <input name="password" placeholder="Password" class="form-control"  type="text">
       </div>

            <br> <br>



      </div>
     </div>      
     <br> <br>
            <label class="checkbox">
        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me </label>


            <input type="submit" value="  Log In " class="btn btn-default btn-lg" >
        </form>

             </div>
           </div>
         </div>                               
    </div>

<div class="parallax-window" data-parallax="scroll" data-image-src="images/eventflood.jpg"></div>







    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    </body>
</html>







<?php
if ($_POST && isset($_POST['username']) && isset($_POST['password'])) {
    extract($_POST);
    include_once 'db.php';
    $email = $link->real_escape_string($username);
    $password = $link->real_escape_string($password);
   // $password = md5($password);

    $sql = "SELECT * FROM managers WHERE email='$email' AND password='$password'  ";

    $result = mysqli_query($link, $sql);

    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();
        $_SESSION['login'] = true;
        $_SESSION['name'] = $data['name'];
        header('Location:http://localhost/370web');
    } else {
        echo 'Login Failed.';
    }
}
?>