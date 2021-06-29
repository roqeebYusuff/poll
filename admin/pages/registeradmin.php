<?php 
    $title = "Register Admin";
    $msg='';
    include '../includes/header.php';
    include '../includes/href.php';

    if(isset($_POST['submit']))
    {
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $uname = $_POST['username'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $cpass = $_POST['cpassword'];

        $cmdtext = "INSERT INTO tbadmin(`firstname`, `lastname`, `username`, `email`, `password`) VALUES ('$fname', '$lname', '$uname', '$email', '$pass')";
        
        $insert = executeQuery($cmdtext);
        
        if($insert){
            $msg = $admin_registered;
        }
        else{
            $msg = $admin_not_registered;
        }
    }
?>
<div id="wrapper">

    <!-- sidenav -->
    <?php include '../includes/sidenav.php'; ?>
    <!-- end of sidenav -->

    <div id="content-wrapper" class="d-flex flex-column">
        <div id="rega"> 
            <div class="card"> 
                <div class="card-header text-uppercase"> 
                    Admin Registration Form
                </div>

                <div class="card-body"> 
                    <form method="post">
                         <div class="col-md-12"> 
                            <div class="form-group">
                                <label class="control-label">Firstname</label>
                                <input class="form-control" type="text" placeholder="Enter your Firstname" name="firstname" required/>
                            </div>                
                        </div>

                        <div class="col-md-12"> 
                            <div class="form-group">
                                <label class="control-label">Lastname</label>
                                <input class="form-control" type="text" placeholder="Enter your Lastname" name="lastname" required/>
                            </div>                
                        </div>

                        <div class="col-md-12"> 
                            <div class="form-group">
                                <label class="control-label">Username</label>
                                <input class="form-control" type="text" placeholder="Enter your Username" name="username" required/>
                            </div>                
                        </div>

                        <div class="col-md-12"> 
                            <div class="form-group">
                                <label class="control-label">Email</label>
                                <input class="form-control" type="email" placeholder="your@example.com" name="email" required/>
                            </div>                
                        </div>

                        <div class="col-md-12"> 
                            <div class="form-group">
                                <label class="control-label">Password</label>
                                <input class="form-control" type="password" placeholder="Enter your password" name="password" autocomplete="off" required/>
                            </div>                
                        </div>

                        <div class="col-md-6 justify-content-end">
                            <button type="submit" class="btn btn-info" name="submit">Register</button>
                        </div>
                        
                        <div class="col-md-12" style="margin-top: 20px">
                            <label class="text-danger"><?php echo $msg ?></label>
                        </div>
                    </form>
                </div>
            </div>
        </div>        
    </div>
</div>
