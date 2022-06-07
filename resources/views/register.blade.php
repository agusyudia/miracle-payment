<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <div class="container"><br>
        <div class="col-md-4 mx-auto">
            <h2 class="text-center"><b>MIRACLE</b><br>Register Account</h3>
                <hr>
                @if(session('error'))
                <div class="alert alert-danger">
                    <b>Opps!</b> {{session('error')}}
                </div>
                @endif
                <form action="{{ route('actionregister') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group mt-2">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Name" required="">
                    </div>
                    <div class="form-group mt-2">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email" required="">
                    </div>
                    <div class="form-group mt-2">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password" required="">
                    </div>
                    <div class="text-center mt-2">
                        <a href="{{route('index')}}" class="btn btn-warning">Back</a>
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                    <hr>
                    <p class="text-center">Sudah punya akun? <a href="{{route('login')}}">Login</a> sekarang!</p>
                </form>
        </div>
    </div>
</body>

</html>