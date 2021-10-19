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
    $Quantity = $_POST['Quantity'];
    $material_details = $_POST['material_details'];
    $deadline = $_POST['deadline'];
    $delivery_date = $_POST['delivery_date'];
    $vendor_address = $_POST['vendor_address'];

    $query = mysqli_query($dbc, "insert into rfq(material_details,deadline,delivery_date,vendor_address,Quantity) values('$material_details','$deadline','$delivery_date','$vendor_address',' $Quantity)");
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
            background-color: #e56c82;
        }

        .btn-primary:hover{
            background-color: #0084B9;
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
            <a href="RFQwithPR.php" class="btn btn-primary text-white">With Purchase Requisition</a> 
            <div class="content">
                <div class="intro copy">
                    <p>Please fill in <strong>ALL</strong>the details below.</p>

                </div>
        </section>
        <div class="content">
            <form id="supplier-registration-form" name="rfq" data-track-form-name="rfq-form" class="form-horizontal clearfix" method="post" enctype="multipart/form-data">
                <input type="hidden" name="language" value="" />

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
                    <label id="fld-goods-description-label" for="fld-goods-description" class="col-sm-3 control-label">Vendor Address&nbsp;*</label>
                    <!--  <div class="col-sm-9"> -->
                    <textarea id="vendor_address" name="vendor_address" class="input-text form-control" rows="5" required></textarea>
                    <div class="validation-error"></div>
                    <!--  </div> -->
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
                    <input type="text" class="form-control" name="Quantity" id="Quantity" placeholder="" required/>
                </div>
                <div class="form-group">
                    <label id="material_details" for="fld-pcn-group" class="col-sm-3 control-label">Materials&nbsp;*</label>
                    <!--  <div class="col-sm-9"> -->
                    <select id="material_details" name="material_details" class="input-text form-control" required>
                        <option value="">--Please choose an option--</option>
                        <option name="cotton" value="cotton">Cotton</option>
                        <option name="polyester" value="polyester">Polyester</option>
                        <option name="cotton_polyester_blend" value="cotton_polyester_blend">Cotton/Polyester Blend</option>
                        <option name="cotton_fabric" value="cotton_fabric">Cotton Fabric</option>
                    </select>
                   <!--  <input id="fld-language" name="productGrp" type="hidden" value=""/>-->
                    <div class="validation-error"></div>
                    <!--  </div> -->
                </div>
                <div class="form-group">
                    <label id="fld-region-label" for="fld-date" class="col-sm-3 control-label">Delivery date&nbsp;*</label>
                    <!--  <div class="col-sm-9"> -->
                    <input id="delivery_date" name="delivery_date" class="input-text form-control" type="text" value="" required/>
                    <div class="validation-error"></div>
                    <!--  </div> -->
                </div>
                <div class="form-group">
                    <label id="fld-region-label" for="fld-deadline" class="col-sm-3 control-label">Deadline&nbsp;*</label>
                    <!--  <div class="col-sm-9"> -->
                    <input id="deadline" name="deadline" class="input-text form-control" type="text" value=""required/>
                    <div class="validation-error"></div>
                    <!--  </div> -->
                </div>
                <br>
                <div class="form-group" style="float: right">
                    <!--  <div class="buttons col-sm-9 col-sm-push-3"> -->
                    <button id="submit" type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
                    <button type="reset" class="btn btn-default" type="submit" value="submit">Clear</button>

                </div>
            </form>
        </div>
        <br>
        <br>
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
            }
            i++;
        }

    }

</script>