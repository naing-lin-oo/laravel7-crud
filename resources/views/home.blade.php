<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <div class="card">
        <div class="card-title">
            <h4 class="text-center">Post List</h4>
        </div>
            <div class="card-body">
            <div>
                <a href="new" class="btn btn-success">Add New</a>
            </div><br>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>name</th> 
                            <th>description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
@foreach($data as $value)
                        <tr>
                            <td>{{$value->id}}</td>
                            <td>{{$value->title}}</td>
                            <td>{{$value->description}}</td>
                            <td>
                                <a href="edit/{{$value->id}}" class="btn btn-warning">Edit</a>
                                <a href="delete/{{$value->id}}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
@endforeach     
                    </tbody>
                </table>
            </div>
        </div>
    </div>   
</body>
</html>