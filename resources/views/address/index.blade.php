<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Address List</title>
</head>
<body>
    <h1>Address List</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Street</th>
                <th>City</th>
                <th>Province</th>
                <th>Country</th>
                <th>Postal Code</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($addresses as $address)
                <tr>
                    <td>{{ $address->street }}</td>
                    <td>{{ $address->city }}</td>
                    <td>{{ $address->province }}</td>
                    <td>{{ $address->country }}</td>
                    <td>{{ $address->postal_code }}</td>
                    <td>
                        <a href="{{ route('addresses.edit', $address->id) }}">Edit</a>
                        <form action="{{ route('addresses.destroy', $address->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('addresses.create') }}">Add Address</a>
</body>
</html>
