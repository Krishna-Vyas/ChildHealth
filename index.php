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

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
body{
    background-color: #412C84;
}
</style>
</head>

<body>
    <div class="container">
        <div class="col-md-12">
            <div style="margin: 0 auto; padding:10px; width: 450px; color: white;">
                <h1>Login</h1>
                <?php 
                    if(isset($_SESSION['code'][1])){
                        echo '<h6 style="color:red">'.$_SESSION['code'][1].'</h6>';
                    }
                ?>
                <form role="form" action="./functions/login.php" method="POST">
                    <div class="form-group">
                        <label>Email :</label>
                        <input class="form-control" name="email" type="email" required="required" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label>Password :</label>
                        <input class="form-control" name="password" type="Password" required="required" placeholder="Enter Password">
                    </div>
                    <input type="submit" class="btn btn-primary" name="Login">
                </form>
            </div>
        </div>
    </div>
</body>
</html>