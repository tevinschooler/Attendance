
 <?php 
 $tile='Index';
 require_once 'includes/header.php' ;
 require_once 'includes/auth_check.php';
 require_once 'db/conn.php' ;

 $results =$crud->getspecialties();

 if(!isset($_GET['id'])){
    include 'includes/error.php';
    header("location: index.php");

 } else{
        $id = $_GET['id'];
        $attendee = $crud->getAttendeeDetails($id);
  
 ?>
   
    <h1 class="text-center">Update Records</h1>
    
    <form method="post" action="editpost.php">
        <input type="hidden" name= value="<?php echo $attendee['attendee_id'] ?>"/>
            <div class="form-group">
                <label for="first name" class="form-label">First Name</label>
                <input type="text" class="form-control" value="<?php echo $attendee['firstname'] ?>"
                id="firstname" name="firstname"
                aria-describedby="Enter First Name">
            </div>
            
            <div class="form-group">
                <label for="last name" class="form-label">Last Name</label>
                <input type="text" class="form-control" value="<?php echo $attendee['lastname'] ?>" id="lastname" name="lastname"
                aria-describedby="Enter Last Name">
            </div>
            
            <div class="form-group">
                <label for="dob" class="form-label">Date of Birth</label>
                <input type="text" class="form-control" value="<?php echo $attendee['dateofbirth'] ?>" id="dob" name="dob"
                aria-describedby="Enter Date of Brth">
            </div>
                          
            <div class="form-group">
                <label for="specalize">Area of Expertise</label>
                 <select class="form-control"  id="specailize"name="specailize">
                  <?php while($r =$results->fetch(PDO::FETCH_ASSOC)){?>
                     <option value="<?php echo $r['specialty_id']?>" <?php if($r['specialty_id']==
                $attendee['specialty_id']) echo'selected' ?>>                 
                    <?php echo $r['name']; ?>
                </option>
                    <?php } ?>
                
                </select>
           
           </div>  
               
                       

            <div class="form-group">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" value="<?php echo $attendee['email'] ?>" id="email" name="email" 
                aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
           
            <div class="form-group">
                <label for="contact" class="form-label">Contact </label>
                <input type="text" class="form-control" value="<?php echo $attendee['contactnumber'] ?>" id="contact" name="contact"
                aria-describedby="Contact">
                <div id="contactHelp"
                 class="form-text">We'll never share your phone number with anyone else.</div>
            </div>

            <div class="d-grid gap-2">
            <button type="submit"  name="submit" 
            id="submit" class="btn btn-success">Saves Changes</button>
            </div>
</form>

</br>
<a href= "records.php" class="btn btn-primary"> Back to List </a>
       
<a href= "edit.php?id=<?php echo $results['attendee_id'] ?>" class="btn btn-warning"> Edit</a>

<?php  } ?>
<br>
<br>
<br>
<br>

 <?php require_once 'includes/footer.php'   ?>