<?php   
        class crud{
            // private database object
            private $db;
            // constructor to initialize private varibale to the databse connnetion
            function __construct($conn){
                $this->db =$conn;
            }

           public function insertAttendees($fname, $lname, $dob, $email, $contact, $specailize){
               try {
$sql ="INSERT INTO attendee (firstname,lastname,dateofbirth,email,contactnumber,specialty_id)
VALUES(:firstname, :lastname, :dateofbirth, :email,:contactnumber, :specialty_id)";
                   $stmt= $this-> db->prepare($sql);
                   $stmt->bindparam(':firstname', $fname);
                   $stmt->bindparam(':lastname', $lname);
                   $stmt->bindparam(':dateofbirth', $dob);
                   $stmt->bindparam(':contactnumber', $contact);
                   $stmt->bindparam(':email', $email);
                   $stmt->bindparam(':specialty_id', $specailize);

                    $stmt->execute();
                    return true;
               } catch (PDOException $e) {
                   echo $e->getMessage();
                   return false;
               }
        
            }

            public function editAttendee($id,$fname, $lname, $dob, $email, $contact, $specailize){
                try {
                    $sql= "UPDATE `attendee` SET `firstname`= fname,`lastname`= lname,
                    `dateofbirth`= dob,email = email, contactnumber = contact,`specialty_id` = specailize 
                     WHERE attendee_id = :id";
                     $stmt= $this-> db->prepare($sql);
                     $stmt->bindparam(':id', $id);
                     $stmt->bindparam(':firstname', $fname);
                     $stmt->bindparam(':lastname', $lname);
                     $stmt->bindparam(':dateofbirth', $dob);
                     $stmt->bindparam(':contactnumber', $contact);
                     $stmt->bindparam(':email', $email);
                     $stmt->bindparam(':specialty_id', $specailize);
                    
                     $stmt->execute();
                     return true;
                    
                } catch (PDOException $e) {
                        echo $e->getMessage();
                        return false;
                    }             

            }

            public function getAttendeeDetails($id){
                $sql ="select * from attendee a inner join specialties s on a.specialty_id = specialty_id 
                 where attendee_id=:id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id', $id);
                $result =$stmt->execute();
                $result= $stmt->fetch();
                return $result;
            }

            public function deleteAttendees($id){
                try {
                    $sql= "delete from attendee where attendee_id= :id";
                    $stmt = $this->db->prepare($sql);
                    $stmt->bindparam('id', $id);
                    $stmt->execute();
                return true;
                } catch (PDOException $e) {
                    echo $e->getMessage();
                    return false;
                }
                

            }

            public function getAttendees(){
            $sql ="SELECT * FROM `attendee` a inner join specialties  on a.specialty_id = specialty_id";
                $result= $this->db->query($sql);
                return $result;
            }

            public function getspecialties(){
                $sql ="SELECT * FROM `specialties`";
                $result= $this->db->query($sql);
                return $result;
            }

            

        }


?>