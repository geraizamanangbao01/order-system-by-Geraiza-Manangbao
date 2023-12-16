<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordering System</title>
    <link href="css/web20.css" rel="stylesheet" type="text/css" />
    <link rel="icon" type="image/x-icon" href="">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link href="assets/bootstrap/css/datatable/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
    <style>
        a {
          text-decoration: none; /* Remove underline */
          color: inherit; /* Inherit text color from parent */
        }

        /* Style for the button link */
        .button-link {
          display: inline-block; /* Make it a block-level element */
          padding: 10px 20px; /* Adjust padding as needed */
          background-color: #3498db; /* Set background color */
          color: #fff; /* Set text color */
          border: 1px solid #2980b9; /* Add a border */
          border-radius: 5px; /* Add border-radius for rounded corners */
          transition: background-color 0.3s ease; /* Add a smooth transition for background color */
        }

        /* Hover effect */
        .button-link:hover {
          background-color: #2980b9; /* Change background color on hover */
        }

        .styled-heading {
          background-color: #3498db; /* Set the background color */
          color: #fff; /* Set the text color */
          padding: 10px; /* Add padding for spacing */
          border-radius: 5px; /* Add border-radius for rounded corners */
        }

        .center {
          margin-left: auto;
          margin-right: auto;
        }
    </style>
</head>

<body>
    <?php
        include('header.php');                                   
    ?>
    <h2 class="styled-heading">Orders</h2><br />
    <?php
        require('config.php'); 
        $count = 0;
        $sql = "SELECT * FROM orders";
        $result = mysqli_query($conn, $sql);                                   
    ?>
    <table table border="1" width="95%" class="center">
        
            <tr>
                <th>ORD_NUM</th>
                <th>ORD_AMOUNT</th>
                <th>ADVANCE_AMOUNT</th>
                <th>ORD_DATE</th>
                <th>CUST_CODE</th>    
                <th>AGENT_CODE</th>
                <th>ORD_DESCRIPTION</th>
                <th colspan="2" aling="center">
                    <a href="#" data-toggle="modal" data-target="#addOrder" class="button-link">ADD RECORD</a>
                </th>

            </tr>
        
        <tbody>
    <?php
       
        if (mysqli_num_rows($result) > 0) {
        // output data of each row
            while($row = mysqli_fetch_assoc($result )) {
                $count += 1;
    ?>
            <tr>
                <td><?php echo $row['ORD_NUM']; ?></td>
                <td><?php echo $row['ORD_AMOUNT']; ?></td>
                <td><?php echo $row['ADVANCE_AMOUNT']; ?></td>
                <td><?php echo $row['ORD_DATE']; ?></td>
                <td><?php echo $row['CUST_CODE']; ?></td>
                <td><?php echo $row['AGENT_CODE']; ?></td>
                <td><?php echo $row['ORD_DESCRIPTION']; ?></td>
                <td><a href="#" data-toggle="modal" data-target="#viewOrder<?php echo $count ?>" class="button-link">View</a></td>
                <td><a href="#" data-toggle="modal" data-target="#editOrder<?php echo $count ?>" class="button-link">Edit</a></td>
            </tr>
        <?php
            include 'modalViewOrder.php';
            include 'modalEditOrder.php';
            }
        } ?>

        </tbody>

    </table>
    <?php include('modalAddOrder.php'); ?> 
    
    <script src="assets/bootstrap/js/jquery-3.5.1.slim.min.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/bootstrap/js/datatable/jquery.dataTables.min.js"></script>
    <script src="assets/bootstrap/js/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="assets/bootstrap/js/datatable/datatable-basic.min.js"></script>
</body>

</html>
