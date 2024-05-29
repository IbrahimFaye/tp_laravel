<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

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
<form method="POST" action="{{ route('save.terrain') }}">
    @csrf
    <div class="">
        <label >{{ __('longueur') }}</label>
        <div class="col-md-6">
            <input id="longueur" type="number" class="" name="longueur" >
        </div>
    </div><br>
    <div class="">
        <label >{{ __('largeur') }}</label>
        <div class="col-md-6">
            <input id="largeur" type="number" class="" name="largeur" >
        </div>
    </div><br>
    <div class="row mb-3">
        <label for="type" class="col-md-4 col-form-label text-md-end">{{ __('Type de terrain') }}</label>
        <div class="col-md-6">
            <select name="type" class="form-control">
                @foreach ($types as $type)
                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                @endforeach
            </select>
        </div>
    </div><br><br><br>

    <button type="submit" class="btn btn-primary">
        {{ __('Enregistrer') }}
    </button><br><br>
    <button type="reset" class="btn btn-danger">
        {{ __('Effacer') }}
    </button>
</form>

</body>

</html>
