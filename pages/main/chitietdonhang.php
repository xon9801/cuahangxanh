<h3>Chi tiết đơn hàng</h3>
<?php
	$madonhang = $_GET['madonhang'];
	$sql_lietke_dh = "SELECT * FROM tbl_cart_details,tbl_sanpham WHERE tbl_cart_details.id_sanpham=tbl_sanpham.id_sanpham AND tbl_cart_details.code_cart='".$madonhang."' ORDER BY tbl_cart_details.id_cart_details DESC";
	$query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);
?>
<table style="width:100%; text-align: center;border-collapse: collapse;" border="3">
  <tr sytle="border: 3px ;solid color=black;">
  	<th>Id</th>
    <th>Mã đơn hàng</th>
    <th>Tên sản phẩm</th>
    <th>Số lượng</th>
    <th>Đơn giá</th>
    <th>Thành tiền</th>
  
  </tr>
  <?php
  $i = 0;
  $tongtien = 0;
  while($row = mysqli_fetch_array($query_lietke_dh)){
  	$i++;
  	$thanhtien = $row['giasp']*$row['soluongmua'];
  	$tongtien += $thanhtien ;
  ?>
  <tr>
  	<td><?php echo $i ?></td>
    <td><?php echo $row['code_cart'] ?></td>
    <td><?php echo $row['tensanpham'] ?></td>
    <td><?php echo $row['soluongmua'] ?></td>
    <td><?php echo number_format($row['giasp'],0,',','.').'vnđ' ?></td>
    <td><?php echo number_format($thanhtien,0,',','.').'vnđ' ?></td>
   	
  </tr>
  <?php
  } 
  ?>
  <tr>
  	<td colspan="6">
   		<p>Tổng tiền : <?php echo number_format($tongtien,0,',','.').'vnđ' ?></p>
   	</td>
   
  </tr>
 
</table>