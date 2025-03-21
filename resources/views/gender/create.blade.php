<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create gender</title>
</head>
<body>
    <h1>Create gender</h1>
    <hr>
        <a href="{{ route('genders.index') }}">Return to index</a>
    <hr>

    <form action="{{ route('genders.store') }}" method="post">
        <!-- genera un token unico -->
        @csrf
         
        <label for="">Name</label>
        <input type="text" name="name">

        <input type="submit" value="Create Gender">
    </form>
</body>
</html>