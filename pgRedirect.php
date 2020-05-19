<?php

session_start();

include('includes/firebase.php');

if(isset($_POST['submitButton'])){

    $ORDER_ID = $_POST['ORDER_ID'];
    $TXN_AMOUNT = $_POST['TXN_AMOUNT'];
    $lastName = $_POST['lastName'];
    $birthday =$_POST['birthday'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $paan = $_POST['paan'];
    $Aadhaar_Number = $_POST['Aadhaar_Number'];
    $Pin_Number = $_POST['Pin_Number'];
    $state = $_POST['state'];
    $City = $_POST['City'];
    $donation =$_POST['donation'];
    
    
    $data = [
        'Donation_Id' => $ORDER_ID,
        'Amount' => $TXN_AMOUNT,
        'Name' => $lastName,
        'DOB' => $birthday,
        'Gender' => $gender,
        'Email_ID' => $email,
        'Mobile_No' => $phone,
        'aadhaar_number' => $Aadhaar_Number,
        'pin_number' => $Pin_Number,
        'State' => $state,
        'city' => $City,
        'Donation_For' => $donation,
        'pan_number' => $paan,
    ];
    
    
    $ref = "Donation_using_gateway/";
    $postdata = $database->getReference($ref)->push($data);
    
    
    require('oAuth/PHPMailerAutoload.php');
    
    $mail = new PHPMailer;
    $mail-> isSMTP();
    
    $mail->Host = 'mail.soulofbrajfederation.org ';
    $mail->Port = 465;
    $mail->SMTPAuth=true;
    $mail->SMTPSecure='tls';
    
    $mail->Username = 'soulofbrajfederationorg@gmail.com';
    $mail->Password = 'tanu6670';
    
    $mail->setFrom('soulofbrajfederationorg@gmail.com','Soul Of Braj Federation');
    $mail->addAddress('info@soulofbrajfederation.org');
    
    $mail->isHTML(true);
    $mail->Subject='Donation form info from gateway page';
    $mail->Body="<h1>Hii, this is testing mail.</h1>";
    
}



header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");
// following files need to be included
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");

$checkSum = "";
$paramList = array();

$ORDER_ID = $_POST["ORDER_ID"];
$CUST_ID = $_POST["CUST_ID"];
$INDUSTRY_TYPE_ID = $_POST["INDUSTRY_TYPE_ID"];
$CHANNEL_ID = $_POST["CHANNEL_ID"];
$TXN_AMOUNT = $_POST["TXN_AMOUNT"];

// Create an array having all required parameters for creating checksum.
$paramList["MID"] = PAYTM_MERCHANT_MID;
$paramList["ORDER_ID"] = $ORDER_ID;
$paramList["CUST_ID"] = $CUST_ID;
$paramList["INDUSTRY_TYPE_ID"] = $INDUSTRY_TYPE_ID;
$paramList["CHANNEL_ID"] = $CHANNEL_ID;
$paramList["TXN_AMOUNT"] = $TXN_AMOUNT;
$paramList["WEBSITE"] = PAYTM_MERCHANT_WEBSITE;



$paramList["CALLBACK_URL"] = "http://localhost/soulofbraj/pgResponse.php";
/*$paramList["MSISDN"] = $MSISDN; //Mobile number of customer
$paramList["EMAIL"] = $EMAIL; //Email ID of customer
$paramList["VERIFIED_BY"] = "EMAIL"; //
$paramList["IS_USER_VERIFIED"] = "YES"; //
*/


//Here checksum string will return by getChecksumFromArray() function.
$checkSum = getChecksumFromArray($paramList,PAYTM_MERCHANT_KEY);

?>
<html>
<head>
<title>Merchant Check Out Page</title>
</head>
<body>
	<center><h1>Please do not refresh this page...</h1></center>
		<form method="post" action="<?php echo PAYTM_TXN_URL ?>" name="f1">
		<table border="1">
			<tbody>
			<?php
			foreach($paramList as $name => $value) {
				echo '<input type="hidden" name="' . $name .'" value="' . $value . '">';
			}
			?>
			<input type="hidden" name="CHECKSUMHASH" value="<?php echo $checkSum ?>">
			</tbody>
		</table>
		<script type="text/javascript">
			document.f1.submit();
		</script>
	</form>
</body>
</html>