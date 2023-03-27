
<form method="post" action="index.php?action=adminproduct&act=update_action&id=<?php echo $mahh ?>" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="tenhh" class="form-label">Product name</label>
        <input type="text" class="form-control" name="tenhh" value="<?php echo $detail['TENSP']?>" required>
      </div>
      <div class="mb-3">
        <label for="gia" class="form-label">Price </label>
        <input type="number" class="form-control"  name="gia" value="<?php echo $detail['GIA']?>" required>
      </div>
      <div class="mb-3">
        <label for="hinh" class="form-label">Image</label>
        <input type="file" class="form-control"  name="image"  value="<?php echo $detail['hinh']?>" required>
      </div>
      <div class="mb-3">
        <label for="nsx" class="p-1">Manufacturers Name: </label>
      <select name="nsx">
        <?php
          while ($loais = $loai->fetch()){
        ?>
    <option value="<?php echo $loais['masp'] ?>"><?php echo $loais['tennsx'] ?></option>
    <?php } ?>
</select>
      </div>
      
      <div class="mb-3">
        <label for="soluotxem" class="form-label">View</label>
        <input type="number" class="form-control"  value="<?php echo $detail['soluotxem']?>" name="soluotxem" required>
      </div>
      <div class="mb-3">
        <label for="mota" class="form-label">Description</label>
        <textarea class="form-control" name="mota" placeholder="<?php echo $detail['mota']?>" required></textarea>
      </div>
      <div class="mb-3">
        <label for="soluongton" class="form-label">Instock</label>
        <input type="number" step="0.01" class="form-control" value="<?php echo $detail['soluongton']?>" name="soluongton" required>
      </div>
      <button type="submit" class="btn btn-primary">Update Product</button>
    </form>
