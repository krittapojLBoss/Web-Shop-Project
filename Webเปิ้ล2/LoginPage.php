<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="LoginPage2.css">
    <script src=https://ajax.googleapis.com/ajax/libs/jQuery/3.5.1/jQuery.min.js></script>
</head>

<body>
    <div class="LoginPage">
        <div class="LoginLayout container-fluid ">
            <div class="Login px-3 py-3">
                <div class="Logo my-3">
                    <h1>Login</h1>
                </div>
                <form method="post" action="Login.php">
                    <div class="form-group InputUser pt-2">
                        <label for="InputUserName">Username</label>
                        <input type="text" class="form-control" id="InputUserName" name="UserLogin" placeholder="โปรดใส่ Username" value="">
                    </div>
                    <div class="form-group InputPass pt-2">
                        <label for="InputPassWord">Password</label>
                        <input type="password" class="form-control" id="InputPassWord" placeholder="โปรดใส่ Password" name="PassLogin">
                    </div>
                    <div class="BttInPage d-flex justify-content-around pt-4 pb-2">
                        <button type="submit" class="btn bg-success">Login</button>
                        <button type="button" class="btn bg-danger" data-toggle="modal" data-target="#exampleModal">สมัครสมาชิก</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- <div class="LoginPage container-fluid">
        <div class="row">
            <form class="LoginDetail px-4 py-4 col-lg-6 col-sm-12" method="post" action="Login.php">
                <div class="form-group InputUser pt-2">
                    <label for="InputUserName">Username</label>
                    <input type="text" class="form-control" id="InputUserName" name="UserLogin" placeholder="โปรดใส่ Username" value="">
                </div>
                <div class="form-group InputPass pt-2">
                    <label for="InputPassWord">Password</label>
                    <input type="password" class="form-control" id="InputPassWord" placeholder="โปรดใส่ Password" name="PassLogin">
                </div>
                <div class="form-check ">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <div class="BttInPage py-3 d-flex justify-content-between">
                    <button type="submit" class="btn bg-success">Login</button>
                    <button type="button" class="btn bg-danger" data-toggle="modal" data-target="#exampleModal">สมัครสมาชิก</button>
                </div>
            </form>
            <div class="Logo col-lg-6 col-sm-12">
                <img src="img/168461934_3710578675684641_9178112214175156285_n.jpg">
            </div>
        </div>
    </div> -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">เป็นสมาชิกกับเรา!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="LoginDetail w-100" method="post" action="Register.php">
                        <div class="form-group InputFName">
                            <label for="InputFName">ชื่อจริง</label>
                            <input type="text" class="form-control" id="InputFName" name="FirstName" placeholder="โปรดใส่ ชื่อจริง" value="">
                        </div>
                        <div class="form-group InputLName">
                            <label for="InputLName">นามสกุล</label>
                            <input type="text" class="form-control" id="InputLName" name="LastName" placeholder="โปรดใส่ นามสกุล" value="">
                        </div>
                        <div class="form-group InputNPhone">
                            <label for="InputNPhone">เบอร์โทร</label>
                            <input type="tel" class="form-control" id="InputNPhone" name="Phone" placeholder="โปรดใส่ เบอร์โทร" value="">
                        </div>
                        <div class="form-group InputUser">
                            <label for="InputUserName">Username</label>
                            <input type="text" class="form-control" id="InputUserNameRg" name="UserName" placeholder="โปรดใส่ Username" value="">
                        </div>
                        <div class="form-group InputPass">
                            <label for="InputPassWord">Password</label>
                            <input type="password" class="form-control" id="InputPassWordRg" placeholder="โปรดใส่ Password" value="" name="PassWord">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">สมัครสมาชิก</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="LoginPage.js"></script>
</body>

</html>