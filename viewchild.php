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

    <title>ChildHealth</title>

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
                            Child
                            <small>medical record</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="home.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Show Child
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Child</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th width="15%">Name</th>
                                        <th width="10%">Father</th>
                                        <th width="10%">Mother</th>
                                        <th width="10%">Birthdate</th>
                                        <th width="30%">Gender</th>
                                        <th width="10%">State</th>
                                        <th width="15%">Contect</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $output = '';
                                    require('./include/db.php');
                                    $query = "SELECT * FROM child";
                                    $result = mysqli_query($con,$query);
                                    while($row = mysqli_fetch_assoc($result)){
                                        $output .= '<tr class="active">
                                                        <td>'.$row['fname'].' '.$row['lname'].'</td>
                                                        <td>'.$row['father_name'].'</td>
                                                        <td>'.$row['mother_name'].'</td>
                                                        <td>'.$row['dob'].'</td>
                                                        <td>'.$row['gender'].'</td>
                                                        <td>'.$row['state'].'</td>
                                                        <td>'.$row['contactno'].'</td>
                                                    </tr>';
                                    }
                                    echo $output;
                                ?>
                                </tbody>
                            </table>
                        </div>
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
