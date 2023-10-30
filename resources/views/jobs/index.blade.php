<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job list</title>
</head>
<body>
    <h1>Job list</h1>
    <ul>
        @foreach ($jobs as $job)
            <li>{{ $job->title }}</li>
        @endforeach
    </ul>
</body>
</html>