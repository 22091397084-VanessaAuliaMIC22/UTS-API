<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        .section {
            margin-bottom: 30px;
        }
        .section-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .action-links a {
            margin-right: 10px;
            text-decoration: none;
        }
        .action-links a:last-child {
            margin-right: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="section">
            <h2 class="section-title">User List</h2>
            <table>
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Data User -->
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->name }}</td>
                        <td class="action-links">
                            <a href="{{ route('users.edit', $user->id) }}">Edit</a>
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="{{ route('users.create') }}">Add User</a>
        </div>
        
        <div class="section">
            <h2 class="section-title">Contact List</h2>
            <!-- Data Contact -->
            <a href="{{ route('contacts.create') }}">Add Contact</a>
        </div>
        
        <div class="section">
            <h2 class="section-title">Address List</h2>
            <!-- Data Address -->
            <a href="{{ route('addresses.create') }}">Add Address</a>
        </div>
    </div>
</body>
</html>
