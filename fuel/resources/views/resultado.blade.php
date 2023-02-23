<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cálculo de Consumo de Combustível</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
<body>
    <div class="container">
        <div class="painel">
            <h2 style="color: #044e42">Fuel</h2>
            <hr/>
            <h2>Resultado do cálculo de consumo</h2>
            <div class="conteudo-painel">
                <div class="sucesso">
                    <h3>O valor total gasto será de</h3>
                    <ul>
                        <li><b>Gasolina:</b> Kz {{$valor}}</li>
                    </ul>
                </div>
                <a href="{{URL('/')}}" class="botao" title="voltar">Voltar</a>
            </div>
        </div>
    </div>
</body>
</html>
