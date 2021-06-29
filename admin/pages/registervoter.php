<?php 
    $title = "Register Voter";
    $msg='';
    include '../includes/header.php';
    include '../includes/href.php';

    if(isset($_POST['submit'])){
        $regno = $_POST['regno'];
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $pass = $_POST['password'];
        $email = $_POST['email'];        
        $dept = $_POST['dept'];
        $gender = $_POST['gender'];

        $cmdtext = "INSERT INTO tbvoters (`reg_no`, `firstname`, `lastname`, `password`,`email`, `dept`, `gender`) VALUES ('$regno', '$fname', '$lname', '$pass', '$email', '$dept', '$gender')";

        $insert = executeQuery($cmdtext);

        if($insert)
        {
            $msg = $voter_registered;
        }
        else{
            $msg = $voter_not_registered;
        }
    }


?>
<div id="wrapper">

    <!-- sidenav -->
    <?php include '../includes/sidenav.php'; ?>
    <!-- end of sidenav -->

    <div id="content-wrapper" class="d-flex flex-column">
        <div id="regv"> 
            <div class="card"> 
                <div class="card-header text-uppercase"> 
                    Voter Registration Form
                </div>

                <div class="card-body"> 
                    <form method="post">
                         <div class="col-md-12"> 
                            <div class="form-group">
                                <label class="control-label">Registration Number</label>
                                <input class="form-control" type="text" placeholder="Enter your Registration number" name="regno" required/>
                            </div>                
                        </div>

                        <div class="col-md-12"> 
                            <div class="form-group">
                                <label class="control-label">Firstname</label>
                                <input class="form-control" type="text" placeholder="Enter your firstname" name="firstname" required/>
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
                                <label class="control-label">Password</label>
                                <input class="form-control" type="password" placeholder="Enter your Password" name="password" required/>
                            </div>                
                        </div>

                        <div class="col-md-12"> 
                            <div class="form-group">
                                <label class="control-label">Email</label>
                                <input class="form-control" type="email" placeholder="Enter your Email" name="email" required/>
                            </div>                
                        </div>

                        <div class="col-md-12"> 
                            <div class="form-group">
                                <label class="control-label">Department</label>
                                <select class="form-control" name="dept" required> 
                                    <option>Select your Department</option>
                                    <option>CSC</option>
                                    <option>CSS</option>
                                    <option>MTS</option>
                                    <option>IFT</option>
                                    <option>IFS</option>
                                    <option>SWE</option>
                                    <option>BIO</option>
                                    <option>CHE</option>
                                    <option>MCB</option>
                                    <option>PHY</option>
                                </select>
                            </div>                
                        </div>

                        <div class="col-md-12"> 
                            <div class="form-group">
                                <label class="control-label">Gender</label>
                                <select class="form-control" name="gender" required> 
                                    <option>Select your Gender</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>                
                        </div>

                        <div class="col-md-12 justify-content-end">
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
