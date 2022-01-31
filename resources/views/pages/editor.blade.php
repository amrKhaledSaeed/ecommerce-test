<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>editor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


  {{-- start editor script --}}
  <script src="https://cdn.tiny.cloud/1/eiy8ompx13s5lt6bhkkf6ib8qh8xaq1fttil3ajpzfjpepbs/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  {{-- end editor script --}}
    <script src="jquery-3.5.1.min.js"></script>

</head>
<body>

      <section style="padding-top:60px">
         <div class="container">
             <div class="row">
                 <div class="col-md-12">
                     <div class="card">
                         <div class="card-header">
                             Teny MEC HTML
                         </div>
                         <div class="card-body">
                             <form action="" method="POST">
                                 @csrf
                                 <textarea name="mytextarea" id="mytextarea" cols="30" rows="10"></textarea>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
      </section>




        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        {{-- start tainey scripts --}}
        <script>
              tinymce.init({
            selector:'#mytextarea'
        });
        </script>

        {{-- end tainy scripts --}}

</body>




</html>


