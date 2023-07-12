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

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   </head>
   <body>
      <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
      <div class="hero_area">
         <!-- header section strats -->
        

         <?php echo $__env->make('home.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <!-- end header section -->

         <!-- slider section -->
         <?php echo $__env->make('home.slider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <!-- end slider section -->
      </div>
      <!-- why section -->
      <?php echo $__env->make('home.why', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- end why section -->
      
      <!-- arrival section -->
      <?php echo $__env->make('home.new_arrival', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- end arrival section -->
      
      <!-- product section -->
      <?php echo $__env->make('home.product', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- end product section -->

      <!-- Comment and reply system starts here -->
      <div style="text-align: center; padding-bottom: 30px;">
      <h1 style="font-size: 50px; text-align: center; padding-top: 20px; padding-bottom: 20px;">Comments</h1>
      <form action="<?php echo e(url('add_comment')); ?>" method="post">
         <?php echo csrf_field(); ?>
           <textarea style="height: 150px; width: 600px;" placeholder="Comment something here" name="comment"></textarea>

           <br>
           <input type="submit" class="btn btn-primary" value="Comment">

      </form>
      </div>

      <div style="padding-left: 20%;">
         <h1 style="font-size: 20px; padding-bottom: 20px;">All comments</h1>
      
      <?php $__currentLoopData = $comment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div>
         <b><?php echo e($comment->name); ?></b>
         <p><?php echo e($comment->comment); ?></p>
         <a style="color: blue;" href="javascript::void(0);" onclick="reply(this)" data-Commentid="<?php echo e($comment->id); ?>">Reply</a>
   
         <?php $__currentLoopData = $reply; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rep): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <?php if($rep->comment_id == $comment->id): ?>
         <div style="padding-left: 3%; padding-bottom: 10px;">
            <b><?php echo e($rep->name); ?></b>
            <p><?php echo e($rep->reply); ?></p>
            <a style="color: blue;" href="javascript::void(0);" onclick="reply(this)" data-Commentid="<?php echo e($comment->id); ?>">Reply</a>
         </div>
         <?php endif; ?>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      
      <!-- Reply Textbox -->
      <div style="display: none;" class="replyDiv">
         <form action="<?php echo e(url('add_reply')); ?>" method="post">
            <?php echo csrf_field(); ?>
         <input type="text" id="commentId" name="commentId" hidden="">
         <textarea style="height: 100px; width: 500px;" name="reply" placeholder="Write somthing here"></textarea>
         <br>
         <button type="submit" class="btn btn-warning">Reply</button>
         <a href="javascript::void(0);" class="btn btn-primary" onclick="reply_close(this)">Close</a>
         </form>
      </div>
      </div>
      <br>
      <!-- Comment and reply system ends here -->
      <!-- subscribe section -->
      <?php echo $__env->make('home.subscribe', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- end subscribe section -->
      <!-- client section -->
      <?php echo $__env->make('home.client', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- end client section -->
      <!-- footer start -->
      <?php echo $__env->make('home.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>
         
            Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
         
         </p>
      </div>

      <script type="text/javascript">
           function reply(caller)
           {
               document.getElementById('commentId').value = $(caller).attr('data-Commentid');

               $('.replyDiv').insertAfter($(caller));

               $('.replyDiv').show();
           }

           function reply_close(caller)
           {
              

               $('.replyDiv').hide();
           }
      </script>

      <script>
        document.addEventListener("DOMContentLoaded", function(event) { 
            var scrollpos = localStorage.getItem('scrollpos');
            if (scrollpos) window.scrollTo(0, scrollpos);
        });

        window.onbeforeunload = function(e) {
            localStorage.setItem('scrollpos', window.scrollY);
        };
    </script>
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html><?php /**PATH C:\Users\quan\Desktop\EcommercePro\resources\views/home/userpage.blade.php ENDPATH**/ ?>