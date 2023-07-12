<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <?php echo $__env->make('admin.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <style type="text/css">
       .title_deg
       {
         text-align: center;
         font-size: 25px;
         font-weight: bold;
         padding-bottom: 40px;
       }
       .table_deg
       {
         border: 2px solid white;
         width: 80%;
         margin: auto;
         
         text-align: center;
       }
       .th_deg
       {
         background-color: skyblue;
         
       }
       .img_size
       {
         width: 400px;
         height: 100px;
       }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- partial -->
      <?php echo $__env->make('admin.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <div class="main-panel">
          <div class="content-wrapper">
             <h1 class="title_deg">All Orders</h1>

             <div style="padding-left: 400px; padding-bottom: 30px;">
                <form action="<?php echo e(url('search')); ?>" method="get">

                  <?php echo csrf_field(); ?>

                  <input type="text" style="color: black;" name="search" placeholder="Search For Something">

                  <input type="submit" value="Search" class="btn btn-outline-primary">
                </form>

             </div>
             <table class="table_deg">
                <tr>
                   <th class="th_deg">Name</th>
                   <th class="th_deg">Email</th>
                   <th class="th_deg">Address</th>
                   <th class="th_deg">Phone</th>
                   <th class="th_deg">Product Title</th>
                   <th class="th_deg">Quantity</th>
                   <th class="th_deg">Price</th>
                   <th class="th_deg">Payment Status</th>
                   <th class="th_deg">Delivery Status</th>
                   <th class="th_deg">Image</th>
                   <th class="th_deg">Delivered</th>
                   <th class="th_deg">Print PDF</th>
                   <th class="th_deg">Send Email</th>
                 
                </tr>

                

                <?php $__empty_1 = true; $__currentLoopData = $order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e($order->name); ?></td>
                    <td><?php echo e($order->email); ?></td>
                    <td><?php echo e($order->address); ?></td>
                    <td><?php echo e($order->phone); ?></td>
                    <td><?php echo e($order->product_title); ?></td>
                    <td><?php echo e($order->quantity); ?></td>
                    <td><?php echo e($order->price); ?></td>
                    <td><?php echo e($order->payment_status); ?></td>
                    <td><?php echo e($order->delivery_status); ?></td>
                    <td>
                        <img class="img_size" src="/product/<?php echo e($order->image); ?>">
                    </td>
                    <td>
                        <?php if($order->delivery_status=='processing'): ?>
                        
                        <a href="<?php echo e(url('delivered',$order->id)); ?>" onclick="return confirm('Are you sure this product is delivered?')" class="btn btn-primary">Delivered</a>
                        
                        <?php else: ?>
                        
                        <p style="color: green;">Delivered</p>
                        
                        <?php endif; ?>
                    </td>
                    <td>
                      <a href="<?php echo e(url('print_pdf',$order->id)); ?>" class="btn btn-secondary">Print PDF</a>
                    </td>
                    <td>
                      <a href="<?php echo e(url('send_email',$order->id)); ?>" class="btn btn-info">Send Email</a>
                    </td>
                
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                <tr>
                  <td colspan="16">No Data Found</td>
                </tr>
                <?php endif; ?>
             </table>
          
          </div>
      </div>
        <!-- partial -->
        

    <!-- container-scroller -->
    <!-- plugins:js -->
    <?php echo $__env->make('admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End custom js for this page -->
</div>
  </body>
</html><?php /**PATH C:\Users\quan\Desktop\EcommercePro\resources\views/admin/order.blade.php ENDPATH**/ ?>