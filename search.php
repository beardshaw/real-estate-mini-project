

<!DOCTYPE html>
<html>
<head>
    <title>Image display</title>
    <style type="text/css">

    </style>
</head>
<body>

<?php
include 'sql.php';
if(isset($_POST['search'])){
    $location=$_POST['location'];
    $querry="SELECT * FROM seller where location='$location'";
    $result=mysqli_query($sql,$querry);
    while ($row=mysqli_fetch_array($result)){

        echo"<img src='upload/".$row['image']."' width=200px>";
        echo "<p >".$row['name']."</p>";
        echo "<p>".$row['contact']."</p>";
        echo "<p>".$row['email']."</p>";
        echo "<p>".$row['location']."</p>";
        echo "<button type='submit' name='book' value='book'></button>";


        echo "<br/>";
    }


}
?>

</body>
</html>