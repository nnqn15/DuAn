<h2>Đăng nhập</h2>
<?php if(isset($_SESSION['loi'])): ?>
    <div class="alert alert-danger" role="alert">
        <?=$_SESSION['loi'];?>
    </div>
<?php endif; unset($_SESSION['loi']);?>
<form method="post" action="">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Số điện thoại</label>
        <input type="text" name="SoDienThoai" class="form-control" id="exampleInputEmail1">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
        <input type="password" name="MatKhau" class="form-control" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-primary">Đăng nhập</button>
</form>