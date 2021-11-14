<html>

  <head>
    <title>Admin Panel</title>
    <meta charset="utf-8">        
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/admin.css">
  </head>

  <body>
    <?php echo $__env->make('adminheader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container">
      <div class="detailtb">
        <h3 style="text-align: center">Detail Table</h3>
        <table>
          <tr>
            <td>Pet_Id</td>
            <td>Breed</td>
            <td>Weight</td>
            <td>Color</td>
            <td>Gender</td>
            <td>Age</td>
            <td>Fee</td>
            <td>Description</td>
          </tr>
          <?php $__currentLoopData = $detail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td><?php echo e($i->Pet_Id); ?></td>
            <td><?php echo e($i->Breed); ?></td>
            <td><?php echo e($i->Weight); ?></td>
            <td><?php echo e($i->Color); ?></td>
            <td><?php echo e($i->Gender); ?></td>
            <td><?php echo e($i->Age); ?></td>
            <td><?php echo e($i->Fee); ?></td>
            <td><?php echo e($i->Description); ?></td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table><br>
      </div>
    </div>

    <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <style type="text/css">
      table, th, td {
        border: 1px solid black;  
        border-collapse: collapse;
      }
    </style>

  </body>
</html><?php /**PATH E:\laravel\project\resources\views/admindetail.blade.php ENDPATH**/ ?>