<?php
include 'cont.php';
if(isset($_POST['sub'])){
    

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $qualifcation = $_POST['qualifcation'];
    $degree_year = $_POST['degree_year'];
    $experience = $_POST['experience'];

 $qu = "INSERT INTO `users`( `name`, `email`, `phone`, `qualifcation`, `degree_year`, `experience`) VALUES ('$name','$email','$phone','$qualifcation','$degree_year','$experience')";
 $query = mysqli_query($cont,$qu);
 header('location:disply.php');
}
?>

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
 <div class="col-lg-6 m-auto">
 
 <form method="post">
 <br><br>
 <div class="card-header bg-success">
 <h1 class="text-white text-center">  Insert Operation </h1>
 </div><br>
 <div class="card">
 <label> name: </label>
 <input type="text" name="name" class="form-control"> <br>
 <label> email: </label>
 <input type="email" name="email" class="form-control"> <br>
 <label> phone: </label>
 <input type="text" name="phone" class="form-control"> <br>
 <label> qualification: </label>
 <input type="text" name="qualifcation" class="form-control"> <br>
 <label> degree year: </label>
 <input type="text" name="degree_year" class="form-control"> <br>
 <label> total experience: </label>
 <input type="text" name="experience" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="sub"> Submit </button><br>
 </div>
 </form>
 </div>
</body>
</html>