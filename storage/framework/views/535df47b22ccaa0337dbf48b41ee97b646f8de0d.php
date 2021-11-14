<html>
  <head>
    <title>Edit Detail Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel='stylesheet' type='text/css' media='screen' href='css/index.css'>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  </head>
  <body>
    <?php echo $__env->make('sweet::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container">
      <div class="row">
        <div class="col">
          <form method="GET" action="/updatedetail/<?php echo e($data[0]->Pet_Id); ?>">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
              <label for="InputBreed" class="form-label" style="color: black;">Breed</label>
              <input type="text" class="form-control" name="Breed" value="<?php echo e($data[0]->Breed); ?>" placeholder="Enter Breed">
              <span style="color: red"><?php $__errorArgs = ['Breed'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
            </div>

            <div class="mb-3">
              <label for="InputWeight" class="form-label" style="color: black;">Weight</label>
              <input type="text" class="form-control" name="Weight" value="<?php echo e($data[0]->Weight); ?>" placeholder="Enter Weight">
              <span style="color: red"><?php $__errorArgs = ['Weight'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
            </div>

            <div class="mb-3">
              <label for="InputColor" class="form-label" style="color: black;">Color</label>
              <input type="text" class="form-control" name="Color" value="<?php echo e($data[0]->Color); ?>" placeholder="Enter Color">
              <span style="color: red"><?php $__errorArgs = ['Color'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
            </div>
              
            <div class="mb-3">
              <label for="InputGender" class="form-label" style="color: black;">Gender</label>
              <input type="text" class="form-control" name="Gender" value="<?php echo e($data[0]->Gender); ?>" placeholder="Enter Gender">
              <span style="color: red"><?php $__errorArgs = ['Gender'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
            </div>

            <div class="mb-3">
              <label for="InputAge" class="form-label" style="color: black;">Age</label>
              <input type="text" class="form-control" name="Age" value="<?php echo e($data[0]->Age); ?>" placeholder="Enter Age">
              <span style="color: red"><?php $__errorArgs = ['Age'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
            </div>

            <div class="mb-3">
              <label for="InputFee" class="form-label" style="color: black;">Fee</label>
              <input type="text" class="form-control" name="Fee" value="<?php echo e($data[0]->Fee); ?>" placeholder="Enter Fee">
              <span style="color: red"><?php $__errorArgs = ['Fee'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
            </div>

            <div class="mb-3">
              <label for="InputDescription" class="form-label" style="color: black;">Description</label>
              <input type="text" class="form-control" name="Description" value="<?php echo e($data[0]->Description); ?>" placeholder="Enter Description">
              <span style="color: red"><?php $__errorArgs = ['Description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
          </form>
        </div>
      </div>
    </div> 
    
    <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

  </body>
</html>
<?php /**PATH E:\laravel\project\resources\views/editeddetail.blade.php ENDPATH**/ ?>