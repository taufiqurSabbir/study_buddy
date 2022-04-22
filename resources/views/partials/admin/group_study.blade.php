<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="admin/profile.css" />
    <link rel="stylesheet" href="{{asset('login_res/study.css')}}">
    <title>Hello, world!</title>

</head>
<body>

<div class="">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
        <div class="col">
            <div class="study p-3 py-4">
                <div class="text-center">
                    <div class="wrapper">
                        <div class="text-center mt-4 name"> Student Login </div>

                        <form class="p-3 mt-3" method="post" action="{{route('submit.login')}}">
                            {{csrf_field()}}

                            <div class="form-field d-flex align-items-center">
                                <span class="far fa-user"></span>
                                <input type="text" name="student_id" id="userName" placeholder="Study title">

                            </div>
                            <div class="form-field d-flex align-items-center">
                                <span class="fas fa-key"></span>
                                <input type="text" name="password" id="pwd" placeholder="topic name">
                            </div>

                            <div class="form-field d-flex align-items-center">
                                <span class="far fa-user"></span>
                                <input type="text" name="student_id" id="userName" placeholder="place">

                            </div>

                            <div class="form-field d-flex align-items-center">
                                <span class="far fa-user"></span>
                                <input type="date" name="student_id" id="userName" placeholder="date">

                            </div>

                            <div class="form-field d-flex align-items-center">
                                <span class="far fa-user"></span>
                                <input type="time" name="student_id" id="userName" placeholder="time">

                            </div>


                            <input class="btn btn-success" type="submit" name="submit"  value="submit">
                        </form>
                    </div>

                </div>
            </div>
        </div>


    </div>

</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
