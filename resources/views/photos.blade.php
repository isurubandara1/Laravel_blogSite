<!DOCTYPE html>
<html>
<head>
    <title>Photo Blog</title>
</head>
<body>
    <h1>Photo Blog</h1>

    @foreach ($photos as $photo)
        <div>
            <h2>{{ $photo->title }}</h2>
            <img src="{{ asset($photo->image_path) }}" alt="{{ $photo->title }}" style="max-width: 600px;">
        </div>
    @endforeach
</body>
</html>
