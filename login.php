<?php
if(empty($_POST))
{
    header("Location:home.html");
}
if($_SERVER['REQUEST_METHOD'] =='POST')
    {    
    
        $conn = mysqli_connect("localhost", "root", "" , "store-login");
        $query= "SELECT * FROM registration WHERE email = '".$_POST['email']."' AND password = '". $_POST['pass']."' ";
        
        $result = mysqli_query($conn,$query);
        $count  = mysqli_num_rows($result);
        if($count==1)
        {
            ?>
<script>
alert('Successfully Login!!!');
location.replace('home.html');
</script>

<?php    
            
           
        }
        else
        {
?>
<script>
alert('UserId or Password wrong!!!');
location.replace('login.html');
</script>

<?php
        }
    }
?>