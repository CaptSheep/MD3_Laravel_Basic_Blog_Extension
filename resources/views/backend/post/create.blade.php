<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Create Posts</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

</head>
<body>
<div class="container-fluid">
    <form action="{{route('posts.store')}}" method="post">
        @csrf
        <div>
            <label class="control-label" for="select" >Select Category</label>
            <select name="select" id="select" class="form-control" >
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group has-success has-feedback">
            <label class="control-label" for="name">Name</label>
            <input type="text" class="form-control" id="name" aria-describedby="usernameStatus" name="name">
        </div>
        <div class="error-message">
            {{--                @if ($errors->any())--}}
            {{--                    @foreach($errors->all() as $nameError)--}}
            {{--                        <p style="color:red">{{ $nameError }}</p>--}}
            {{--                    @endforeach--}}
            {{--                @endif--}}
            @if($errors->any())
                <p style="color: red">{{$errors->first('name')}}</p>
            @endif
        </div>
        <div class="form-group has-warning has-feedback">
            <label class="control-label" >Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        @if($errors->any())
            <p style="color: red">{{$errors->first('title')}}</p>
        @endif
        <div class="form-group has-warning has-feedback">
            <label class="control-label" >Content</label>
            <input type="text" class="form-control" id="content" name="content">
        </div>
        @if($errors->any())
            <p style="color: red">{{$errors->first('content')}}</p>
        @endif
        <div>
            <input type="submit" value="Create Post" class="btn btn-success">
        </div>
        <div>
            <a href="{{route('posts.index')}}" class="btn btn-primary">Back</a>
        </div>
    </form>

</div>

<!-- jQuery library -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
