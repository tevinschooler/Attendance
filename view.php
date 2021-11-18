<?php 
 $tile='View Record';
 require_once 'includes/header.php' ;
 require_once 'includes/auth_check.php';

 require_once 'db/conn.php' ;

 if(isset($_GET['id'])){     
  $id = $_GET['id'];
  $result = $crud->getAttendeeDetails($id); 

   }else {
     
     echo"<h1 class='text-danger'>Please check details and try again.... </h1>";
   }
 ?>
 
 <img src="<?php echo empty($result['avatar_path']) ? "uploads/blank.png" : $result['avatar_path'] ; ?>" 
 class="rounded-circle" style="width: 20%; height: 20%" />
 
<div  class="card" style="width: 18rem;">

 <div class="card-body">
   <h5 class="card-title"><?php echo $result['firstname'].'  '. $result['lastname']; ?> </h5>
   
   <h6 class="card-subtitle mb-2 text-muted">  <?php echo $result['name'];  ?>   </h6>

   <p class="card-text"><?php echo $result['email'] ?> </p>

   <p class="card-text"><?php echo $result['contactnumber']; ?> </p>
   
   <p class="card-text"><?php echo $result['dateofbirth']; ?> </p>

   <p class="card-text">Thank you for wanting to be apart of this experence.</p>

 </div>
</div>

  </br>
<a href= "records.php" class="btn btn-primary"> Back to List </a>
       
<a href= "edit.php?id=<?php echo $result['attendee_id'] ?>" class="btn btn-warning"> Edit</a>
 <a onclick="return confirm('Are you sure you want to delete this record?')"; href="delete.php?id=<?php echo$result['attendee_id'] ?>" class="btn btn-danger"> Delete</a>
<?php  ?>
<br>
<br>
<br>
<br>
<br>


 


<?php require_once 'includes/footer.php'   ?>