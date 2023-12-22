<?php
  session_start();
include 'connection.php';
 if(isset($_POST['submit'])){
   $user=$_POST['usr'];
   $password=$_POST['psw'];
   $query = " select * from fitness where username='$user' && password='$password' ";
   $data = mysqli_query($con,$query);
   $total = mysqli_num_rows($data);
   if($total==1){
        $_SESSION['user_name']=$user;
       echo 'login successful';
       ?>
       <script>
       location.replace('profile.php');
       </script>
       <?php
   }
   else{
       echo 'login failed';
   }
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
  background-color: dodgerblue;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>
</head>
<body>

<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" style="max-width:500px;margin:auto">
  <h2>Register Form</h2>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Username" name="usr" v>
  </div>
  
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="psw">
  </div>

  <button type="submit" name="submit" class="btn">Login</button>
  Do you not have acount?please sign up<button type="btn btn-info"><a href="signup.php">Sigu up</a></button>
</form>

</body>
</html>
