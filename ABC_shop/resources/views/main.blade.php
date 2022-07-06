<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>ABC Shop</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
      <style>
         .btn-info{
         margin : 10px 10px 10px 0px;
         }
      </style>
   </head>
   <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding-right:10px;padding-left:10px;">
         <a class="navbar-brand">ABC Shop</a>
         <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
               <li class="nav-item active">
                  <a class="nav-link" href="/">Home</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="{{url('/category')}}">Category</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="{{url('/products')}}">Products</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="{{url('/create')}}">Add Products</a>
               </li>
            </ul>
            <!-- <form style="float:right" class="form-inline my-2 my-lg-0">
               <input class="form-control mr-sm-2" type="search" placeholder="Search">
               <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button>
               </form> -->
         </div>
         <form style="float:right; padding-right:20px;" class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search">
            <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button> -->
         </form>
         <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button>
      </nav>
      <!-- <div class="row header-container justify-content-center">
         <div class = "header" style = "text-align:center;">
           <h1>Student Management System</h1>
         </div>
         </div> -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   </body>
</html>