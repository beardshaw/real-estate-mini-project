<?php
$username=$_POST['rname'];
$password=$_POST['pass'];
$email=$_POST['email'];

if(!empty($username)|| !empty($password) || !empty($email))
{
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "real_estate";
    $con = new mysqli($host,$user,$pass,$db);
    $select="select email from details where email = ? limit 1";
    $insert="insert into details(username,password,email,ActiveFlag) values(?,?,?,1)";
    $stmt =$con->prepare($select);
    $stmt->bind_param("s",$email);
    $stmt->execute();
    $stmt->bind_result($email);
    $stmt->store_result();
    $rnum = $stmt->num_rows;

    if($rnum==0)
    {
        $stmt->close();

        $stmt = $con->prepare($insert);
        $stmt->bind_param("sss",$username,$password,$email);
        $stmt->execute();
        echo "<script>alert('Registered Successfully')</script>";
    }
    else{
        echo "email exists";
    }
    $stmt->close();
    $con->close();
}else{
    echo "All fields are required ";
    die();
}
?>

