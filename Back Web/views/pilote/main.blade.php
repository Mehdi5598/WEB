<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>MAIN PAGE</h1>
    <div>
        @if(session()->has('success'))
        <div>
            {{session('success')}}
        </div>
        @endif
    </div>
    <div>
        <div>
            <a href="{{route('pilote.create')}}">Create New Pilote</a>
        </div>
        <table border="1">
            <tr>
                <th>nom</th>
                <th>prenom</th>
                <th>centre</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($pilotes as $pilote)
            <tr>
                <td>{{$pilote->nom}}</td>
                <td>{{$pilote->prenom}}</td>
                <td>{{$pilote->centre}}</td>
                <td><a href="{{route('pilote.edit', ['pilote' => $pilote])}}">Edit</a></td>
                <td>
                    <form method="post" action="{{route('pilote.destroy', ['pilote' => $pilote])}}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete" />
                    </form>
                </td>
            </tr>
            @endforeach

        </table>
    </div>
</body>

</html>