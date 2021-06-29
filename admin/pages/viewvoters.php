<?php 
    $title="Home";
    include '../includes/header.php';
    include '../includes/href.php';

    $cmdtext = "select * from tbvoters";
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
                    View Voters
                </div>

                <div class="table-responsive card-body" > 
                    <table class="table table-hover text-center display">
                        <thead class="text-uppercase"> 
                            <tr> 
                                <th>Reg No</th>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Dept</th>
                                <th>Date Created</th>
                            </tr>
                        </thead>

                        
                        <tbody> 
                            <?php while($rows = mysqli_fetch_array($result)){ ?>
                            <tr>   
                                <td> <?php echo $rows['reg_no'] ?> </td>
                                <td> <?php echo $rows['firstname'] ?> </td>
                                <td> <?php echo $rows['lastname'] ?> </td>
                                <td> <?php echo $rows['dept'] ?> </td>
                                <td> <?php echo $rows['date_created'] ?> </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
