<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
            <a class="navbar-brand" href="{{ url('/') }}">Project Management App</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
        <div class="nav-container">
            <table class="navbar-nav">
                <tr class="nav-item">
                    <td><a class="nav-link" href="{{ route('projects.index') }}" class="btn nav-btn-primary">Projects</a></td>
                    <td><a class="nav-link" href="{{ route('tasks.index') }}" class="btn nav-btn-primary">Tasks</a></td>
                    <td><a class="nav-link" href="{{ route('time_entries.index') }}" class="btn nav-btn-primary">Time Entry</a></td>
                    <td><a class="nav-link" href="{{ route('reports.index') }}" class="btn nav-btn-primary">Reports</a></td>
                    </td>
                </tr>
            </table>

            @yield('content')
        </div>
    </div>

    <!-- Scripts -->

    <!-- jQuery (optional if needed for your scripts) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Popper.js and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>

    <script src="{{ asset('js/style.js') }}" defer></script>
    @stack('scripts')
</body>
</html>
