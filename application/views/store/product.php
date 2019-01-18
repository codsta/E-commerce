<?php require_once('header.php'); ?>
<!-- Page Content -->
<div class="container">

  <div class="row">

    <div class="col-lg-3">

      <h1 class="my-4">Fashe</h1>
      <div class="list-group">
        <div class="list-group">
          <?php foreach($categories as $category) : ?>
            <a href="#" class="list-group-item"><?php echo $category->category_title; ?></a>
          <?php endforeach; ?>
        </div>
      </div>

    </div>
    <!-- /.col-lg-3 -->

    <div class="col-lg-9">

    <?php foreach ($product as $p) : ?>
      <div class="card mt-4">
        <img class="card-img-top img-fluid" src="<?php echo base_url().'assets/product-images/'.$p->image_name; ?>" alt="">
        <div class="card-body">
          <h3 class="card-title"><?php echo $p->product_title; ?></h3>
          <h4> &#8377; <?php echo $p->product_price; ?></h4>
          <p class="card-text"><?php echo $p->product_desc; ?></p>
          <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
          4.0 stars
        </div>
      </div>
    <?php endforeach; ?>

      <!-- /.card -->

      <div class="card card-outline-secondary my-4">
        <div class="card-header">
          Product Reviews
        </div>
        <div class="card-body">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
          <small class="text-muted">Posted by Anonymous on 3/1/17</small>
          <hr>
          <a href="#" class="btn btn-success">Leave a Review</a>
        </div>
      </div>
      <!-- /.card -->

    </div>
    <!-- /.col-lg-9 -->


  </div>
  <!-- /.row -->

</div>
<!-- /.container -->
<?php require_once('footer.php'); ?>
