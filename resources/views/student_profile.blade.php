<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.7.2/css/all.css"></script>
    <link rel="stylesheet" href="{{asset('login_res/profile.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>


<div class="wrapper">
    <div class="logo"> <img src="{{asset('login_res/image/logo.png')}}" alt="">
    </div>
    <div class="text-center mt-4 name"> Student Registration </div>
    <br>
    @include('errors')
    <form class="p-3 mt-3" action="{{route('submit.student')}}" method="post">
        {{csrf_field()}}
        <label>Your Name</label>
        <div class="form-field d-flex align-items-center"> <span class="far fa-user"></span>

            <input type="text" name="name" value="{{old('userName')}}" id="userName" placeholder="Name">
        </div>
        <label>Your Department</label>
        <div class="">

            <link rel="stylesheet" href="{{asset('login_res/redio.css')}}">
            <div class="selector">
                @foreach($dep as $department)
                <div class="selecotr-item">

                    <input type="radio" id="{{$department->name}}" name="department" class="selector-item_radio"  value="{{$department->id}}">
                    <label for="{{$department->name}}" class="selector-item_label">{{$department->name}}</label>

                </div>
                @endforeach
            </div>
            <label>Your Blood Group</label>
            <div class="">

                <link rel="stylesheet" href="{{asset('login_res/redio.css')}}">



                <div class="selector">
                    @foreach($blood as $blood_group)
                        <div class="selecotr-item">

                            <input type="radio" id="{{$blood_group->name}}" name="blood" class="selector-item_radio" value="{{$blood_group->id}}">
                            <label for="{{$blood_group->name}}" class="selector-item_label">{{$blood_group->name}}</label>

                        </div>
                    @endforeach
                </div>
        <label>Already member in</label>





        <div class="">

            <br>
            @foreach($club as $clubs)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="club[]" id="inlineCheckbox1" value="{{$clubs->id}}">
                    <label class="form-check-label" for="inlineCheckbox1"><b>{{$clubs->name}}</b></label>
                </div>
            @endforeach
        </div>
        <br><br>



        <label>Upload Profile Picture</label>
        <div class="form-field d-flex align-items-center"> <span class="far fa-user"></span>

            <input type="file" name="profile_picture" value="" id="userName" placeholder="Name">
        </div>






            <input class="btn mt-3" type="submit" value="Submit">
            </div>
        </div>
    </form>
</div>


</body>

</html>
