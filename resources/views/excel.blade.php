<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row mt-5">
            <div class="col">
               <div class="card">
                   <div class="card-header">upload form</div>
                   <div class="card-body">

                       @if(session('msg'))
                           <div class="alert alert-success">
                               {{ session('msg') }}
                           </div>
                       @endif

                       @error('file')
                       <div class="text-danger">{{$message}}</div>
                       @enderror
                       <form method="POST" action="{{route('import-excel')}}" enctype="multipart/form-data">
                           @csrf
                           <div class="mb-3">
                               <label for="formFile" class="form-label">excel file</label>
                               <input class="form-control" name="file" type="file" id="formFile">
                           </div>
                           <button type="submit" class="btn btn-primary">Import</button>

                       </form>
                   </div>

               </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header">Export form</div>
                    <div class="card-body">
                        <form method="POST" action="{{route('export-excel')}}">
                            @csrf
                        <button type="submit" class="btn btn-primary">Export</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
