<?php

$EmailTo = "contato@ramonuchoa.com.br";
$Name = Trim(stripslashes($_POST['name']));
$Email = Trim(stripslashes($_POST['email']));
$Message = Trim(stripslashes($_POST['message']));

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=404.html\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Nome: ";
$Body .= $Name;
$Body .= "\n\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n\n";
$Body .= "Mensagem: ";
$Body .= $Message;

// send email
$success = mail($EmailTo, "Cliente do site", $Body);

// redirect to success page
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=thanks.html\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=404.html\">";
}
?>
