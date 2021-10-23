<?php   
 require_once 'db/conn.php' ;


if(isset($_POST['submit'])){
    //extract values from the $_post array
       $id = $_POST['id'];
       $fname = $_POST['firstname'];
       $lname = $_POST['lastname'];
       $dob = $_POST['dob'];
       $email = $_POST['email'];
       $contact = $_POST['contact'];
       $specailize = $_POST['specailize'];

       $result =$crud->editAttendee($id,$fname, $lname, $dob, $email, $contact, $specailize);

       if($result){
           header("location:records.php");
        }
        else{
            include 'includes/error.php';
        }
    }
    else{
        echo'error';
    }
 

?>