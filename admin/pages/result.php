<?php 
    $title="Home";
    include '../includes/header.php';
    include '../includes/href.php';

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
                    View Results
                </div>

                <div class="card-body" > 
                    <table class="table table-hover text-center">
                        <thead class="text-uppercase"> 
                            <tr> 
                                <th>Positions</th>
                            </tr>
                        </thead>

                        <tbody class="text-center"> 
                        <tr> 
                            <td class="table-active"><a href="<?php echo 'results.php?post=president'?>">View Results for President</a></td>
                        </tr>

                        <tr> 
                            <td class="table-primary"><a href="<?php echo 'results.php?post=vice president'?>">View Results for Vice President<a></td>
                        </tr>

                        <tr> 
                            <td class="table-secondary"><a href="<?php echo 'results.php?post=secretary'?>">View Results for Secretary</a></td>
                        </tr>

                        <tr> 
                            <td class="table-success"><a href="<?php echo 'results.php?post=treasurer'?>">View Results for Treasurer</a></td>
                        </tr>

                        <tr> 
                            <td class="table-danger"><a href="<?php echo 'results.php?post=social director'?>">View Results for Social Director</a></td>
                        </tr>

                        <tr> 
                            <td class="table-warning"><a href="<?php echo 'results.php?post=sport director'?>">View Results for Sport Director</a></td>
                        </tr>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
