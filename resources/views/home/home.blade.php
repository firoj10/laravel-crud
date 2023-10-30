<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
 <div class="container mt-5">
    <div class="row mx-auto">
<div class="col-md-10">
<div class="">
 <div class="text-end"> 
     <a class="btn btn-outline-primary" href="{{route('student.create')}}">Add</a>

</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">sl</th>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
      <th scope="col">role</th>
      <th scope="col">Reg</th>
      <th scope="col">address</th>
      <th scope="col">email</th>
      <th scope="col">Create at</th>
      <th scope="col">Update at</th>
     
    </tr>
  </thead>
  <tbody>
    @foreach($students as $student)
    <tr>
    <th scope="col">{{$loop->iteration}}</th>
      <th scope="col">{{$student->name}}</th>
      <th scope="col">{{$student->image}}</th>
      <th scope="col">{{$student->role}}</th>
      <th scope="col">{{$student->reg}}</th>
      <th scope="col">{{$student->address}}</th>
      <th scope="col">{{$student->email}}</th>
      <th scope="col">{{date('d-M-Y', strtotime($student->created_at ))}}</th>
      <th scope="col">{{($student->created_at != $student->updated_at ) ? date('d-M-Y', strtotime($student->updated_at )) : 'N/A'}}</th>
      <th scope="col">
       <div class="d-flex ">
       <div class="from-group m-2">
            <a class="btn btn-outline-info mtn-sm " href="{{route('student.edit', $student->id)}}"> edit</a>
        </div>
        <div class="from-group m-2">
            <a class="btn btn-outline-danger mtn-sm" href="{{route('student.delete', $student->id)}}"> delete</a>
        </div>
       
       </div>
      </th>

    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
    </div>

 </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>