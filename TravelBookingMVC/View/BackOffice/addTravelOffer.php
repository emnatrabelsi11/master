<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Travel Offer</title>
</head>
<body>
    <h1>Add Travel Offer</h1>
    <form action="Verification.php" method="POST">
        <label>Title:</label>
        <input type="text" name="title" required minlength="3"><br><br>

        <label>Destination:</label>
        <input type="text" name="destination" required minlength="3"><br><br>

        <label>Departure Date:</label>
        <input type="date" name="departure_date" required><br><br>

        <label>Return Date:</label>
        <input type="date" name="return_date" required><br><br>

        <label>Price:</label>
        <input type="number" name="price" required step="0.01"><br><br>

        <label>Available:</label>
        <input type="checkbox" name="disponible" value="1"><br><br>

        <label>Category:</label>
        <input type="text" name="category" required><br><br>

        <input type="submit" value="Add Offer">
    </form>
</body>
</html>
