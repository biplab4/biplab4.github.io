<html>

  <head>
    <title>Admin Panel</title>
    <meta charset="utf-8">        
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/admin.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  </head>

  <body>
    <?php echo $__env->make('sweet::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container">
      <div class="table">
        <h3 style="text-align: center">Detail Table</h3>
        <a href="/admindetailadd" class="btn btn-primary" style="float: right">Add</a><br><br>
        <table>
          <tr>
            <th>Pet_Id</th>
            <th>Breed</th>
            <th>Weight</th>
            <th>Color</th>
            <th>Gender</th>
            <th>Age</th>
            <th>Fee</th>
            <th>Description</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
          <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td><?php echo e($i->Pet_Id); ?></td>
            <td><?php echo e($i->Breed); ?></td>
            <td><?php echo e($i->Weight); ?></td>
            <td><?php echo e($i->Color); ?></td>
            <td><?php echo e($i->Gender); ?></td>
            <td><?php echo e($i->Age); ?></td>
            <td><?php echo e($i->Fee); ?></td>
            <td><?php echo e($i->Description); ?></td>
            <td><a href="editdetail/<?php echo e($i->Pet_Id); ?>" class="btn btn-success">Edit</a></td>
            <td><a href="admindetail/<?php echo e($i->Pet_Id); ?>" class="btn btn-danger">Delete</a></td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table><br>
      </div>
    </div>

    <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

  </body>
</html><?php /**PATH E:\laravel\project\resources\views//admindetail.blade.php ENDPATH**/ ?>