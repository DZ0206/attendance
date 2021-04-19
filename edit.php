<?php
    $title='Edit Record';
    require_once 'includes\header.php';
    require_once 'includes\auth_check.php';
    require_once 'db\conn.php';

    $results = $crud->getSpecialties();

    if(!isset($_GET['id'])){
        include 'includes\errormessages.php';
        header("Location: viewrecords.php");
    } 
    else {
        $id = $_GET['id'];
        $attendee = $crud->getAttendeeDetails($id);


?>
    <h1 class="text-center">Edit Record</h1>
    <form method="post" action="editpost.php">
        <input type="hidden" name="id" value="<?php echo $attendee['attendee_id']?>" />
        <div class="form-group">
            <label for="FirstName">First Name</label>
            <input type="text" class="form-control" value="<?php echo $attendee['firstname']?>" id="FirstName" name="FirstName"> 
        </div>
        <div class="form-group">
            <label for="LastName">Last Name</label>
            <input type="text" class="form-control" value="<?php echo $attendee['lastname']?>" id="LastName" name="LastName"> 
        </div>
        <div class="form-group">
            <label for="dob">Date of Birth</label>
            <input type="date" class="form-control" value="<?php echo $attendee['dob']?>" id="dob" name="dob">
        </div> 
        <div class="form-group">
            <label for="specialty">Area of Expertise</label>
            <select id="specialty" class="form-control" name="specialty">
                <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) {?>
                    <Option value="<?php echo $r['specialty_id']?>" <?php if($r['specialty_id'] == 
                    $attendee['specialty_id']) echo 'selected'?>>
                        <?php echo $r['name']; ?>
                    </option>
                <?php }?>
            </select>
        </div> 
        <div class="form-group">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" value="<?php echo $attendee['email']?>" id="email" name="email">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="form-group">
            <label for="phone" class="form-label">Contact Number</label>
            <input type="phone" class="form-control" value="<?php echo $attendee['phone']?>" id="phone" name="phone">
            <div id="phoneHelp" class="form-text">We'll never share your phone with anyone else.</div>
        </div>
        <br/>
        <div class="d-grid gap-2">
            <button class="btn btn-success" name="Submit" type="Submit">Save Changes</button>
        </div>
        <br/>
            <a href="viewrecords.php" class="btn btn-default">Back to List</a>
    </form>
<?php } ?>
<br>
<br>
<br>
<?php require_once 'includes\footer.php';?>