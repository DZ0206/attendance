<?php
    require_once 'db\conn.php';

    //Get Values from post operation
    if(isset($_POST['Submit'])){
        //extract values from the $_POST array
        $id = $_POST['id'];
        $fname = $_POST['FirstName'];
        $lname = $_POST['LastName'];
        $dob = $_POST['dob'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $specialty = $_POST['specialty'];
    

    //call crud function 
        $result = $crud->editAttendee($id, $fname, $lname, $dob, $email, $phone, $specialty);
    //redirect to index.php
        if($result){
            header("Location: viewrecords.php");
        } 
        else{
            include 'includes\errormessages.php';
        }
    }
    else {
        include 'includes\errormessages.php';
    }
?>