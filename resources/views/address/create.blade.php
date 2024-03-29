<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Address</title>
</head>
<body>
    <h1>Create Address</h1>
    <form action="{{ route('addresses.store') }}" method="POST">
        <label for="street">Street:</label><br>
        <input type="text" id="street" name="street"><br>
        <label for="city">City:</label><br>
        <input type="text" id="city" name="city"><br>
        <label for="province">Province:</label><br>
        <input type="text" id="province" name="province"><br>
        <label for="country">Country:</label><br>
        <input type="text" id="country" name="country"><br>
        <label for="postal_code">Postal Code:</label><br>
        <input type="text" id="postal_code" name="postal_code"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
