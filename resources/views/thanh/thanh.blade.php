<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    @foreach($role as $rl)
        <h1>Tên quyền : {{$rl->name}}</h1>
    @endforeach
</body>
</html>