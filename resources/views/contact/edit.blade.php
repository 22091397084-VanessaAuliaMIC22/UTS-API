<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Contact</title>
</head>
<body>
    <h1>Edit Contact</h1>
    <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
        @method('PUT')
        <label for="first_name">First Name:</label><br>
        <input type="text" id="first_name" name="first_name" value="{{ $contact->first_name }}"><br>
        <label for="last_name">Last Name:</label><br>
        <input type="text" id="last_name" name="last_name" value="{{ $contact->last_name }}"><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value="{{ $contact->email }}"><br>
        <label for="phone">Phone:</label><br>
        <input type="text" id="phone" name="phone" value="{{ $contact->phone }}"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
