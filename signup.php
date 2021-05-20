<?php

if(empty($_POST))
{
    header("Location:account.html");
}





$conn = mysqli_connect("localhost", "root", "" , "store-login");

/*if($conn)
{
    echo "Connected";
}
else{
    echo "error".mysqli_connect_error();
}*/

$query = "insert into registration(firstname,lastname,email,password,number) values('".$_POST['fname']."','".$_POST['sname']."','".$_POST['email']."','".$_POST['pass']."','".$_POST['mobile']."')";

if(mysqli_query($conn, $query))
{
    echo "Successfully data enter";
}
else
{
    echo "Error".mysqli_error($conn);
}




?>