<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Task</title>
</head>
<body>
    <div>
        <div>
            <h1>Edit a Task</h1>
        </div>
        <div>
            <form action="{{route('task.update', ['task' => $task])}}" method="post">
                @csrf
                @method('put')
                <label for="name">Task Name</label> <br>
                <input type="text" id="name" name="task_name" placeholder="Enter task name" value="{{$task->task_name}}" required><br>
                <label for="description">Description</label><br>
                <input type="text" id="description" name="description" placeholder="Write a brief description about the task" value="{{$task->description}}" required><br>
                <label for="deadline">Deadline</label><br>
                <input type="date" id="deadline" name="deadline" placeholder="Enter target date" value="{{$task->deadline}}" required><br><br>
                <label for="status">Status</label>
                <select name="status" id="status" value="{{$task->status}}">
                    <option value="pending">Pending</option>
                    <option value="ongoing">Ongoing</option>
                    <option value="Done">Done</option>
                </select>
                <input type="submit" value="Save Changes">
            </form>
        </div>
    </div>
</body>
</html>
