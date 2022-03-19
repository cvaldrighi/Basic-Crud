<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title> Favorite Albums </title>

        <link href="{{url('assets/css/style.css')}}" rel="stylesheet">
        <link href="{{url('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <h1>Favorite Albums</h1>

            <div class="filter"> 
                <h4> Filter by:</h4>
                <form action="{{route('index-filter')}}" method="post">
                @csrf 
                    <div class="row g-2">
                        <div class="col-sm-3">
                            <label for="artist" class="form-label">Artist</label>
                            <input type="text" class="form-control" name="artist" value="{{$filter['artist']}}">
                        </div>
                        <div class="col-sm-3">
                            <label for="gender" class="form-label">Gender</label>
                            <input type="text" class="form-control" name="gender" value="{{$filter['gender']}}">
                        </div>
                        <div class="col-auto">
                            <div> &nbsp; </div>
                            <button class="btn btn-primary btn-align" type="submit">Send</button>
                        </div>
                    </div>
                </form>
            </div>


            <div class="table">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-primary" type="submit">
                        <a href="{{route('create')}}"> Add Album </a>
                    </button>
                </div>
                <div>&nbsp;</div>
                <table> 
                    <thead>
                        <tr>
                            <th>Catalog</th>
                            <th>Artist</th>
                            <th>Name</th>
                            <th>Year</th>
                            <th>Gender</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($albums as $album)
                        <tr>
                            <td>{{$album->catalog}}</td>
                            <td>{{$album->artist}}</td>   
                            <td>{{$album->name}}</td>   
                            <td>{{$album->year}}</td>       
                            <td>{{$album->gender}}</td>
                            <td>  
                                <a href="{{route('edit', ['albumId'=>$album->id])}}">
                                    <img class="icon" src="{{ url ('assets/img/pencil-square.svg')}}" alt="editar">
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <script src="{{ url('assets/js/bootstrap.min.js')}}"></script>
    </body>
</html>