<?php 
    $title = "Register Candidate";
    $msg='';
    include '../includes/href.php';
    include '../includes/header.php';

    if(isset($_POST['submit']))
    {
        $regno = $_POST['regno'];
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $oname = $_POST['othername'];
        $about = $_POST['about'];
        $post = $_POST['post'];
        $gender = $_POST['gender'];
        $sponsor = $_POST['sponsor'];

        $cmdtext = "INSERT INTO tbcandidates(reg_no, firstname, lastname, othername, about, post, gender, sponsor) VALUES ('$regno', '$fname', '$lname', '$oname', '$about', '$post', '$gender', '$sponsor')";
        
        $insert = executeQuery($cmdtext);

        if($insert){
            $msg = $cand_registered;
        }
        else{
            $msg = $cand_not_registered;
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
                    Candidate Registration Form
                </div>

                <div class="card-body"> 
                    <form method="post">
                         <div class="col-md-12"> 
                            <div class="form-group">
                                <label class="control-label">Registration Number</label>
                                <input class="form-control" type="text" placeholder="Enter your Registration" name="regno" required/>
                            </div>                
                        </div>

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
                                <label class="control-label">Othername</label>
                                <input class="form-control" type="text" placeholder="Enter your Othername" name="othername" required/>
                            </div>                
                        </div>

                        <div class="col-md-12"> 
                            <div class="form-group">
                                <label class="control-label">About</label>
                                <textarea class="form-control" type="text" placeholder="Write about yourself..." name="about"></textarea>
                            </div>                
                        </div>

                        <div class="col-md-12"> 
                            <div class="form-group">
                                <label class="control-label">Post</label>
                                <select class="form-control" name="post" required> 
                                    <option>Select your Post</option>
                                    <option>President</option>
                                    <option>Vice President</option>
                                    <option>Secretary</option>
                                    <option>Treasurer</option>
                                    <option>Social Director</option>
                                    <option>Sport Director</option>
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

                        <div class="col-md-12"> 
                            <div class="form-group">
                                <label class="control-label">Sponsor</label>
                                <select class="form-control" name="sponsor" required> 
                                    <option>Select your Sponsor</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>                
                        </div>

                        <div class="col-md-12">
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
