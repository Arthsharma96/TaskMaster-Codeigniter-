<!DOCTYPE html>
<html>
<head>
    <title>Student List</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Remove default top margin and padding from navbar */
        .navbar {
            margin-top: 0;
            padding-top: 0;
        }

    /* Adjust the layout of the action buttons */
    .btn-actions {
        display: flex;
        flex-direction: row;
    }

    /* Add margin between the action buttons */
    .btn-actions .btn {
        margin-right: 5px;
    }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <!-- Replace text with logo image -->
        <a class="navbar-brand" href="#"><img src="<?php echo base_url('assets/images/l1.png'); ?>" alt="Logo" height="40"></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <?php if ($this->session->userdata('username')): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('students/create'); ?>">Add Student</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo $this->session->userdata('username'); ?>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php echo base_url('user/profile'); ?>">Profile</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?php echo base_url('user/logout'); ?>">Logout</a>
                        </div>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('user/login'); ?>">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('user/register'); ?>">Register</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-4">
    <h1>Student List</h1>
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Date of Birth</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Phone Number</th>
                <th>Enrollment Date</th>
                <th>Enrollment Number</th>
                <th>Course</th>
                <th>Year</th>
                <th>Status</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($students as $student) { ?>
                <tr>
                    <td><?php echo $student->id; ?></td>
                    <td><?php echo $student->fullname; ?></td>
                    <td><?php echo $student->email; ?></td>
                    <td><?php echo $student->date_of_birth; ?></td>
                    <td><?php echo $student->gender; ?></td>
                    <td><?php echo $student->address; ?></td>
                    <td><?php echo $student->phone_number; ?></td>
                    <td><?php echo $student->enrollment_date; ?></td>
                    <td><?php echo $student->enrollment_number; ?></td>
                    <td><?php echo $student->course; ?></td>
                    <td><?php echo $student->year; ?></td>
                    <td><?php echo $student->status; ?></td>
                    <td><img src="<?php echo $student->image_path; ?>" alt="Student Image" width="100"></td>
                    <td class="btn-actions">
                    <a href="<?php echo base_url('students/edit/' . $student->id); ?>" class="btn btn-sm btn-primary">Edit</a>
                    <a href="<?php echo base_url('students/delete/' . $student->id); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this student?')">Delete</a>
                </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<!-- Include the logout on back script -->
<script>
    var base_url = "<?php echo base_url(); ?>"; // Make base_url available in JavaScript
</script>
<script src="<?php echo base_url('assets/js/logout_on_back.js'); ?>"></script>

<!-- Bootstrap JS and dependencies (jQuery and Popper.js) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
