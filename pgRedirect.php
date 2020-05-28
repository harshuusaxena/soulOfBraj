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
    
    
    
    
}

require( 'phpmailer/PHPMailerAutoload.php');
    
    $mail = new PHPMailer;
    $mail->IsSMTP();

    //$mail->SMTPDebug= 1;
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPAuth=true;
    $mail->SMTPSecure='tls';
    
    $mail->Username = 'soulofbrajfederationorg@gmail.com';
    $mail->Password = 'tanu6670';
    
    $mail->setFrom('info@soulofbrajfederation.org','Soul Of Braj Federation');
    $mail->addAddress('soulofbrajfederationorg@gmail.com');
    
    $mail->isHTML(true);
    $mail->Subject="Donation form info from gateway page";
    $mail->Body="<h3>Hare Krishna Admin,</h3><h4>We have got a new donation by " .$_POST['lastName'].". The details are as following:-<br></h4><table><tr><td>Transcation Id</td><td>:</td><td>".$_POST['ORDER_ID']."</td></tr><tr><td>Donation Amount</td><td>:</td><td>".$_POST['TXN_AMOUNT']."</td></tr><tr><td>Name</td><td>:</td><td>".$_POST['lastName']."</td></tr><tr><td>DOB</td><td>:</td><td>".$_POST['birthday']."</td></tr><tr><td>Gender</td><td>:</td><td>".$_POST['gender']."</td></tr><tr><td>Email Id</td><td>:</td><td>".$_POST['email']."</td></tr><td>Mobile No.</td><td>:</td><td>".$_POST['phone']."</td></tr> <tr><td>PAN Number</td><td>:</td><td>".$_POST['paan']."</td></tr><tr><td>Aadhaar Number</td><td>:</td><td>".$_POST['Aadhaar_Number']."</td></tr><tr><td>PIN Number</td><td>:</td><td>".$_POST['Pin_Number']."</td></tr><tr><td>State</td><td>:</td><td>".$_POST['state']."</td></tr><tr><td>City</td><td>:</td><td>".$_POST['City']."</td></tr><tr><td>Donation For</td><td>:</td><td>".$_POST['donation']."</td></tr></table>";

if(!$mail-> send()){
echo ".";
}
else{
    echo "";
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