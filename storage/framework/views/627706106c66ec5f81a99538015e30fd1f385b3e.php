<!DOCTYPE html>
<html>
<head>
	<title>Adopt Page</title>

	<meta charset="utf-8">
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
		<img src="images/ben.jpg">
		<p><b>Breed:</b> Bengal Cat</p><br>
		<p><b>Weight:</b> 8-10lbs</p><br>
		<p><b>Color:</b> Black,Brown & White</p><br>
		<p><b>Gender:</b> Female</p><br>
		<p><b>Age:</b> 4 years</p><br>
		<button class="button">Adoption Fee : Rs. 10000</button>
	</form>
	</div>
	
	<div class="desc">
		<b>Facts about Pet : </b> <br>
		<p>
			This cat has  very exotic unique markings with silky coat you can’t even dream of, She has very affectionate humans who don’t mind daily exploring. She is super flirty and love cuddling in with foster in bed and siblings as well. If you’re looking for a cat with a good personality then she can be your gal.
		</p>
	</div>
</div>
<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>
</html><?php /**PATH E:\laravel\project\resources\views/bengal.blade.php ENDPATH**/ ?>