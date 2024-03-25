<?php
require_once("./entities/nhansu_model.php");
?>
<?php
$nhanVien = nhanvien::get();

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet"  crossorigin="anonymous">
</head>

<body>



 
<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">THÔNG TIN NHÂN VIÊN</h1>
    </div>

<table class="table table-bordered">
  <thead>
    <tr>
    <th>MÃ NHÂN VIÊN</th>
        <th>TÊN NHÂN VIÊN</th>
        <th>GIỚI TÍNH</th>
        <th>NƠI SINH</th>
        <th>TÊN PHÒNG</th>
        <th>LƯƠNG</th>
        <th>HÀNH ĐỘNG</th>
    </tr>
  </thead>
<tbody>
<?php foreach($nhanVien as $val) { ?>
    <tr>
        <td><?php echo $val['Ma_NV']; ?></td>
        <td><?php echo $val['Ten_NV']; ?></td>
        <td><?php $gioitinh = $val['Phai']; $image = ($gioitinh == 'NAM') ? './images/man.png' : './images/woman.png'; ?><img src="<?php echo $image; ?>"></td>
        <td><?php echo $val['Noi_Sinh']; ?></td>
        <td><?php echo $val['Ma_Phong']; ?></td>
        <td><?php echo $val['Luong']; ?></td>
        <td>
          <a class="btn" href="./update_nhanvien.php" ><i class="fas fa-edit"></i></a>
          <a class="btn" href="" ><i class="fas fa-trash-alt"></i></a>
        </td>
    </tr>    
<?php  } ?>
  </tbody>
</table>
</div>


</body>

</html>


