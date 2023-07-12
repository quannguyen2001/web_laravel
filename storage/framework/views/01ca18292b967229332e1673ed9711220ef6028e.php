<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      

      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>Famms - Fashion HTML Template</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="<?php echo e(asset('home/css/bootstrap.css')); ?>" />
      <!-- font awesome style -->
      <link href="<?php echo e(asset('home/css/font-awesome.min.css')); ?>" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="<?php echo e(asset('home/css/style.css')); ?>" rel="stylesheet" />
      <!-- responsive style -->
      <link href="<?php echo e(asset('home/css/responsive.css')); ?>" rel="stylesheet" />

      <style>

        .center
        {
            margin: auto;
            width: 70%;
            padding: 30px;
            text-align: center;
        }
        table,th,td
        {
            border: 1px solid black;
        }
        .th_deg
        {
            padding: 10px;
            background-color: skyblue;
            font-size: 20px;
            font-weight: bold;
        }
      </style>
   </head>
   <body>
      
         <!-- header section strats -->
        

         <?php echo $__env->make('home.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <!-- end header section -->
        <div class="center">
            <table>
                <tr>
                    <th class="th_deg">Product Title</th>

                    <th class="th_deg">Quantity</th>

                    <th class="th_deg">Price</th>

                    <th class="th_deg">Payment Status</th>

                    <th class="th_deg">Delivery Status</th>

                    <th class="th_deg">Image</th>

                    <th class="th_deg">Cancel Order</th>

                    
                </tr>

                <?php $__currentLoopData = $order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($order->product_title); ?></td>

                    <td><?php echo e($order->quantity); ?></td>

                    <td><?php echo e($order->price); ?></td>

                    <td><?php echo e($order->payment_status); ?></td>

                    <td><?php echo e($order->delivery_status); ?></td>

                    <td>
                        <img height="100" width="180" src="product/<?php echo e($order->image); ?>">
                    </td>

                    <td>
                        <?php if($order->delivery_status == 'processing'): ?>
                        <a onclick="return confirm('Are you sure to cancel this order?')" class="btn btn-danger" href="<?php echo e(url('cancel_order',$order->id)); ?>">Cancel Order</a>
                        <?php else: ?>
                        <p style="color: blue;">Not Allowed</p>
                        <?php endif; ?>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        
        
      <!-- footer end -->
      
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html><?php /**PATH C:\Users\quan\Desktop\EcommercePro\resources\views/home/order.blade.php ENDPATH**/ ?>