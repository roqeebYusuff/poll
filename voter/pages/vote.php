<?php
    $title="Vote";
    $msg='';
    include '../includes/navbar.php';

?>

<div class="vote col-md-6 container">
    <div class="card"> 
        <div class="card-header text-uppercase text-center"> 
            POLL
        </div>

        <div class="table-responsive card-body"> 
            <form class="form-group">
                <table class="table table-hover">
                    <thead class="text-uppercase text-center">
                        <tr> 
                            <th>Be free and fair</th>
                        </tr>
                    </thead>
                    
                    <tbody class="text-center">
                        <tr> 
                            <td class="table-active"><a href="<?php echo 'president.php?post=president'?>">Vote for President</a></td>
                        </tr>

                        <tr> 
                            <td class="table-primary"><a href="<?php echo 'president.php?post=vice president'?>">Vote for Vice President<a></td>
                        </tr>

                        <tr> 
                            <td class="table-secondary"><a href="<?php echo 'president.php?post=secretary'?>">Vote for Secretary</a></td>
                        </tr>

                        <tr> 
                            <td class="table-success"><a href="<?php echo 'president.php?post=treasurer'?>">Vote for Treasurer</a></td>
                        </tr>

                        <tr> 
                            <td class="table-danger"><a href="<?php echo 'president.php?post=social director'?>">Vote for Social Director</a></td>
                        </tr>

                        <tr> 
                            <td class="table-warning"><a href="<?php echo 'president.php?post=sport director'?>">Vote for Sport Director</a></td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
</div>