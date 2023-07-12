<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <?php echo $__env->make('admin.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <style type="text/css">
        .center
        {
            margin: auto;
            width: 75%;
            border: 2px solid white;
            text-align: center;
            margin-top: 40px;
        }

        .font_size
        {
            text-align: center;
            font-size: 40px;
            padding-top: 20px;
        }
        
        .img_size
        {
            width: 200px;
            height: 200px;
        }
        .th_color
        {
            background: skyblue;
            color: black;
        }
        .th_deg
        {
            padding: 20px;
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
          <h1 class="font_size">All Product</h1>
            <table class="center">
                <tr class="th_color">
                    <th class="th_deg">Product Title</th>
                    <th class="th_deg">Description</th>
                    <th class="th_deg">Quantity</th>
                    <th class="th_deg">Catagory</th>
                    <th class="th_deg">Price</th>
                    <th class="th_deg">Discount Price</th>
                    <th class="th_deg">Product Image</th>
                    <th class="th_deg">Delete</th>
                    <th class="th_deg">Edit</th>
                    

                </tr>

                <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($product->title); ?></td>
                    <td><?php echo e($product->description); ?></td>
                    <td><?php echo e($product->quantity); ?></td>
                    <td><?php echo e($product->catagory); ?></td>
                    <td><?php echo e($product->price); ?></td>
                    <td><?php echo e($product->discount_price); ?></td>
                    <td>
                        <img class="img_size" src="/product/<?php echo e($product->image); ?>">
                    </td>
                    <td>
                        <a class="btn btn-danger" onclick="return confirm('Are you sure to delete?')" href="<?php echo e(url('delete_product',$product->id)); ?>">Delete</a>
                    </td>
                    <td>
                        <a class="btn btn-success" href="<?php echo e(url('update_product',$product->id)); ?>">Edit</a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </table>
            
          </div>
        </div>

    <!-- container-scroller -->
    <!-- plugins:js -->
    <?php echo $__env->make('admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End custom js for this page -->
</div>
  </body>
</html><?php /**PATH C:\Users\quan\Desktop\EcommercePro\resources\views/admin/show_product.blade.php ENDPATH**/ ?>