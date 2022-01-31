<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload Dropzone</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


  {{-- start dropzone linke --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/6.0.0-beta.2/dropzone.min.css" integrity="sha512-qkeymXyips4Xo5rbFhX+IDuWMDEmSn7Qo7KpPMmZ1BmuIA95IPVYsVZNn8n4NH/N30EY7PUZS3gTeTPoAGo1mA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- end dropzone linke --}}
    <script src="jquery-3.5.1.min.js"></script>

</head>
<body>


    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
        <div class="card">
        <div class="card-header">
            Upload Dropzone
        </div><!-- end card-header -->
        <div class="card-body">
            <form action="{{route('add.dropzon')}}" method="POST" class="dropzone dz-clickable" id="image-upload" enctype="multipart/form-data">
                @csrf

<div>
    <h3 class="text-center">Uplode dropzone by click</h3>


</div>
        <div class="dz-default dz-message"><span>Dropzone file uploade here </span></div>
                </div>


              </form>
        </div><!-- end card-body -->
        </div>
        </div>
        </div>
        </div>





        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        {{-- start dropzone scripts --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/6.0.0-beta.2/dropzone-min.js" integrity="sha512-FFyHlfr2vLvm0wwfHTNluDFFhHaorucvwbpr0sZYmxciUj3NoW1lYpveAQcx2B+MnbXbSrRasqp43ldP9BKJcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        {{-- end dropzone scripts --}}

</body>




</html>


