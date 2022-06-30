<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap 4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- Font Awesome for loader -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <!-- Jquery Library  -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

</head>
<body>
   
 <div class="container">
 <div class="col-lg-12">
 <br><br>
 <h1 class="text-success text-center" >Display Table Data</h1>
 <br>
 <table  id="data" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> Id </th>
 <th> Name </th>
 <th> Email</th>
 <th> Phone</th>
 <th> Qualificatin</th>
 <th> Degree Year</th>
 <th> Experience</th>
 <th> Password</th>
 <th> Delete </th>
 <th> Update </th>

 </tr >

 <?php
include 'cont.php'; 
$qu = "select * from users ";

$query = mysqli_query($cont,$qu);

while($re = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td> <?php echo $re['id'];  ?> </td>
 <td> <?php echo $re['name'];  ?> </td>
 <td> <?php echo $re['email'];  ?> </td>
 <td> <?php echo $re['phone'];  ?> </td>
 <td> <?php echo $re['qualifcation'];  ?> </td>
 <td> <?php echo $re['degree_year'];  ?> </td>
 <td> <?php echo $re['experience'];  ?> </td>
 <td> <?php echo $re['password'];  ?> </td>
 <td> <button class="btn-danger btn"> <a href="delete.php?id=<?php echo $re['id']; ?>" class="text-white"> Delete </a>  </button> </td>
 <td> <button class="btn-primary btn"> <a href="update.php?id = <?php echo $re['id']; ?>" class="text-white"> Update </a> </button> </td>

 </tr>

 <?php 
 }
  ?>
 
 </table>  

 </div>
 </div>

 <script type="text/javascript">
 $(document).ready(function(){
 $('#data').DataTable();
 }) 
 </script>
</body>
</html>
