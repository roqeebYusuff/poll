<?php
    session_start();
    include '../../lib/database.php';
    $msg='';

    if(isset($_POST['submit']))
    {
        $regno = $_POST['regno'];
        $password = $_POST['password'];

        $cmdtext = "SELECT * FROM tbvoters WHERE `reg_no` = '$regno' AND `password` ='$password'";

        $result = executeQuery($cmdtext);
        $see = mysqli_fetch_array($result);
        if(mysqli_num_rows($result)>0)
        {
            //redirect to vote
            $_SESSION['User'] = $see['id'];
            $_SESSION['start']=time();
            $_SESSION['expire'] = $_SESSION['start'] + 600;//Session expires after 10 minutes(600/60)
            redirect('http://localhost/poll/voter/pages/vote.php');
        }

        else{
            $msg="Invalid Username or Password";
        }
    }
?>
<html>
    <head>
        <title>Login | E-voting</title>
        <link rel="stylesheet" type="text/css" href="http://localhost/poll/voter/assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="http://localhost/poll/voter/assets/css/fontawesome.css">
        <link rel="stylesheet" type="text/css" href="http://localhost/poll/voter/assets/css/ionicons.min.css">
        <script rel="stylesheet" type="text/javascript" src="http://localhost/poll/voter/assets/js/bootstrap.min.js"></script>
        <script rel="stylesheet" type="text/javascript" src="http://localhost/poll/voter/assets/js/fontawesome.min.js"></script>
        <script rel="stylesheet" type="text/javascript" src="http://localhost/poll/voter/assets/js/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="http://localhost/poll/voter/assets/css/style.css">
    </head>

    <body style="background-color">
        
        <section class="login" style="padding-top: 150px;">
            <nav class="col-md-6 container">
                <div class="icon" style="text-align: center; font-size:70px; padding-bottom: 15px;"> 
                    <i class = "fas fa-user-alt"></i><br/>
                    <label style="font-size: 30px; font-family: monospace;">Login</label>
                </div>
                
                <nav class="form-group">
                    <form method="post">
                        <div class="form-group">
                            <div class="container col-md-6"> 
                                <input class="form-control" type="text" placeholder="Registration Number" name="regno" required/>
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

                        <div class="container col-md-6" style="margin-top: 20px">
                            <label class="text-danger"> <?php echo $msg ?> </label>
                        </div>
                    </form>
                </nav>
            </nav>
        </section>
    </body>
</html>