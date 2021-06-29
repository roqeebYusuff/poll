<?php
    $msg='';
    $title = "Vote";
    include '../includes/navbar.php';

    // GET THE VOTER_ID
	if(!isset($_GET['post']))
	{
        //redirect to View 
        redirect('vote.php');
	}
	else 
	{
        $post = $_GET['post'];
        $voter_id = $_SESSION['User'];
    }
    

    //Check if voter has voted already
    $cmdtext = "select * from tbvotes where voter_id = '$voter_id' and position ='$post'";
    $check = executeQuery($cmdtext);

    if(mysqli_num_rows($check)>0){
        redirect('voted.php');
    }

    else{
        $cmdtext = "SELECT * FROM tbcandidates where post = '$post'";
        $result = executeQuery($cmdtext);

        if(isset($_POST['submit'])){

                $reg = $_POST['cand_reg'];
                $cmdtext = "SELECT * from tbcandidates where reg_no = '$reg'";
                $fill = executeQuery($cmdtext);
                $final = mysqli_fetch_array($fill);
                $cand_name = $final['lastname']." ".$final['firstname']." ". $final ["othername"];

                $cmdtext = "INSERT INTO tbvotes(`voter_id`,`position`,`candidate_name`) VALUES('$voter_id','$post','$cand_name')";
                $send = executeQuery($cmdtext);

                if($send){
                    //count candidates votes
                    $cmdtext = "UPDATE tbcandidates SET vote_count=vote_count+1 WHERE reg_no = $reg";
                    $update = executeQuery($cmdtext);
                    $msg = 'Voted Succefully';
                    redirect('voted.php');                
                }
                else{
                    $msg = 'Not Successful';
                }           
        }
    }
?>

<div class="col-md-6 container" style="margin-top: 30px;">
    <div class="card">
        <div class="card-header text-center">
            <?php echo ucfirst($post) ?> Candidates
        </div>
        <div class="card-body"> 
            <form method="post">
                <div class="radio">
                    <?php while($row = mysqli_fetch_array ($result)) {?>
                                <label class="control-label" style="padding-right: 20px;">
                                    <input class="form-control" type="radio" name="cand_reg" value="<?php echo $row['reg_no'] ?>"/> <strong> <?php echo $row['lastname']." ". $row['firstname']. " ". $row['othername'] ?></strong>
                                </label>                   
                    <?php } ?>
                <div>
                
                <hr/>

                <div class="col-md-12 justify-content-end">
                    <button type="submit" class="btn btn-info" name="submit">Cast Your Vote</button>
                </div>
                        
                <div class="col-md-12" style="margin-top: 20px">
                    <label class="text-danger"><?php echo $msg ?></label>
                </div>
            </form>
        </div>
    </div>    
</div>