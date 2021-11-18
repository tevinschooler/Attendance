<?php
 require_once 'includes/auth_check.php';
 require_once 'includes/header.php' ;
require_once 'db/conn.php' ;
if(!$_GET['id']){
    include 'includes/error.php';
    
    header("location: index.php");


}else{
    $id =$_GET['id'];

$result=$crud->deleteAttendees($id);
if($result)
          {

    header("Location:records.php");
            }
            
    else{

        include 'includes/error.php';

         }
    }

?>