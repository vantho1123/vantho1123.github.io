<table class="table">
      <thead>
        <tr>
          <th>Order ID</th>
          <th>User ID</th>
          <th>Order day</th>
          <th>Total</th>
          <th></th>
  
        </tr>
      </thead>
      <tbody>
        <?php while ($product = $products->fetch()) { ?>
          <tr>
          <td><?php echo $product['masohd']; ?></td>
            <td><?php echo $product['makh']; ?></td>
            <td><?php echo $product['ngaydat']; ?></td>

            <td><?php echo $product['tongtien']; ?></td>
            <td>
              <a href="index.php?action=adminorder&act=update&id=<?php echo $product['masohd']; ?>" class="btn btn-primary">Edit</a>
              <a href="index.php?action=adminorder&act=delete&id=<?php echo $product['masohd']; ?>" onclick="return confirm('Are you sure you want to delete this Order? It will delete all infomation about this Order in OrderDetail')" class="btn btn-danger">Delete</a>
              
            </td>
          </tr>
        <?php } ?>
      </tbody>
      
    </table>
