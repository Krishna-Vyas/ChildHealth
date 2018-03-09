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

    <title>SB Admin - Bootstrap Admin Template</title>

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
                        <h1 class="page-header">
                            Hospitals
                            <small>Registered</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Show Hospitals
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Hospitals</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th width="15%">Name</th>
                                        <th width="15%">Area</th>
                                        <th width="10%">City</th>
                                        <th width="10%">State</th>
                                        <th width="30%">Address</th>
                                        <th width="10%">Type</th>
                                        <th width="10%">Access</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $output = '';
                                    require('./include/db.php');
                                    $query = "SELECT * FROM hospital_list";
                                    $result = mysqli_query($con,$query);
                                    while($row = mysqli_fetch_assoc($result)){
                                        $output .= '<tr class="active">
                                                        <td>'.$row['h_name'].'</td>
                                                        <td>'.$row['area'].'</td>
                                                        <td>'.$row['city'].'</td>
                                                        <td>'.$row['state'].'</td>
                                                        <td>'.$row['address'].'</td>
                                                        <td>'.$row['type'].'</td>
                                                        <td>'.$row['login_id'].'</td>
                                                    </tr>';
                                    }
                                    echo $output;
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h2>Affilate to our application</h2>
                        <p>To associate with our application please visit<a href="./addhospitalacc.php"> Get Associated with us </a>and Register the Hospitals account to Hospital's administration.</a>.</p>
                    </div>
                </div>
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
