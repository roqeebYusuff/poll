<?php
    session_start();
    include '../lib/database.php';
    if(!isset($_SESSION['Admin']))
    {
        redirect('http://localhost/poll/admin/pages/auth/login.php');
    }
    else{
        $now = time();
        if($now > $_SESSION['expire']){
            echo "Your session expired";
            redirect('http://localhost/poll/admin/pages/auth/login.php');
        }
    }
?>
<nav class="navbar navbar-expand-lg sticky-top">
    <a class="navbar-brand" href="<?php echo $base_url ?>"><span class="fas fa-vote-yea">E-Voting</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNavDropdown">
        <ul class="navbar-nav">
            
            <li class="nav-item">
                <span class = "fas fa-user-alt"></span>           
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navoption" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo ucfirst($_SESSION['Admin']); ?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navoption">
                    <a class="dropdown-item" href="#"><i class="fas fa-eye"></i>My Profile</a>
                    <a class="dropdown-item" href="http://localhost/poll/admin/pages/changepass.php"><i class="ion-ios-settings"></i>Change Password</a>
                    <a class="dropdown-item" href="http://localhost/poll/admin/pages/auth/logout.php"><i class="fas fa-route"></i>Logout</a>
                </div>
            </li>
        </ul>
    </div>
</nav>

