<?php
    //constants
    $voter_registered = "Voter Successfully Registered";
    $voter_not_registered = "Unable to Register Voter, please try again";

    $cand_registered = "Candidate Successfully Registered";
    $cand_not_registered = "Unable to Register Candidate, please try again";

    $admin_registered = "Admin Successfully Registered";
    $admin_not_registered = "Unable to Register Admin, please try again";

    $record_inserted = "Record Inserted Successfully";
	$record_unable_insert= "Unable to insert record,please try again";
	
	
	$st_record_updated = "Record Updated Successfully";
	$st_unable_update = "Unable to update record,please try again";

    function executeQuery($cmdtext){
        $dbhost = '127.0.0.1';
        $dbuser = 'root';
        $dbpass = '';
        $dbname = 'dbvoting';

        //connect  to database
        $conn = mysqli_connect($dbhost,$dbuser,$dbpass);

        if(!$conn){
            //Unable to connect
            return null;
        }

        //Select database
        $sel= mysqli_select_db($conn,$dbname);

        if(!$sel){
            //Unable to select 
            return null;
        }

        $status = mysqli_query($conn, $cmdtext);
        mysqli_close($conn);
        return $status;
    }

    function redirect($url)
    {
        header('Location: '.$url);
        exit;
    }
?>