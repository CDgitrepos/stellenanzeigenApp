<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company detail</title>
</head>
<body>
    <h1>Company detail</h1>
    <p>Email: {{ /* logo */ }}</p> // TODO
    <p>Name: {{ $company->name }}</p>
    <p>Email: {{ $company->email }}</p>
    <p>Email: {{ $company->website }}</p>
    <p>Email: {{ $company->description }}</p>
</body>
</html>