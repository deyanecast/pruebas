<?php
echo "hola";
require_once('CONFIG/mandrill/src/Mandrill.php');
echo "hola";
$htmlMessage = "hola";
$subject = "hola";
$fromName = "ale";
$toEmail = "arroyoalejandra97@gmail.com";
$toName = "ale";
try {
   $mandrill = new Mandrill('a922311d78760c4996c883392c1089c2-us14');
   $message = array(
       'html' => $htmlMessage,
       'subject' => $subject,
       'from_email' => "arroyoalejandra97@gmail.com",
       'from_name' => $fromName,
       'to' => array(
           array(
               'email' => $toEmail,
               'name' =>  $toName,
               'type' => 'to'
           )
       )
   );
   $result = $mandrill->messages->send($message);
   print_r($result);
} catch(Mandrill_Error $e) {
   echo 'A mandrill error occurred: ' . get_class($e) . ' - ' . $e->getMessage();
   throw $e;
}
?>