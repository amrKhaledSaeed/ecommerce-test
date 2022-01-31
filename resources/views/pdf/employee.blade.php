<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee</title>
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

        <tbody>
            @foreach ($data as $key=>$employee)
          <tr>
            <th scope="row"></th>
            <td>user name: {{$employee->name}}</td>
            <td>phone: {{$employee->phone}}</td>
            <td>email: {{$employee->email}}</td>
            <td>salary: {{$employee->salary}}</td>
            <td>department:  {{$employee->department}}</td>



          </tr>
          @endforeach
        </tbody>
      </table>
        </div></div></div></div>
</body>
</html>
