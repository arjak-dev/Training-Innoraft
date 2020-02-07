<?php
  
    class getPhpMailerObject{

        public function getObject(){
            require "PHPMailerAutoload.php";
            $PhpMailerObject = new PHPMailer;
            return $PhpMailerObject;
        }
    }         
    class mailing{                
        
        
        public $user_email;
        //--------------------initializing user email---------------------//
        public function __construct($user_email){
            $this->user_email = $user_email;
        }
        
        
        
        // ---------------------mail sending function ----------------//
        function send_mail(){

                
                require "crediantial.php";
               
        //---------------------getting the php mailer object------------------//


                $mail = (new getPhpMailerObject())->getObject();


                //$mail->SMTPDebug = 2;                               // Enable verbose debug output


                $mail->isSMTP();                                      // Set mailer to use SMTP
                $mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
                $mail->SMTPAuth = true;                               // Enable SMTP authentication
                $mail->Username = email;                              // SMTP username
                $mail->Password = pass;                                // SMTP password
                $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 465;                                    // TCP port to connect to
                $mail->CharSet = "UTF-8";
                $mail->setFrom(email, 'Thanks for your submission');
                $mail->addAddress($_POST['email']);     // Add a recipient
                // $mail->addAddress('ellen@example.com');               // Name is optional
                $mail->addReplyTo(email, 'Reply from client');
                // $mail->addCC('cc@example.com');
                // $mail->addBCC('bcc@example.com');

                // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
                $mail->isHTML(true);                                  // Set email format to HTML

                $mail->Subject = 'THANK YOU MAIL';
                $mail->Body    = 'Thank you for your submission.';
                $mail->AltBody = '';

                if(!$mail->send()) {
                    echo '<h1>SORRY!! SUBMISSION IS NOT PROCESSED</H1>';
                    echo $mail->ErrorInfo;
                } else {
                    echo "<h1>Thank You!! Your submission is accepted</h1>";
                }
            }
        }


        if(isset($_POST['submit'])){
                $user_email = $_POST['email'];
                $obj = new mailing($user_email);
                $obj->send_mail();
        }

?>