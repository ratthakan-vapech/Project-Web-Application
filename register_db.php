<?php

    session_start();
    include('server.php');

    $errors = array();

    if (isset($_POST['reg_user'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);

        // เซ็ค error ///////////////////////////////////////////////////////////////////////////////////////////
        if (empty($username)) {
            array_push($errors, "คุณไม่ได้ใส่บัญชีผู็ใช้");
        }
        if (empty($email)) {
            array_push($errors, "คุณไม่ได้ใส่ E-mail");
        }
        if (empty($password_1)) {
            array_push($errors, "คุณไม่ได้ใส่รหัสผ่าน");
        }
        if ($password_1 != $password_2) {
            array_push($errors, "รหัสผ่านไม่เหมือนกัน");
        }
        ////////////////////////////////////////////////////////////////////////////////////////////////////////

        $user_check_query = " SELECT * FROM user WHERE username = '$username' AND email ='$email' ";
        $query = mysqli_query($conn, $user_check_query);
        $result = mysqli_fetch_assoc($query);
        
        // เซ็ตว่ามี user อยู่ในระบบไหม //////////////////////////////////////////////////////////////////////////////
        if ($result) {
            if ($result['username'] === $username) {
                array_push($errors, "มีชื่อผู้ใช้อยู่ในระบบแล้ว");
            }
            if ($result['email'] === $email) {
                array_push($errors, "มี E-mail อยู่ในระบบแล้ว");
            }
        }
        ///////////////////////////////////////////////////////////////////////////////////////////////////////////


        if (count($errors) == 0) {
            $password = md5($password_1);

            $sql = " INSERT INTO user (username, email, password) VALUES ('$username' , '$email' , '$password') ";
            mysqli_query($conn, $sql);

            $_SESSION['username'] = $username;
            $_SESSION['success'] = "คุณได้เข้าสู่ระบบเรียบร้อยแล้ว";
            header('location: index.php');
        } else {
            array_push($errors, "บัญชีผู้ใช้หรือรหัสผ่าน มีคนใช้แล้ว");
            $_SESSION['error'] = "บัญชีผู้ใช้หรือรหัสผ่าน มีคนใช้แล้ว";
            header("location: Register.php");
        }

    }

?>