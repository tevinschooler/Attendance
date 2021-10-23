<?php

require_once 'db/conn.php' ;
if(!$_GET['id']){
    echo 'error';

}else{
    $id =$_GET['id'];

$result=$crud->deleteAttendees($id);
if($result)
          {

    header("Location:records.php");
            }
            
    else{

    echo '';
         }
    }

?>