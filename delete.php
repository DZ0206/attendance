<?php
    require_once 'includes\auth_check.php';
    require_once 'db\conn.php';
    if(!isset($_GET['id'])){
        include 'includes\errormessages.php';
        header("Location: viewrecords.php");
    }else{
        //Get ID Values
        $id = $_GET['id'];
        
        //Call Delete Function
        $result = $crud->deleteAttendee($id);

        //Redirect to list
        if($result){
            header ("Location: viewrecords.php");
        } 
        else {
            include 'includes\errormessages.php';
        }
    }


?>