<?php
    $title='View Record';
    require_once 'includes\header.php';
    require_once 'includes\auth_check.php';
    require_once 'db\conn.php';

    //get attendee by id
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $result = $crud->getAttendeeDetails($id);
    } else {
        include 'includes\errormessages.php';
        header("Location: viewrecords.php");
    }

?>
<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">
        <?php echo $result['firstname'] . ' ' . $result['lastname'];?>
        </h5>
        <h6 class="card-subtitle mb-2 text-muted">
            <?php echo $result['name'];?>
        </h6>
        <p class="card-text">
            Date of Birth : <?php echo $result['dob'];?>
        </p>
        <p class="card-text">
            Email address : <?php echo $result['email'];?>
        </p>
        <p class="card-text">
            Contact Number : <?php echo $result['phone'];?>
        </p>
    </div>
</div> 
<br/>
        <a href="viewrecords.php" class="btn btn-primary">Back to List</a>
        <a href="edit.php?id=<?php echo $result['attendee_id'] ?>" class="btn btn-warning">Edit</a>
        <a onclick="return confirm('Are you sure want delete this record ?');" href="delete.php?id=<?php echo $result['attendee_id'] ?>" class="btn btn-danger">Delete</a>
                
<br>
<br>
<br>
<?php require_once 'includes\footer.php';?>