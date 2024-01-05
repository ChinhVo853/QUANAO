
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
     p{display:inline;}
    </style>
</head>
<body>
    <!-- đây là danh sách khách hàng -->
<h5 class="mb-0">THÔNG TIN KHÁCH HÀNG</h5>
<p>Tên: {{ $hoaDon->khach_hang->ho_ten }},</p>
<p>Email: {{ $hoaDon->khach_hang->email }},</p>
<p>Sdt: {{$hoaDon->khach_hang->so_dien_thoai }},</p>
<p>Dc: {{ $hoaDon->khach_hang->dia_chi }}</p>

<h5 class="mb-0">NỘI DUNG HÀNG</h5>
@foreach($chiTietHoaDon as $cthd)
<p>{{$cthd->chi_tiet_san_pham->san_pham->ten}},</p>
<p>{{$cthd->chi_tiet_san_pham->san_pham->so_luong}},</p>
@endforeach
<h5 class="mb-0">Tiền thu người nhận</h5>
<p>{{ $hoaDon->tong_tien}}</p>


</body>
</html>   