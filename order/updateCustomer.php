<?php
	require('config.php'); 
	if (isset($_POST['submit'])) {
    	$CUST_CODE = $_POST['CUST_CODE'];
    	$CUST_NAME = $_POST['CUST_NAME'];
    	$CUST_CITY = $_POST['CUST_CITY'];
    	$WORKING_AREA = $_POST['WORKING_AREA'];
    	$CUST_COUNTRY = $_POST['CUST_COUNTRY'];
    	$GRADE = $_POST['GRADE'];
    	$OPENING_AMT = $_POST['OPENING_AMT'];
    	$RECEIVE_AMT = $_POST['RECEIVE_AMT'];
    	$PAYMENT_AMT = $_POST['PAYMENT_AMT'];
    	$OUTSTANDING_AMT = $_POST['OUTSTANDING_AMT'];
    	$PHONE_NO = $_POST['PHONE_NO'];
    	$AGENT_CODE = $_POST['AGENT_CODE'];
    	$sql ="UPDATE `customer` SET `CUST_CODE` = '$CUST_CODE', `CUST_NAME` = '$CUST_NAME', `CUST_CITY` = '$CUST_CITY', `WORKING_AREA` = '$WORKING_AREA', `CUST_COUNTRY` = '$CUST_COUNTRY', `GRADE` = '$GRADE', `OPENING_AMT` = '$OPENING_AMT', `RECEIVE_AMT` = '$RECEIVE_AMT', `PAYMENT_AMT` = '$PAYMENT_AMT', `OUTSTANDING_AMT` = '$OUTSTANDING_AMT', `PHONE_NO` = '$PHONE_NO', `AGENT_CODE` = '$AGENT_CODE' WHERE `CUST_CODE`='$CUST_CODE'";
    	if ($conn->query($sql) === TRUE) {
		   	echo "<script>alert('Successfully Saved!'); window.location = 'customer.php';</script>";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
    }
?>