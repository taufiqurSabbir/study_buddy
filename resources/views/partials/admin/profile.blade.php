
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="admin/profile.css" />
    <title>Hello, world!</title>
</head>
<body>

<div class="">
    <div class="row">
        <div class="col">

            <div class="card p-3 py-4">
                <div class="text-center"> <img  src="http://placeimg.com/80/80/people" width="100" class="rounded-circle">

                    <h3 class="mt-2">@yield('student_name')</h3>
                    <span class="mt-1 clearfix">@yield('department')</span> <small class="mt-4"> @yield('blood')</small>
                    <div class="social-buttons mt-5"> <button class="neo-button"><i class="fa fa-facebook fa-1x"></i> </button> <button class="neo-button"><i class="fa fa-linkedin fa-1x"></i></button> <button class="neo-button"><i class="fa fa-google fa-1x"></i> </button> <button class="neo-button"><i class="fa fa-youtube fa-1x"></i> </button> <button class="neo-button"><i class="fa fa-twitter fa-1x"></i> </button> </div>
                </div>
            </div>
        </div>


        <div class="col">
           @include('partials.admin.usertotalclub')
        </div>

        <div class="col">
            @include('partials.admin.usertotalclub')
        </div>

        <div class="col">
            @include('partials.admin.usertotalclub')
        </div>
    </div>




<br> <br>

    <div class="row">
        <div class="col">
            @include('partials.admin.group_study')
        </div>


        <div class="col">
            @include('partials.admin.group_study_list')
        </div>

        <div class="col-2">

        </div>

    </div>

</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
