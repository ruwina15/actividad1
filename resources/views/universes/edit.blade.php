<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit universes</title>
</head>
<body>
    <h1>Edit universes</h1>

    <form action="{{ route('universes.update',$universes->id) }}" method="post">
        <!-- genera un token unico -->
        @csrf
        @method('patch')

      
        <label for="">Name</label>
        <input type="text" name="name" value="{{ $universes->name }}">
        <br> 
       
        <input type="submit" value="Edit universe">
    </form>
</body>
</html>