<?php
    error_reporting(E_ALL ^ E_NOTICE);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ashley's Registration Page </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.boostrapcdn.com/boostrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs.jquery/1.12/0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/style.css">



</head>


<body>



<header class="jumbotron jumbotron-fluid">
    <div class="container">
        <div class="mt-4 p-5 bg-primary text-white rounded">
            <h1>Login Medicine Information</h1>
          
        </div>

    </div>
</header>
<div class="hero">
        <div class="nav">
            <nav class="navbar navbar-expand-sm navbar-light sticky-top">
            <ul>
                <li><a href="login.php">Log Out</a></li>
            </ul>
                
            </nav>
        
        </div>


    


<table>

<form action="https://formspree.io/f/xvolnbkn" method="post" >
<div class="container1">
    <div class="row">
      <div class="col-25">
        <label for="fname" placeholder="Enter Medicine Name">Name of medicine</label>
      </div>
      <div class="col-75">
        
      <select name="name" id="name">
          <option value="name1">Atorvastatin 20MG</option>
          <option value="name2">Gabapentin 300MG</option>
          <option value="name3">Meloxicam 7.5MG</option>
          <option value="name4">Metoprolol 100MG</option>
          <option value="name5">Imipram HCL 25MG</option>
          <option value="name6">Tylenol</option>
          <option value="name7">Vitamins</option>
        </select>
      </div>
    <div class="row">
      <div class="col-25">
        <label for="date">Today's Date</label>
      </div>
      <div class="col-75">
        <select name="name" id="name">
          <option value="date1">June 23, 2022</option>
          <option value="date2">June 24, 2022</option>
          <option value="date3">June 25, 2022</option>
          <option value="date4">June 26, 2022</option>
          <option value="date5">June 27, 2022</option>
          <option value="date6">June 28, 2022</option>
          <option value="date7">June 29, 2022</option>
          <option value="date8">June 30, 2022</option>
          <option value="date9">July 1, 2022</option>
          <option value="date10">July 2, 2022</option>
          <option value="date11">July 3, 2022</option>
          <option value="date12">July 4, 2022</option>
          <option value="date13">July 5, 2022</option>
          <option value="date14">July 6, 2022</option>
          <option value="date15">July 7, 2022</option>
          <option value="date16">July 8, 2022</option>

        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="comment">Comment</label>
      </div>
      <div class="col-75">
        <textarea id="comment" name="comment" placeholder="Write something.." style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <button type="submit">Submit</button>
        <i class="fas fa-alert"></i>
      </form>
       
    </div>
 
</div>

</div>
		
</div>
</body>
</html>