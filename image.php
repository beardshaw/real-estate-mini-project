<!DOCTYPE html>
<html lang="eng">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="CodePixar">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="image.css"/>
    <title>Real Estate</title>
</head>
<body>
<?php
session_start();

include 'sql.php';
$inc=13;

$query="select * from seller";
$result=mysqli_query($sql,$query);

while($row=mysqli_fetch_array($result))
{
    echo "<div id=img_div>";
    echo "<img src='upload/".$row['image']."'>";
    echo "<div id ='img11'>";
    echo "<h3 style='font-weight:bold'>Name:".$row['name']."</h3><br/>";
    echo "<h3> Title: ".$row['title']."</h3><br/>";
    echo "<h3> Contact: ".$row['contact']."</h3><br/>";
    echo "<h3> Email: ".$row['email']."</h3><br/>";
    echo "<h3> Location: ".$row['location']."</h3><br/>";
    echo "<form action='' method='post'>";
    echo "<input name='btn_value' value='".$inc++."'hidden>";
    echo  "<input type='submit' name='btn_store'>";
    echo "</form>";
    echo "</div>";
    echo "</div>";
    if (isset($_POST['btn_store']))
    {
        $id =$_POST['btn_value'];
        $_SESSION['abc']=$id;
        echo "<script>location.href='booking.php'</script>";
    }
}
?>

</body>
</html>
