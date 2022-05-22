<?php

$nume = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$address = $_POST["address"];
$profession = $_POST['profession'];
$institution = $_POST["institution"];
$graduation = $_POST["date"];
$education = $_POST["education"];
$job = $_POST["jobname"];
$startdate = $_POST["startdate"];
$enddate = $_POST["enddate"];
$city = $_POST["city1"];

$connection = new mysqli('localhost','root','','profiles');

$sql = "INSERT INTO registration(nume,email,phone,address,profession,institution,graduation,education,job,startdate,enddate,city)
        VALUES ('$nume','$email','$phone','$address','$profession','$institution','$graduation','$education','$job','$startdate','$enddate','$city')";

if ($connection->query($sql)===true){
    echo "Data inserted";

}else{
    echo "Error:".$sql."<br>".$connection->error;
}
if (isset($_POST["save1"])){
    header('Location:view.php');
}
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<body>
<form name="form" method="post" action="">
    <br><button  name="save1">Open table with database</button>
</form>
</body>
</html>
