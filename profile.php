<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>GO Uniform | Profile</title> 
    </head> 
    <style>
        .btn-primary {
            color: #fff;
            background-color: #e56c82;
            border-color: #e56c82;
        }
        #profile .container #profile-row #profile-column #profile-box {
            margin-top:50px;
            margin-bottom: 50px;
            margin-left: auto;
            margin-right: auto;
            max-width: 600px;
            height: 420px;
            border: 1px solid #9C9C9C;
            background-color: #EAEAEA;
        }
        #profile .container #profile-row #profile-column #profile-box #profile-form {
            padding: 20px;
        }
        .form{
            text-align: center;
        }
    </style>
    <?php
    include "headlink.php";
    require('component/mysqli_connect.php');
    $staff_ID = $_SESSION['staff_ID'];
    $sql = "SELECT * FROM staff WHERE staff_ID = '$id'";
    $result = $dbc->query($sql);
    if ($result->num_rows > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $resultrow = $row;
            break;
        }
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $error = array();
        $staff_ID = $_SESSION['staff_ID'];
        $staff_name = $_POST['staff_name'];
        $phone_number = $_POST['phone_number'];


        if (!empty($s_name) && !empty($phone)) {
            $query = "UPDATE staff SET staff_name='$staff_name', phone_number='$phone_number' WHERE staff_ID=$staff_ID LIMIT 1";
            $row = mysqli_query($dbc, $query) or trigger_error("Query: $q\n<br />MySQL Error: " . mysqli_error($dbc));
            if (mysqli_affected_rows($dbc) == 1) {
                echo '<script>alert("Your profile has been update");
                                     window.location.href = "profile.php";
                                     </script>';
            } else {
                echo '<script>alert("Your profile is fail to update");
                                      window.location.href = "profile.php";
                                      </script>';
            }
        }
    }
    ?>
    <body style="background-color: #ffffff; ">
        <?php include "component/header.php"; ?>
        <div id="profile">
            <div class="container">
                <div id="profile-row" class="row justify-content-center align-items-center">
                    <div id="profile-column" class="col-md-12">
                        <div id="profile-box" class="col-md-24 ">
                            <form action="profile.php" method="post" class="form"> 
                                <h4>Profile <i class="fa fa-user" aria-hidden="true"></i></h4>
                                <hr>

                                <div class="form-group row">
                                    <label for="id" class="col-4 col-form-label">Your ID*</label> 
                                    <div class="col-8">
                                        <input id="ID" name="staff_ID" placeholder="ID" class="form-control here" value="<?php echo $resultrow['staff_ID']; ?>" readonly>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-4 col-form-label">Name</label> 
                                    <div class="col-8">
                                        <input id="name" name="staff_name" placeholder="Full Name" class="form-control here"  value="<?php echo $resultrow['staff_name']; ?>" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-4 col-form-label">Email*</label> 
                                    <div class="col-8">
                                        <input id="email" name="email" placeholder="Email" class="form-control here"  value="<?php echo $resultrow['email']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="phone" class="col-4 col-form-label">Contact No</label> 
                                    <div class="col-8">
                                        <input type="text" name="phone_number" class="form-control" placeholder="Eg.0123456789"  type= "number" value="<?php echo $resultrow['phone_number']; ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="position" class="col-4 col-form-label">Position*</label> 
                                    <div class="col-8">
                                        <input id="position" name="position" placeholder="Position" class="form-control here"  value="<?php echo $resultrow['position']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="department" class="col-4 col-form-label">Department*</label> 
                                    <div class="col-8">
                                        <input id="department" name="department" placeholder="Department" class="form-control here"  value="<?php echo $resultrow['department']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-4 col-8">
                                        <br>
                                        <input type="submit" name="submit" class="btn btn-primary btn-md" value="Update My Profile">
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</body> 
<?php include "component/footer.php"; ?>
</html>