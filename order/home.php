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
    <h2 class="styled-heading">HOME</h2><br />
    
    
    <script src="assets/bootstrap/js/jquery-3.5.1.slim.min.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/bootstrap/js/datatable/jquery.dataTables.min.js"></script>
    <script src="assets/bootstrap/js/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="assets/bootstrap/js/datatable/datatable-basic.min.js"></script>
</body>

</html>
