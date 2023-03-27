<table class="table">
      <thead>
        <tr>
        <th>Product Detail ID</th>
          <th>Made</th>
          <th></th>
  
        </tr>
      </thead>
      <tbody>
        <?php while ($product = $products->fetch()) { ?>
          <tr>
          <td><?php echo $product['masp']; ?></td>
          <td><?php echo $product['tennsx']; ?></td>
            <td>
              <a href="index.php?action=adminproductdetail&act=update&id=<?php echo $product['masp']; ?>" class="btn btn-primary">Edit</a>
              <a href="index.php?action=adminproductdetail&act=delete&id=<?php echo $product['masp']; ?>" onclick="return confirm('Are you sure you want to delete this Order? It will delete all infomation about this Order in OrderDetail')" class="btn btn-danger">Delete</a>
              
            </td>
          </tr>
        <?php } ?>
      </tbody>
      
    </table>
    <a class="btn btn-primary" href="index.php?action=adminproductdetail&act=addnew">Add new product detail</a>
