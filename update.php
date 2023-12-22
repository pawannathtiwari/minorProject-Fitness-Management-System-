

<html>
    <head>
        <title></title>
         <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> 

<meta name="viewport" content="width=device-width, initial-scale=1">

<meta charset="utf-8">
<style>
    body{
        background-image: url(img10.jpeg);
        background-size: 100% 100%;
        height: 100%;
        width:100%;
    }
    #same{
        width: 100%;
    }
</style>
    </head>
    <body>
        <br>
        <div class="container text-warning text-center"><b>Update Your Profile Here</b></div>
         <div class="container">
         <?php
session_start();
include('connection.php');

$userprofile = $_SESSION['user_name'];
if($userprofile==true){

}else{
       header('Location: index.php');
 
}
//set variables for values

$query ="SELECT * FROM fitness WHERE username='$userprofile'";
$data =mysqli_query($con, $query);
$result = mysqli_fetch_assoc($data);

//set variables for values
$name = $result['name'];
$password = $result['password'];
$number = $result['number'];

$email= $result['email'];
$adress= $result['adress'];

//update data

  if(isset($_POST['submit'])) {
    $name2= $_POST['name2'];
    $pass2 = $_POST['pass2'];
    $number2 = $_POST['number2'];
    $email2 = $_POST['email2'];
    $add2 = $_POST['add2'];
  
   
    
     $query2 = "update fitness set name ='$name2' , password ='$pass2', number ='$number2' , email ='$email2' ,  address = '$add2' where username='$userprofile' ";
        $data2 =  mysqli_query($con, $query2);
         
         if($data2)
                {
              header('location:index.php');
        }else{
            echo "try again";
       }
      
}


?>
            
             <h1 style="text-align: center;color: white;font-weight: bold;">Update profile</h1>
              <form method="post" style="margin-top: 5px; color: white;">
                <div class="form-group">
                     <label class="text-secondary">Name: </label>
                    <input type="text" name="name2" class="form-control" value="<?php echo $name; ?> " id="same">
                </div>
                  <div class="form-group">
                       <label class="text-secondary">Password: </label>
                      <input type="password" name="pass2" class="form-control" value="<?php echo $password; ?>"id="same">
                  </div>
                  <div class="form-group">
                     <label class="text-secondary">Phone: </label>
                    <input type="int" name="number2" class="form-control" value="<?php echo $number; ?>"id="same">
                </div>
                <div class="form-group">
                     <label class="text-secondary">Email: </label>
                    <input type="email" name="email2" class="form-control" value="<?php echo $email; ?>"id="same">
                </div>
                <div class="form-group">
                     <label class="text-secondary">Address: </label>
                    <input type="adress" name="add2" class="form-control" value="<?php echo $adress; ?>"id="same">
                </div>
                <input type ="submit" name = "submit" value = "update"><br>
                </form>
            
              

         </div>
    </body>
</html>

