<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
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
            max-width: 500px; /* Limit form width */
            background-color: #ffffff; /* White background */
            padding: 20px;
            border-radius: 10px; /* Rounded corners */
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1); /* Box shadow */
        }

        h1 {
            color: #343a40; /* Dark gray heading */
            margin-bottom: 30px; /* Add space below heading */
        }

        label {
            color: #343a40; /* Dark gray label text */
            font-weight: bold; /* Bold label text */
        }

        input[type="text"],
        textarea,
        input[type="number"] {
            width: 100%; /* Full width input fields */
            margin-bottom: 20px; /* Space between input fields */
            padding: 10px; /* Padding for input fields */
            border: 1px solid #ced4da; /* Gray border */
            border-radius: 5px; /* Rounded corners */
        }

        textarea {
            resize: vertical; /* Allow vertical resizing of textarea */
        }

        input[type="submit"] {
            width: 100%; /* Full width submit button */
            padding: 10px; /* Padding for submit button */
            background-color: #007bff; /* Blue submit button */
            color: #ffffff; /* White text */
            border: none; /* No border */
            border-radius: 5px; /* Rounded corners */
            cursor: pointer; /* Pointer cursor */
        }

        input[type="submit"]:hover {
            background-color: #0056b3; /* Darker blue on hover */
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <h1>Edit Student</h1>
        <form method="post" action="<?php echo base_url('students/edit/' . $student->id); ?>" enctype="multipart/form-data">
            <div class="form-group">
                <label for="fullname">Full Name:</label>
                <input type="text" class="form-control" id="fullname" name="fullname" value="<?php echo $student->fullname; ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $student->email; ?>" required>
            </div>
            <div class="form-group">
                <label for="date_of_birth">Date of Birth:</label>
                <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" value="<?php echo $student->date_of_birth; ?>" required>
            </div>
            <div class="form-group">
                <label for="gender">Gender:</label>
                <select class="form-control" id="gender" name="gender" required>
                    <option value="male" <?php if($student->gender == 'male') echo 'selected'; ?>>Male</option>
                    <option value="female" <?php if($student->gender == 'female') echo 'selected'; ?>>Female</option>
                    <option value="other" <?php if($student->gender == 'other') echo 'selected'; ?>>Other</option>
                </select>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <textarea class="form-control" id="address" name="address" rows="3" required><?php echo $student->address; ?></textarea>
            </div>
            <div class="form-group">
                <label for="phone_number">Phone Number:</label>
                <input type="tel" class="form-control" id="phone_number" name="phone_number" value="<?php echo $student->phone_number; ?>" required>
            </div>
            <div class="form-group">
                <label for="enrollment_date">Enrollment Date:</label>
                <input type="date" class="form-control" id="enrollment_date" name="enrollment_date" value="<?php echo $student->enrollment_date; ?>" required>
            </div>
            <div class="form-group">
                <label for="enrollment_number">Enrollment Number:</label>
                <input type="text" class="form-control" id="enrollment_number" name="enrollment_number" value="<?php echo $student->enrollment_number; ?>" required>
            </div>
            <div class="form-group">
                <label for="course">Course:</label>
                <input type="text" class="form-control" id="course" name="course" value="<?php echo $student->course; ?>" required>
            </div>
            <div class="form-group">
                <label for="year">Year:</label>
                <input type="text" class="form-control" id="year" name="year" value="<?php echo $student->year; ?>" required>
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <input type="text" class="form-control" id="status" name="status" value="<?php echo $student->status; ?>" required>
            </div>
            <div class="form-group">
                <label for="image">Upload Image:</label>
                <input type="file" class="form-control-file" id="image" name="image" accept="image/jpeg, image/png, image/gif">
                <?php echo form_error('image', '<div class="text-danger">', '</div>'); ?>
            </div>
            <!-- Add a hidden field to store the current image path -->
            <input type="hidden" name="current_image" value="<?php echo $student->image_path; ?>">

            <input type="submit" class="btn btn-primary" value="Update Student">
        </form>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
