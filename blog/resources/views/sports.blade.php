<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 CRUD Example f</h2>
            </div>

            @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('sports.create')}}"> Create New user</a>
            </div>
        </div>
    </div>
   
   
    <table class="table table-bordered">
        <tr>
            <th>Title</th>
            <th>description</th>
            <th>address</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($data as $item)
        <tr>
            <td>{{ $item->title }}</td>
            <td>{{ $item->description }}</td>
            <td>{{ $item->address }}</td>
            <td>
                <form action="{{route('spots.delete', $item->id)}}" method="POST">
   
                    <a class="btn btn-info" href="{{route('spots.show', $item->id)}}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('spots.edit', $item->id)}}">Edit</a>
   
                    @csrf
                    @method('POST')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    </body>
</html>