<?php>
 if (isset($_post['send message'])){
   $name = $_POST['name'];
   $subject = $_POST['subject'];
   $mailFrom = $_POST['email'];
   $message = $_POST['Message'];
   
   $mailTo = "djalmad841@gmail.com";
   $hearder = "From:".$mailFrom;
   $txt = "you have received an e-mail from.$name.".\n\n".message;
   
  mail(mailTo, $subject, $txt, $headers);
  header("Location: Contact.html?mailsend");
 }



    $name = $_POST("name");
  
    $Visotor_email = $_POST("email");
   
    $Message = $_POST("Message");
    
    $email_from = "djalmad841@gmail.com";
   
    $email_subject ="new form submission ";
   
    $email_body = "user name: $name.\n".
           "user email: $Visotor_email.\n".
           "user message $message.\n".
    
    $to= "djalmad841@gmail.com";
    
    $hearders = "from: $email_from \r\n";
    
    $hearders = "reply-to $Visotor_email\r\n";
    
    $mail($to,$email_subject,$email_body,$hearders);
    
    hearder("location: Contact.html");
  
    ?>