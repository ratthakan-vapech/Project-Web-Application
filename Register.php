<?php
session_start();
include('server.php');
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cooking Kung Register </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="Style.css"> -->
    <link rel="stylesheet" href="Style.css">
</head>

<body>

    <?php include('tample.php'); ?>

    <!-- <form action="register_db.php" method="post"> -->
    <div class="boxregistermove">
        <div class="formRegister">
            <!-- main_article formLogin -->
            <form action="register_db.php" method="post">

                <?php include('errors.php'); ?>

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
                <div>
                    <!-- กำหนดลงข้อมูลใน data best -->
                    <h1 style="text-align: center; padding:0.5%">Register</h1>

                    <br>
                    <div class="form-row-register">
                        <!-- <div class="boxregister"></div> -->

                        <div class=" input-group">
                            <label for="username"></label>
                            <input type="text" class="form-control" placeholder="บัญชีผู้ใช้" name="username" require>
                        </div>
                        <!-- </div> -->

                        <br>
                        <div class="form-row-register">
                            <div class=" input-group">
                                <label for="email"></label>
                                <input type="email" class="form-control" placeholder="email" name="email" require>
                            </div>
                        </div>

                        <br>
                        <div class="form-row-register">
                            <div class=" input-group">
                                <label for="password_1"></label>
                                <input type="password" class="form-control" placeholder="รหัสผ่าน" name="password_1" require>
                            </div>
                        </div>

                        <br>
                        <div class="form-row-register">
                            <div class=" input-group">
                                <label for="password_2"></label>
                                <input type="password" class="form-control" placeholder="ยืนยันรหัสผ่าน" name="password_2" require>
                            </div>
                        </div>
                        <br>
                        <div class="input-grout">
                            <button type="submit" name="reg_user" class="btn btn-primary">ลงทะเบียน</button>
                        </div>

                        <br>
                        <P> คุณเป็นสมาชิกแล้ว <a href="Login.php">Sign in</a></P>
                    </div>
                </div>
            </form>

        </div>
    </div>
    </div>
    <!-- </form> -->

</body>

</html>