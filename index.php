
 <?php 
 $tile='Index';
 require_once 'includes/header.php' ;
 require_once 'db/conn.php' ;

 $results =$crud->getspecialties();
 
 ?>
     <h1 class="text-center">Registration For IT Conference 2021!</h1>
    
    <form method="post" action="success.php"  class="from-group" enctype="multipart/form-data">
      
            <div class="form-group">
                <label for="first name" class="form-label"></label>
                <input Required type="text" class="form-control" id="firstname" name="firstname"
                aria-describedby="Enter First Name" placeholder="First Name">
            </div>
            
            
            <div class="form-group">
                <label for="last name" class="form-label"></label>
                <input required type="text" class="form-control" id="lastname" name="lastname"
                aria-describedby="Enter Last Name" placeholder="Last Name">
            </div>
            
            <div class="form-group">
                <label for="dob" class="form-label">Date of Birth</label>
                <input required type="text" class="form-control" id="dob" name="dob"
                aria-describedby="Enter Date of Brth" placeholder="Enter Date Of Birth">
            </div>
                          
            <div class="form-group">
                <label for="specalize">Area of Expertise</label>
                 <select class="form-control"  id="specailize" name="specailize">
                       <?php while($r =$results->fetch(PDO::FETCH_ASSOC)){?>
                    <option value="<?php echo $r['specialty_id']?>"> <?php echo $r['name']; ?></option>
                    <?php } ?>
                </select>
           
           </div>  
               
                       

            <div class="form-group">
                <label for="email" class="form-label">Email address</label>
                <input required type="email" class="form-control" id="email" name="email" 
                aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
           
            <div class="form-group">
                <label for="contact" class="form-label">Contact </label>
                <input required type="text" class="form-control" id="contact" name="contact"
                aria-describedby="Contact">
                <div id="contactHelp"
                 class="form-text">We'll never share your phone number with anyone else.</div>
            </div>
                       </br>
           
        <div class="custom-file">
        <input type="file" accept="image/*" class="custom-file-input" id="avatar" name="avatar" >
            <label class="custom-file-label" for="avatar">Choose File</label>
            <small id="avatar" class="form-text text-danger">File Upload is Optional</small>
        </div>
        </br>

            <div class="d-grid gap-2">

            </div>
            <button type="submit"  name="submit" 
            id="submit" class="btn btn-primary btn-block">Submit</button>
            </div>
        </form>
<br>
<br>
<br>
<br>

 <?php require_once 'includes/footer.php'   ?>