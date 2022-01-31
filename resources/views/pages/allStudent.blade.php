<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>posts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
        <div class="card">
        <div class="card-header">
          All students
          <td><a href="addStudent" class="btn btn-success">Add Student</a>  </td>

        </div><!-- end card-header -->
        <div class="card-body">
            @if (Session::has('success_deleted'))
                <div class="alert alert-success">
                    {{Session::get('success_deleted')}}
                </div>
            @endif
        </div>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">image</th>
            <th scope="col">show</th>
            <th scope="col">edit</th>

            <th scope="col">delete</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($students as $key=>$student)
          <tr>
            <th scope="row">{{$student->id}}</th>
            <td>{{$student->name}}</td>
            <td><img src="{{asset('images')}}/{{$student->profileImage}}" style="max-width: 60px" alt=""></td>
            <td><a href="single_post/{{$student->id}}" class="btn btn-success">show</a>  </td>
            <td><a href="editStudent/{{$student->id}}" class="btn btn-info">edit</a>  </td>

            <td><a href="deleteStudent/{{$student->id}}" class="btn btn-danger">delete</a>  </td>


          </tr>
          @endforeach
        </tbody>
      </table>
        </div></div></div></div>

</body>
</html>
