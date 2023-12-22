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

<form action="" method="POST" enctype="multipart/form-data" style="max-width:500px;margin:auto">
  <h2>Register Form</h2>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Username" name="user">
  </div>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="fullname" name="name">
  </div>
  <div class="input-container">
    <i class="fa fa-phone icon"></i>
    <input class="input-field" type="text" placeholder="number" name="num">
  </div>
  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="text" placeholder="Email" name="email">
  </div>
  
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="psw">
  </div>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
   <select class="input-field" type="text" placeholder="Category" name="cat">
   <option>Gym</option>
   <option>health</option>
   <option>yoga</option>
   </select>
  </div>
  <div class="input-container">
    <i class="fa fa-address-book-o icon"></i>
    <input class="input-field" type="text" placeholder="enter adress" name="adress">
  </div>
    <div class="input-container">
    <input type="file" id="img" name="img" value="">
    </div>

    <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="text" placeholder="about" name="about">
  </div>

  <button type="submit" name='submit' class="btn">Register</button>
</form>
</script>

</body>
</html>
<?php
 include 'connection.php';
 error_reporting(0);



 if (isset($_POST['submit'])){
     $user=$_POST['user'];
     $name=$_POST['name'];
     $num=$_POST['num'];
     $email=$_POST['email'];
     $password=$_POST['psw'];
     $category=$_POST['cat'];
     $adress=$_POST['adress'];
     $filename = $_FILES["img"]["name"];
    $tempname = $_FILES["img"]["tmp_name"];
     $folder = "images/".$filename;
     move_uploaded_file($tempname,$folder);
     $about=$_POST['about'];
    if($user!=" " && $name!=" " && $num!="" &&  $email!=" " && $password!=" " && $category!=" " && $adress!=" " && $filename!=" " && $about!=" ")
    {

  $insertquery="insert into fitness(username,name,number,email,password,cat,adress,pic,about)values('$user','$name','$num','$email','$password','$category','$adress','$folder','$about')";   
  $res=mysqli_query($con,$insertquery);
  if($res){
    echo "data inserted";
  }
}
else{
  echo "data is not inserted";
}
 }
?>
