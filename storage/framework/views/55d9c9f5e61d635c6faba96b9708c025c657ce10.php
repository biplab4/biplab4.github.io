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
		<img src="images/german.jpg">
		<p><b>Breed:</b> German Shepherd</p><br>
		<p><b>Weight:</b> 65-90lbs</p><br>
		<p><b>Color:</b> Black & Brown</p><br>
		<p><b>Gender:</b> Male</p><br>
		<p><b>Age:</b> 5 years</p><br>
		<button type="submit" class="button">Adoption Fee : Rs. 20000</button>
	</form>
	<div class="desc">
		<b>Facts about Pet : </b><br>
		<p>
			He is very good boy that he never did anything wrong. He would love all the love he missed out in as a baby. He would love to be your only dog, he has so much live to give. He loves to be loved he gets so happy when he is being petted and he loves his belly rubs. He is truly incredible and deserves a loving experienced bully breed owner.
		</p>
	</div>
</div>
<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html><?php /**PATH E:\laravel\project\resources\views/german.blade.php ENDPATH**/ ?>