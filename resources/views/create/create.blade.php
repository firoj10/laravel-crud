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
<div>  <a class="btn btn-outline-primary" href="{{route('student.home')}}">Back</a>

</div>
</div>
<form action="{{route('student.store')}}" method="POST">
@csrf
  <div class="form-row row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Name</label>
      <input type="text" name="name" class="form-control" id="inputEmail4" placeholder=" enter your name">
    </div>
    <div class="form-group col-md-6">
    <label for="formFile" class="form-label">Image</label>
  <input class="form-control" name="image" type="file" id="formFile">
    </div>
    </div>
  <div class="form-row row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Roll</label>
      <input type="text" name="role" class="form-control" id="inputEmail4" placeholder=" enter your roll">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Reg</label>
      <input type="text" name="reg" class="form-control" id="inputEmail4" placeholder=" enter your reg">
    </div>
    </div>
  <div class="form-row row">
  <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" name="email" class="form-control" id="inputEmail4" placeholder=" enter your email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Number</label>
      <input type="text" name="number" class="form-control" id="inputEmail4" placeholder=" enter your number">
    </div>
    
    </div>
 
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" name="address" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
 
  <button type="submit" class="btn btn-primary my-2">Submit</button>
</form>
</div>
</div>
    </div>

 </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>