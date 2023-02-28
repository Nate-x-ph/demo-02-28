<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="color: {{$color}}">NATE</h1>
    <marquee><i><p>This is Nate-x-ph</p></marquee></i>
    <hr>
    <p><b>Name:</b> {{$name}}</p>
    <p><b>Age:</b> {{$age}}</p>
    <p><b>Address:</b> {{$address}}</p>
    <p>
        <b>Can vote or not:</b>
        @if($age < 18)
            <p style="color: red">Cannot Vote!</p>
        @else
            <p style="color: green">Can Vote!</p>
        @endif
    </p>
    <hr>
    <h3>Siblings</h3>
    <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Age</th>
                <th>Can vote or not</th>
            </tr>
        </thead>
    <tbody>

        @foreach($siblings as $sibling)
         <tr>  
                <td>{{$sibling['name']}}</td>
                <td>{{$sibling['age']}}</td>
            <td>
            @if($sibling['age'] < 18)
                <p style="color: red">Cannot Vote!</p>
            @else
                <p style="color: green">Can Vote!</p>
            @endif
</td>
</tr>
        @endforeach
</table>
</body>
</html>