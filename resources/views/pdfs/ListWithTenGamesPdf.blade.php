<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Games</title>
    <!-- Adicione links para os estilos CSS, se necessário -->
    <!-- <link rel="stylesheet" href="seu-estilo.css"> -->
</head>
<body>

<div style="text-align: center;">
    <h1>Lista de Games</h1>
    <br>
    <br>

    @foreach ($games as $game)
        <div style="border: 1px solid #ccc; padding: 10px; margin: 10px; display: inline-block; text-align: left;">
            <img src="{{ $game['cover'] }}" alt="{{ $game['name'] }}" style="max-width: 100px; max-height: 100px;">
            <h2>{{ $game['name'] }}</h2>
            <p><strong>Preço:</strong> R$ {{ $game['price'] }}</p>
            <p><strong>Descrição:</strong> {{ $game['description'] }}</p>
        </div>
    @endforeach
</div>

</body>
</html>

