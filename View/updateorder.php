
<form method="post" action="index.php?action=adminorder&act=update_action&id=<?php echo $masohd ?>" >
      <div class="mb-3">
        <label for="gia" class="form-label">Customer username</label>
        <input type="text" class="form-control"  name="username" value="<?php echo $tenkh['username']?>" required>
      </div>
      <div class="mb-3">
        <label for="hinh" class="form-label">Date</label>
        <input type="date" class="form-control"  name="ngaydat" value="<?php echo $order['ngaydat']?>" required>
      </div>
      <button type="submit" class="btn btn-primary">Update Product</button>
    </form>