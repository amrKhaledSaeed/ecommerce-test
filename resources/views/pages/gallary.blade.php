<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gallary</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


  {{-- start dropzone linke --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/6.0.0-beta.2/dropzone.min.css" integrity="sha512-qkeymXyips4Xo5rbFhX+IDuWMDEmSn7Qo7KpPMmZ1BmuIA95IPVYsVZNn8n4NH/N30EY7PUZS3gTeTPoAGo1mA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- end dropzone linke --}}
    <script src="jquery-3.5.1.min.js"></script>
    <style>
        img{
            background-color: gray;
            height: 350px;
            width:100%;
            border:1px solid gray;
            margin-top: 20px;
            box-shadow:0 8px 6px -6px black;
        }
    </style>

</head>
<body>

<div class="container">
    <div class="row">
        @for ($i = 1; $i < 16; $i++)
         <div class="col-md-6">
             <img src="images/50174190_2115620388503248_3602708487320109056_n.jpg" alt="">
        </div>
        @endfor
    </div>
</div>



        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        {{-- start gallay lazy;oad scripts --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lazyload/2.0.3/lazyload-min.js" integrity="sha512-AsI20ZcrzATYNk6jHw9XywNXt2fqEX03x4hArLWhRuHTYdXFpPUhEuRgt32Akfbj5O4FR5xUxoH9gFWujpzo0w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            $(document).ready(function(){
                  $('image').lazyload()
            });
        </script>
        {{-- end gallay lazy;oad scripts --}}

</body>




</html>


