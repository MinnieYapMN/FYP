<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="icon"  type="image/png" sizes="16×16" href="pictures/Logo2.png">
        <?php include "headlink.php" ?>

    </head>

    <style>
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

        #login-column{
            /*margin-top:140px;*/
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
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            require ('component/mysqli_connect.php');
            $errors =array();
            if (!empty($_POST['login_email'])) {
                   $e = mysqli_real_escape_string ($dbc, $_POST['login_email']);
            } else {
                   $e = FALSE;
                   $error[] = 'You forgot to enter your email address.';
            }


            if (!empty($_POST['login_password'])) {
                    $p = mysqli_real_escape_string ($dbc, $_POST['login_password']);
            } else {
                    $p = FALSE;
                    $error[] = 'You forgot to enter your password.';
            }

            if ($e && $p) { 
                   $q = "SELECT * FROM users WHERE email='$e' AND password=SHA1('$p')";		
                   $r = mysqli_query ($dbc, $q) or trigger_error("Query: $q\n<br />MySQL Error: " . mysqli_error($dbc));

                   if (mysqli_num_rows($r) == 1) { 

                           $_SESSION = mysqli_fetch_array ($r, MYSQLI_ASSOC); 
                           mysqli_free_result($r);
                           mysqli_close($dbc);


                           $url = 'index.php'; 
                           ob_end_clean(); 
                           header("Location: $url");
                           exit(); 

                   } 
                   
                   else { 
                           $error[] = 'Either the email address and password entered do not match those on file or you have not yet activated your account.';
                   }

           } 
           
           else { 
                  $error[]= 'Please try again.';
           }

           mysqli_close($dbc);

    }   
        
    
    ?>


    <body>
        <?php include "component/header.php"; ?>
        <div id="login">
            <div class="container">
                <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-12">
                        <div id="login-box" class="col-md-24 ">
                            <form id="login-form" class="form" action="login.php" method="POST">
                                <?php include "msg_handling/error_msg.php"; ?>
                                <div class="d-flex justify-content-center mt-3 loginLogo">
                                    <img src="pictures/Logo3.png" style="width:150px; height:75px;">
                                </div>
                                <h3 class="text-center text-dark">Login</h3>
                                


                                <div class="form-group">
                                    <div class="input-group mt-3">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                                          <input type="text" name="login_email" id="email" class="form-control"  placeholder="Enter Your Email" required="required">
                                        </div>
                                    </div>    
                                </div>
                                
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1" ><i class="fa fa-lock showHide_password"></i></span>
                                            <input type="password" name="login_password" id="password" class="form-control" placeholder="Enter Your Password" required="required">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <a href="forget_pass.php" class="text-dark ">Forget Password</a>
                                    <a href="register.php" class="text-dark float-right">Register here</a>
                                </div>

                                <div class="d-flex justify-content-center mb-2">
                                    <input type="submit" name="submit" class="btn btn-dark btn-md float-right loginBtn" value="Login">
                                </div>
                            </form>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
        <?php include "component/footer.php"; ?>
    </body>

</html>

<script>
$("body").on('click', '.showHide_password', function() {
  $(this).toggleClass("fa fa-unlock");
  var input = $("#password");
  if (input.attr("type") === "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
    $(this).toggleClass("fa fa-lock");
  }

});
</script>
    