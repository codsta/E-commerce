<?php require_once('header.php'); ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 offset-md-2 grid-margin stretch-card">
              <div class="card">
                <div class="alert alert-success " style="display:none"></div>
                <div class="alert alert-danger " style="display:none"></div>
                <div class="card-body">
                  <h4 class="card-title">Add Product Category</h4>
                  <form class="form-sample" action="<?php echo base_url(); ?>admin/categories/add_category" method="post">
                    <div class="form-group">
                      <label for="">Category Title</label>
                      <input type="text" class="form-control" name="category_title" placeholder="Enter Category Nname" maxlength="50">
                    </div>
                    <button type="submit" name="submit" class="btn btn-success mr-2">Submit</button>
                    <input type="reset" value="Reset" class="btn btn-light">
                  </form>
                </div>
              </div>
            </div>

          </div>

<?php require_once('footer.php'); ?>
