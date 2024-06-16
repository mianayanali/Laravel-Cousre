<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2>this is my posts</h2>



  <table>
    <tr>
        <th>title</th>
        <th>description</th>
        <th>address</th>
        <th>status</th>
    </tr>
    <tbody>
        @foreach ($posts as $post)
        <tr>
            <td>{{$post->title}}</td>
            <td>{{$post->description}}</td>
            <td>{{$post->address}}</td>
            @php
            if($post->status == 1){
            $stat = 'active';
            }
        else {
             $stat = 'inactive';
        }
            @endphp
            <td>{{$stat}}</td>
        </tr>
        @endforeach
    </tbody>
  </table>


</body>
</html>
