                <h2><?=$ctChuDe['TenChuDe']?></h2>
                <div class="row">
                    <?php foreach($dsSachCungChuDe as $sach): ?>
                        <div class="col-md-3 my-3">
                            <div class="card">
                                <img src="<?=$base_url ?>upload/product/<?=$sach['HinhAnh']?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                <h5 class="card-title"><?=$sach['TuaSach']?></h5>
                                <p class="card-text"><?=number_format($sach['GiaTri'],0,",",".")?>đ</p>
                                <a href="<?=$base_url?>book/detail/<?=$sach['MaSach']?>" class="btn btn-primary">Mượn</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>