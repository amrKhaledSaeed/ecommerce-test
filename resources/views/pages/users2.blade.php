<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All user</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
        <div class="card">
        <div class="card-header">
          All Useres
        </div><!-- end card-header -->
        <div class="card-body">
            @if (Session::has('post_deleted'))
                <div class="alert alert-success">
                    {{Session::get('post_deleted')}}
                </div>
            @endif
        </div>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">view</th>
            <th scope="col">edit</th>


            <th scope="col">delete</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($user as $key=>$useres)
          <tr>
            <th scope="row">{{$useres->id}}</th>
            <td>{{$useres->name}}</td>
            <td>{{$useres->email}}</td>
            <td>{{$useres->password}}</td>
            <td><a href="single_post/{{$useres->id}}" class="btn btn-success">view</a>  </td>
            <td><a href="edit_post/{{$useres->id}}" class="btn btn-info">edit</a>  </td>

            <td><a href="delete_post/{{$useres->id}}" class="btn btn-danger">delete</a>  </td>


          </tr>
          @endforeach
        </tbody>
      </table>
{{$user->links()}}
        </div></div></div></div>
</body>
</html>
