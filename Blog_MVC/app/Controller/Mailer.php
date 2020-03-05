<?php
  namespace Controller;

  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;
  class Mailer{
    public $mailer;
    public function __construct() {
      $this->mailer = new PHPMailer();
      $this->mailer->isSMTP();                                      // Set mailer to use SMTP
      $this->mailer->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
      $this->mailer->SMTPAuth = true;                               // Enable SMTP authentication
      $this->mailer->Username = 'arjak.mondal@innoraft.com';                              // SMTP username
      $this->mailer->Password = 'Word@579';                                // SMTP password
      $this->mailer->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
      $this->mailer->Port = 465;                                    // TCP port to connect to
      $this->mailer->CharSet = "UTF-8";
    }

    public function sentotp($email, $otp) {
      $this->mailer->setFrom(
        'arjak.mondal@innoraft.com',
        'Thanks for your submission'
      );
      $this->mailer->addAddress($email);
      $this->mailer->addReplyTo($email, 'Reply from client');
      $this->mailer->isHTML(true);
      $this->mailer->Subject = 'Forgot Password OTP From Blogify';
      $this->mailer->Body    = 'Dear Sir/Mam,
      Your one time password reset code is: <b>'.$otp.'</b>.
      Thanks for subscribing to Blogify';
      $this->mailer->AltBody = '';
      if (!$this->mailer->send()) {
        echo '<h1>SORRY!! SUBMISSION IS NOT PROCESSED</H1>';
        echo $this->mailer->ErrorInfo;
      } else {
        echo "<h1>Thank You!! Your submission is accepted</h1>";
      }
    }
  }