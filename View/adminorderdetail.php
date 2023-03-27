<table class="table">
      <thead>
        <tr>
        <th>Order Detail ID</th>
          <th>Order ID</th>
          <th>Product ID</th>
          <th>Quantity</th>
          <th>Total</th>
          <th></th>
  
        </tr>
      </thead>
      <tbody>
        <?php while ($product = $products->fetch()) { ?>
          <tr>
          <td><?php echo $product['mactsp']; ?></td>
          <td><?php echo $product['masohd']; ?></td>
            <td><?php echo $product['mahh']; ?></td>
            <td><?php echo $product['soluongmua']; ?></td>

            <td><?php echo $product['thanhtien']; ?></td>
            <td>
              <a href="index.php?action=adminorderdetail&act=update&id=<?php echo $product['mactsp']; ?>" class="btn btn-primary">Edit</a>
              <a href="index.php?action=adminorderdetail&act=delete&id=<?php echo $product['mactsp']; ?>" onclick="return confirm('Are you sure you want to delete this Order? It will delete all infomation about this Order in OrderDetail')" class="btn btn-danger">Delete</a>
              
            </td>
          </tr>
        <?php } ?>
      </tbody>
      
    </table>
