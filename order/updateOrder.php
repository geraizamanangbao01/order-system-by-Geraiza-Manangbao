<?php
	require('config.php'); 
	if (isset($_POST['submit'])) {
    	$ORD_NUM = $_POST['ORD_NUM'];
    	$ORD_AMOUNT = $_POST['ORD_AMOUNT'];
    	$ADVANCE_AMOUNT = $_POST['ADVANCE_AMOUNT'];
    	$ORD_DATE = $_POST['ORD_DATE'];
    	$CUST_CODE = $_POST['CUST_CODE'];
    	$AGENT_CODE = $_POST['AGENT_CODE'];
    	$ORD_DESCRIPTION = $_POST['ORD_DESCRIPTION'];
    	$sql ="UPDATE `orders` SET `ORD_NUM` = '$ORD_NUM', `ORD_AMOUNT` = '$ORD_AMOUNT', `ADVANCE_AMOUNT` = '$ADVANCE_AMOUNT', `ORD_DATE` = '$ORD_DATE', `CUST_CODE` = '$CUST_CODE', `AGENT_CODE` = '$AGENT_CODE', `ORD_DESCRIPTION` = '$ORD_DESCRIPTION' WHERE `ORD_NUM`='$ORD_NUM'";
    	if ($conn->query($sql) === TRUE) {
		   	echo "<script>alert('Successfully Saved!'); window.location = 'order.php';</script>";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
    }
?>