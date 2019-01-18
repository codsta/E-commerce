<?php require_once('header.php'); ?>
<!-- Page Content -->
<div class="container">

  <div class="row">

    <div class="col-lg-3">

      <h1 class="my-4">Fashe</h1>
      <div class="list-group">
        <?php foreach($categories as $category) : ?>
          <a href="#" class="list-group-item"><?php echo $category->category_title; ?></a>
        <?php endforeach; ?>
      </div>

    </div>
    <!-- /.col-lg-3 -->
    <div class="col-lg-9">

      <div class="row mt-5">
        <?php foreach($products as $product) : ?>
        <div class="col-lg-4 col-md-6 mb-4 ">
          <div class="card h-100 ">
            <a href="<?php echo base_url().'products/p/'.url_title($product->product_title); ?>"><img class="card-img-top" src="<?php echo base_url().'assets/product-images/'.$product->image_name; ?>" alt=""></a>
            <div class="card-body">
              <h4 class="card-title"><a href="<?php echo base_url().'products/p/'.url_title($product->product_title); ?>"><?php echo $product->product_title; ?> </a></h4>
              <h5> &#8377; <?php echo $product->product_price; ?></h5>
              <p class="card-text"><?php echo $product->product_desc; ?></p>
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.col-lg-9 -->

  </div>
  <!-- /.row -->

</div>
<!-- /.container -->
<?php require_once('footer.php'); ?>
