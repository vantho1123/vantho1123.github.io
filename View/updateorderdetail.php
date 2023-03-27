<form method="post" action="index.php?action=adminorderdetail&act=update_action&id=<?php echo $masohd ?>">

    <div class="mb-3">
        <label for="nsx" class="p-1">Product name: </label>
        <select name="sp">
            <?php
            while ($loais = $name->fetch()) {
                ?>
                <option name="otp" value="<?php echo $loais['MASP'] ?>"><?php echo $loais['TENSP']." - ".$loais['GIA']  ?> </option>

            <?php } ?>
        </select>
    </div>
    <input type="number" class="form-control" style="display=none" name="masohd" value="<?php echo $order['masohd']  ?>">
    <div class="mb-3">
        <label for="gia" class="form-label">Quantity</label>
        <input type="number" class="form-control"  name="quan"  required>
      </div>

    <button type="submit" class="btn btn-primary">Update Product</button>
</form>