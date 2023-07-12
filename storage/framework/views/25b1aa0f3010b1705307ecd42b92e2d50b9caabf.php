<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <?php echo $__env->make('admin.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <style type="text/css">

     .div_center
     {
        text-align: center;
        padding-top: 40px;
     } 
     
     .font_size
     {
        font-size: 40px;
        padding-bottom: 40px;
     }
     .text_color
     {
        color: black;
        padding-bottom: 20px;
     }
     label
     {
        display: inline-block;
        width: 200px;
        text-align: left;
     }
     .div_design
     {
        padding-bottom: 15px;
     }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- partial -->
      <?php echo $__env->make('admin.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

            <?php if(session()->has('message')): ?>
              <div class="alert alert-success">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

                  <?php echo e(session()->get('message')); ?>

              </div>

            <?php endif; ?>

            <div class="div_center">
              <h1 class="font_size">Add Product</h1>
            <form action="<?php echo e(url('/add_product')); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
            <div class="div_design">
                <label>Product Title:</label>
                <input class="text_color" type="text" name="title" placeholder="Write a title" required="">
            </div>

            <div class="div_design">
                <label>Product Description:</label>
                <input class="text_color" type="text" name="description" placeholder="Write a description" required="">
            </div>

            <div class="div_design">
                <label>Product Price:</label>
                <input class="text_color" type="text" name="price" placeholder="Write a price" required="">
            </div>

            <div class="div_design">
                <label>Discount Price:</label>
                <input class="text_color" type="number" name="discount_price" placeholder="Write a discount is apply">
            </div>

            <div class="div_design">
                <label>Product Quantity:</label>
                <input class="text_color" type="number" min="0" name="quantity" placeholder="Write a quantity" required="">
            </div>

            <div class="div_design">
                <label>Product Catagory:</label>
                <select class="text_color" name="catagory" required="">
                  <option value="" selected="">Add a catagory here</option>
                  
                  <?php $__currentLoopData = $catagory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catagory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($catagory->catagory_name); ?>"><?php echo e($catagory->catagory_name); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <div class="div_design">
                <label>Product Image Here:</label>
                <input type="file" name="image" required="">
            </div>

            <div class="div_design">
                
                <input type="submit" value="Add Product" class="btn btn-primary">
            </div>
            </form>

            
            </div>
          </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <?php echo $__env->make('admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End custom js for this page -->
</div>
  </body>
</html><?php /**PATH C:\Users\quan\Desktop\EcommercePro\resources\views/admin/product.blade.php ENDPATH**/ ?>