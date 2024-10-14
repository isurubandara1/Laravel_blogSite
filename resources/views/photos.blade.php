<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Blog</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f4f8;
            color: #333;
        }

        header {
            background-color: #14A195FF;
            color: white;
            padding: 1rem;
            text-align: center;
        }

        h1 {
            margin: 0;
            font-size: 2.5rem;
        }

        .container {
            max-width: 800px;
            margin: 2rem auto;
            padding: 2rem;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .photo {
            margin-bottom: 2rem;
            border: 3px solid #14A195FF;
            border-radius: 8px;
            padding: 1rem;
            transition: transform 0.3s;
        }

        .photo:hover {
            transform: scale(1.02);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        h2 {
            font-size: 1.2rem;
            margin: 0 0 1rem;
            color: black;
        }

        .image-container {
            width: 100%;
            height: 60%; /* Adjust as needed */
            max-height: 400px;
            overflow: hidden;
            border-radius: 10px;
        }

        .image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover; 
            border-radius: 10px;
        }

        @media (max-width: 600px) {
            h1 {
                font-size: 2rem;
            }

            h2 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Photo Blog</h1>
    </header>

    <div class="container">
        @foreach ($photos as $photo)
            <div class="photo">
                <h2>{{ $photo->title }}</h2>
                <div class="image-container">
                    <img src="{{ asset($photo->image_path) }}" alt="{{ $photo->title }}">
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>
