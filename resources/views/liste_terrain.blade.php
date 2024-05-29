<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Inclure Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Styles -->
    <style>

        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

    </style>
</head>
<body class="antialiased">
@include('navbar')
<table>
    <thead >
    <tr>
        <td>#</td>
        <td>titre</td>
        <td>longueur</td>
        <td>largeur</td>


    </tr>
    </thead>
    @foreach($terrains as $terrain)
    <tbody>
      <tr>
        <td>{{$terrain->id}}</td>
        @foreach($types as $type)
            @if($type->id==$terrain->type)
        <td>{{$type->name}}</td>
            @endif
        @endforeach
        <td>{{$terrain->longueur}}</td>
        <td>{{$terrain->largeur}}</td>

    <td>
        <a href="{{route('modifi.terrain',['terrain'=>$terrain->id])}}" class="btn btn-primary">
            Modifier
        </a></td>
          <td>
        <a href="{{route('supprime.terrain',['terrain'=>$terrain->id])}}"
           class="btn  btn-danger">
            supprimer
        </a>
    </td>
      </tr>
    </tbody>
    @endforeach
</table><br>
<div class="pagination-links">
    {{ $terrains->links() }}
</div>
<!-- Vos scripts JavaScript ici -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.getElementById("pagination-button").addEventListener("click", function() {
        document.querySelector(".pagination-links a[rel='next']").click();
    });
</script>
</body>

</html>
