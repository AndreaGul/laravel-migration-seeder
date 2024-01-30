<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Template</title>
    @vite('resources/js/app.js')
</head>

<body>
    <div class="container py-5">
        <header>
            <div class="d-flex justify-content-center">
                <h1>Treni in partenza</h1>
            </div>
        </header>
        <ul class="d-flex flex-wrap">
        @foreach ($trains as $train)
           <li class=" m-5">
            <h5>Treno</h5>
            <p>Partenza: {{$train['stazione_di_partenza']}}</p>
            <p>Arrivo: {{$train['stazione_di_arrivo']}}</p>
            <p>Data di Partenza: {{$train['data_di_partenza']}}</p>
            <p>Orario di Partenza: {{$train['orario_di_partenza']}}</p>
            <p>Data di arrivo: {{$train['data_di_arrivo']}}</p>
            <p>Orario di arrivo: {{$train['orario_di_arrivo']}}</p>
            <p>Codice Treno: {{$train['codice_treno']}}</p>
            <p>Numero Carrozze: {{$train['numero_carrozze']}}</p>
            <p>Il treno è in orario?: {{$train['in_orario']? 'si' : 'no' }}</p>
            <p>Il treno è cancellato?: {{$train['cancellato']? 'si' : 'no' }}</p>
            
            
           </li>
       @endforeach
</ul>
       
    </div>

</body>

</html>
