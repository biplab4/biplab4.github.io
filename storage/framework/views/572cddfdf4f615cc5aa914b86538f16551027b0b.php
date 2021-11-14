<!DOCTYPE html>
<html>
<head>
	<title>Adopt Page</title>

	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
		
		<link rel="stylesheet" type="text/css" href="css/detail.css">

		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>

	<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<?php echo $__env->make('sweet::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<div class="container">
		<div class="animals">
			<h2><strong>Adopt a Pet for You</strong></h2>
			<p><strong>People that say "Money can't buy you happiness" have never paid an adoption fee.</strong></p>
		</div>

		<form class="detail" method="POST" style="color: black;">
			<?php echo csrf_field(); ?>
			<img src="images/ben.jpg">
			<input type="hidden" name="petid" value="<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo e($i->Pet_Id); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>">
			<p><b>Breed:</b><?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo e($i->Breed); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></p><br>
			<p><b>Weight:</b><?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo e($i->Weight); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></p><br>
			<p><b>Color:</b><?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo e($i->Color); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></p><br>
			<p><b>Gender:</b><?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo e($i->Gender); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></p><br>
			<p><b>Age:</b><?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo e($i->Age); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></p><br>
			<button type="submit" class="button">Adoption Fee : Rs. <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo e($i->Fee); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></button>
		</form>
		
		<div class="desc">
			<b>Facts about Pet : </b> <br>
			<p><?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo e($i->Description); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></p>
		</div>
	</div>

	<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>
</html><?php /**PATH E:\laravel\project\resources\views//bengal.blade.php ENDPATH**/ ?>