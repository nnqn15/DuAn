                    <h2 class="my-3">Tổng quan</h2>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card text-primary mb-3">
                                <div class="card-body">
                                  <h5 class="card-title"><i class="fa-solid fa-book"></i> Đầu sách</h5>
                                  <p class="card-text fs-1 text-center">350</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-success mb-3">
                                <div class="card-body">
                                  <h5 class="card-title"><i class="fa-solid fa-user"></i> Bạn đọc</h5>
                                  <p class="card-text fs-1 text-center">350</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-warning mb-3">
                                <div class="card-body">
                                  <h5 class="card-title"><i class="fa-solid fa-user"></i> Chủ đề</h5>
                                  <p class="card-text fs-1 text-center">35</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-danger mb-3">
                                <div class="card-body">
                                  <h5 class="card-title"><i class="fa-solid fa-user"></i> Lượt mượn</h5>
                                  <p class="card-text fs-1 text-center">3.650</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="cart-header">
                                    <strong>Thống kê sách theo chủ đề</strong>
                                </div>
                                <div id="myChart" style="max-width:700px; height:400px"></div>
                                <div class="cart-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Tên chủ đề</th>
                                                <th>Số lượng</th>
                                                <th>Giá trung bình</th>
                                                <th>Thấp nhất</th>
                                                <th>Cao nhất</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($tkSachTheoChuDe as $cd):?>
                                            <tr>
                                                <td><?=$cd['TenChuDe']?></td>
                                                <td><?=$cd['SoLuong']?></td>
                                                <td><?=number_format(round(max(500,$cd['TrungBinh']*0.5/100)))?>đ</td>
                                                <td><?=number_format(round(max(500,$cd['ThapNhat']*0.5/100)))?>đ</td>
                                                <td><?=number_format(round(max(500,$cd['CaoNhat']*0.5/100)))?>đ</td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="cart-header">
                                    <strong>Thống kê doanh thu</strong>
                                </div>
                                <div id="myChart2" style="max-width:700px; height:400px"></div>
                                <div class="cart-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Tháng/Năm</th>
                                                <th>Số bạn đọc</th>
                                                <th>Lượt mượn</th>
                                                <th>Số sách mượn</th>
                                                <th>Doanh thu</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($tkDoanhThu as $cd):?>
                                            <tr>
                                                <td><?=$cd['Thang']?>/<?=$cd['Nam']?></td>
                                                <td><?=$cd['SoBanDoc']?></td>
                                                <td><?=$cd['SoLuotMuon']?></td>
                                                <td><?=$cd['SoSachMuon']?></td>
                                                <td><?=number_format($cd['DoanhThu'])?>đ</td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
<script src="https://www.gstatic.com/charts/loader.js"></script>
<script>
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    // Your Function
    function drawChart() {
    
        // Set Data
        const data = google.visualization.arrayToDataTable([
        ['Chủ đề', 'Số lượng'],
        <?php foreach ($tkSachTheoChuDe as $cd) {
            echo "['".$cd['TenChuDe']."',".$cd['SoLuong']."],";
        } ?>

        ]);

        // Set Options
        const options = {
        title:'Thống kê sách theo chủ đề',
        is3D:true
        };

        // Draw
        const chart = new google.visualization.PieChart(document.getElementById('myChart'));
        chart.draw(data, options);


        // Set Data
        const data2 = google.visualization.arrayToDataTable([
        ['Tháng/Năm', 'DoanhThu'],
        <?php foreach ($tkDoanhThu as $dt) {
            echo "['".$dt['Thang']/$dt['Nam']."',".$dt['DoanhThu']."],";
        } ?>
        ]);

        // Set Options
        const options2 = {
        title:'Thống kê theo doanh thu'
        };

        // Draw
        const chart2 = new google.visualization.ColumnChart(document.getElementById('myChart2'));
        chart2.draw(data2, options2);
    }
</script>