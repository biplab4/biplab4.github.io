<html>

  <head>
    <title>HomePage</title>
    <meta charset="utf-8">        
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel='stylesheet' type='text/css' media='screen' href='css/index.css'>
  </head>

  <body>
    <div class="container">
      <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <img src="images\logo.png" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none" style="height:8%;width:8%">

        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
          <h1>Welcome Admin</h1>
        </ul>
        
        <?php
          if(session()->has('data')){
            $value=session()->get('data');
          ?>
            <div class="col-md-3 text-end">
              <button type="button" class="btn btn-outline-primary me-2"><a href="/admin" class="text-white" style="text-decoration: none; ">Welcome <?php echo $value; ?></a></button>
              <button type="button" class="btn btn-outline-primary me-2"><a href="/logout" class="text-white" style="text-decoration: none; ">Logout</a></button>
            </div>
          <?php
          } 
          else{
          ?>
            <div class="col-md-3 text-end">
              <button type="button" class="btn btn-outline-primary me-2"><a href="/login" class="text-white" style="text-decoration: none; ">Login</a></button>
              <button type="button" class="btn btn-primary" href="register.php"> <a href="/register" class="text-white" style="text-decoration: none;">Register </a></button>
            </div>
          <?php } ?>
      </header>
    </div>

    <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>

</html><?php /**PATH E:\laravel\project\resources\views/admin.blade.php ENDPATH**/ ?>