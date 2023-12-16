<?php
    include('config.php');

    // Retrieve data from the HTML form
    $ORD_NUM = $_POST['ORD_NUM'];
    $ORD_AMOUNT = $_POST['ORD_AMOUNT'];
    $ADVANCE_AMOUNT = $_POST['ADVANCE_AMOUNT'];
    $ORD_DATE = $_POST['ORD_DATE'];
    $CUST_CODE = $_POST['CUST_CODE'];
    $AGENT_CODE = $_POST['AGENT_CODE'];
    $ORD_DESCRIPTION = $_POST['ORD_DESCRIPTION'];

    // Insert the data into the database
    $sql = "INSERT INTO orders (ORD_NUM, ORD_AMOUNT, ADVANCE_AMOUNT, ORD_DATE, CUST_CODE, AGENT_CODE, ORD_DESCRIPTION) VALUES ('$ORD_NUM', '$ORD_AMOUNT', '$ADVANCE_AMOUNT', '$ORD_DATE', '$CUST_CODE', '$AGENT_CODE', '$ORD_DESCRIPTION')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Order Successfully Added!'); window.location = 'order.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
?>

