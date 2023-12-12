<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Jogo do dia!</title>
    <style>
        /* Estilos simples para a apresentação */
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin-top: 50px;
        }
        .jogo {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            padding: 10px;
            max-width: 600px;
        }
        .jogo img {
            width: 100px;
            height: 100px;
            margin-right: 20px;
        }
        .jogo-info {
            display: flex;
            flex-direction: column;
        }
    </style>
</head>
<body>

<div class="container">

        <div class="jogo">
            <img src="{{ $game->cover }}" alt="imagem do jogo">
            <div class="jogo-info">
                <h2>{{ $game->name }}</h2>
                <p>Preço: R$ {{ $game->price }}</p>
                <p>Descrição: {{ $game->description }}</p>
            </div>
        </div>

</div>

</body>
</html>
