<?php

include 'header.php';

?>

<div class="col-md-12">
  <div class="col-md-3">
  </div>
  <div class="col-md-6">
    <form method="POST" action="">
      <input type="text" class="form-control" name="name" placeholder="username">
      <input type="text" class="form-control" name="email" placehoder="email@example.com">
      <input type="password" class="form-control" name="password">
      <input type="checkbox" class="from-control" name="remember">Remember me
      <input type="submit" class="btn btn-success">
    </form>
  </div>
  <div class="col-md-3">
  </div>
</div>

<?php include 'footer.php'; ?>
