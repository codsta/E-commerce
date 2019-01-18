<?php require_once('header.php'); ?>


      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 offset-md-2 grid-margin stretch-card">
              <div class="card">


                <div class="card-body">
                  <h4 class="card-title">Add Product</h4>

                  <div class="alert alert-success " style="display:none"></div>
                  <div class="wrn alert alert-danger " style="display:none"></div>

                  <form method="post" action="" enctype="multipart/form-data" id="add-product" onsubmit="return false">
                    <div class="form-group">
                      <label for="">Product Title</label>
                      <input type="text" class="form-control" name="product_title" id="product_title" placeholder="Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Product Description</label>
                      <textarea name="description" rows="8" cols="80" class="form-control"></textarea>
                    </div>
                    <div class="form-group col-md-4 col-sm-12 pl-0 ">
                      <label for="">Product Price</label>
                      <div class="input-group mb-3 ml-0">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1">&#8377;</span>
                        </div>
                        <input type="number" name="price" class="form-control" placeholder="Enter Price" aria-label="price" aria-describedby="basic-addon1">
                      </div>
                    </div>
                    <div class="form-group form-check form-check-flat">
                      <label class="form-check-label">
                        <input type="checkbox" class="select-all-clr form-check-input"> Select All
                      </label>
                    </div>
                    <div class="form-check form-check-flat">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="XS" name="sizes[]"> Extra Small (XS)
                      </label>
                    </div>
                    <div class="form-check form-check-flat">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="S" name="sizes[]"> Small (S)
                      </label>
                    </div>
                    <div class="form-check form-check-flat">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="M" name="sizes[]"> Medium (M)
                      </label>
                    </div>
                    <div class=" form-check form-check-flat">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="L" name="sizes[]"> Large (L)
                      </label>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-12 col-form-label">Product Category</label>
                      <div class="col-sm-6">
                        <select class="form-control" name="product-category">
                          <?php foreach ($categories as $category) { ?>

                                  <option value="<?php echo $category->category_id; ?>"><?php echo $category->category_title; ?></option>
                          <?php } ?>
                        </select>
                      </div>
                    </div>
                    <div class="form-group cust-select">
                      <select name="color" class="selectpicker" data-live-search="true" data-size="10">
                        <?php $html=''; foreach($colors as $color) {
                              $html .= '<option value="'.$color->color_id.'" data-content="<i class=\'mdi mdi-label h3\' style=\'color:'.$color->color_name.' \'  ></i>
                              <label class=\'mt-7\'>'.$color->color_code.'</label> "></option>';
                              }
                              echo $html;
                        ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label class="col-md-12">File upload</label>
                      <div class="col-md-6 input-group mb-3">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" name="product-image" id="product-image">
                          <label class="custom-file-label" for="">Choose file</label>
                        </div>
                        <div class="input-group-append">
                          <span class=" btn btn-success" id="">Upload</span>
                        </div>
                      </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-success">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  <?php echo form_close(); ?>
                </div>
              </div>
            </div>

          </div>
<script type="text/javascript">
  var base_url = "<?php echo base_url(); ?>";
</script>
<?php require_once('footer.php'); ?>
