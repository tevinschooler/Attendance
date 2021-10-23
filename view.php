<?php 
 $tile='View Record';
 require_once 'includes/header.php' ;
 require_once 'db/conn.php' ;

 if(isset($_GET['id'])){     
  $id = $_GET['id'];
  $result = $crud->getAttendeeDetails($id); 

   }else {
     
     echo"<h1 class='text-danger'>Please check details and try again.... </h1>";
   }
 ?>

<div  class="card" style="width: 18rem;">
 <div class="card-body">
   <h5 class="card-title"><?php echo $result['firstname'].'  '. $result['lastname'] ?> </h5>
   <h6 class="card-subtitle mb-2 text-muted"> <?php  echo $result['name'] ?></h6>
   <p class="card-text"><?php echo $result['email'].'  '. $result['contactnumber'] ?> </p>
   <p class="card-text"><?php echo $result['dateofbirth'] ?> </p>
   <p class="card-text">Thank you for wanting to be apart of this experence.</p>

 </div>
</div>


<?php  ?>
<br>
<br>
<br>
<br>
<br>


 


<?php require_once 'includes/footer.php'   ?>