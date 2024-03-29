<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Address</title>
</head>
<body>
    <h1>Edit Address</h1>
    <form action="{{ route('addresses.update', $address->id) }}" method="POST">
        @method('PUT')
        <label for="street">Street:</label><br>
        <input type="text" id="street" name="street" value="{{ $address->street }}"><br>
        <label for="city">City:</label><br>
        <input type="text" id="city" name="city" value="{{ $address->city }}"><br>
        <label for="province">Province:</label><br>
        <input type="text" id="province" name="province" value="{{ $address->province }}"><br>
        <label for="country">Country:</label><br>
        <input type="text" id="country" name="country" value="{{ $address->country }}"><br>
        <label for="postal_code">Postal Code:</label><br>
        <input type="text" id="postal_code" name="postal_code" value="{{ $address->postal_code }}"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
