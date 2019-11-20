<?php
session_start();
include 'sql.php';
$id1=$_SESSION['abc'];
$result=mysqli_query($sql,"select id from seller where id=$id1");
while ($row=mysqli_fetch_array($result))
{
    $id2=$row['id'];
    $_SESSION['id21']=$id2;
}

?>

<!DOCTYPE html>
<html>
<head>
<title>booking</title>
<link rel="stylesheet" href="mystyle.css"
</head>
<body>
<div class="wrap">
    <h2>Book here</h2>
    <form action="" method="post">
        <input type="text" name="name" placeholder="Enter your name">
        <input type="text" name="id" value="<?php echo $id2?>">
        <input type="text" name="email" placeholder="email">
        <input type="text" name="contact" placeholder="contact">
        <input type="submit"  name="submit1" value="submit">
    </form>
</div>
<?php


include "sql.php";
if (isset($_POST["submit1"])) {
    $name = $_POST['name'];
    $id = $_POST['id'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];

    $query = "insert into booked(name,id,email,contact) values ('$name','$id','$email','$contact')";
    mysqli_query($sql, $query);
}
?>

</body>
</html>