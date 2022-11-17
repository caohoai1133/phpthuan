
<?php
$connect = mysqli_connect('localhost', 'root', '', 'login1');
mysqli_set_charset($connect, "utf8");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>

        .login {
            font-size: 50px;
            font-weight: bold;

        }

        .login_form {
            width: 300px;
            height: 550px;
            border: 2px solid black;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }

        .form-control {
            height: 40px;
            margin-top: 20px;
            border: none;
            box-shadow: 2px 2px black;
        }

        .btn {
            width: 100px;
            height: 35px;
            
            font-size: 20px;
            border: none;
            border-radius: 5px;
            transition: 0.3s;

        }

        .btn:hover {
            box-shadow: 2px 2px black;
            background: #a39d9d;
        }
        .btn-register{
            text-decoration: none;
            margin-top: 20px !important;
            color: black;
        }
        .link{
            text-decoration: none;
        }
    </style>
</head>

<body>

    <form action="" method="post">
        <p>PHP Thuần </p>

        <div class="login_form">
            <div class="login">
                <h3>Register</h3>
            </div>

            <div class="">
                <div class="">
                    <div class="">
                        <input type="text" class="form-control" name="user_name_lg" placeholder="Nhập tên đăng nhập...">
                    </div>
                    <div class="form-group">

                        <input type="password" class="form-control" name="passlg" placeholder="Nhập mật khẩu..." required>
                    </div>
                    <div class="form-group">

                        <input type="password" class="form-control" name="passlg_again" placeholder="Nhập lại mật khẩu..." required>
                    </div>
                    <div class="form-group">

                        <input type="text" class="form-control" name="fullname" placeholder="nhập đầy đủ họ tên..." required>
                    </div>
                    <br>
                    <?php
                    if(isset($_POST["dangky"])){
                     $tk = $_POST["user_name_lg"];
                     $mk = $_POST["passlg"];
                     $nlmk= $_POST["passlg_again"];
                     $fullname=$_POST["fullname"];
                      if ($mk===$nlmk){
                        
                       
                         mysqli_query($connect, " insert into user (username,password,fullname) values ('$tk','$mk','$fullname')");
                            echo "<script type='text/javascript'>alert('Đăng ký thành công!');</script>";
                            setcookie("status","đăng ký thành công");  
                            header("location:login.php"); 
                    
                }
                else{
                    echo "<h style='color:red;'>" . "mật khẩu không trùng khớp!". "</h>";
                }}
                    ?>
                    <br>

                    <button type="submit" class="btn " name="dangky">Register</button>
                        <div class="btn-register">
                    <a  class="link" href="login.php">Login</a>
                </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>