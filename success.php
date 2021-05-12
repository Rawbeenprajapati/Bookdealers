<?php
include 'setting.php';

$ref = $_GET['refId'];

$data =[
    'amt'=>$actualamount,
    'rid'=> $ref,
    'pid'=> $_SESSION['orderid'],
    'scd'=> $merchant_code
];

    $curl = curl_init($fraudcheck_url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($curl);
    echo $response;
 
    curl_close($curl);
    
    if(strpos(  $response, "Success") !== false){
        // header("Location: https://drive.google.com/file/d/1Mab2MK6zmQzCUFrWpC8DVdc_tGqwCUMK/view?usp=drive_open");

      echo "<script>alert('Payment success')</script>"; 
        echo "<script>window.location='buyfinal.php';</script>";
        // echo "hello";
    } else{
         // header("Location: https://brp.com.np/esewa");
    	echo "<script>alert('Payment failed!!!')</script>"; 
    	echo "<script>window.location='buyer_cart.php';</script>";
    	// echo "false";
    }

?>