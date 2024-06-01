<!DOCTYPE html>
<html>
<head>
    <title>Add New Student</title>
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
        input[type="email"],
        input[type="date"],
        input[type="tel"],
        textarea {
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
        <a class="navbar-brand" href="#">Add New Student</a>
        <a class="navbar-brand" href="#"><img src="<?php echo base_url('assets/images/add.png'); ?>" alt="Logo" height="40"></a>
    </nav>

    <div class="container mt-4">
        <h1>Add New Student</h1>
        <form method="post" action="<?php echo base_url('students/create'); ?>" enctype="multipart/form-data">
            <div class="form-group">
                <label for="fullname">Full Name:</label>
                <input type="text" class="form-control" id="fullname" name="fullname" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="date_of_birth">Date of Birth:</label>
                <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" required>
            </div>
            <div class="form-group">
                <label for="gender">Gender:</label>
                <input type="text" class="form-control" id="gender" name="gender" required>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="phone_number">Phone Number:</label>
                <input type="tel" class="form-control" id="phone_number" name="phone_number" required>
            </div>
            <div class="form-group">
                <label for="enrollment_date">Enrollment Date:</label>
                <input type="date" class="form-control" id="enrollment_date" name="enrollment_date" required>
            </div>
            <div class="form-group">
                <label for="enrollment_number">Enrollment Number:</label>
                <input type="text" class="form-control" id="enrollment_number" name="enrollment_number" required>
            </div>
            <div class="form-group">
                <label for="course">Course:</label>
                <input type="text" class="form-control" id="course" name="course" required>
            </div>
            <div class="form-group">
                <label for="year">Year:</label>
                <input type="text" class="form-control" id="year" name="year" required>
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <input type="text" class="form-control" id="status" name="status" required>

                <div class="form-group">
        <label for="image">Upload Image:</label>
        <input type="file" class="form-control-file" id="image" name="image" accept="image/jpeg, image/png, image/gif">
        <?php echo form_error('image', '<div class="text-danger">', '</div>'); ?>
    </div>

            <button type="submit" class="btn btn-primary">Add Student</button>
        </form>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
