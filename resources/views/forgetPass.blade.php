<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.7.2/css/all.css"></script>
    <link rel="stylesheet" href="{{asset('login_res/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>


<div class="wrapper">
    <div class="logo"> <img src="{{asset('login_res/image/logo.png')}}" alt="">
    </div>
    <div class="text-center mt-4 name"> Forget Password </div>
    <br>
    @include('errors')
    @if(session('success'))
        <span class="alert alert-success">{{session('success')}}</span>
    @endif
    @if(session('failed'))
        <span class="alert alert-danger">{{session('failed')}}</span>
    @endif
    <form class="p-3 mt-3" action="{{route('submit.email.forget_password')}}" method="post">
        {{csrf_field()}}

        <div class="form-field d-flex align-items-center"> <span class="far fa-user"></span>
            <label for="userName"></label><input type="text" name="email" value="{{old('forget_pass_email')}}" id="userName" placeholder="Enter your email"> </div>
        <input class="btn mt-3" type="submit" value="Get Link">

    </form>
</div>


</body>

</html>
