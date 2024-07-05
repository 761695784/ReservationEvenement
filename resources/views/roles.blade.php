<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <style>
        .sidebar {
            height: 100vh;
            background-color: #F8F9FA;
            padding: 20px;
        }
        .sidebar a {
            display: block;
            padding: 10px;
            color: #333;
            text-decoration: none;
            margin-bottom: 10px;
        }
        .sidebar a:hover {
            background-color: #FFC107;
            color: #fff;
        }
        .sidebar .logout {
            position: absolute;
            bottom: 20px;
        }
        .table-header {
            background-color: #FF8C42;
            color: #fff;
        }
        .table-row {
            background-color: #FFF1E6;
        }
        .table-row:nth-child(even) {
            background-color: #FFEBD2;
        }
        .table-actions {
            display: flex;
            justify-content: space-around;
        }
    </style>
</head>
<body>

<div class="d-flex">
    <!-- Sidebar -->
    <div class="sidebar">
        <h3>Administrateur</h3>
        <a href="#">Dashboard</a>
        <a href="#">Associations</a>
        <a href="#">Utilisateurs</a>
        <a href="#">Paramètres</a>
        <a href="#">Rôles</a>
        <a href="#" class="logout">Déconnexion</a>
    </div>

    <!-- Main Content -->
    <div class="container-fluid p-4">
        <table class="table">
            <thead class="table-header">
                <tr>
                    <th>Role</th>
                    <th>Date</th>
                    <th>Permissions</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($roles as $role)
                    <tr class="table-row">
                        <td>{{ $role->name }}</td>
                        <td>{{ $role->created_at }}</td>
                        <td>
                            @foreach ($role->permissions->pluck('name') as $permission)
                                {{ $permission }}<br>
                            @endforeach
                        </td>
                        <td class="table-actions">
                            {{-- <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a> --}}
                            {{-- <form action="{{ route('roles.destroy', $role->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                            </form> --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>
