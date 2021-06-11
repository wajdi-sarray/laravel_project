<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="/css/styles.css" />
    <style>
    .container{
        padding-top:50px;
    }
    </style>
    
</head>

<body>
<div class='container'>
<form class="row g-3" action="/valide/{{$products->id}}" method="POST">

{{ csrf_field()}}

  <div class="col-md-6">
  
    <label for="inputEmail4" class="form-label">Name</label>
    <input  class="form-control"  type="text" name="name" placeholder="{{$products['name']}}">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">price</label>
    <input type="text" class="form-control" name="price" id="inputPassword4"placeholder="{{$products['price']}}">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">category</label>
    <input type="text" class="form-control" id="inputAddress"name="category" placeholder="{{$products['category']}}">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">description</label>
    <input type="text" class="form-control"  name=" description" placeholder="{{$products['description']}}">
  </div>
  
  <div class="col-12">
   
    <button class="btn btn-primary" > Valide </button>
  </div>
</form>
</div>
</body>
</html>