<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Global Network</title>

  @vite('resources/css/app.css')
</head>
<body>

  <header>
    <nav>
      <h1>Global Network</h1>
      <a href="{{ route('networks.index') }}"> 
        All Networks
      </a>
      <a href="{{ route('networks.create') }}">
        Create New Network
      </a>
    </nav>
  </header>

  <main class="container">
    {{ $slot }}
  </main>

</body>
</html>