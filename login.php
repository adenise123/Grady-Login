<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login Page </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.boostrapcdn.com/boostrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs.jquery/1.12/0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/style.css">
</head>
<body>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ( isset($_POST["uname"]) && isset($_POST["pass"])
    )
{

            //handle the posted data
            echo "handing user login now ...";
            echo "... here we could redirect or authenticate ";
            echo " and hide login form or something else" ;

        }
    }
    //error_reporting(E_ALL ^ E_NOTICE);
?>

<header>
  

    </div>
</header>

<div class="hero">
<?php
                // define variables and set to empty values
                $nameErr = $passwordErr = $websiteErr = "";
                $name = $password = $comment = $website = "";

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($_POST["name"])) {
                    $nameErr = "Name is required";
                } else {
                    $name = test_input($_POST["name"]);
                }
                // this is saying enter password if date is not entered then it will display error message//
                // otherwise print password//
                if (empty($_POST["password"])) {
                    $passwordErr = "Password is required";
                } else {
                    $password = test_input($_POST["password"]);
                }
        
                if (empty($_POST["comment"])) {
                    $comment = "";
                } else {
                    $comment = test_input($_POST["comment"]);
                }
                }

                function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
}
?>



<header class="jumbotron jumbotron-fluid">
    <div class="container">
        <div class="mt-4 p-5 bg-primary text-white rounded">
            <h1>Medicine Tracker</h1>
          
        </div>

    </div>
                            <div class="container1">
                            <form action="medicine.php" method="post">
  <div class="imgcontainer">
    <img src="img/Snip20220613_26.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
        <?
        
        php require_once 'footer.php'

?>
    </body>
    

</html>