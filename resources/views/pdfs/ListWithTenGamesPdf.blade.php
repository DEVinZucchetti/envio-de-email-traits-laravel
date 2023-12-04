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

    @foreach ($games as $game)
        <div style="border: 1px solid #ccc; padding: 10px; margin: 10px; display: inline-block; text-align: left;">
            <img src="{{ $game['imagem'] }}" alt="{{ $game['nome'] }}" style="max-width: 100px; max-height: 100px;">
            <h2>{{ $game['nome'] }}</h2>
            <p><strong>Preço:</strong> R$ {{ $game['preco'] }}</p>
            <p><strong>Descrição:</strong> {{ $game['descricao'] }}</p>
        </div>
    @endforeach
</div>

</body>
</html>

