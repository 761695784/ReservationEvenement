<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="{{ asset('css/evenement_association.css') }}" rel="stylesheet">
    <title>Gestion d'évènement et de réservation</title>
</head>
<body>

    <div class="container">
        <h1>Nos évènements</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <a href="/evenements/create" class="btn btn-primary">Ajouter un évenement</a>
        <br>
        <br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Date</th>
                    <th>Lieu</th>
                    <th>Actions</th>
                    <th>Liste inscrit</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($evenements as $evenement)
                    <tr>
                        <td>{{ $evenement->nom }}</td>
                        <td>{{ $evenement->date_evenement }}</td>
                        <td>{{ $evenement->lieu }}</td>
                        <td>
                            <a href="#" class="btn action">
                            {{-- {{ route('evenements.show', $evenement->id) }} --}}
                                <i class="fas fa-eye"></i></a>
                            <a href="#" class="btn action">
                                {{-- {{ route('modifier', $evenement->id) }} --}}
                                <i class="fas fa-edit"></i></a>
                            <form action="#" method="POST" style="display:inline-block;">
                                {{-- {{ route('evenements.destroy', $evenement->id) }} --}}
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn action">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                        <td>
                            <a href="#" class="stretched-link ">Voir la liste</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
</body>
</html>
    
