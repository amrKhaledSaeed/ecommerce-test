<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="jquery-3.5.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</head>
<body>
<div class="container">
<div class="row">
    <div class="col-md-6 offset-md-3">
<div class="card">
<div class="card-header">
    Edit Student
</div><!-- end card-header -->
<div class="card-body">

    <form action="{{route('update.student')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <div class="form-groub">
                <input type="hidden" name="id" value="{{$student->id}}">
          <label for="text" class="form-label">Name</label>
          <input type="text" class="form-control" value="{{$student->name}}" id="name" name="name">

          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
    </div>


    <div class="form-groub">
        <label for="title">Chois Profile Image</label>
        <input type="file" class="form-control"  name="file" onchange="previewFile(this)">
<img id="previewImg" style="max-width:130px; margin-top:30px" alt="Profile Image" >

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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/script.js/2.0.2/script.min.js" integrity="sha512-UWtTDM6wtl/qutDD6i1JOGZGiEd92dveVzuLl8sMBkMHlOHcbZdexM7ZrKkeaugW7vhqDnWc2pPD/ohEV+BBbg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
{{-- start sweatalert --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
{{-- end sweatalert --}}
<script>
    function previewFile(input){
        var file=$('input[type=file]').get(0).files[0];
        if(file){
            var reader=new FileReader();
            reader.onload=function(){
                $('#previewImg').attr('src',reader.result);
            }
            reader.readAsDataUrl(file);
        }
    }
</script>
{{-- start sweatalert function --}}

@if (Session::has('success_update'))
<script>
    swal("Geart Jop!","{!!Session::get('success_update') !!}",{
     button:"ok",
    });
</script>


@endif
{{-- end sweatalert function --}}

</html>
