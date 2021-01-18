<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>todo追加</h1>

<form action="{{ url('todos') }}" method="post">
    {{ csrf_field() }}
    <label>todo</label>
    <input type="text" name="body"class="form-control" placeholder="todo list" style="max-width:1000px;">
    <button type="submit" class="">追加する</button>  </form>
</form>
</body>
</html>