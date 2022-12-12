<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <p>Hello! {{$user->name}}!</p>

        <p>Someone wants to register as admin. Click below to allow.</p>

        <p>
            <a href="{{url('/verification/' . user()->id . '/' . $user->remember_token)}}">click here</a>
        </p>
    </div>
</body>
</html>
