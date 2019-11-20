<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="x-ua-compatible" >
    <link rel="stylesheet" href="bootstrap.css">
    <title></title>
    <style>
        .customselect select{
            width: 100%;
            height: 100%;
            background: none;
            border: none;
            -webkit-appearance: none;
            padding: 0 50px 0 20px;
            cursor: pointer;
        }
        .customselect .select{
            position: relative;
            background: white;
            border: 1px solid #1cbe9d;

        }

    </style>
</head>
<body style="background:linear-gradient(blanchedalmond,cyan)">
<h1>Seller </h1>
<div  style="width: 650px; margin:auto;padding:20px;border: 1px solid dodgerblue">
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group " >

        <label >Name:</label> <input type="text" class="form-control" name="name" id="name">
    </div>
    <div class="form-group">
        <label >Contact:</label>
            <input class="form-control" type="text" name="contact" id="contact">
    </div>
    <div class="form-group">
        <label >email_id:</label> <input class="form-control" type="text" name="email" id="email">
    </div>
    <div class="form-group">
        <label >Title:</label><input class="form-control" type="text" id="title" name="title">
    </div>

    <div class="form-group select">
        <label>Property Type:</label>
        <select name="type" id="type" >
            <option class="option" value="select" selected disabled hidden>Select Type</option>
            <option class="option" value="Apartment">Apartment</option>
            <option class="option" value="Houses">Houses</option>
            <option class="option" value="land">Land</option>
        </select>
    </div>
    <div class="form-group">
        <label >Location:</label> <input
                type="text" name="loc" id="loc" class="form-control">
    </div>
    <div class="form-group">
        <label >Bedroom:</label>
        <select name="bed" id="bed" class="option">
            <option value="" selected disabled hidden>No of Bedrooms</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="more">More</option>
        </select>
    </div>
    <div class="form-group">
        <label >Bathroom:</label>
        <select name="bath" id="bath" class="option">
            <option value="" selected disabled hidden>No of Bathrooms</option>
            <option value="1bat" >1</option>
            <option value="2bat">2</option>
            <option value="morebat">More</option>
        </select>
    </div>
    <div class="form-group">
        <label >Living Area:</label>
        <select name="living" id="living" >
            <option value="" selected disabled hidden>No of Living
                Area</option>
            <option value="1l">1</option>
            <option value="1l">2</option>
            <option value="1l">More</option>
        </select>
    </div>
    <div class="form-group">
        <label>Size:</label> <input type="text" class="form-control" name="size" id="size"><label>Sqr. Mts</label>
    </div>
    <div class="form-group">
        <label for="txtarea1">Description:</label><textarea class="form-control" id="desc" name="desc" rows="3" ></textarea>
    </div>

    <div class="form-group">
        <label> upload photo:</label><input class="form-control" type="file" id="file1" name="file1">
    </div>

    <button type="submit" name="submitshell" id="submitshell" class="btn btn-default">Submit</button>
</form>
</div>



</body>
</html>
<?php
$msg = "";
include "sql.php";
if(isset($_POST["submitshell"])) {
    $file = "upload/" . basename($_FILES['file1']['name']);

    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $type = $_POST['type'];
    $location = $_POST['loc'];
    $bed= $_POST['bed'];
    $bath= $_POST['bath'];
    $living= $_POST['living'];
    $size= $_POST['size'];
    $title= $_POST['title'];
    $desc= $_POST['desc'];
    $image = $_FILES['file1']['name'];

    $query = "insert into seller (name,contact,email,type,location,bed,bath,living,size,title,description,image) values ('$name','$contact','$email','$type','$location','$bed','$bath','$living','$size','$title','$desc','$image')";
    mysqli_query($sql,$query);


    if (move_uploaded_file($_FILES['file1']['tmp_name'], $file)) {
        echo "<script>alert('image inserted')</script>";
    } else {

        echo "<script>alert('there was a problem')</script>";
    }

}
?>
