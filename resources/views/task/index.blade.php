<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Task</h1>
    <div>
        @if (session()->has('success'))
                {{session('success')}}
            </div>
        @endif
    </div>
    <div>
        <table border="1">
            <tr>
                <td>Id</td>
                <td>Task Name</td>
                <td>Description</td>
                <td>Deadline</td>
                <td>Status</td>
            </tr>
            @foreach ($tasks as $task) {
                <tr>
                    <td>{{$task->id}}</td>
                    <td>{{$task->task_name}}</td>
                    <td>{{$task->description}}</td>
                    <td>{{$task->deadline}}</td>
                    <td>{{$task->status}}</td>
                    <td>
                        <a href="{{route('task.edit', ['task' => $task])}}">Edit</a>
                    </td>
                    <td>
                        <form action="{{route('task.destroy', ['task' => $task])}}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            }

            @endforeach
        </table>
    </div>
    <div>
        <br> <a href="{{route('task.create')}}">Add a new task</a>
    </div>
</body>
</html>
