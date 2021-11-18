<?php 
    require 'vendor/autoload.php';

    class SendEmail{

        public static function SendMail($to,$subject,$content){
            $key = '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';

            $email = new \SendGrid\Mail\Mail();
            $email->setFrom("tevinkschooler@gmail.com", "Tevin Schooler");
            $email->setSubject($subject);
            $email->addTo($to);
            $email->addContent("text/plain", $content);
            //$email->addContent("text/html", $content);

            $sendgrid = new \SendGrid($key);

            try{
                $response = $sendgrid->send($email);
                return $response;
            }catch(Exception $e){
                echo 'Email exception Caught : '. $e->getMessage() ."\n";
                return false;
            }
        }
    }
?>