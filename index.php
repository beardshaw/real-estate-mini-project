<?php
session_start();
?>
<!DOCTYPE html>
<html lang="eng" xmlns="http://www.w3.org/1999/html">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="UTF-8">
    <title>Real Estate</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="upload/bootstrap.css">
    <link rel="stylesheet" href="popup.css">
    <link rel="stylesheet" href="bootstrap.theme.min.css">
    <link rel="stylesheet" href="w3school.css">
    <link rel="stylesheet" href="main.css">
    <script src="jquery-3.4.1.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="main.js"></script>

</head>

<body>
<div class="default-header c" >
    <div class="menutop-wrap ">
        <div class="menu-top container">
            <div class="d-flex justify-content-end align-items-center">
                <ul class="list">
                    <li><a href="admin.html" class="flex-right">Admin Login</a> </li>
                    <li><a onclick="document.getElementById('sellloginpopup').style.display='block'">Sell Property</a></li>
                    <li><a onclick="document.getElementById('loginpopup').style.display='block'">Login/Register</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div id="loginpopup" class="modalbackground">
        <form class="modalcontent animate" action="" method="post">
            <div class="imgcontainer">
                <span onclick="document.getElementById('loginpopup').style.display='none'" class="close" title="Close Popup">&times;</span>
                <img src="img/b1.jpg" alt="avatar" class="avatar">
                <h1 style="text-align: center">Login details</h1>
            </div>
            <div class="container">
                <input type="text" placeholder="Enter Username" id=uname name="uname">
                <input type="password" placeholder="Enter Password" id=pass name="pass">
                <button name="submit" id="submit" type="submit">Login</button>
                <button type="button" onclick="document.getElementById('registerpopup').style.display='block'">Register</button>
                <a style="text-decoration: none;float: right;margin-right: 34px;margin-top: 10px;">Forgot Password?</a>
            </div>
        </form>
    </div>
    <div id="registerpopup" class="modalbackground">
        <form class="modalcontent animate" action="insert.php" method="post">
            <div class="imgcontainer">
                <span onclick="document.getElementById('registerpopup').style.display='none'" class="close" title="Close Popup">&times;</span>
                <img src="img/b2.jpg" alt="avatar" class="avatar">
                <h1 style="text-align: center">Registration</h1>
            </div>
            <div class="container ">
                <input type="text" placeholder="Enter Username" required id=rname name="rname">
                <input type="password" placeholder="Enter Password" required id=rpass name="pass">
                <input type="email" placeholder="Enter Email" required id=rmail name="email">
                <button type="submit">Register</button>
            </div>
        </form>
    </div>

    <div id="sellloginpopup" class="modalbackground">
        <form class="modalcontent animate" action="" method="post">
            <div class="imgcontainer">
                <span onclick="document.getElementById('sellloginpopup').style.display='none'" class="close" title="Close Popup">&times;</span>
                <img src="img/b1.jpg" alt="avatar" class="avatar">
                <h1 style="text-align: center">Login details</h1>
            </div>
            <div class="container">
                <input type="text" placeholder="Enter Username" id=uname name="uname">
                <input type="password" placeholder="Enter Password" id=pass name="pass">
                <button name="ssubmit" id="ssubmit" type="submit">Login</button>
                <a style="text-decoration: none;float: right;margin-right: 34px;margin-top: 10px;">Forgot Password?</a>
            </div>
        </form>
    </div>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <a class="navbar-brand" href="#">Real Estate</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="booked.php">Booked</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="#">About
                </a>

            </li>
            <li class="nav-item">
                <a class="nav-link " href="#" >Contact</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container" style="margin: 15px">
    <br/>
    <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-8">
            <form  action="search.php" method="post" class="card card-sm">
                <div class="card-body row no-gutters align-items-center">
                    <div class="col-auto">
                        <i class="fas fa-search h4 text-body"></i>
                    </div>
                    <div class="col">
                        <input class="form-control form-control-lg form-control-borderless" name="location" type="search" placeholder="search">
                    </div>
                    <div>
                         <button type="submit" name="search" value="search">Search</button>
                    </div>
                </div>
            </form>
        </div>
<br/>
<br/>
<br/>
    </div>
