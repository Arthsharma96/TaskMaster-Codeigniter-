<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Custom styles */
        body {
            background-color: #f8f9fa; /* Light gray background */
            padding-top: 50px; /* Add space at the top */
            padding-bottom: 50px; /* Add space at the bottom */
        }

        .container {
            max-width: 500px; /* Limit container width */
            background-color: #ffffff; /* White background */
            padding: 20px;
            border-radius: 10px; /* Rounded corners */
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1); /* Box shadow */
        }

        h1 {
            color: #343a40; /* Dark gray heading */
            margin-bottom: 30px; /* Add space below heading */
        }

        p {
            margin-bottom: 20px; /* Add space below paragraph */
        }

        .btn-primary {
            background-color: #007bff; /* Blue button background */
            border-color: #007bff; /* Blue button border color */
        }

        .btn-primary:hover {
            background-color: #0056b3; /* Darker blue on hover */
            border-color: #0056b3; /* Darker blue border on hover */
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <h1>Profile</h1>
        <p>Welcome, <?php echo $username; ?>!</p>
        <a href="<?php echo base_url('user/logout'); ?>" class="btn btn-primary">Logout</a>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
