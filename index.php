<?php
include 'cont.php';
if(isset($_POST['sub'])){
    $name = mysqli_real_escape_string($cont, $_POST['name']);
    $email =mysqli_real_escape_string($cont, $_POST['email']);
    $phone =mysqli_real_escape_string($cont, $_POST['phone']);
    $qualifcation =mysqli_real_escape_string($cont, $_POST['qualifcation']);
    $degree_year =mysqli_real_escape_string($cont, $_POST['degree_year']);
    $experience =mysqli_real_escape_string($cont, $_POST['experience']);
    $password =mysqli_real_escape_string($cont, $_POST['password']);
    $cpassword =mysqli_real_escape_string($cont, $_POST['cpassword']);

    $pass = password_hash($password, PASSWORD_BCRYPT);
    $cpass = password_hash($cpassword, PASSWORD_BCRYPT);
     
    $emailquery = "select * from users where email='$email'";
    $query = mysqli_query($cont,$emailquery);

    $emailcount = mysqli_num_rows($query);
    if($emailcount>0){
        ?>
            <script>
            alert("Email already exists.");
            </script>
            <?php
    }else{
        if($password === $cpassword){
            $qu = "INSERT INTO users(name, email, phone, qualifcation, degree_year, experience, password, cpassword) VALUES ('$name','$email','$phone','$qualifcation','$degree_year','$experience','$pass' ,'$cpass')";
            $iquery = mysqli_query($cont, $qu);
            if($iquery){
                ?>
                <script>
                alert("Inserted Successful");
                </script>
                <?php
            }else{
                ?>
                <script>
                alert("No Successful");
                </script>
                <?php
            }
        }else{
            ?>
            <script>
            alert("Password are not matching");
            </script>
            <?php
        }
    }
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
 <input type="text" name="name" class="form-control" required> <br>
 <label> email: </label>
 <input type="email" name="email" class="form-control" required> <br>
 <label> phone: </label>
 <input type="text" name="phone" class="form-control" required> <br>
 <label> qualification: </label>
 <input type="text" name="qualifcation" class="form-control" required> <br>
 <label> degree year: </label>
 <input type="text" name="degree_year" class="form-control" required> <br>
 <label> total experience: </label>
 <input type="text" name="experience" class="form-control" required> <br>
 <label> password: </label>
 <input type="password" name="password" class="form-control" required> <br>
 <label> confrm password: </label>
 <input type="password" name="cpassword" class="form-control" required> <br>
 
 <button class="btn btn-success" type="submit" name="sub"> Submit </button><br>
 </div>
 <p class="text-center">Have an account? <a href="login.php">Log In</a> </p>
 </form>
 </div>
</body>
</html>