</div>
    <div class="w3-content w3-display-container">

        <div class="w3-display-container mySlides">
            <img src="img/service-bg.jpg" style="width: 100%">
            <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-black">
                French Alps
            </div>
        </div>

        <div class="w3-display-container mySlides">
            <img src="img/uploadheader-bg.jpg" style="width:100%">
            <div class="w3-display-bottomright w3-large w3-container w3-padding-16 w3-black">
                Northern Lights
            </div>
        </div>

        <div class="w3-display-container mySlides">
            <img src="img/header-bg.jpg" style="width:100%">
            <div class="w3-display-topleft w3-large w3-container w3-padding-16 w3-black">
                Beautiful Mountains
            </div>
        </div>


        <button class="w3-button w3-display-left w3-black" onclick="plusDivs(-1)">&#10094;</button>
        <button class="w3-button w3-display-right w3-black" onclick="plusDivs(1)">&#10095;</button>

    </div>

    <script>
        var slideIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > x.length) {slideIndex = 1}
            x[slideIndex-1].style.display = "block";
            setTimeout(carousel, 2000); // Change image every 2 seconds
        }
    </script>
    <section class="testomial-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-10 header-text">
                    <h1>Feedback from our real clients</h1>
                    <p>
                        It won’t be a bigger problem to find one video game lover in your neighbor. Since the introduction of Virtual Game,
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="active-testimonial-carusel">
                    <div class="single-testimonial item">
                        <img class="mx-auto rounded-circle" src="img/t1.png" alt="">
                        <p class="desc">
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector,
                            hardware and more. laptop
                        </p>
                        <h4>Helena Phillips</h4>
                        <p>
                            CEO at Facebook
                        </p>
                    </div>
                    <div class="single-testimonial item">
                        <img class="mx-auto rounded-circle" src="img/t2.png" alt="">
                        <p class="desc">
                            It won’t be a bigger problem to find one video game lover in your neighbor. Since the introduction of Virtual Game, it has
                            been achieving great heights so far.
                        </p>
                        <h4>Cordelia Barton</h4>
                        <p>
                            CEO at Twitter
                        </p>
                    </div>
                    <div class="single-testimonial item">
                        <img class="mx-auto rounded-circle" src="img/t3.png" alt="">
                        <p class="desc">
                            About 64% of all on-line teens say that do things online that they wouldn’t want their parents to know about. 11% of all
                            adult internet users visit dating websites.
                        </p>
                        <h4>Carrie Reese</h4>
                        <p>
                            CEO at Google
                        </p>
                    </div>
                    <div class="single-testimonial item">
                        <img class="mx-auto rounded-circle" src="img/t1.png" alt="">
                        <p class="desc">
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector,
                            hardware and more. laptop
                        </p>
                        <h4>Helena Phillips</h4>
                        <p>
                            CEO at Facebook
                        </p>
                    </div>
                    <div class="single-testimonial item">
                        <img class="mx-auto rounded-circle" src="img/t2.png" alt="">
                        <p class="desc">
                            It won’t be a bigger problem to find one video game lover in your neighbor. Since the introduction of Virtual Game, it has
                            been achieving great heights so far.
                        </p>
                        <h4>Cordelia Barton</h4>
                        <p>
                            CEO at Twitter
                        </p>
                    </div>
                    <div class="single-testimonial item">
                        <img class="mx-auto rounded-circle" src="img/t3.png" alt="">
                        <p class="desc">
                            About 64% of all on-line teens say that do things online that they wouldn’t want their parents to know about. 11% of all
                            adult internet users visit dating websites.
                        </p>
                        <h4>Carrie Reese</h4>
                        <p>
                            CEO at Google
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>About Us</h6>
                        <p>
                            A home is a cherished memory that lasts forever, it is where the walls embrace memories,
                            the ceilings shelter love and laughter, where the quiet corners offer a much-needed pause
                            and life itself becomes a reason to celebrate.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>Newsletter</h6>
                        <p>Stay update with our latest</p>
                        <div class="" id="mc_embed_signup">
                            <form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                  method="get" class="form-inline">
                                <div class="d-flex flex-row">
                                    <input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '"
                                           required="" type="email">

                                    <button class="click-btn btn btn-default"><i class="lnr lnr-arrow-right" aria-hidden="true"></i></button>
                                    <div style="position: absolute; left: -5000px;">
                                        <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                                    </div>
                                </div>
                                <div class="info"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget mail-chimp">
                        <h6 class="mb-20">Instragram Feed</h6>
                        <ul class="instafeed d-flex flex-wrap">
                            <li><img src="img/i1.jpg" alt=""></li>
                            <li><img src="img/i2.jpg" alt=""></li>
                            <li><img src="img/i3.jpg" alt=""></li>
                            <li><img src="img/i4.jpg" alt=""></li>
                            <li><img src="img/i5.jpg" alt=""></li>
                            <li><img src="img/i6.jpg" alt=""></li>
                            <li><img src="img/i7.jpg" alt=""></li>
                            <li><img src="img/i8.jpg" alt=""></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>Follow Us</h6>
                        <p>Let us be social</p>
                        <div class="footer-social d-flex align-items-center">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-behance"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


<?php
session_start();
    if(isset($_POST['submit']))
    {
        $uname=$_POST['uname'];
        $pass=$_POST['pass'];
        include 'sql.php';
        $str="select * from details where username='$uname' and password='$pass' and ActiveFlag=1";
        $res=mysqli_query($sql,$str);
        if(mysqli_num_rows($res)>0)
        {
            $_SESSION['n']=$uname;
            echo "<script>alert('login success');window.location.href='image.php';</script>";
        }
        else
        {
            echo "<script>alert('login not successful')</script>";
        }
}
if(isset($_POST['ssubmit']))
{
$uname=$_POST['uname'];
$pass=$_POST['pass'];
include 'sql.php';
$str="select * from details where username='$uname' and password='$pass' and ActiveFlag=1";
$res=mysqli_query($sql,$str);
if(mysqli_num_rows($res)>0)
echo "<script>alert('login success');window.location.href='sell.php';</script>";
else
echo "<script>alert('login not successful')</script>";
}

?>
</body>

</html>