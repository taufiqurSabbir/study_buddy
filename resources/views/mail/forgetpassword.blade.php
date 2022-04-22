<html lang="eng">
<head>
    <title>
        Forget password
    </title>
</head>
<body>
    <a href="{{url('/reset/password/'.$data['email'].'/'.$data['token'])}}">Click to confirm</a>
    <p>{{url('/reset/password/'.$data['email'].'/'.$data['token'])}}</p>
</body>
</html>
