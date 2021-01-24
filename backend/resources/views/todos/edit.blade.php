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
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ url('todos',$todo->id) }}" method="post">
        @method('patch')
        @csrf
        <label for="name">{{ __('Name') }}</label>
        <input type="text" class="" name="body" value="{{ $todo->body }}" required autofocus>
        @error('body')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <button type="submit"  class="">{{ __('Submit') }}</button>
    </form>
</body>
</html>