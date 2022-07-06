<!doctype html>
<html lang="en">
   <head></head>
   <body>
      @include('main')
      <div class="container-fluid mt-4">
         <section class = "col-md-5" style = "margin-left:400px;">
            <div class = "card mb-5">
               <div class = "card-body">
                  <h5 class = "card-title">Insert New Category</h5>
                  <form action="{{url('/store_category')}}"  method = "post">
                     @csrf
                     <div class="form-group">
                        <label>Title</label>
                        <input name = "title" type="text" class="form-control" id="exampleInput1" required>
                     </div>
                     <div class="form-group">
                        <label>Name Of Category</label>
                        <input name = "name" type="text" class="form-control" id="exampleInput2" required>
                     </div>
                     <div class="form-group">
                        <label>Description</label>
                        <input name = "description" type="text" class="form-control" id="exampleInput3" required>
                     </div>
                     <div class="form-group">
                        <label>Status</label>
                        <input name = "status" type="text" class="form-control" id="exampleInput4" required>
                     </div>
                     <input type="submit" class="btn btn-info" value = "Insert">
                  </form>
               </div>
            </div>
         </section>
      </div>
   </body>
</html>