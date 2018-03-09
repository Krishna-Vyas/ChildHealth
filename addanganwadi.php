<?php
    session_start();
    if(!isset($_SESSION['token']) && !isset($_SESSION['email']) && !isset($_SESSION['name'])){
        $_SESSION['code'][1] = 'Please Login to Your Account';
        header('Location:./index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ChildHelth</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <?php require('./include/nav.php');?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <?php 
                            if(isset($_SESSION['code'][1])){
                                echo '<div class="alert alert-warning">'.$_SESSION['code'][1].'</div>';
                                unset($_SESSION['code'][1]);
                            }
                        ?>
                        <h1 class="page-header">
                            Manage Angenwadi
                            <small>add accounts</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Manage Anganwadi
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">

                        <form role="form" action="functions/addanganwadi.php" method="POST">

                            <div class="form-group">
                                <label>Name of Anganwadi</label>
                                <input class="form-control type="text" required="required" name="name" placeholder="Enter Anganwadi name">
                            </div>

                            <div class="form-group">
                                <label>Area</label>
                                <input class="form-control type="text" required="required" name="area" placeholder="Enter Anganwadi Area">
                            </div>

                            <div class="form-group">
                                <label>City</label>
                                <input class="form-control type="text" required="required" name="city" placeholder="Enter Anganwadi City">
                            </div>

                            <div>
                                    <h4 style="margin-bottom:5px;">State :</h4>
                                    <select id="state" name="state" onchange="" class="frm-field required" style="margin-bottom:5px;width:100%;padding:5px;">
                                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                        <option value="Assam">Assam</option>
                                        <option value="Bihar">Bihar</option>
                                        <option value="Chandigarh">Chandigarh</option>
                                        <option value="Chhattisgarh">Chhattisgarh</option>
                                        <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                                        <option value="Daman and Diu">Daman and Diu</option>
                                        <option value="Delhi">Delhi</option>
                                        <option value="Goa">Goa</option>
                                        <option value="Gujarat">Gujarat</option>
                                        <option value="Haryana">Haryana</option>
                                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                        <option value="Jharkhand">Jharkhand</option>
                                        <option value="Karnataka">Karnataka</option>
                                        <option value="Kerala">Kerala</option>
                                        <option value="Lakshadweep">Lakshadweep</option>
                                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                                        <option value="Maharashtra">Maharashtra</option>
                                        <option value="Manipur">Manipur</option>
                                        <option value="Meghalaya">Meghalaya</option>
                                        <option value="Mizoram">Mizoram</option>
                                        <option value="Nagaland">Nagaland</option>
                                        <option value="Orissa">Orissa</option>
                                        <option value="Pondicherry">Pondicherry</option>
                                        <option value="Punjab">Punjab</option>
                                        <option value="Rajasthan">Rajasthan</option>
                                        <option value="Sikkim">Sikkim</option>
                                        <option value="Tamil Nadu">Tamil Nadu</option>
                                        <option value="Tripura">Tripura</option>
                                        <option value="Uttaranchal">Uttaranchal</option>
                                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                                        <option value="West Bengal">West Bengal</option>
                                    </select>
                                </div>

                            <div class="form-group">
                                <label>Address</label>
                                <input class="form-control type="text" required="required" name="address" placeholder="Enter Hospital name">
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control type="email" required="required" name="email" placeholder="Enter email to be Register">
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" type="Password" required="required" name="password" placeholder="Enter Password">
                            </div>

                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input class="form-control" type="Password" required="required" name="conf_password" placeholder="confirm Password">
                            </div>
                            <div>
                                <input type="submit" class="btn btn-primary" name="submit" value="Register Account">
                            </div>

                        </form>
                </div>
                <!-- /.row -->

                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
