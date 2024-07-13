<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
        </ul>
    </nav><br><br>
    <h1>Halaman About : {{ $title}}</h1><br>
    <h3>data</h3>

    @php
        $num = 1;
    @endphp

    @foreach($data as $item)
        <h4>
            data : {{ $num++ }}
        </h4>
        <p>firstname : {{ $item['firstname'] }}</p>
        <p>lastname : {{ $item['lastname'] }}</p>
    @endforeach
</body>
</html>
