<?php
  session_start();
  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
    if(isset($_POST['username']))
    {
      $name=$_POST['username'];
      $password=$_POST['pwd'];
      $_SESSION['username']=$name;
      $_SESSION['pwd']=$password;

     header("Location: home.php");
      exit();
    }
  }
?>

<html>
    <head>
    <link rel="stylesheet" href="logincss.css">
    </head>
<body>
<div class="center-container">
    <div class="registration-container">
      <h2>Registration Form</h2>
      <form action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]);?>" method="post">
        <div class="form-group">
          <label for="username">Username:</label>
          <input type="text" class="form-control" id="username" name="username" >
        </div>
        <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="text" class="form-control" id="pwd" name="pwd"required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</body>

