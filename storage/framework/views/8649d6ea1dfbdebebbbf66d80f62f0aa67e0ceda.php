<!DOCTYPE html>
<html>
<head>
	<title>Adopt Page</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="css/detail.css">
</head>
<body>
	<div class="contianer">
	<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<div class="animals">
		<h2><strong>Adopt a Pet for You</strong></h2>
		<p><strong>People that say "Money can't buy you happiness" have never paid an adoption fee.</strong></p>
	</div>
	<form class="detail">
		<?php echo csrf_field(); ?>
		<img src="images/pomeranian.jpg">
		<p><b>Breed:</b> Pomeranian</p><br>
		<p><b>Weight:</b> 3-7 lbs</p><br>
		<p><b>Color:</b> Red Sable</p><br>
		<p><b>Gender:</b> Female</p><br>
		<p><b>Age:</b> 7 years</p><br>
		<button type="submit" class="button">Adoption Fee : Rs. 24000</button>
	</form>
	</div>
	<div class="desc">
		<b>Facts about Pet : </b><br>
		<p>
			This dog is an easy going 7 year old Pomeranian who's great with all people. She loves kids and is great in the house. While she's not a fan of other dogs, she's super mellow and is easy to walk. She is in need of a loving foster home, or even better, a forever home.
		</p>
	</div>
</div>

	<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html><?php /**PATH E:\laravel\project\resources\views/pomeranian.blade.php ENDPATH**/ ?>