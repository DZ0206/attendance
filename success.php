
<?php
    $title='Success';
    require_once 'includes\header.php';
    require_once 'db\conn.php';

    if(isset($_POST['Submit'])){
        //extract values from the $_POST array
        $fname = $_POST['FirstName'];
        $lname = $_POST['LastName'];
        $dob = $_POST['dob'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $specialty = $_POST['specialty'];
        //call function to insert and track if success or not
        $isSuccess = $crud->insertAttendees($fname, $lname, $dob, $email, $phone, $specialty);  

        if($isSuccess){
            include 'includes\successmessages.php';
        }
        else {
            include 'includes\errormessages.php';
        }
    }
?>
        <!-- this print out values that were passed to the action page using method="get -->
        
        <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">
            <?php echo $_POST['FirstName'] . ' ' . $_POST['LastName'];?>
            </h5>
            <h6 class="card-subtitle mb-2 text-muted">
                <?php echo $_POST['specialty'];?>
            </h6>
            <p class="card-text">
                Date of Birth : <?php echo $_POST['dob'];?>
            </p>
            <p class="card-text">
                Email address : <?php echo $_POST['email'];?>
            </p>
            <p class="card-text">
                Contact Number : <?php echo $_POST['phone'];?>
            </p>
        </div>
    </div>

    <!-- this print out values that were passed to the action page using method="get -->
    <!--<div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">
                <?php //echo $_GET['FirstName'] . ' ' . $_GET['LastName'];?>
            </h5>
            <h6 class="card-subtitle mb-2 text-muted">
                <?php //echo $_GET['specialty'];?>
            </h6>
            <p class="card-text">
                Date of Birth : <?php //echo $_GET['DoB'];?>
            </p>
            <p class="card-text">
                Email address : <?php //echo $_GET['email'];?>
            </p>
            <p class="card-text">
                COntact Number : <?php //echo $_GET['phone'];?>
            </p>
        </div>
    </div>-->
<br>
<br>
<br>
<?php require_once 'includes\footer.php';?>