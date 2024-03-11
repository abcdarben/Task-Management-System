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
            <h1>Add a Task</h1>
        </div>
        <div>
            <form action="{{route('task.store')}}" method="post">
                @csrf
                @method('post')
                <label for="name">Task Name</label> <br>
                <input type="text" id="name" name="task_name" placeholder="Enter task name" required><br>
                <label for="description">Description</label><br>
                <input type="text" id="description" name="description" placeholder="Write a brief description about the task" required><br>
                <label for="deadline">Deadline</label><br>
                <input type="date" id="deadline" name="deadline" placeholder="Enter target date" required><br><br>
                <input type="submit" value="Add">
            </form>
        </div>
    </div>
</body>
</html>
