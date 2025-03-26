<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Post Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        .container {
            border: 1px solid blue;
            margin-top: 5%;
            position: relative;
            border-radius: 10px;
            height: 500px;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <center>
<h1>Edit Post</h1>
<form action="/update_post/{{$post->id}}" method="PUT">
    @csrf
    @method('PUT')
    <input type="text" name="tile" value="{{$post->title}}">
    <br>
    <textarea style="margin-top: 2%" name="body">{{$post->body}}></textarea>
    <br>
    <button class="btn btn-primary">Save Changes</button>
</form></center>
            </div>
        </div>
    </div>
</body>
</html>