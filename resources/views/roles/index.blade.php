<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Roles</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 20px;
        }

        .container-fluid {
            max-width: 1200px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .btn-primary {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            color: #fff;
            background-color: #E67E22;
            border: none;
            border-radius: 4px;
            text-align: center;
            cursor: pointer;
            transition: background-color 0.3s;
            text-decoration: none;
        }

        .btn-primary:hover {
            background-color: #E67E22;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .table thead {
            background-color: #E67E22;
            color: #fff;
        }

        .table th, .table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #dee2e6;
        }

        .table-actions {
            display: flex;
            gap: 10px;
        }

        .table-actions form {
            display: inline;
        }

        .btn-sm {
            padding: 5px 10px;
            font-size: 14px;
        }

      
        /* .fa {
            margin-right: 5px;
        } */

        .table-header {
            background-color: #E67E22;
            color: #fff;
        }

        .table-row:nth-child(even) {
            background-color: #FFDEAE;
        }

        .table-row:hover {
            color: #dee2e6;
            background-color: #E67E22;
        }
    </style>
</head>
<body>

<div class="container-fluid p-4">
    <a href="{{ route('roles.create') }}" class="btn btn-primary mb-3">Ajouter un Role</a>
    <table class="table">
        <thead class="table-header">
            <tr>
                <th>Date</th>
                <th>Role</th>
                <th>Permissions</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($roles as $role)
                <tr class="table-row">
                    <td>{{ $role->created_at->format('d/m/Y') }}</td>
                    <td>{{ $role->name }}</td>
                    <td>{!! implode('<br>', $role->permissions->pluck('name')->toArray()) !!}</td>
                    <td class="table-actions">
                        <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-primary btn-sm"><svg width="24" height="37" viewBox="0 0 24 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.1542 6.44376H3.52107C2.01164 6.44376 0.789062 8.36968 0.789062 10.7421V32.2296C0.789062 34.604 2.01164 36.5279 3.52107 36.5279H18.5471C20.0566 36.5279 21.2791 34.604 21.2791 32.2296V16.5016L15.9326 24.9115C15.4657 25.6532 14.8576 26.1658 14.1896 26.3808L10.5273 27.5335C8.1368 28.2844 6.03042 24.9703 6.50852 21.2119L7.2407 15.4503C7.3732 14.4113 7.69831 13.4554 8.17505 12.7065L12.1542 6.44376Z" fill="#E67E22"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M23.7984 2.67283C23.6603 2.15336 23.4579 1.677 23.2015 1.26847C22.9494 0.868938 22.6455 0.549318 22.3081 0.328852C21.9757 0.11198 21.6166 0 21.2536 0C20.8905 0 20.5314 0.11198 20.199 0.328852C19.8616 0.549318 19.5577 0.868938 19.3056 1.26847L18.5598 2.44148L22.4557 8.57033L23.2015 7.39529C23.4605 6.98987 23.6634 6.51269 23.7984 5.99093C24.0798 4.92441 24.0798 3.73936 23.7984 2.67283ZM20.5255 11.6084L16.6283 5.47749L10.1029 15.7464C10.0066 15.8988 9.94167 16.0889 9.91573 16.2943L9.18356 22.0579C9.08794 22.8087 9.51003 23.4703 9.98677 23.3202L13.6504 22.1695C13.7837 22.1253 13.905 22.0228 13.9987 21.8752L20.5255 11.6084Z" fill="#E67E22"/>
                            </svg></a>
                        <form action="{{ route('roles.destroy', $role->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"><svg width="18" height="32" viewBox="0 0 18 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.02477 31.2565C3.43352 31.2565 2.92756 30.9256 2.50688 30.2638C2.08621 29.6021 1.87551 28.8055 1.87479 27.8743V5.88999H0.799805V2.50778H6.17474V0.816681H12.6247V2.50778H17.9996V5.88999H16.9246V27.8743C16.9246 28.8044 16.7143 29.6009 16.2936 30.2638C15.8729 30.9268 15.3666 31.2576 14.7746 31.2565H4.02477ZM6.17474 24.4921H8.32471V9.27219H6.17474V24.4921ZM10.4747 24.4921H12.6247V9.27219H10.4747V24.4921Z" fill="#E67E22"/>
                                </svg>
                                </i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

</body>
</html>
