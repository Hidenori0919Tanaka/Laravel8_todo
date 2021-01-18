<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit</h1>
    <form action="{{ url('todos',$todo->id) }}" method="post">
        @method('patch')
        @csrf
        <label for="name">{{ __('Name') }}</label>
        <input type="text" class="" name="body" value="{{ $todo->body }}" required autofocus>
        <button type="submit"  class="">{{ __('Submit') }}</button>
    </form>
</body>
</html>