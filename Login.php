<?php
session_start();
include('server.php');
?>
<html>

<head>

    <title> Cooking Kung Login </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="Style.css">
    <link href="https://fonts.googleapis.com/css2?family=Grandstander:ital@1&display=swap" rel="stylesheet">

</head>

<body>

    <?php include('tample.php'); ?>
    <form action="login_db.php" method="post">

        <?php if (isset($_SESSION['error'])) : ?>
            <div class="error">
                <h3>
                    <?php
                    echo $_SESSION['error'];
                    unset($_SESSION['error'])
                    ?>
                </h3>
            </div>
        <?php endif ?>

        <div class="boxregistermove">
            <div class="formRegister">

                <h1 style="text-align: center; padding:0.5%">Login</h1>
                <br>

                <div class="form-row-register">
                    <div class="boxregister"></div>

                    <div class="form-group input-group">
                        <label for="username"></label>
                        <input type="text" class="form-control" placeholder="บัญชีผู้ใช้" name="username" require>
                    </div>
                </div>

                <div class="form-row-register">
                    <div class="form-group input-group">
                        <label for="password"></label>
                        <input type="password" class="form-control" placeholder="รหัสผ่าน" name="password" require>
                    </div>
                </div>

                <div class="input-grout">
                    <button type="submit" name="login_user" class="btn btn-success">เข้าสู่ระบบ</button>
                </div>

                <br>
                <P> คุณยังไม่ได้สมัครสมาชิก <a href="Register.php">Sign in</a></P>


            </div>
        </div>
    </form>


</body>

</html>