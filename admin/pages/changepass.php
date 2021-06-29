<?php 
    $title = "Change Password";
    $msg='';
    include '../includes/header.php';
    include '../includes/href.php';

    //Get the id
    $username = $_SESSION['Admin'];


    if(isset($_POST['submit']))
    {
        $current=$_POST['current']; 
        $new = $_POST['new'];
        $cnew = $_POST['cnew'];
        
        $cmdtext = "SELECT * FROM tbadmin where `username` = '$username'";
        $pass_check = executeQuery($cmdtext);
        $pcheck=mysqli_fetch_array($pass_check);

        //Check if current password entered is correct
        if($current == $pcheck['password']){
            //check if password entered is the same as confirm password entered
            if($new==$cnew){
                $cmdtext = "UPDATE tbadmin SET `password` = '$new', `confirm_pass` = '$cnew' WHERE `username` = $username";
            
                $check = executeQuery($cmdtext);

                if($check){
                    $msg = "Password Changed";
                }
                else{
                    $msg = "Unable to change to password";
                }
            }
            else{
                $msg="Passwords entered don't match";
            }
        }
        else{
            $msg = 'Current Password entered not correct';
        }                        
    }
?>
<div id="wrapper">

    <!-- sidenav -->
    <?php include '../includes/sidenav.php'; ?>
    <!-- end of sidenav -->

    <div id="content-wrapper" class="d-flex flex-column">
        <div id="regc"> 
            <div class="card"> 
                <div class="card-header text-uppercase"> 
                    Change Password
                </div>

                <div class="card-body"> 
                    <form method="post">
                         <div class="col-md-12"> 
                            <div class="form-group">
                                <label class="control-label">Current Password</label>
                                <input class="form-control" type="text" name="current" />
                            </div>                
                        </div>

                        <div class="col-md-12"> 
                            <div class="form-group">
                                <label class="control-label">New Password</label>
                                <input class="form-control" type="text" name="new" />
                            </div>                
                        </div>

                        <div class="col-md-12"> 
                            <div class="form-group">
                                <label class="control-label">Confirm New Password</label>
                                <input class="form-control" type="text" name="cnew"/>
                            </div>                
                        </div>

                        <div class="col-md-12">
                            <button type="submit" class="btn btn-info" name="submit">Change Password</button>
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
