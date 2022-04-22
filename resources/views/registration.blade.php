<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.7.2/css/all.css"></script>
    <link rel="stylesheet" href="login_res/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>


<div class="wrapper">
    <div class="logo"> <img src="login_res/image/logo.png" alt="">
    </div>
    <div class="text-center mt-4 name"> Student Registration </div>
    <br>
    @include('errors')
    <form class="p-3 mt-3" action="{{route('submit.res')}}" method="post">
       {{csrf_field()}}

        <div class="form-field d-flex align-items-center"> <span class="far fa-user"></span>
            <input type="text" name="userName" value="{{old('userName')}}" id="userName" placeholder="Username"> </div>

        <div class="form-field d-flex align-items-center"> <span class="far fa-user"></span>

            <input type="text" name="student_id" value="{{old('student_id')}}" id="student_id" placeholder="Student Id"> </div>

        <div class="form-field d-flex align-items-center"> <span class="far fa-user"></span> <input type="text"
                                                                                                            name="email" value="{{old('email')}}" id="email" placeholder="Student Email"> </div>

        <div class="form-field d-flex align-items-center"> <span class="fas fa-key"></span> <input type="password"
                                                                                                   name="password" id="pwd" placeholder="Password"> </div>

        <div class="form-field d-flex align-items-center"> <span class="fas fa-key"></span> <input type="password"
                                                                                                   name="password_confirmation" id="pwd" placeholder="Confirm Password"> </div>

        <input class="btn mt-3" type="submit" value="Submit">

    </form>
    <div class="text-center fs-6"> Already Member? <a href="{{route('login')}}">Login Here </a> </div>
</div>


</body>

</html>
