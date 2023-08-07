<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Custom Auth Laravel')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .content {
            text-align: center;
        }
        .navbar {
            background-color: #f8f9fa; /* Change the background color to your preference */
            padding: 10px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Your Logo</a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('team.list') }}">Other Teams</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('cricketers.by.innings') }}">Cricketers by Innings</a>
                    </li>
                    
                </ul>
            </div>
        </nav>
    </div>
    <div class="content">
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
