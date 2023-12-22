<?php
$username = "root";
$password = "";
$server = 'localhost';
$db = 'health';
$con = mysqli_connect($server,$username,$password,$db);
/** 
if($con){
    ?>
    <script>
      alert('connection successfull');
    </script>
    <?php
}
else{
    ?>
    <script>
    alert('connection failed');
    </script>
    <?php
}
**/
?>