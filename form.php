<?php
$server="localhost";
$user="root";
$pass="";
$dbname="form";

$conn=mysqli_connect($server,$user,$pass,$dbname);

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        
        $a = $_POST['name'];
        $b = $_POST['email'];
        $c = $_POST['department'];
        $d = $_POST['feedback'];

    $query= "INSERT INTO `details`(`Name`, `E-mail`, `Department`, `Feedback`) VALUES ('$a','$b','$c','$d')";

    mysqli_query($conn,$query) or die("query failed");

    echo"<script>alert('data submitted');</script>";
    header("refresh:1;url=index.php");
    }

  
?>