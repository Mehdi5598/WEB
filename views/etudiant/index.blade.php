<style>
    .create>a {
        text-decoration: none;
        color: inherit;
    }

    .Edit {
        text-decoration: none;
        color: inherit;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        margin-bottom: 30px;
    }

    input[type="text"] {
        background-color: #2b2f3a;
        border: 1px solid #3f4860;
        border-radius: 5px;
        color: white;
        padding: 10px;
        margin: 5px 0;
        width: calc(100% - 22px);
    }

    .Edit button {
        background-color: rgba(35, 166, 240, 1);
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 10px;
        font-family: 'Trebuchet MS', sans-serif;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .Edit button:hover {
        background-color: rgba(35, 166, 240, 0.8);
    }
</style>
@extends('layouts.layout')
@section('content')
<main>
    <form action="logout.php" method="post">
        <input type="submit" value="Logout">
    </form>

    <div>
        <table border="1">
            <tr>
                <th>Nom_etudiant</th>
                <th>Prenom_etudiant</th>
                <th>Centre</th>
                <th>E_mail</th>
                <TH>Promotion</TH>
                <th>EDIT</th>
                <th>Del</th>


            </tr>


            @foreach ($Etudiant as $item)

            <tr>
                <td>{{$item->Nom_etudiant}}</td>
                <td>{{$item->Prenom_etudiant}}</td>
                <td>{{$item->Centre}}</td>
                <td>{{$item->E_mail}}</td>
                <td>{{$item->Promotion}}</td>




                <td>
                    <a href="{{ route('Etudiant.edit', ['Etudiant' => $item]) }}">EDIT</a>
                </td>

                <td>
                    <form method="POST" action="{{route('Etudiant.destroy', ['Etudiant' => $item])}}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>



            @endforeach


            <form action="{{ route('Etudiant.search') }}" method="GET">
                <input type="text" name="query" placeholder="Search for Etudiant...">
                <button type="submit">Search</button>
            </form>
        </table>
    </div>
</main>
@endsection