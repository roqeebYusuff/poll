<?php
    session_start();
    include '../../lib/database.php';
    $msg='';

    if(isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $cmdtext = "SELECT * FROM tbadmin WHERE `username` = '$username' AND `password` ='$password'";

        $result = executeQuery($cmdtext);
        $see = mysqli_fetch_array($result);
        if(mysqli_num_rows($result)>0)
        {
            //redirect to home
            $_SESSION['Admin'] = $username;
            $_SESSION['start']=time();//The time the session was set
            $_SESSION['expire']= $_SESSION['start'] + 600;//The session will expire after 10 minutes(10*60)
            redirect('http://localhost/poll/admin/pages/home.php');
            
        }

        else{
            $msg="Invalid Username or Password";
        }

    }
?>
<html>
    <head>
        <title>Login | E-voting</title>
        <link rel="stylesheet" type="text/css" href="http://localhost/poll/admin/assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="http://localhost/poll/admin/assets/css/fontawesome.css">
        <link rel="stylesheet" type="text/css" href="http://localhost/poll/admin/assets/css/ionicons.min.css">
        <script rel="stylesheet" type="text/javascript" src="http://localhost/poll/admin/assets/js/bootstrap.min.js"></script>
        <script rel="stylesheet" type="text/javascript" src="http://localhost/poll/admin/assets/js/fontawesome.min.js"></script>
        <script rel="stylesheet" type="text/javascript" src="http://localhost/poll/admin/assets/js/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="http://localhost/poll/admin/assets/css/style.css"> 
    </head>

    <body>
        
        <section class="login" style="padding-top: 150px;">
            <nav class="col-md-6 container">
                <div class="icon" style="text-align: center; font-size:70px; padding-bottom: 30px;"> 
                    <i class = "fas fa-user-alt"></i>
                </div>

                <nav class="form-group">
                    <form method="post">
                        <div class="form-group">
                            <div class="container col-md-6"> 
                                <input class="form-control" type="text" placeholder="Username" name="username" required/>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="container col-md-6"> 
                                <input class="form-control" type="password" placeholder="Password" name="password" required/>
                            </div>
                        </div>

                        <div class="container col-md-6">
                            <button type="submit" class="btn btn-info" name="submit">Login</a></button>
                        </div>

                        <div class="col-md-6" style="margin-top: 20px">
                            <label class="text-danger"> <?php echo $msg ?> </label>
                        </div>
                    </form>
                </nav>
            </nav>
        </section>
    </body>
</html>