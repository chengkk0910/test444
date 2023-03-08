<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    hello studnet index blade 
    <br>
    <a href="{{route('students.excel')}}">go test123</a>
    <br>
    {{-- {{dd($data)}} --}}
    

    @foreach ($data as $item)
        <p>{{$item['name']}} - {{$item['mobile']}}</p>
    @endforeach

</body>
</html>