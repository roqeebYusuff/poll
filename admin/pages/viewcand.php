<?php 
    $title="Home"; 
    include '../includes/header.php';
    include '../includes/href.php';

    $cmdtext = "select * from tbcandidates";
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
                    View Candidates
                </div>

                <div class="table-responsive card-body" > 
                    <table class="table table-hover text-center display">
                        <thead class="text-uppercase"> 
                            <tr> 
                                <th>Reg No</th>
                                <th>Fullname</th>
                                <th>About</th>
                                <th>Position</th>
                                <th>Gender</th>
                                <th>Sponsor</th>
                                <th>Date Created</th>
                            </tr>
                        </thead>

                        <tbody> 
                            <?php while($row = mysqli_fetch_array($result)) {?>
                            <tr>   
                                <td> <?php echo $row['reg_no'] ?> </td>
                                <td> <?php echo $row['lastname'] ." ". $row['firstname']." ".$row['othername'] ?> </td>
                                <td> <?php echo $row['about'] ?> </td>
                                <td> <?php echo $row['post'] ?> </td>
                                <td> <?php echo $row['gender'] ?> </td>
                                <td> <?php echo $row['sponsor'] ?> </td>
                                <td> <?php echo $row['date_created'] ?> </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                                       
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


