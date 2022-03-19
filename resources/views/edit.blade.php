<!DOCTYPE html>
<html>
        @php
            $albumId = isset($album) ? $album->id : null;   
            $title = isset($album) ? 'Edit Album' : 'Add Album';
        @endphp
        
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title> {{$title}} </title>

        <link href="{{url('assets/css/style.css')}}" rel="stylesheet">
        <link href="{{url('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    </head>
    <body>

        <div class="container">
            <h1>{{$title}}</h1>
            <div> &nbsp; </div>
        

            @if(isset($album))
                <form method="post" action="{{route('update')}}" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="{{$album->id}}">         
            @else
                <form method="post" action="{{route('store')}}" enctype="multipart/form-data">
            @endif
            @csrf
                <div class="row g-2">
                    <div class="col-md-2">
                        <label for="catalog" class="form-label">Catalog</label>
                        <input type="text" class="form-control" name="catalog" value="{{@$album->catalog}}">
                    </div>

                    <div class="col-md-3">
                        <label for="artist" class="form-label">Artist</label>
                        <input type="text" class="form-control" name="artist" value="{{@$album->artist}}">
                    </div>
                    
                    <div class="col-md-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" value="{{@$album->name}}">
                    </div>

                    <div class="col-md-2">
                        <label for="year" class="form-label">Year</label>
                        <input type="text" class="form-control" name="year" value="{{@$album->year}}">
                    </div>

                    <div class="col-md-2">
                        <label for="gender" class="form-label">Gender</label>
                        <input type="text" class="form-control" name="gender" value="{{@$album->gender}}">
                    </div>
                </div>
                <div> &nbsp; </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-secondary" type="submit">
                        <a href="{{route('index')}}"> Cancel </a>
                    </button>
                    <div> &nbsp; </div>
                    <button class="btn btn-primary" type="submit">Save</button>
                </div>
            </form>
        </div>

        <script src="{{ url('assets/js/bootstrap.min.js')}}"></script>
    </body>
</html>