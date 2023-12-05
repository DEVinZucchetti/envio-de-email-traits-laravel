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
    @foreach($games as $game)
        <div class="jogo">
            <img src="{{ $game['imagem'] }}" alt="{{ $game['nome'] }}">
            <div class="jogo-info">
                <h2>{{ $game['nome'] }}</h2>
                <p>Preço: {{ R$ $game['preco'] }}</p>
                <p>{{ $game['descricao'] }}</p>
            </div>
        </div>
    @endforeach
</div>

</body>
</html>
