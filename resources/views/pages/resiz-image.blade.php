<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload image</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
<div class="row">
    <div class="col-md-6 offset-md-3">
<div class="card">
<div class="card-header">
    Upload image
</div><!-- end card-header -->
<div class="card-body">
    <form action="{{route('add.image')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="file" class="form-label">Choose image</label>
          <input type="file" class="form-control" id="email" name="file">
          @error('file')
              <span class="text-danger">{{$message}}</span>
          @enderror
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div><!-- end card-body -->
</div>
</div>
</div>
</div>

</body>
</html>
