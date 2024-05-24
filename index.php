<?php
$server="localhost";
$username="root";
$password="";
$con=mysqli_connect($server,$username,$password,"us_trip");
// if (!$con){
//     die("something wrong".mysqli_connect_error()) ;
// }
// else{
//     // echo "connection successfull";
// }
$name=$_POST["name"];
$class=$_POST["class"];
$dob=$_POST["dob"];
$email=$_POST["email"];
$phone=$_POST["phone"];

$sql="insert into `trip_derails` (`name`,`class`,`dob`,`email`,`phone`) values('$name','$class','$dob','$email','$phone') ;";
$con->query($sql);
// echo "<br>";
// echo $sql;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form submissin for US Trip</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>
            Welcome To US Trip
        </h2>
        <h4>Enter your details and submit this form to confirm the participation in Trip</h4>
        <div class="row">
            <div class="col">
                <div class="form1">
                    <form action="index.php" method="post">
                        <label for="name" class="name">name :</label>
                        <input type="text" name="name" palceholder="enter name">
                        <br>
                        <label for="class">class :</label>
                        <input type="text" name="class" palceholder="enter your class">
                        <br>
                        <label for="dob" class="dob">dob :</label>
                        <input type="date" name="dob"><br>
                        <label for="emaol">email :</label>
                        <input type="email" name="email">
                        <br>
                        <label for="phone">phone</label>
                        <input type="number" name="phone">
                        <br>
                        <button class="btn-1">Submit</button>
                        <button class="btn-2">Reset</button>
    
    
    
                    </form>

                    
                </div>
               
               

            </div>
        </div>
    </div>



    
</body>
</html>


