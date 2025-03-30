<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Network | Home</title>
</head>
<body>
    <h2>Currently available networks</h2>
    <h3>{{ $greeting }}</h3>
    <ul>
        <li>
            <a href="/networks/{{ $ninjas[0]["id"] }}">
                {{ $ninjas[0]["name"] }}
            </a>
        </li>
        <li>
            <a href="/networks/{{ $ninjas[1]["id"] }}">
                {{ $ninjas[1]["name"] }}
            </a>
        </li>
    </ul>
</body>
</html>