
<form method="post" action="index.php?action=adminproductdetail&act=update_action&id=<?php echo $loai['masp'] ?>" >
      <div class="mb-3">
        <label for="id" class="form-label">Manufacturers id</label>
        <input type="number" class="form-control"  name="id" value="<?php echo $loai['masp']?>" disabled>
      </div>
      <div class="mb-3">
        <label for="name" class="form-label">Manufacturers Name</label>
        <input type="text" class="form-control"  name="name" value="<?php echo $loai['tennsx']?>" required>
      </div>
      <button type="submit" class="btn btn-primary">Update Product</button>
    </form>