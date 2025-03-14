<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superheroe</title>
</head>
<body>
    <!-- <h1>{{ $superheroes->name }}</h1> -->
    <h1>Superheroes</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>universe_id</th>
                <th>gender_id</th>
                <th>Name</th>
                <th>realName</th>
                <th>Picture</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>{{$superheroes->id}}</td>
                <td>{{$superheroes->universe_id}}</td>
                <td>{{$superheroes->gender_id}}</td>
                <td>{{$superheroes->name}}</td>
                <td>{{$superheroes->realName}}</td>
                <td>{{$superheroes->Picture}}</td>
            </tr>
        </tbody>
    </table>
</body>
</html>