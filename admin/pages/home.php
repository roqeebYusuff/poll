<?php 
    $title="Home";
    $admin_url = "http://localhost/poll/admin/";
    include '../includes/header.php';
    include '../includes/href.php';

        $cmdtext = "SELECT * FROM tbpositions";
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
                    Summary
                </div>

                <div class="table-responsive card-body" > 
                    <table class="table table-striped text-center display">
                        <thead class="text-uppercase"> 
                            <tr> 
                                <th>Position</th>
                                <th>Total Voters</th>
                                <th>Current Voters</th>
                                <th>Remaining Voters</th>
                            </tr>
                        </thead>

                        <tbody class=""> 
                            <?php while($row=mysqli_fetch_array($result)){ ?>
                            <tr>   
                                <td><?php echo $row['position_name'] ?></td>
                                <td>
                                    <?php 
                                        $cmdtext = "SELECT * FROM tbvoters";
                                        $total = executeQuery($cmdtext);
                                        if($total){
                                            $number = mysqli_num_rows($total);
                                            echo $number;
                                        }                                        
                                    ?>
                                </td>
                                <td>
                                    <?php 
                                        $cmdtext = "SELECT * FROM tbvotes WHERE position = '$row[position_name]'";
                                        $new = executeQuery($cmdtext);
                                        if($new){
                                            $current = mysqli_num_rows($new);
                                            echo $current;
                                        }
                                    ?>
                                </td>
                                <td>
                                    <?php echo $number-$current ?>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
