<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit gender</title>
</head>
<body>
    <h1>Edit gender</h1>

    <form action="{{ route('genders.update',$genders->id) }}" method="post">
        <!-- genera un token unico -->
        @csrf
        @method('patch')

      
        <label for="">Name</label>
        <input type="text" name="name" value="{{ $genders->name }}">
        <br> 
       
        <input type="submit" value="Edit gender">
    </form>
</body>
</html>