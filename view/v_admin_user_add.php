                    <h2 class="my-3">Thêm tài khoản</h2>
                    <?php if(isset($_SESSION['thongbao'])): ?>
                        <div class="alert alert-success my-3" role="alert">
                            <?=$_SESSION['thongbao'];?>
                        </div>
                    <?php endif; unset($_SESSION['thongbao']);?>
                    <?php if(isset($_SESSION['loi'])): ?>
                        <div class="alert alert-danger my-3" role="alert">
                            <?=$_SESSION['loi'];?>
                        </div>
                    <?php endif; unset($_SESSION['loi']);?>
                    <form action="" method="post">
                        <div class=" mb-3">
                            <span for="HoTen">Họ tên</span>
                            <input type="text" class="form-control" name="HoTen" id="HoTen" placeholder="Họ tên">
                        </div>
                        <div class=" mb-3">
                            <span for="MatKhau">Mật khẩu</span>
                            <input type="text" class="form-control" name="MatKhau" id="MatKhau" placeholder="Mật khẩu">
                        </div>
                        <div class=" mb-3">
                            <span for="SoDienThoai">Số điện thoại</span>
                            <input type="text" class="form-control" name="SoDienThoai" id="SoDienThoai" placeholder="Số điện thoại">
                        </div>
                        <div class=" mb-3">
                            <span for="ViTien">Ví tiền</span>
                            <input type="number" class="form-control" name="ViTien" id="ViTien">
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="Quyen">Quyền</label>
                            <select class="form-select" id="Quyen" name="Quyen">
                            <option value="0" selected>Bạn đọc</option>
                            <option value="1">Quản lý</option>
                            <option value="2">Quản lý cấp cao</option>
                            </select>
                        </div>
                        <button name="submit" type="submit" class="btn btn-primary">Xác nhận</button>
                    </form>