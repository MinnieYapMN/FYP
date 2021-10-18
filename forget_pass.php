<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->


<html>
    <head>
        <meta charset="UTF-8" content="width=device-width, initial-scale=1.0">
        <title>GO Uniform | Admin Login</title>
        <?php include "headlink.php" ?>
        <link rel="icon"  type="image/png" sizes="16×16" href="pictures/Logo2.png">
    </head>

    <style>
        body{
            background-color: #fff !important;
        }
        #login .container #login-row #login-column #login-box {
            margin-top:50px;
            margin-bottom: 50px;
            margin-left: auto;
            margin-right: auto;
            max-width: 600px;
            height: 420px;
            border: 1px solid #9C9C9C;
            background-color: #EAEAEA;
        }
        #login .container #login-row #login-column #login-box #login-form {
            padding: 20px;
        }
        .form{
            text-align: center;
        }
        .loginBtn{
            height:50px;
            width:150px;        
            color: #fff;
            background-color: #e56c82;
            border-color: #e56c82;
        }
    </style>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $error = array();
        require("component/mysqli_connect.php");

        $staff_ID = FALSE;

        if (!empty($_POST['forget_email'])) {
            $q = 'SELECT staff_ID FROM staff WHERE email ="' . mysqli_real_escape_string($dbc, $_POST['forget_email']) . '"';
            $r = mysqli_query($dbc, $q) or trigger_error("Query: $q\n<br />MySQL Error: " . mysqli_error($dbc));

            if (mysqli_num_rows($r) == 1) {
                list($staff_ID) = mysqli_fetch_array($r, MYSQLI_NUM);
            } else {
                $error[] = "The submitted email address does not match those on file.";
            }
        } else {
            $error = "You forget to enter email.";
        }
        if ($staff_ID) {

            $temp_password = substr(md5(uniqid(rand(), true)), 3, 10);


            $query = "UPDATE staff SET password =SHA1('$temp_password') WHERE staff_ID=$staff_ID LIMIT 1";
            $row = mysqli_query($dbc, $query) or trigger_error("Query: $query\n<br />MySQL Error: " . mysqli_error($dbc));

            if (mysqli_affected_rows($dbc) == 1) {
                $body = "Your password to log into <whatever site> has been temporarily changed to '$temp_password'. Please log in using this password and this email address. You may change your password after login.";
                mail($_POST['forget_email'], 'Your temporary password.', $body, 'From: go@gmail.com');


                $success = 'Your temporary password is sent to your email. Please change your password after you login with temporary password.';
                mysqli_close($dbc);
            } else {
                $error[] = "Your password could not be changed due to a system error. We apologize for any inconvenience. $staff_ID";
            }
        } else {
            $error[] = "Please try again.";
        }

        mysqli_close($dbc);
    }
    ?>


    <body>
        <?php include "component/header.php"; ?>


        <div id="login">
            <div class="container">
                <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-6">
                        <div id="login-box" class="col-md-12 ">
                            <form id="login-form" class="form" action="forget_pass.php" method="POST">

                                <div class="d-flex justify-content-center mt-3 loginLogo">
                                    <img src="pictures/Logo1.PNG" style="width:150px; height:150px;">
                                </div>
                                <h3 class="text-center text-dark">Forget Password</h3>
                                <?php include "msg_handling/error_msg.php"; ?>
                                <?php include "msg_handling/success_msg.php"; ?>
                                <div class="form-group">
                                    <label for="email" class="text-dark">Email:</label><br>
                                    <input type="text" name="forget_email" id="email" class="form-control"  required="required">
                                </div>

                                <div class="d-flex justify-content-center mt-3">
                                    <br>
                                    <input type="submit" name="submit" class="btn btn-dark btn-md loginBtn" value="Reset Password">
                                </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
        <?php include "component/footer.php"; ?>
    </body>

</html>

