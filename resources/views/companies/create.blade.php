<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create new company</title>
</head>
<body>
<h1>Create new company</h1>
    {!! Form::open(['route' => 'companies.store', 'method' => 'POST']) !!}
    <div class="form-group">
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('email', 'Email') !!}
        {!! Form::email('email', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('website', 'Website') !!}
        {!! Form::text('website', ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('logo', 'Logo') !!}
        {!! Form::text('logo', ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('description', 'Description') !!}
        {!! Form::text('description', ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Create', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
</body>
</html>