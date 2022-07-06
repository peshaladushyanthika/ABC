<!doctype html>
<html lang="en">
   <head></head>
   <body>
      <div class = "card mb-3" style="">
         <!-- <img src = "images\study.jpg" class = "card-img-top"> -->
         <div class = "card-body">
            <h5 class = "card-title">List of Products</h5>
            <table class="table">
               <thead>
                  <tr>
                     <th scope="col">Category_id</th>
                     <th scope="col">Title</th>
                     <th scope="col">Name</th>
                     <th scope="col">Description</th>
                     <th scope="col">Price</th>
                     <th scope="col">Image</th>
                     <th scope="col">Status</th>
                     <th scope="col">Operations</th>
                  </tr>
               </thead>
               <tbody class="table-group-divider">
                  @foreach($products as $product)
                  <tr>
                     <th>{{$product->category_id}}</th>
                     <td>{{$product->title}}</td>
                     <td>{{$product->name}}</td>
                     <td>{{$product->description}}</td>
                     <td>{{$product->price}}</td>
                     <td>{{$product->image}}</td>
                     <td>{{$product->status}}</td>
                     <td>
                        <a href = "{{'/edit/'.$product->id}}" class="btn btn-danger">Edit</a>
                        <a class="btn btn-warning">Delete</a>
                     </td>
                  </tr>
                  @endforeach
               </tbody>
            </table>
         </div>
      </div>
   </body>
</html>