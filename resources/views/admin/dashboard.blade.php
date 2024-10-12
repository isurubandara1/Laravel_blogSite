<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
</head>
<body>
    <h1>Admin Dashboard</h1>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <form action="{{ route('admin.upload') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="title">Photo Title:</label>
            <input type="text" name="title" id="title" required>
        </div>
        <div>
            <label for="image">Photo:</label>
            <input type="file" name="image" id="image" required>
        </div>
        <button type="submit">Upload Photo</button>
    </form>
</body>
</html>
