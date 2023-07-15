<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Todo App</title>

    <!--Bootstrap files -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body style="background-color: #E6E6FA"><br>
<div class="row">
    <div class="col-md-3 m-auto" style="margin-left:500px;">
        <h3>Todo List</h3>
        <form action="/add">
            <div class="form-group">
                <input type="text" class="form-control" name="todo" placeholder="Add a task">
            </div>
            <input type="submit" class="btn btn-primary" name="add" value="Add Task">
        </form>
        <hr>
    </div>
</div>
<div class="row">
    <div class="col-md-4 m-auto" style="margin-left:500px">
        <table class="table">
            <thead>
            <tr>
                <th>S.No</th>
                <th>Todo Task</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @php
                $count = 0;
            @endphp
            @foreach($todos as $todo)
                @php
                    $count++;
                @endphp
                <tr>
                    <td>{{$count}}</td>
                    <td>{{$todo['todo']}}</td>
                    <td><a href="{{"/delete/".$todo['sno']}}">Delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
