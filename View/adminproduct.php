<table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Price</th>
          <th>Img</th>
          <th>Made</th>
          <th>views</th>
          <th>Descriptsion</th>
          <th>instock</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($product = $products->fetch()) { ?>
          <tr>
            <td><?php echo $product['MASP']; ?></td>
            <td><?php echo $product['TENSP']; ?></td>
            <td><?php echo $product['GIA']; ?></td>
            <td><img class=" w-25" src="./content/Img/<?php echo $product['hinh'] ?>" alt="" /></td>
            <td><?php echo $product['nhom']; ?></td>
            <td><?php echo $product['soluotxem']; ?></td>
            <td><?php echo $product['mota']; ?></td>
            <td><?php echo $product['soluongton']; ?></td>
            <td>
              <a href="index.php?action=adminproduct&act=update&id=<?php echo $product['MASP']; ?>" class="btn btn-primary">Edit</a>
              <a href="index.php?action=adminproduct&act=delete&id=<?php echo $product['MASP']; ?>" onclick="return confirm('Are you sure you want to delete this product?')" class="btn btn-danger">Delete</a>
              
            </td>
          </tr>
        <?php } ?>
      </tbody>
      
    </table>
    <a class="btn btn-primary" href="index.php?action=adminproduct&act=addnew">Add new product</a>
