<?php

include('connect.php');


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <!--font awesome-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
	
  <!--animate css-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Menu | Baba Ka Dhaba</title>
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Odibee+Sans&display=swap" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Odibee+Sans&display=swap" rel="stylesheet"> 
	<style type="text/css">
 .grid-item{
    width:30% !important ;
    padding: 10px !important;
    margin: 10px !important; 
    
 

</style>

  </head>
  <body>
  <nav class="navbar navbar-expand-lg  fixed-top" style="background:rgba(0,0,0,0.5)" >
  <div class="container">
  <a class="navbar-brand" href="index.php"><h2 style="font-family: 'Odibee Sans', cursive;color:white"><span style="color:#ff9800">#</span>Baba<span style="color:#ff9800">Ka</span>Dhaba</h2></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fa fa-bars" aria-hidden="true"></i>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent"style="background:rgba(0,0,0,0.5)" >
    <ul class="navbar-nav ml-auto text-center">
     <li class="nav-item active">
        <a class="nav-link" href="index.php">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="best-restaurant-in-barasat.php">Our Journey</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="our-menu.php">Our Menu</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="book-your-table.php">Book a Table</a>
      </li>
     
    </ul>
    </div>
  </div>
</nav>
  <div class="our-menu">
  <div class="container " align="center">
<br>
      <div class="filter " align="center">
     
        <button data-name='*' class="btn bt">All</button>
        <button data-name='.starter' class="btn bt">Starter</button>
        <button data-name='.veg' class="btn bt">Veg</button>
        <button data-name='.non-veg' class="btn bt">Non-Veg</button>
        
      </div><br>
     
	 <div class="container " align="center">
	 <div class="row grid" >
	 <?php
	 $result=mysqli_query($con,"select * from product where product_category='st'");
             
                 while($row=mysqli_fetch_array($result))
				 {
					 
					 
                  ?>
	 
	 <div class="col-lg-4 col-md-4 col-12  grid-item starter"><img src="admin/<?php echo $row['product_image'];?>" class="img-responsive img-thumbnail animated swing" style="width:170px"></div>
	 
	 <?php
	 
				 }
	 ?>
	 
	 <?php
	 $result=mysqli_query($con,"select * from product where product_category='veg'");
             
                 while($row=mysqli_fetch_array($result))
				 {
					 
					 
                  ?>
	 <div class="col-lg-4 col-md-4 col-12 grid-item veg"><img src="admin/<?php echo $row['product_image'];?>" class="img-responsive img-thumbnail animated swing" style="width:170px"></div>
	 
	  <?php
	 
				 }
	 ?>
	 <?php
	 $result=mysqli_query($con,"select * from product where product_category='non'");
             
                 while($row=mysqli_fetch_array($result))
				 {
					 
					 
                  ?>
	 
	 
	 <div class="col-lg-4 col-md-4 col-12 grid-item non-veg"><img src="admin/<?php echo $row['product_image'];?>" class="img-responsive img-thumbnail animated swing" style="width:170px"></div>
	  <?php
	 
				 }
	 ?>
	 <div>
	 </div>

    
  </div>
</div>
 <footer>
<div class="container" align="center">
<div class="row">
<div class="col-md-6">
<h2 style="font-family: 'Odibee Sans', cursive;color:black"><span style="color:#ff9800">#</span>Baba<span style="color:#ff9800">Ka</span>Dhaba</h2>
<p style="font-family: 'Odibee Sans', cursive;color:black"><q>If you are thinking about Tandoori food. Baba Ka Dhaba is there to serve you best. Not only you can enjoy excellent ambience in our Pind and dine out with your beloved ones, you can also avail our Take Away/ Home Delivery facilities.</q></p>
<br>

</div>

<div class="col-md-6 ">

</div>

</div>
<div>
<div class="text-center">
<p style="font-family: 'Odibee Sans', cursive;color:black">&copy; 2020 All rights reserved BabaKaDhaba. Developed By s.paul</p>

</div>
</footer>




 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="isotope.pkgd.min.js"></script>
    <script type="">
     var $grid= $('.grid').isotope({
        itemSelector: '.grid-item',
       layoutMode: 'fitRows'

      });

     $('.filter button').on("click", function(){
       var value = $(this).attr('data-name');
       $grid.isotope({
      filter: value
     });

      
     })




     
    </script>
  </body>
</html>