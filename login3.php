<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="main3.css">
    <title>Vlaunch login</title>
</head>

<body>
    <form method="post" action="login3.php">
        <h1>Login</h1>
        <div class="textBox">
            <input type="text" placeholder="username" name="username">
            </div>
            <div class="textBox">
            <input type="text" placeholder="password" name="password">
        </div>
        
            <input type="submit" value="Login" class="loginBtn" name="login_Btn">
            <div class="signup">
            Don't have an account ?
            <br>
            <a href="#">Sign up</a>
        </div>
    </form>
    
</body>
</html>

<?php
$conn = mysqli_connect("localhost","root","");
if(isset($_POST['login_Btn']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql="SELECT * FROM websitelogin.logindetails WHERE username='$username'";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result))
    {
        $resultPassword = $row['password'];
        if($password == $resultPassword)
        {
            header('Location:index3.html');
        }else{
            header('Location:index4.html');
        }
    }
}
?>