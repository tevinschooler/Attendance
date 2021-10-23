<?php 
 $tile='Sucess';
 require_once 'includes/header.php';
 require_once 'db/conn.php';

 if(isset($_POST['submit'])){
  //extract values from the $_post array
     $fname = $_POST['firstname'];
     $lname = $_POST['lastname'];
     $dob = $_POST['dob'];
     $email = $_POST['email'];
     $contact = $_POST['contact'];
     $specailize = $_POST['specailize'];
         //call function to insert and track if success or not
  $isSuccess=$crud->insertAttendees($fname,$lname,$dob,$email,$contact,$specailize);

  if($isSuccess){
         echo 'Registration For IT Conference 2021!';
  }else{
    include 'includes/error.php';
  }
} 
 
 ?>
<h1 class="text-center text-sucess ">You Have Been Registered! </h1>


 <div class="card" style="width: 18rem;">
 <div class="card-body">
   <h5 class="card-title"><?php echo $_POST['firstname'].'  '. $_POST['lastname'] ?> </h5>
   <h6 class="card-subtitle mb-2 text-muted"> <?php  echo $_POST['specailize'] ?></h6>
   <p class="card-text"><?php echo $_POST['email'].'  '. $_POST['contact'] ?> </p>
   <p class="card-text"><?php echo $_POST['dob'] ?> </p>
   <p class="card-text">Thank you for wanting to be apart of this experence.</p>

 </div>
 
 
 
<br>
<br>
<br>
<br>


<?php require_once 'includes/footer.php'   ?>