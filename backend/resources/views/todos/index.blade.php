<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{ url('todos/create') }}"> create</a>
    <table>
        @foreach ($todos as $todo)
        <tr>
            <td>{{ $todo->id }}</td>
            <td>{{ $todo->body }}</td>
            <td>{{ $todo->crate_at }}</td>
            <td>{{ $todo->update_at }}</td>
            <td>
                <a href="{{ url('todos/'.$todo->id.'/edit') }}" class="">
                    {{ __('Edit') }}
                </a>
            </td>
            <td>
                <form action="{{url('/todos', $todo->id)}}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger">削除</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>