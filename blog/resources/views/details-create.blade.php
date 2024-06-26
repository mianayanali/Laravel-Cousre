<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 CRUD Application</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>create sport</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('spots.list') }}"> Back</a>
            </div>
        </div>
    </div>


    <form action="{{route ('spots.detail.store') }}" method="POST">
        @csrf
        @method('POST')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="sports_id"><strong>Sport details</strong></label>
                    <select name="sports_id" id="sports_id" class="form-control">
                        <option value="">Select Sport</option>
                        @foreach ($sports as $value)
                            <option value=" {{ $value->id }} ">{{ $value->title }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>team_members:</strong>
                    <input type="number" name="team_members" value="" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Captan:</strong>
                    <input type="text" name="captan" value="" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Coach:</strong>
                    <input type="text" name="coach" value="" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
    </body>
    </html>
