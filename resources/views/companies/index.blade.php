<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company list</title>
</head>
<body>
    <h1>Company list</h1>
    <ul>
        @foreach ($companies as $company)
            <li>{{ $company->name }}</li>
            <li>{{ $company->website }}</li>
            <li>{{ /* Logo */ }}</li> // TODO
        @endforeach
    </ul>
</body>
</html>