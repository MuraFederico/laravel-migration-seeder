<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <title>Today Trains</title>
</head>
<body>

    <h1>Trains</h1>


    @foreach ($trains as $train)
        <div class="train">
            <p>{{ $train->company }}</p>
            <p>{{ $train->train_code }}</p>
            <p>{{ $train->departure_station }}</p>
            <p>{{ $train->arrival_staion }}</p>
            <p>{{ DateTime::createFromFormat('Y-m-d H:i:s',$train->departure_time)->format('H:i d/m/Y') }}</p>
            <p>{{ DateTime::createFromFormat('Y-m-d H:i:s',$train->arrival_time)->format('H:i d/m/Y') }}</p>

        </div>
    @endforeach
    {{ $trains->links() }}
</body>
</html>
