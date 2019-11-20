<?php
include 'sql.php';
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $pass=$_POST['pass'];
    $str="select * from admin where name='$name' and pass='$pass' and ActiveFlag=1";
    $res=mysqli_query($sql,$str);
    if(mysqli_num_rows($res)>0)
        echo "<script>alert('login success');window.location.href='image.php';</script>";
    else
        echo "<script>alert('login not successful')</script>";
}
