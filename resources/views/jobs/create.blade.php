<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create new job</title>
</head>
<body>
<h1>Create new job</h1>
    {!! Form::open(['route' => 'jobs.store', 'method' => 'POST']) !!}
    <div class="form-group">
        {!! Form::label('title', 'Job-title') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('description', 'Job-description') !!}
        {!! Form::email('description', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Create', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
</body>
</html>