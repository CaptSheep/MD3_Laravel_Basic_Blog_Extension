<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
<a class="btn btn-primary" href="{{route('posts.store')}}">Create Posts</a>
<table border="1" class="table" style="text-align: center">
    <thead class="thead-dark" style="text-align: center">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th colspan="3">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($posts as $key =>$post)
        <tr>
            <td>{{$key + 1}}</td>
            <td>{{$post->name}}</td>
            <td><a href="{{route('posts.show',$post->id)}}" class="btn btn-info">Detail</a></td>
            <td><a href="{{route('posts.update',$post->id)}}" class="btn btn-info">Update</a></td>
            <td><a onclick="return confirm('Are you sure ?')"  href="{{route('posts.destroy',$post->id)}}" class="btn btn-info">Delete</a></td>
        </tr>
    @endforeach
    </tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>
</html>
