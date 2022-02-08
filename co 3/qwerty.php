<?php
$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "qwerty";
$connection = mysqli_connect($localhost,$username,$password,$dbname);
if(isset($_POST['submit']))
{

    $name = $_POST['name'];
    $phone = $_POST['phno'];
    

    if($connection)
    {
       $sql = "insert into userinfo(name,phno) values ('$name','$phone');"; 
    }
    if(mysqli_query($connection,$sql))
    {
        echo "successfully inserted";
    }
}

?>