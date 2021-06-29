<?php 
    $base_url="http://localhost/poll/admin/pages/index.php/";   
?>
<html>
    <head>
        <title><?php echo $title?> | E-voting</title>
        <link rel="stylesheet" type="text/css" href="http://localhost/poll/admin/assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="http://localhost/poll/admin/assets/css/fontawesome.css">
        <link rel="stylesheet" type="text/css" href="http://localhost/poll/admin/assets/css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="http://localhost/poll/admin/assets/css/style.css"> 
        <!-- <link rel="stylesheet" type="text/css" href="http://localhost/poll/admin/assets/datatables/css/jquery.dataTables.min.css">  -->
        <link rel="stylesheet" type="text/css" href="http://localhost/poll/admin/assets/datatables/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" type="text/css" href="http://localhost/poll/admin/assets/datatables/responsive.bootstrap4.min.css">
        <link rel="stylesheet" type="text/css" href="http://localhost/poll/admin/assets/datatables/autoFill.bootstrap4.min.css">

        
        <script type="text/javascript" src="http://localhost/poll/admin/assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="http://localhost/poll/admin/assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="http://localhost/poll/admin/assets/js/fontawesome.min.js"></script>
        <script type="text/javascript" src="http://localhost/poll/admin/assets/datatables/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="http://localhost/poll/admin/assets/datatables/js/dataTables.bootstrap4.min.js"></script>
        <script type="text/javascript" src="http://localhost/poll/admin/assets/datatables/dataTables.responsive.min.js"></script>
        <script type="text/javascript" src="http://localhost/poll/admin/assets/datatables/responsive.bootstrap4.min.js"></script>


    </head>

    
    <script>
        $(document).ready(function(){
            $('table.display').DataTable();
        }); 
    </script>


    <body>
    