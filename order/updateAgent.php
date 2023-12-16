<?php
	require('config.php'); 
	if (isset($_POST['submit'])) {
    	$AGENT_CODE = $_POST['AGENT_CODE'];
    	$AGENT_NAME = $_POST['AGENT_NAME'];
    	$WORKING_AREA = $_POST['WORKING_AREA'];
    	$COMMISSION = $_POST['COMMISSION'];
    	$PHONE_NO = $_POST['PHONE_NO'];
    	$COUNTRY = $_POST['COUNTRY'];
    	$sql ="UPDATE `agents` SET `AGENT_CODE` = '$AGENT_CODE', `AGENT_NAME` = '$AGENT_NAME', `WORKING_AREA` = '$WORKING_AREA', `COMMISSION` = '$COMMISSION', `PHONE_NO` = '$PHONE_NO', `COUNTRY` = '$COUNTRY' WHERE `AGENT_CODE`='$AGENT_CODE'";
    	if ($conn->query($sql) === TRUE) {
		   	echo "<script>alert('Successfully Saved!'); window.location = 'agent.php';</script>";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
    }
?>