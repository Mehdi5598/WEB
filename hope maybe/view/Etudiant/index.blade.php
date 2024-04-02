<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
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
</body>
</html>