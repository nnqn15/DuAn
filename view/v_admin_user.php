                    <a href="<?=$base_url?>admin/user/add" class="btn btn-primary float-end">Thêm tài khoản</a>
                    <h2 class="my-3">Tài khoản</h2>
                    <table class="table text-center align-middle">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Ảnh</th>
                                <th class="text-start">Họ tên</th>
                                <th>Số điện thoại</th>
                                <th>Quyền</th>
                                <th class="text-end">Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1;foreach($dsTK as $tk): ?>
                            <tr>
                                <td><?=$i?></td>
                                <td><img src="<?=$base_url?>upload/avatar/<?=$tk['HinhAnh']?>" class="rounded-3" style="width: 32px; height: 32px;"></td>
                                <td class="text-start"><?=$tk['HoTen']?></td>
                                <td><?=$tk['SoDienThoai']?></td>
                                <td>
                                    <?php 
                                    switch ($tk['Quyen']) {
                                        case '2':
                                            echo '<span class="badge text-bg-danger">Quản lý cấp cao</span>';
                                            break;
                                        case '1':
                                            echo '<span class="badge text-bg-warning">Quản lý</span>';
                                            break;
                                        
                                        default:
                                            echo '<span class="badge text-bg-primary">Bạn đọc</span>';
                                            break;
                                    }
                                    ?>
                                </td>
                                <td class="text-end">
                                    <a href="<?=$base_url?>admin/user/edit/<?=$tk['MaTK']?>"><button class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></button></a>
                                    <button onclick="deleteUser(<?=$tk['MaTK']?>)" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                                </td>
                            </tr>
                            <?php $i++;endforeach; ?>
                        </tbody>
                    </table>
<script>
    function deleteUser(MaTK){
        var kq=confirm("Bạn có muốn xóa tài khoản này không?");
        if(kq){
            window.location='<?=$base_url?>admin/user/delete/'+MaTK;
        }
    }
</script>