function tinhThanhTien(){
    var dsSach=document.querySelectorAll('table tbody tr');
    var ngayMuon=document.querySelector('#ngayMuon').value;
    var ngayTra=document.querySelector('#ngayTra').value;
    var SoNgayMuon=(new Date(ngayTra)-new Date(ngayMuon))/(24*60*60*1000);
    for(const sach of dsSach){
        var gia=Number(sach.querySelector('td:nth-child(4)').innerText.replace('đ',''));
        var tien= gia*SoNgayMuon;
        sach.querySelector('td:nth-child:(5)').innerText=tien+'đ';
        tong=tong+tien;
    }
    document.querySelector('tfoot th:nth-child(2)').innerText=tong+'đ';
}