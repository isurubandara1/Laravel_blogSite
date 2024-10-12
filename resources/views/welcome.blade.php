<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to Laravel</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            margin: 0;
            background-color: #f8fafc;
            color: #333;
        }
        .welcome-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }
        .welcome-content {
            max-width: 600px;
        }
        .title {
            font-size: 3rem;
            margin-bottom: 1rem;
        }
        .subtitle {
            font-size: 1.25rem;
            margin-bottom: 1.5rem;
            color: #666;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #6366f1;
            color: #fff;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
        }
        .btn:hover {
            background-color: #4f46e5;
        }
    </style>
</head>
<body>
    <div class="welcome-container">
        <div class="welcome-content">
            <h1 class="title">Welcome to Laravel</h1>
            <p class="subtitle">Your Laravel application is up and running!</p>
            <a href="{{ url('/dashboard') }}" class="btn">Get Started</a>
        </div>
    </div>
</body>
</html>
