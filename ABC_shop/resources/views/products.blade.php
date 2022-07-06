<!doctype html>
<html lang="en">
   <head></head>
   <body>
      @include('main')
      <div class="row header-container justify-content-center">
         <div class = "header" style = "text-align:center;">
            <h2>Product Details in ABC</h2>
         </div>
      </div>
      @if($layout == 'index')
      <div class="container-fluid mt-4">
         <div class="row"  style = "display:flex; justify-content:center;">
            <section class = "col">
               @include("productlist")
            </section>
            <!-- <section class = "col">
               </section> -->
         </div>
      </div>
      @elseif($layout == 'create')
      <div class="container-fluid">
         <div class="row">
            <section class = "col-md-5" style = "margin-left:400px;">
               <div class = "card mb-5">
                  <div class = "card-body">
                     <h5 class = "card-title">New informations of products</h5>
                     <form action="{{url('/store')}}"  method = "post">
                        @csrf
                        <div class="form-group">
                           <label>Title</label>
                           <input name = "title" type="text" class="form-control" id="exampleInput1" placeholder="" required>
                        </div>
                        <div class="form-group">
                           <label>Category_id</label>
                           <select class="form-control" id="exampleFormControlSelect1" required>
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                           </select>
                        </div>
                        <div class="form-group">
                           <label>Name</label>
                           <input name = "name" type="text" class="form-control" id="exampleInput3" placeholder="" required>
                        </div>
                        <div class="form-group">
                           <label>Description</label>
                           <input name = "description" type="text" class="form-control" id="exampleInput4" placeholder="" required>
                        </div>
                        <div class="form-group">
                           <label>Price</label>
                           <input name = "price" type="text" class="form-control" id="exampleInput5" placeholder="" required>
                        </div>
                        <div class="form-group">
                           <label>Image</label>
                           <div class="custom-file">
                              <input type="file" class="custom-file-input" id="validatedCustomFile" required>  
                           </div>
                        </div>
                        <div class="form-group">
                           <label>Status</label>
                           <input name = "status" type="text" class="form-control" id="exampleInput5" placeholder="" required>
                        </div>
                        <input type="submit" class="btn btn-info" value = "Submit">
                        <input type="reset" class="btn btn-warning" value = "Reset">
                     </form>
                  </div>
               </div>
            </section>
         </div>
      </div>
      @elseif($layout == 'show')
      <div class="container-fluid">
         <div class="row">
            <section class = "col">
               @include("productlist")
            </section>
            <section class = "col">
            </section>
         </div>
      </div>
      @elseif($layout == 'edit')
      <div class="container-fluid mt-4">
         <div class="row">
            <section class = "col-md-7">
               @include("productlist")
            </section>
            <section class = "col-md-5">
               <form action="{{url('/update/'.$product->id)}}"  method = "post">
                  @csrf
                  <div class="form-group">
                     <label>Title</label>
                     <input name = "title"  value = "{{$product->title}}" type="text" class="form-control" id="exampleInput1" required>
                  </div>
                  <div class="form-group">
                     <label>Category_id</label>
                     <input name = "category_id"  value = "{{$product->category_id}}" type="text" class="form-control" id="exampleInput2" required>
                  </div>
                  <div class="form-group">
                     <label>Name</label>
                     <input name = "name"  value = "{{$product->name}}" type="text" class="form-control" id="exampleInput3" required>
                  </div>
                  <div class="form-group">
                     <label>Description</label>
                     <input name = "description"  value = "{{$product->description}}" type="text" class="form-control" id="exampleInput4" required>
                  </div>
                  <div class="form-group">
                     <label>Price</label>
                     <input name = "price"  value = "{{$product->price}}" type="text" class="form-control" id="exampleInput5" required>
                  </div>
                  <div class="form-group">
                     <label>Image</label>
                     <div class="custom-file">
                        <input type="file" class="custom-file-input" value = "{{$product->image}}" id="validatedCustomFile" required>  
                     </div>
                  </div>
                  <div class="form-group">
                     <label>Status</label>
                     <input name = "status"  value = "{{$product->status}}" type="text" class="form-control" id="exampleInput5" required>
                  </div>
                  <input type="submit" class="btn btn-info" value = "Update">
               </form>
            </section>
         </div>
      </div>
      @endif
   </body>
</html>