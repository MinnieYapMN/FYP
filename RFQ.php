<?php
require('component/mysqli_connect.php');
$Array_account = array();
$Array_account1 = array();
$sql = "SELECT * FROM vendor";
$sql1 = "SELECT * FROM company";
$result = $dbc->query($sql);
$result1 = $dbc->query($sql1);
if ($result->num_rows > 0) {
    while ($row = mysqli_fetch_array($result)) {
        array_push($Array_account, $row);
    }
}
echo '<script>var Array_account = ' . json_encode($Array_account) . ';</script>';

if ($result1->num_rows > 0) {
    while ($row = mysqli_fetch_array($result1)) {
        array_push($Array_account1, $row);
    }
}
echo '<script>var Array_account1 = ' . json_encode($Array_account1) . ';</script>';
if (isset($_POST['submit'])) {
    $pr_id = $_POST['pr_id'];
    $material_details = $_POST['material_details'];
    $deadline = $_POST['deadline'];
    $delivery_date = $_POST['delivery_date'];
    $vendor_address = $_POST['vendor_address'];

    $query = mysqli_query($dbc, "insert into rfq(pr_id,material_details,deadline,delivery_date,vendor_address) values('$pr_id','$material_details','$deadline','$delivery_date','$vendor_address')");
    $query1 = "UPDATE rfq SET vendor_address='$vendor_address' WHERE rfq_ID=$rfq_ID LIMIT 1";
    if ($query) {
        echo "<script>alert('You are successfully created!');</script>";
    } else {
        echo "<script>alert('You are created failed, please create again!');</script>";
    }
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8" content="width=device-width, initial-scale=1.0">
        <title>GO Uniform | Request For Quotation</title>
        <link rel="icon"  type="image/png" sizes="16×16" href="pictures/Logo2.png">
        <?php include "headlink.php" ?>
    </head>
    <style>
        body{
            font-family: Cambria, Cochin, Georgia, Times, "Times New Roman", serif;
        }

        section{
            padding-left: 120px;
            padding-right: 250px;
        }

        form{
            padding-left: 120px;
            padding-right: 250px;
        }

        label{
            width: 25%;
            display: inline-block;
            vertical-align: top;
        }

        .form-group{
            padding-left: 50px;
            padding-right: 100px;
            padding-bottom: 10px;
        }

        input, textarea{
            width: 65%;
        }

        .btn-primary{
            color: white;
            background-color: #0084B9;
        }

        .btn-primary:hover{
            background-color: #285e8e;
        }

        .btn-default{
            color: white;
            background-color: #aaa;
        }

        .btn-default:hover{
            background-color: #999999;
        }

        #footer {
            margin: 0 0 0 0; 
            padding: 0 0 1px 0; /* assuming footer of height 100px */
        }

    </style>
    <body>
        <?php include "component/header.php"; ?>
        <section class="header domReload">
            <h1>Request For Quotation</h1>
            <div class="content">
                <div class="intro copy">
                    <p>Please fill in <strong>ALL</strong>the details below.<br></p>
                    <a href="RFQ.php" class="btn btn-primary text-white">Without Purchase Requisition</a> 
                </div>
        </section>
        <div class="content">
            <form id="supplier-registration-form" name="rfq" data-track-form-name="rfq-form" class="form-horizontal clearfix" method="post" enctype="multipart/form-data">
                <input type="hidden" name="language" value="" />

                <br>
                <h2>Vendor Details</h2>   

                <div class="form-group">
                    <label>Vendor ID</label>
                    <select class="form-control" name="vendor_id" id="vendor_id" onchange="select_id_check_name()" onclick="select_id_check_name()">
                        <?php
                        $sql = "SELECT * FROM vendor";
                        $result = $dbc->query($sql);
                        if ($result->num_rows > 0) {
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<option value=" . $row["vendor_id"] . ">" . $row["vendor_id"] . "</option>";
                            }
                        } else {
                            echo '<script>alert("Invalid input!")</script>';
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Company Registration No&nbsp;</label>
                    <input type="text" class="form-control" name="companyReg" id="companyReg" placeholder=""  readOnly/>
                </div>
                <div class="form-group">
                    <label>First Name&nbsp;</label>
                    <input type="text" class="form-control" name="firstName" id="firstName" placeholder="" readOnly/>
                </div>
                <div class="form-group">
                    <label>Last Name&nbsp;</label>
                    <input type="text" class="form-control" name="lastName" id="lastName" placeholder="" readOnly/>
                </div>
                <div class="form-group">
                    <label>Supplier Email&nbsp;</label>
                    <input type="text" class="form-control" name="Email" id="Email" placeholder="" readOnly/>
                </div>
                <div class="form-group">
                    <label>Contact No&nbsp;</label>
                    <input type="text" class="form-control" name="contact" id="contact" placeholder="" readOnly/>
                </div>
                <div class="form-group">
                    <label>City&nbsp;</label>
                    <input type="text" class="form-control" name="city" id="city" placeholder="" readOnly/>
                </div>

                <h2>Goods &amp; Services:</h2>

                <div class="form-group">
                    <label id="fld-pcn-group-label" for="fld-pcn-group" class="col-sm-3 control-label">Product Group&nbsp;*</label>
                    <!--  <div class="col-sm-9"> -->
                    <select id="fld-product-grp" name="productGrp" class="input-text form-control">
                        <option value="">--Please choose an option--</option>
                        <option name="baju kurung" value="baju kurung">Baju Kurung</option>
                        <option name="school uniform" value="school uniform">School Uniform</option>
                        <option name="career uniform" value="career uniform">Career Uniform</option>
                    </select>
                   <!--  <input id="fld-language" name="productGrp" type="hidden" value=""/>-->
                    <div class="validation-error"></div>
                    <!--  </div> -->
                </div>

                <div class="form-group">
                    <label>Quantity&nbsp;</label>
                    <input type="text" class="form-control" name="quantity" id="quantity" placeholder="" required/>
                </div>
                <div class="form-group">
                    <label id="fld-goods-description-label" for="fld-goods-description" class="col-sm-3 control-label">Describe, if possible...&nbsp;*</label>
                    <!--  <div class="col-sm-9"> -->
                    <textarea id="fld-goods-description" name="material_details" class="input-text form-control" rows="7"></textarea>
                    <div class="validation-error"></div>
                    <!--  </div> -->
                </div> 
                <div class="form-group">
                    <label id="fld-region-label" for="fld-date" class="col-sm-3 control-label">Delivery date&nbsp;*</label>
                    <!--  <div class="col-sm-9"> -->
                    <input id="fld-region" name="date" class="input-text form-control" type="text" value=""/>
                    <div class="validation-error"></div>
                    <!--  </div> -->
                </div>
                <div class="form-group">
                    <label id="fld-region-label" for="fld-deadline" class="col-sm-3 control-label">Deadline&nbsp;*</label>
                    <!--  <div class="col-sm-9"> -->
                    <input id="fld-region" name="date" class="input-text form-control" type="text" value=""/>
                    <div class="validation-error"></div>
                    <!--  </div> -->
                </div>
            </form>
        </div>

    </body>
    <div id="footer" style="width: 100%">
        <hr size="1" noshade="noshade" />
        <?php include "component/footer.php"; ?>
    </div> <!-- end div footer -->

</html>

<script>
    function select_id_check_name() {
        var i = 0;
        while (Array_account) {
            if (Array_account[i][0].toString() === document.getElementById("vendor_id").value) {
                document.getElementById("companyReg").value = Array_account[i][1].toString();
                document.getElementById("firstName").value = Array_account[i][2].toString();
                document.getElementById("lastName").value = Array_account[i][3].toString();
                document.getElementById("Email").value = Array_account[i][4].toString();
                document.getElementById("contact").value = Array_account[i][5].toString();
                select_Companyreg_check_details();

            }
            i++;
        }

    }

    function select_Companyreg_check_details() {
        var i = 0;
        while (Array_account1) {
            if (Array_account1[i][0].toString() === document.getElementById("companyReg").value) {
                //document.getElementById("companyReg").value = Array_account[i][1].toString();
                //document.getElementById("firstName").value = Array_account[i][2].toString();
                //document.getElementById("lastName").value = Array_account[i][3].toString();
                //document.getElementById("Email").value = Array_account[i][4].toString();
                //document.getElementById("contact").value = Array_account[i][5].toString();
                document.getElementById("city").value = Array_account1[i][5].toString();

            }
            i++;
        }
    }
</script>