<?php
    $title='Index';
    require_once 'includes\header.php';
    require_once 'db\conn.php';

    $results = $crud->getSpecialties();


?>
        <!--
        - first name
        - last name 
        - Date of Birth (Use DatePicker)
        - Specially (Database Admin, Software Developer, Web Administrator)
        - Email Address
        - Contact Number
        -->
    <h1 class="text-center">Registration for IT Conference</h1>
    <form method="post" action="success.php">
        <div class="form-group">
            <label for="FirstName">First Name</label>
            <input required type="text" class="form-control" id="FirstName" name="FirstName"> 
        </div>
        <div class="form-group">
            <label for="LastName">Last Name</label>
            <input required type="text" class="form-control" id="LastName" name="LastName"> 
        </div>
        <div class="form-group">
            <label for="dob">Date of Birth</label>
            <input required type="date" class="form-control" id="dob" name="dob">
        </div> 
        <div class="form-group">
            <label for="specialty">Area of Expertise</label>
            <select required id="specialty" class="form-control" name="specialty">
                <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) {?>
                    <Option value="<?php echo $r['specialty_id']?>"><?php echo $r['name']; ?></option>
                <?php }?>
            </select>
        </div> 
        <div class="form-group">
            <label for="email" class="form-label">Email address</label>
            <input required type="email" class="form-control" id="email" name="email">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="form-group">
            <label for="phone" class="form-label">Contact Number</label>
            <input required type="phone" class="form-control" id="phone" name="phone">
            <div id="phoneHelp" class="form-text">We'll never share your phone with anyone else.</div>
        </div>
        <div class="d-grid gap-2">
            <button class="btn btn-primary" name="Submit" type="Submit">Submit</button>
        </div>
    </form>
<br>
<br>
<br>
<?php require_once 'includes\footer.php';?>