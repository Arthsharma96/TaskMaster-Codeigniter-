<!DOCTYPE html>
<html>
<head>
    <title>Add New Item</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Custom styles */
        body {
            background-color: #f8f9fa; /* Light gray background */
            padding-top: 50px; /* Add space at the top for fixed navbar */
        }

        h1 {
            color: #343a40; /* Dark gray heading */
        }

        .container {
            max-width: 500px; /* Limit form width */
            background-color: #ffffff; /* White background for form */
            padding: 20px;
            border-radius: 10px; /* Rounded corners */
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1); /* Box shadow */
        }

        label {
            color: #343a40; /* Dark gray label text */
            font-weight: bold; /* Bold label text */
        }

        input[type="text"],
        textarea,
        input[type="number"] {
            width: 100%; /* Full width input fields */
            margin-bottom: 15px; /* Space between input fields */
            padding: 10px; /* Padding for input fields */
            border: 1px solid #ced4da; /* Gray border */
            border-radius: 5px; /* Rounded corners */
        }

        textarea {
            resize: vertical; /* Allow vertical resizing of textarea */
        }

        button[type="submit"] {
            width: 100%; /* Full width submit button */
            padding: 10px; /* Padding for submit button */
            background-color: #007bff; /* Blue submit button */
            color: #ffffff; /* White text */
            border: none; /* No border */
            border-radius: 5px; /* Rounded corners */
            cursor: pointer; /* Pointer cursor */
        }

        button[type="submit"]:hover {
            background-color: #0056b3; /* Darker blue on hover */
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">Add Your Items Here :)</a>
        <a class="navbar-brand" href="#"><img src="<?php echo base_url('assets/images/add.png'); ?>" alt="Logo" height="40"></a>
    </nav>

    <div class="container mt-4">
        <h1>Add New Item</h1>
        <form method="post" action="<?php echo base_url('items/create'); ?>">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" class="form-control" id="price" name="price" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Item</button>
        </form>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
