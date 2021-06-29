<?php
    $title="Results";
    $msg='';
    include '../includes/href.php';
    include '../includes/header.php';

	if(!isset($_GET['post']))
	{
        //redirect to view 
        redirect('result.php');
	}
	else 
	{
		$post = $_GET['post'];
    }
    
    $cmdtext = "SELECT * from tbcandidates WHERE post='$post'";
    $result = executeQuery($cmdtext);
?>

<div id="wrapper">

    <!-- sidenav -->
    <?php include '../includes/sidenav.php'; ?>
    <!-- end of sidenav -->

    <!-- content wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">
            <div class="card">
                <div class="card-header text-center text-uppercase">
                    <?php echo $post ?> Results
                </div>

                <div class="table-responsive card-body" > 
                    <table class="table table-hover text-center">
                        <thead class="text-uppercase"> 
                            <tr> 
                                <th>Candidates Name</th>
                                <th>Vote Count</th>
                            </tr>
                        </thead>

                        <tbody> 
                            <?php while($row = mysqli_fetch_array($result)) {?>
                            <tr>   
                                <td> <?php echo $row['lastname'] ." ". $row['firstname']." ".$row['othername'] ?> </td>
                                <td> <?php echo $row['vote_count'] ?> </td>
                            </tr>
                        </tbody>
                            <?php } ?>           
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>