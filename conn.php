<?php
     /*    $host='127.0.0.1';
        $db='attandance_db';
        $user='root';
        $pass='';
        $charset ='utf8mb4';

        $dsn= "mysql:host=$host; dbname=$db; charest=$charset";
 */
       
     $host='b658z28mw41zkohogpsq-mysql.services.clever-cloud.com';
        $db='b658z28mw41zkohogpsq';
        $user='ullkfasrjdh89suz';
        $pass='wYqea2rXoCSSicFsq5Qi';
        $charset ='utf8mb4';

        $dsn= "mysql:host=$host; dbname=$db; charest=$charset";



       

        try{
                $pdo = new PDO($dsn, $user, $pass);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                echo '<span class="badge bg-success"> </span>';

        } catch(PDOException $e) {

          throw new PDOException($e->getMessage("Database it offline"));
          
        }

        require_once 'crud.php';
        require_once 'user.php';
        $crud=new crud($pdo);
        $user=new user($pdo);

        $user->insertUser("admin","password");
?>