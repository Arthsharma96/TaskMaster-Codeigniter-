<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
