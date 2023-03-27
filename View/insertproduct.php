<div>
        <h3>Excel Import</h3>
        <form action="index.php?action=adminproduct&act=import" enctype="multipart/form-data" method="post">
            <input type="file" name="fileproduct" id="">
            <button class="btn btn-primary">Import</button>
        </form>
</div>
<form method="post" action="index.php?action=adminproduct&act=addnew_action" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="tenhh" class="form-label">Tensp</label>
        <input type="text" class="form-control" name="tenhh" required>
      </div>
      <div class="mb-3">
        <label for="gia" class="form-label">Gia</label>
        <input type="number" class="form-control"  name="gia" required>
      </div>
      <div class="mb-3">
        <label for="hinh" class="form-label">Hinh</label>
        <input type="file" class="form-control"  name="image" required>
      </div>
      <div class="mb-3">
        <label for="nsx" class="p-1">Nhà sản xuất: </label>
      <select name="nsx">
        <?php
          while ($loais = $loai->fetch()){
        ?>
    <option value="<?php echo $loais['masp'] ?>"><?php echo $loais['tennsx'] ?></option>
    <?php } ?>
</select>
      </div>
      
      <div class="mb-3">
        <label for="soluotxem" class="form-label">So luot xem</label>
        <input type="number" class="form-control"  name="soluotxem" required>
      </div>
      <div class="mb-3">
        <label for="mota" class="form-label">Mota</label>
        <textarea class="form-control" name="mota" required></textarea>
      </div>
      <div class="mb-3">
        <label for="soluongton" class="form-label">soluongton</label>
        <input type="number" step="0.01" class="form-control" name="soluongton" required>
      </div>
      <button type="submit" class="btn btn-primary">Create Product</button>
    </form>