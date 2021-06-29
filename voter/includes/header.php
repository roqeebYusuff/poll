<?php
    session_start();
    $base_url='http://localhost/poll/voter/';
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

    <body>
        <nav class="navbar navbar-expand-lg sticky-top" id="vnavbar">
            <div class="container">
                <a class="navbar-brand" href="#">E-Voting</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#dropdown" aria-controls="dropdown" aria-expanded="false" aria-label="Toggle navigation"> 
                    <span class="navbar-toggler-icon" style="color:black;"> </span>
                </button>

                <nav class="collapse navbar-collapse" id="dropdown">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                        <a href="<?php echo $base_url ?>pages/home.php" class="nav-link"> Home </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?php echo $base_url ?>pages/vote.php" class="nav-link"> Vote </a>
                        </li>

                    </ul>                
                </nav>
            </div>
        </nav>
            

    