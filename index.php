
 <?php 
 $tile='Index';
 require_once 'includes/header.php' ;
 require_once 'db/conn.php' ;

 $results =$crud->getspecialties();
 
 ?>
     <h1 class="text-center">Registration For IT Conference 2021!</h1>
    
    <form method="post" action="success.php">
            <div class="form-group">
                <label for="first name" class="form-label">First Name</label>
                <input type="text" class="form-control" id="firstname" name="firstname"
                aria-describedby="Enter First Name">
            </div>
            
            <div class="form-group">
                <label for="last name" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lastname" name="lastname"
                aria-describedby="Enter Last Name">
            </div>
            
            <div class="form-group">
                <label for="dob" class="form-label">Date of Birth</label>
                <input type="text" class="form-control" id="dob" name="dob"
                aria-describedby="Enter Date of Brth">
            </div>
                          
            <div class="form-group">
                <label for="specalize">Area of Expertise</label>
                 <select class="form-control"  id="specailize" name="specailize">
                       <?php while($r =$results->fetch(PDO::FETCH_ASSOC)){?>
                    <option value="<?php echo $r ['specialty_id']?>"> <?php echo $r['name']; ?></option>
                    <?php } ?>
                </select>
           
           </div>  
               
                       

            <div class="form-group">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" 
                aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
           
            <div class="form-group">
                <label for="contact" class="form-label">Contact </label>
                <input type="text" class="form-control" id="contact" name="contact"
                aria-describedby="Contact">
                <div id="contactHelp"
                 class="form-text">We'll never share your phone number with anyone else.</div>
            </div>

            <div class="d-grid gap-2">
            <button type="submit"  name="submit" 
            id="submit" class="btn btn-primary btn-block">Submit</button>
            </div>
        </form>
<br>
<br>
<br>
<br>

 <?php require_once 'includes/footer.php'   ?>