<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- openGraph protocol --}}
    <meta proprity = "og:title" content="my title here"/>
    <meta proprity = "og:description" content="my description here"/>
    <meta proprity = "og:image" content="my image url here"/>
    <title>testPage</title>
</head>
<body>


    @if($data)

    @foreach($data as $data1)

     <a href=""
       <h1> {{$data1['id']}} </h1>
       <h1> {{$data1['name']}} </h1>
       <h1> {{$data1['ps']}} </h1>

    @endforeach

    @else

    <p> no data found </p>
    @endif


    {{-- <script src="{{ mix('js/myscript.js') }}"></script> --}}
</body>
</html>
