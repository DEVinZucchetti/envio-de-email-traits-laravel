<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Lista de Jogos</title>
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
    @foreach($jogos as $jogo)
        <div class="jogo">
            <img src="{{ $jogo['imagem'] }}" alt="{{ $jogo['nome'] }}">
            <div class="jogo-info">
                <h2>{{ $jogo['nome'] }}</h2>
                <p>Preço: {{ $jogo['preco'] }}</p>
                <p>{{ $jogo['descricao'] }}</p>
            </div>
        </div>
    @endforeach
</div>

</body>
</html>
