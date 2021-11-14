<!DOCTYPE html>
<html>
<head>
	<title>Adopt Page</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/detail.css">
</head>

<body>
	<div class="container">

		<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

		<div class="animals">
			<h2><strong>Adopt a Pet for You</strong></h2>
			<p><strong>People that say "Money can't buy you happiness" have never paid an adoption fee.</strong></p>
		</div>
		<form class="detail">
			<?php echo csrf_field(); ?>
			<img src="images/scottish.jpg">
			<p><b>Breed:</b> Scottish Fold</p><br>
			<p><b>Weight:</b> 9-10 lbs</p><br>
			<p><b>Color:</b> White</p><br>
			<p><b>Gender:</b> Female</p><br>
			<p><b>Age:</b> 3 years</p><br>
			<button type="submit" class="button">Adoption Fee : Rs. 15000</button>
		</form>
		</div>
		<div class="desc">
			<b>Facts about Pet: </b><br>
			<p>
				Like most celebrities, she’s reclusive and prefers a quiet environment. She is also very shy and will require someone with patience. However, she is not shy when it’s time for cat treats! She is a strict pescatarian, enjoying the finest fish and seafood. She also enjoys living her best life playing with her favorite toy balls. She is a glamorous girl and is looking for her up upscale forever home.
			</p>
		</div>

	</div>

	<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html><?php /**PATH E:\laravel\project\resources\views/scottish.blade.php ENDPATH**/ ?>