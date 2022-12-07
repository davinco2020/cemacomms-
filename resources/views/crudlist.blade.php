<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book List</title>
</head>
<body>
    <table border="1"><tr>
        <th>ID</th>
        <th>Title</th>
        <th>Description</th>
        <th>Function</th>
    </tr>
   
        @foreach ($list as $lists )
        <tr>
        <td>{{  $lists->id}}</td>
        <td>{{  $lists->title}}</td>
        <td>{{  $lists->description}}</td>
        <td><a href= '/edit/{{$lists->id}}'>Edit</a> <a href='/delete/{{$lists->id}}'>Delete</a></td>
    </tr>


        @endforeach
        
    
</body>
</html>