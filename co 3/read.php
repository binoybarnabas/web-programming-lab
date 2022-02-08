<?php
$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "qwerty";
$connection = mysqli_connect($localhost,$username,$password,$dbname);
if(isset($_POST['submit']))
{
    if($connection)
    {
      
       $sql1 = "select * from userinfo;";
    }
    $updated = mysqli_query($connection,$sql);
    $data = mysqli_query($connection,$sql1);
    if(mysqli_num_rows($data) > 0)
    {
        while($row = mysqli_fetch_assoc($data))
        {
            echo "name:".$row['name']." "."ph no".$row['phno']."<br>";
        }
    }
    else{
    echo "saanam illa";
    }
}
?>