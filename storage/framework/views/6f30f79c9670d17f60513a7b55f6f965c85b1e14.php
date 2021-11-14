<html>
<head>
	<title>Edit Page</title>
    <meta charset="utf-8">             
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
	<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<div class="container">
		<div class="row">
	      <div class="col">
	        <form method="POST">
	         	<?php echo csrf_field(); ?>
		        <div class="mb-3">
		        	<label for="InputUserId" class="form-label" style="color: black;">User Id</label>
		            <input type="text" class="form-control" name="User_Id" value="<?php echo e($uid[0]->User_Id); ?>" placeholder="Enter User Id">
		        	<span style="color: red"><?php $__errorArgs = ['User_Id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
		        </div>
		        <div class="mb-3">
		            <label for="InputPetId" class="form-label" style="color: black;">Pet Id</label>
		            <input type="text" class="form-control" name="Pet_Id" value="<?php echo e($uid[0]->Pet_Id); ?>" placeholder="Enter Pet Id">
		            <span style="color: red"><?php $__errorArgs = ['Pet_Id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
		        </div>
				<input type="submit" class="btn btn-primary" value="Update">
			</form>
		  </div>
		</div>
	</div>

	<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>
</html><?php /**PATH E:\laravel\project\resources\views//editadopted.blade.php ENDPATH**/ ?>