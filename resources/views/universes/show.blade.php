<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universe</title>
</head>
<body>
<h1>Universe</h1>

<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>{{$universes->id}}</td>
            <td>{{$universes->name}}</td>
        </tr>
    </tbody>
</table>
</body>
</html>