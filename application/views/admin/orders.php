<?php require_once('header.php'); ?>
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Orders</h4>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <th>Order Id </th>
                <th>Product Name</th>
                <th>Product SKU</th>
                <th>Customer Name</th>
                <th>Order Date & Time</th>
              </thead>
              <tbody>
                <?php foreach($orders as $order) : ?>
                <tr>
                  <td><?php echo $order->order_id; ?></td>
                  <td><?php echo $order->product_title ?></td>
                  <td><?php echo $order->SKU; ?></td>
                  <td><?php echo $order->customer_name; ?></td>
                  <td><?php echo $order->order_datetime; ?></td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

<?php require_once('footer.php'); ?>
