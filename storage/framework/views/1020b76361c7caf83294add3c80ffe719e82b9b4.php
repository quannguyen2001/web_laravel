<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <!-- Basic -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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

      <style type="text/css">
        .center
        {
            margin: auto;
            width: 70%;
            text-align: center;
            padding: 30px;
        }

        table,th,td
        {
            border: 1px solid grey;
        }

        .th_deg
        {
            font-size: 20px;
            padding: 5px;
            background: skyblue;
        }

        .img_deg
        {
            height: 200px;
            width: 200px;
        }

        .total_deg
        {
            font-size: 20px;
            padding: 40px;
        }
      </style>
   </head>
   <body>
   <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
      <div class="hero_area">
         <!-- header section strats -->
        

         <?php echo $__env->make('home.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <!-- end header section -->

         <!-- slider section -->
         
         <!-- end slider section -->
      
      <!-- why section -->

            <?php if(session()->has('message')): ?>
              <div class="alert alert-success">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

                  <?php echo e(session()->get('message')); ?>

              </div>

            <?php endif; ?>
     
        <div class="center">

            <table>
                <tr>
                    <th class="th_deg">Product Title</th>
                    <th class="th_deg">Product Quantity</th>
                    <th class="th_deg">Price</th>
                    <th class="th_deg">Image</th>
                    <th class="th_deg">Action</th>
                    
                </tr>

                <?php $totalprice = 0;  ?>
                <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($cart->product_title); ?></td>
                    <td><?php echo e($cart->quantity); ?></td>
                    <td><?php echo e($cart->price); ?>$</td>
                    <td><img class="img_deg" src="/product/<?php echo e($cart->image); ?>"></td>
                    <!-- <td><a class="btn btn-danger" onclick="return confirm('Are you sure to remove this product?')" href="<?php echo e(url('/remove_cart',$cart->id)); ?>">Remove Product</a></td>  -->
                    <td><a class="btn btn-danger" onclick="return confirmation(event)" href="<?php echo e(url('/remove_cart',$cart->id)); ?>">Remove Product</a></td>
                </tr>

                <?php $totalprice = $totalprice + $cart->price ?>
                
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            </table>
            <div>

                <h1 class="total_deg">Total Price: <?php echo e($totalprice); ?>$</h1>
            </div>

            <div>
                <h1 style="font-size: 25px; padding-bottom: 15px;">Proceed to Order</h1>

                <a href="<?php echo e(url('cash_order')); ?>" class="btn btn-danger">Cash On Delivery</a>

                <a href="<?php echo e(url('stripe',$totalprice)); ?>" class="btn btn-danger">Pay Using Card</a>
            </div>

        </div>


        <script>
            function confirmation(ev){
                ev.preventDefault();
                var urlToRedirect = ev.currentTarget.getAttribute('href');
                console.log(urlToRedirect);
                swal({
                    title: "Are you sure to cancel this product?",
                    text: "You will not be able to revert this!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willCancel) => {
                    if(willCancel)
                    {
                        window.location.href = urlToRedirect;
                    }
                });
            }
                
            
        </script>

      <!-- footer start -->
      
      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>
         
            Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
         
         </p>
      </div>
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html><?php /**PATH C:\Users\quan\Desktop\EcommercePro\resources\views/home/showcart.blade.php ENDPATH**/ ?>