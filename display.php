<html>
<head>
<title>
</title>
  <?php  include 'links.php'; ?>
</head>
<body>
<div class="main-div">
<h1>list of trainers</h1>
<div class="center-div">
<div class="table-responsive">
  <table>
     <thead>
     <tr>
     <th>id</th>
     <th>username</th>
     <th>name</th>
     <th>number</th>
     <th>email</th>
     <th>cat</th>
     <th>images</th>
     <th>update</th>
     <th>delete</th>

     </tr>
     </thead>
     <tbody>
     <?php
       include 'connection.php';
       $selectquery=" select * from fitness ";
       $query=mysqli_query($con,$selectquery);
       $nums=mysqli_num_rows($query);
     while ($res=mysqli_fetch_array($query)){
         ?>  
     <tr>
      <td><?php echo $res['id']; ?></td>
      <td><?php echo $res['username']; ?></td>
      <td><?php echo $res['name']; ?></td>
      <td><?php echo $res['number']; ?></td>
      <td><?php echo $res['email']; ?></td>
      <td><?php echo $res['cat']; ?></td>
      <td><img src="<?php echo $res['pic']; ?>" width="100" height="100"></td>
      <td><a href="update.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="bottom" title="UPDATE"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
      <td><a href="delete.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="bottom" title="DELETE"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
     </tr>
     <?php
     }
     ?>
     </tbody>
  </table>
  </div>
  </div>
  </div>
</body>
</html>