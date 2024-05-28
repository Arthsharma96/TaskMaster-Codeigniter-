<!DOCTYPE html>
<html>
<head>
    <title>Edit Item</title>
</head>
<body>
    <h1>Edit Item</h1>
    <form method="post" action="<?php echo base_url('items/edit/' . $item->id); ?>">
        <label>Name:</label><br>
        <input type="text" name="name" value="<?php echo $item->name; ?>" required><br>
        <label>Description:</label><br>
        <textarea name="description" required><?php echo $item->description; ?></textarea><br>
        <label>Price:</label><br>
        <input type="number" name="price" value="<?php echo $item->price; ?>" required><br>
        <input type="submit" value="Update Item">
    </form>
</body>
</html>


