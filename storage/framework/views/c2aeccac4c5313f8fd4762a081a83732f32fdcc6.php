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
		<img src="images/siamese.jpg">
		<p><b>Breed:</b> Siamese</p><br>
		<p><b>Weight:</b> 6-10 lbs</p><br>
		<p><b>Color:</b> Black & White </p><br>
		<p><b>Gender:</b> Male</p><br>
		<p><b>Age:</b> 4 years</p><br>
		<button type="submit" class="button">Adoption Fee : Rs. 12000</button>
	</form>
	</div>
	<div class="desc">
		<b>Facts about Pet : </b><br>
		<p>
			She is a wee sweet sleepy boy looking for tender and loving FUREVER home! His cute little overbite are my most precious features. He is quite a handsome kitten! He will be really excited to live with other kitties and maybe even a doggy! He is well adjusted, and brave around new people! He really love cuddling up to another fur-friend; a bit more than humans, actually! His favorite toys are catnip mice, jingly balls and ribbons! He also love snacks and snuggling up at the foot of your bed for cuddles at bedtime and in the morning.
		</p>
	</div>
</div>
<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html><?php /**PATH E:\laravel\project\resources\views/sia.blade.php ENDPATH**/ ?>