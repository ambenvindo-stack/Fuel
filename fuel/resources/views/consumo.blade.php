<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cálculo de Consumo de Combustível</title>
    {{-- <link rel="stylesheet" href="{{url('resources/css/style.css')}}" type="text/css" /> --}}
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="painel">
                <h2 style="color: #044e42">Fuel</h2>
                <hr/>
                <h2>Instruções</h2>
                <div class="conteudo-painel">
                    <p>
                        Esta aplicação tem como finalidade demostrar os valores que
                        serão gastos com combustível durante uma viagem, com base no
                        consumo do seu veículo, e com a distância determinada por você!
                    </p>
                    <p>Os combustíveis disponíveis para este cálculo são:</p>
                    <ul>
                        <li><b>Gasolina - Kz 160,00</b></li>
                    </ul>
                </div>
            </div>
            <div>
                <div class="painel">
                <h2>Cálculo do valor(Kz) do consumo</h2>
                <div class="conteudo-painel">
                    <form action="{{url('/gasto')}}" method="get">

                        <label for="distancia">Distância em Quilômetros a ser percorrida</label>
                        <input type="number" class="campoTexto" name="distancia" required>

                        <label for="autonomia">Consumo de combustível do veículo (Km/L)</label>
                        <input type="number" class="campoTexto" name="autonomia" required>

                        <button class="botao" type="submit">Calcular</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
