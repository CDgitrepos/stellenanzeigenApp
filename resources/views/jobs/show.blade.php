<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job detail</title>
</head>
<body>
    <h1>Job detail</h1>
    <p>Name: {{ $job->title }}</p>
    <p>Email: {{ $job->description }}</p>
    <p>Email: {{ /* company by company_id */ }}</p> // TODO
</body>
</html>