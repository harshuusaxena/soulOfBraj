<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

// following files need to be included
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");

$paytmChecksum = "";
$paramList = array();
$isValidChecksum = "FALSE";

$paramList = $_POST;
$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application�s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.


if($isValidChecksum == "TRUE") {
	//echo "<b>Checksum matched and following are the transaction details:</b>" . "<br/>";
	if ($_POST["STATUS"] == "TXN_SUCCESS") {
	//	echo "<b>Transaction status is success</b>" . "<br/>";
        
        echo '<html>
                <head>

              <meta charset="utf-8">	
              <title>Soul Of Braj</title>
              <!-- mobile responsive meta -->
              <meta name="viewport" content="width=device-width, initial-scale=1">
              <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

              <!-- Stylesheets -->
              <link href="css/style.css" rel="stylesheet">
              <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
              </head>
              <body>
              <div class="text-center">
	               <div class="text-center">
		                <img src="images/success.gif" alt="">
	               </div>
              <h1 class="display-3">Transaction Successful</h1><br>
              <h3 class="display-3">Thank You! 🙏</h3>
              <p class="lead">Your given donation will help to others people<br><strong>“You have two hands. One to help yourself, the second to help others.”</strong></p>
 
                <div class="link-btn">
                     <a href="index.html" class="btn-style-one">Continue  to  Homepage</a>  
                </div>
             </div>

            <script src="plugins/jquery.js"></script>
            <script src="plugins/bootstrap.min.js"></script>
            <script src="plugins/bootstrap-select.min.js"></script>

            </body>
            </html>';
	}
	else {
		//echo "<b>Transaction status is failure</b>" . "<br/>";
        echo'<html>
                <head>

              <meta charset="utf-8">	
              <title>Soul Of Braj</title>
              <!-- mobile responsive meta -->
              <meta name="viewport" content="width=device-width, initial-scale=1">
              <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

              <!-- Stylesheets -->
              <link href="css/style.css" rel="stylesheet">
              <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
              </head>
              <body>
              <div class="text-center">
	               <div class="text-center">
		                <img src="images/failed.png" alt="">
	               </div> 
            <div class="link-btn">
                     <a href="donate.html" class="btn-style-one">Try Again</a>  
                </div>
             </div>

            <script src="plugins/jquery.js"></script>
            <script src="plugins/bootstrap.min.js"></script>
            <script src="plugins/bootstrap-select.min.js"></script>

            </body>
            </html>';
	}

	/*if (isset($_POST) && count($_POST)>0 )
	{ 
		foreach($_POST as $paramName => $paramValue) {
				echo "<br/>" . $paramName . " = " . $paramValue;
		}
	}*/
	

}
else {
	echo "<b>Checksum mismatched.</b>";
	//Process transaction as suspicious.
}

?>

<!--<html>
<head>

<meta charset="utf-8">	
<title>Soul Of Braj</title>
<!-- mobile responsive meta -
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- Stylesheets -
<link href="css/style.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<div class="text-center">
	<div class="text-center">
		<img src="images/success.gif" alt="">
	</div>
  <h1 class="display-3">Transaction Successful</h1><br>
  <h3 class="display-3">Thank You! 🙏</h3>
  <p class="lead">Your given donation will help to others people<br><strong>“You have two hands. One to help yourself, the second to help others.”</strong></p>
 
  <div class="link-btn">
        <a href="index.html" class="btn-style-one">Continue  to  Homepage</a>  
    </div>
</div>

<script src="plugins/jquery.js"></script>
<script src="plugins/bootstrap.min.js"></script>
<script src="plugins/bootstrap-select.min.js"></script>

</body>
</html>-->
