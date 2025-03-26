<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Home page</title>
</head>
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

<body>
    @auth
    <div class="container">
        <div class="row">
            <div class="col-md-6">
            <h2>Create a Post</h2>
            <form action="/create_post" method="POST">
                @csrf
                <div>
                    <input type="text" name="title" placeholder="Post title">
                </div>
                <br>
                <div>
                    <textarea name="body" placeholder="Body Content"></textarea>
                </div>
                <br>
                <div>
                    <input type="submit" style="background:skyblue; cursor: pointer; padding:10px; border-radius:10px; " value="Save Post">
                </div>
            </form>
            <form action="/logout" method="POST">
                @csrf
                <button class="btn btn-danger" style="margin-top: 5%"><i class="fas fa-sign-out-alt"></i>Logout</button>
            </form>
        </div>
        <div class="col-md-6">
            <h2>All Posts</h2>
            @foreach ($posts as $post)
            <div style="background-color: skyblue">
            <h4>{{$post['title']}}</h4>
            {{$post['body']}}
        </div>
            @endforeach
            <p><a href="/update_post/{{$post->id}}" class="btn btn-primary" style="margin-top: 5%">Update</a></p>
            <form action="/delete_post/{{$post->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-warning">Delete</button>
            </form>
        </div>
    @else
        <center>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h3 style="margin:2%" class="mb-5 text-uppercase">Registration form</h3>
                    </div>
                    <div class="col-md-6">
                        <h3 style="margin:2%" class="mb-5 text-uppercase">Login form</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <!-- Form start -->
                        <form action="/register" method="POST">
                            @csrf

                            <div class="col-md-12 mb-4">
                                <div data-mdb-input-init class="form-outline">
                                    <input type="text" name="name" placeholder="Enter your name"
                                        class="form-control form-control-lg" required />
                                </div>
                            </div>
                            <div class="col-md-12 mb-4">
                                <div data-mdb-input-init class="form-outline">
                                    <input type="email" name="email" placeholder="Enter your email"
                                        class="form-control form-control-lg" required />
                                </div>
                            </div>
                            <div class="col-md-12 mb-4">
                                <div data-mdb-input-init class="form-outline">
                                    <input type="password" name="password" placeholder="Enter your password"
                                        class="form-control form-control-lg" required />
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div data-mdb-input-init class="form-outline">
                                    <button class="btn btn-primary">Register</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6">

                        <!-- Form start -->
                        <form action="/login" method="POST">
                            @csrf

                            <div class="col-md-12 mb-4">
                                <div data-mdb-input-init class="form-outline">
                                    <input type="email" name="loginemail" placeholder="Enter your email"
                                        class="form-control form-control-lg" required />
                                </div>
                            </div>
                            <div class="col-md-12 mb-4">
                                <div data-mdb-input-init class="form-outline">
                                    <input type="password" name="loginpassword" placeholder="Enter your password"
                                        class="form-control form-control-lg" required />
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div data-mdb-input-init class="form-outline">
                                    <button class="btn btn-primary">Login</button>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
    @endauth




</body>

</html>