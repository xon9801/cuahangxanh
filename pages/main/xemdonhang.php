<?php
if(isset($_GET['cancel'])&& isset($_GET['madonhang'])){
  $cancel = $_GET['cancel'];
  $madonhang= $_GET['madonhang'];
}else{
  $cancel = '';
  $madonhang = '';
}
$sql_update = "UPDATE tbl_cart SET cancel='".$cancel."' WHERE code_cart='$madonhang'";
mysqli_query($mysqli,$sql_update);
?>

<h3>
<?php
  if(isset($_SESSION['dangky'])){
    echo ' Đơn hàng | '.'<span style="color:yellow">'.$_SESSION['dangky'].'</span>';
  } 
?>
</h3> 

<?php
	if(isset($_GET['khachhang'])){
    $id_khachhang = $_GET['khachhang'];
	}else{
   $id_khachhang='';
}
$sql_select = "SELECT * FROM tbl_cart where tbl_cart.id_khachhang='$id_khachhang' GROUP BY tbl_cart.code_cart";
$query_select = mysqli_query($mysqli,$sql_select);

?>


<table style="width:100%; text-align: center;border-collapse: collapse;" border="3">
  <tr sytle="border: 3px ;solid color=black;">
    <th>ID</th>
    <th>Mã đơn hàng</th>
    <th>Ngày đặt</th>
    <th>Quản lý</th>
  </tr>
  <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_select)){
  	$i++;
  ?>
  <tr>
  	<td><?php echo $i ?></td>
    <td><?php echo $row['code_cart']; ?></td>
    <td><?php echo $row['ngaythang']; ?></td>
  
    <td>
      <a style="color:blue; text-decoration:none" href="index.php?quanly=chitietdonhang&khachhang=<?php 
                echo $_SESSION['id_khachhang'] ?>&madonhang=<?php echo $row['code_cart'] ?>"> Chi tiết đơn hàng</a> |
    <?php
      if($row['cancel']==0){
        ?>
      <a style="color:blue; text-decoration:none" href="index.php?quanly=xemdonhang&khachhang=<?php 
                echo $_SESSION['id_khachhang'] ?>&madonhang=<?php echo $row['code_cart'] ?>&cancel=1"> Yêu cầu hủy</a>
      <?php
      }elseif($row['cancel']==1){
        ?>
        Đang chờ hủy
        <?php
      }else{
        echo'Đã hủy đơn';
      }
      ?>
      </td>

  </tr>
  
  <?php
  } 
  ?>
  </table>
  
