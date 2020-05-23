

<?php $__env->startSection('content'); ?>

<div class="btn-group-vertical">
<div class="container"> 
<form method="post" action="<?php echo e(route('comment')); ?> " enctype="multipart/form-data" >
<?php echo csrf_field(); ?>


<h2>upload your problem</h2>

<p>we <strong>send to you</strong> solutions and roads:</p>


  <label for="fname">photo</label><br>
  <input type="file" id="fname" name="photo" ><br>
  <label for="lname">Name</label><br>
  <input type="text" id="lname" name="name" ><br><br>
  <label for="lname">Email</label><br>
  <input type="email" id="lname" name="price" ><br><br>
  <label for="lname">your problems</label><br>
  <input type="text" id="lname" name="adress" ><br><br>
  <input type="submit" value="Submit" href="edit">
 

<p>we will help you .dont worry </p>

</body>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\store\resources\views/view/vi.blade.php ENDPATH**/ ?>