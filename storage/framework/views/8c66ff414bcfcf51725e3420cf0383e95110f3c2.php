

<?php $__env->startSection('content'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
</body>
</html>
<div class="container"> 
<table class="table table-dark table-bordered">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">NAME</th>
      <th scope="col">PROBLEM</th>
      <th scope="col">YPUR PHOTO</th>
      <th scope="col">mark</th>
    </tr>
  </thead>
  <tbody>
  <?php $__currentLoopData = $offers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $offer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th scope="row"><?php echo e($offer->id); ?></th>
      <td><?php echo e($offer->name); ?></td> 
      <td><?php echo e($offer->adress); ?></td>
      <td><img  src="<?php echo e(asset('Imagee/'.$offer->photo)); ?>" width="auto" height="100" /></td>
      <td>
 

      <label for="vehicle1"> we wiil help you</label><br>
      
      </td>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <template>

  </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\store\resources\views/view/dd.blade.php ENDPATH**/ ?>