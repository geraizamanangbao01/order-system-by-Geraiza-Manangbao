<?php
    include('config.php');

    // Retrieve data from the HTML form
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

    // Insert the data into the database
    $sql = "INSERT INTO customer (CUST_CODE, CUST_NAME, CUST_CITY, WORKING_AREA, CUST_COUNTRY, GRADE, OPENING_AMT, RECEIVE_AMT, PAYMENT_AMT, OUTSTANDING_AMT, PHONE_NO, AGENT_CODE) VALUES ('$CUST_CODE', '$CUST_NAME', '$CUST_CITY', '$WORKING_AREA', '$CUST_COUNTRY', '$GRADE', '$OPENING_AMT', '$RECEIVE_AMT', '$PAYMENT_AMT', '$OUTSTANDING_AMT', '$PHONE_NO', '$AGENT_CODE')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Customer Successfully Added!'); window.location = 'customer.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
?>

