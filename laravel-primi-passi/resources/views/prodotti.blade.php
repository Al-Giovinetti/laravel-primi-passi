<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prodotti</title>
</head>
<body >
    <h1>Prodotti</h1>

    @foreach($prodotti as $prodotto)
        <h2> {{ $prodotto["name"]}}</h2>
        <img src="{{ $prodotto['img'] }}" alt="{{ $prodotto['name']}}">
        <p> {{ $prodotto["prezzo"]}}</p>

    @endforeach
    
</body>
</html>