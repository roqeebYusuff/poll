<?php
    session_start();
    include '../lib/database.php';
    $base_url='http://localhost/poll/voter/';
    if(!isset($_SESSION['User'])){
        redirect('../pages/auth/login.php');
    }
    else{
        $cmdtext = "SELECT * from tbvoters where id = ". $_SESSION['User'];
        $result = executeQuery($cmdtext);
        $row = mysqli_fetch_array($result);

        //redirect to login page if session expires
        $now = time();
        if($now > $_SESSION['expire']){
            redirect('../pages/auth/login.php');
        }
    }
?>

<html>
    <head>
        <title><?php echo $title?> | E-voting</title>
        <link rel="stylesheet" type="text/css" href="http://localhost/poll/voter/assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="http://localhost/poll/voter/assets/css/fontawesome.css">
        <link rel="stylesheet" type="text/css" href="http://localhost/poll/voter/assets/css/ionicons.min.css">
        <script rel="stylesheet" type="text/javascript" src="http://localhost/poll/voter/assets/js/bootstrap.min.js"></script>
        <script rel="stylesheet" type="text/javascript" src="http://localhost/poll/voter/assets/js/fontawesome.min.js"></script>
        <script rel="stylesheet" type="text/javascript" src="http://localhost/poll/voter/assets/js/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="http://localhost/poll/voter/assets/css/style.css">
    </head>

    <body style="background-image: url(http://localhost/poll/voter/img/2.jpg); background-size:cover;">
        <nav class="navbar navbar-expand-lg sticky-top" id="voternav">
            <a class="navbar-brand" href="<?php echo $base_url ?>"><span class="fas fa-vote-yea">E-Voting</span></a>
            
            

            <div class="collapse navbar-collapse d-flex justify-content-end" id="just">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <?php echo ucfirst($row['firstname']) ?>
                        </a>
                    </li>
                    
                    <li class="nav-item">
                        <span class = "fas fa-user-alt"></span>           
                    </li>

                    <li class="nav-item" style="padding-left: 15px;"> 
                        <a class="nav-link btn btn-outline-info" href="http://localhost/poll/voter/pages/auth/logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
            

    