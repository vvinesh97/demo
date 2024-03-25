<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <h2>Hello {{$user->first_name}}</h2>
    <h4>Please click the bellow link to reset password</h4>
    <a href="{{ route('resetPassword',$token) }}">Reset Password</a>
</body>
</html>