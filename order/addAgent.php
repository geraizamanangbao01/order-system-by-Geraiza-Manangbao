<?php
    include('config.php');

    // Retrieve data from the HTML form
    $AGENT_CODE = $_POST['AGENT_CODE'];
    $AGENT_NAME = $_POST['AGENT_NAME'];
    $WORKING_AREA = $_POST['WORKING_AREA'];
    $COMMISSION = $_POST['COMMISSION'];
    $PHONE_NO = $_POST['PHONE_NO'];
    $COUNTRY = $_POST['COUNTRY'];

    // Insert the data into the database
    $sql = "INSERT INTO agents (AGENT_CODE, AGENT_NAME, WORKING_AREA, COMMISSION, PHONE_NO, COUNTRY) VALUES ('$AGENT_CODE', '$AGENT_NAME', '$WORKING_AREA', '$COMMISSION', '$PHONE_NO', '$COUNTRY')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Agent Successfully Added!'); window.location = 'agent.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
?>

