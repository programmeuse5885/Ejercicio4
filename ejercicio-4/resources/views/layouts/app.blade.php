<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Deportivo - @yield('title')</title>

    {{-- Bootstrap 5 CSS --}}
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" 
        rel="stylesheet">
    
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .card-hover:hover {
            transform: translateY(-5px);
            transition: 0.3s;
        }
        footer {
            background-color: #0d6efd;
            color: white;
            padding: 15px 0;
            text-align: center;
            margin-top: auto;
        }
    </style>
</head>
<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">Sistema Deportivo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('sports.index') }}">Deportes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('teams.index') }}">Equipos</a>   
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('players.index') }}">Jugadores</a>   
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- MAIN CONTENT -->
    <div class="container py-5">
        @yield('content')
    </div>

    <!-- FOOTER -->
    <footer>
        &copy; {{ date('Y') }} Sistema Deportivo. Todos los derechos reservados.
    </footer>

    {{-- Bootstrap 5 JS --}}
    <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
    </script>

</body>
</html>
