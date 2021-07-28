<?php
    session_start();

    include('server.php');

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "คุณต้องทำการ Login ก่อน";
    header('location: Login.php');
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('location: Login.php');
}

?>

<html leng="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cooking Kung </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="Style.css">
    <link href="https://fonts.googleapis.com/css2?family=Grandstander:ital@1&display=swap" rel="stylesheet">
    <!-- <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script> -->

</head>



<body>

    <?php include('tample.php'); ?>

    <div class="content">

        <!-- // เซ็คข้อความ ////////////////////////////////////////////////////////// -->
        <?php if (isset($_SESSION['success'])) : ?>
            <div class="success">
                <h3>
                    <?php
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
        <!-- //////////////////////////////////////////////////////////////////////// -->

        <!-- // ------------------------------------------------------------------------
        // เช็ตการ Login
        // ------------------------------------------------------------------------ -->
        <?php if (isset($_SESSION['username'])) : ?>
            <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
            <p><a href="index.php?logout='1'" style="color: red;">Logout</a></p>
        <?php endif ?>

    </div>

    <div>
        <img src="image/4.jpg" width="100%" height="400">
    </div>

    <br>
    <div class=" indexbackgroundimage">
        <div class="container01">
            <h3 style="text-align: center;">เมนูแนะนำ</h3>
            <br>

            <div class="row">

                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <a href="menuFriedrice.php">
                            <img src="image/Fried rice.jpg" while="100%" height="225" class="card-img-top">

                            <div class="card-body">
                                <p class="card-text">ข้าวผัดไข่ จานอร่อยแบบง่าย ๆ ส่วนผสมน้อยกลิ่นหอมฉุย</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <a href="menuranda.php">
                            <img src="image/radna1.jpg" while="100%" height="225" class="card-img-top">

                            <div class="card-body">
                                <p class="card-text">ราดหน้ารวมมิตร จานเดียวเครื่องแน่นอิ่มท้องจนหยดสุดท้าย</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <a href="Vegetarianfood_001.php">
                            <img src="image01/VF001.jpg" while="100%" height="225" class="card-img-top">

                            <div class="card-body">
                                <p class="card-text">แฮกึ๊นเผือกเห็ดฟางเจ หอม กรอบ อร่อย ไร้เนื้อสัตว์</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <a href="Healthyfood_001.php">
                            <img src="image01/HF001.jpg" while="100%" height="225" class="card-img-top">

                            <div class="card-body">
                                <p class="card-text">น้ำพริกเห็ดนางฟ้า ไข่ต้มยางมะตูม แคลอรีเบา ๆ เพื่อสุขภาพ</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <a href="Healthyfood_002.php">
                            <img src="image01/HF002.jpg" while="100%" height="225" class="card-img-top">

                            <div class="card-body">
                                <p class="card-text">ปลากะพงย่างซอสมิโซะ กลิ่นหอมเย้ายวนสไตล์ญี่ปุ่น</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <a href="dessert_05.php">
                            <img src="image01/DS005.jpg" while="100%" height="225" class="card-img-top">

                            <div class="card-body">
                                <p class="card-text">หม้อแกงไข่ สูตรขนมไทยโบราณหอมหวานอร่อยนุ่มทำง่าย</p>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>



</body>

</html>