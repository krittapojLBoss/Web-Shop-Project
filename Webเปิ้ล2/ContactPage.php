<?php
include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="ContactPage2.css">
    <script src=https://ajax.googleapis.com/ajax/libs/jQuery/3.5.1/jQuery.min.js></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>
    <div class="container">
        <div class="ContactPage">
            <div class="ContactLayout">
            <div class="NavLayout fixed-top">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="navbar-brand">
                            <img src="img/168461934_3710578675684641_9178112214175156285_n.jpg" alt="">
                            <p>bookstore</p>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item ">
                                    <a class="nav-link" href="Homepage.php">Home</a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="ContactPage.php">Contact</a>
                                </li>
                            </ul>
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModal">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="Signout.php">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Profile</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form class="LoginDetail" method="post" action="UbdateProfile.php">
                                <div class="modal-body">
                                    <?php
                                    session_start();
                                    $id = $_SESSION['id'];
                                    $sql = "select * from customer where ID_Customer = '$id'";
                                    $result = $conn->prepare($sql);
                                    $result->execute();
                                    $fetch = $result->fetchAll(PDO::FETCH_ASSOC);
                                    $output = "";
                                    foreach ($fetch as $row) {
                                        $output .= "<div class=form-group InputFName>";
                                        $output .= "<label for=InputFName>ชื่อจริง</label>";
                                        $output .= "<input type=text class=form-control id=InputFName name=FirstName value=" . $row['FirstName'] . " >";
                                        $output .= "</div>";
                                        $output .= "<div class=form-group InputLName>";
                                        $output .= "<label for=InputLName>นามสกุล</label>";
                                        $output .= "<input type=text class=form-control id=InputLName name=LastName value=" . $row['LastName'] . ">";
                                        $output .= "</div>";
                                        $output .= "<div class=form-group InputNPhone>";
                                        $output .= "<label for=InputNPhone>เบอร์โทร</label>";
                                        $output .= "<input type=tel class=form-control id=InputNPhone name=Phone value=" . $row['NumberPhone'] . ">";
                                        $output .= "</div>";
                                        $output .= "<div class=form-group InputUser>";
                                        $output .= "<label for=InputUserName>Username</label>";
                                        $output .= "<input type=text class=form-control id=InputUserNameRg value=" . $row['Username'] . " disabled >";
                                        $output .= "</div>";
                                        $output .= "<div class=form-group InputPass>";
                                        $output .= "<label for=InputPassWord>Password</label>";
                                        $output .= "<input type=text class=form-control id=InputPassWordRg  name=PassWord value=" . $row['Password'] . ">";
                                        $output .= "</div>";
                                    }
                                    echo $output;
                                    ?>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="Content">
                    <div class="container-fluid">
                        <div class="ContentLayout row mx-0">
                            <div class="col-lg-4 col-sm-12 Mapinfo">
                                <p><strong>ร้านตั้งอยู่ที่ : </strong>หอเเตงโม 91 หมู่ 1 ตำบลคลองหก อำเภอคลองหลวง
                                    จังหวัดประปทุมธานี 12120</p>
                                <p><strong>เบอร์โทรติดต่อ : </strong>0957129286</p>
                                <p><strong>นักศึกษา : </strong>น.ส.ธนัชญา เลี่ยมทอง</p>
                                <p><strong>รหัสนักศึกษา : </strong>116210906082-9</p>
                            </div>
                            <div class="col-lg-8 col-sm-12 Map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15482.489278860457!2d100.7334223!3d14.0403876!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5f355c193833877f!2z4LmB4LiV4LiH4LmC4Lih4LmB4Lih4LiZ4LiK4Lix4LmI4LiZ!5e0!3m2!1sth!2sth!4v1617794552287!5m2!1sth!2sth" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                            <div class="col-lg-12 col-sm-12 Vdo">
                                <h1 class="py-4">วีดีโอสอนการใช้งานเว็บไซต์</h1>
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/xd4lzWbqQX0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="Footer">
                    <div class="FooterLayout">
                        <div class="FooterSocial">
                            <div class="facebook SC">
                                <i class="fab fa-facebook-square"></i>
                                <a href="https://www.facebook.com/profile.php?id=100010127079330">Facebook ของร้าน</a>
                            </div>
                            <div class="instagrame SC">
                                <i class="fab fa-instagram"></i>
                                <a href="https://www.instagram.com/lllllllll.l.l.llllllllllll/?fbclid=IwAR15PDo8nuJn9gsVZK4oZwsD-b6ehTpZX6_Z4iNakPQ5slOSjnqmXBx7aIE">instagram ของร้าน</a>
                            </div>
                            <div class="Phone SC">
                                <i class="fas fa-phone-square"></i>
                                <a href="">0957129286</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>