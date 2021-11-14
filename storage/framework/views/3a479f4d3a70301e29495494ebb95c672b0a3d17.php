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
	<div class="contianer">
	<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<div class="animals">
		<h2><strong>Adopt a Pet for You</strong></h2>
		<p><strong>People that say "Money can't buy you happiness" have never paid an adoption fee.</strong></p>
	</div>
	<form class="detail">
		<?php echo csrf_field(); ?>
		<img src="images/bulldog.jpg">
		<p><b>Breed:</b> Bulldog</p><br>
		<p><b>Weight:</b> 26-60 lbs</p><br>
		<p><b>Color:</b> White & Brown</p><br>
		<p><b>Gender:</b> Male</p><br>
		<p><b>Age:</b> 5 years</p><br>
		<button type="submit" class="button">Adoption Fee : Rs. 18000</button>
	</form>
	</div>
	<div class="desc">
		<b>Facts about Pet : </b><br>
		<p>
			He is a loving pup who just wants to be near people. He likes sitting next to you on the couch watching tv or reading a book, he like finding a free corner to sit and watch you cook in the kitchen, and he likes sitting in the back seat to run errands. He's energetic and friendly and is searching for his perfect permanent family!
		</p>
	</div>
</div>

  <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html><?php /**PATH E:\laravel\project\resources\views/bulldog.blade.php ENDPATH**/ ?>