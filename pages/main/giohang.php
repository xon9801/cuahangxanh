<h3>
  <?php
  if(isset($_SESSION['dangky'])){
    echo 'Giỏ hàng | '.'<span style="color:yellow">'.$_SESSION['dangky'].'</span>';
   
  } 
  ?>
</h3>
<?php
	if(isset($_SESSION['cart'])){
		
	}
?>
<table style="width:100%;text-align: center;border-collapse: collapse;" border="3">
  <tr sytle="border: 3px ;solid color=black;">
    <th>ID</th>
    <th>Mã sản phẩm</th>
    <th>Tên sản phẩm</th>
    <th>Hình ảnh</th>
    <th>Số lượng</th>
    <th>Giá sản phẩm</th>
    <th>Thành tiền</th>
    <th>Quản lý</th>
   
  </tr>
  <?php
  if(isset($_SESSION['cart'])){
  	$i = 0;
  	$tongtien = 0;
  	foreach($_SESSION['cart'] as $cart_item){
  		$thanhtien = $cart_item['soluong']*$cart_item['giasp'];
  		$tongtien+=$thanhtien;
  		$i++;
  ?>
  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $cart_item['masp']; ?></td>
    <td><?php echo $cart_item['tensanpham']; ?></td>
    <td><img src="admincp/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh']; ?>" width="150px"></td>
    <td>
    	<a href="pages/main/themgiohang.php?cong=<?php echo $cart_item['id'] ?>">
             <i class="fa fa-plus fa-style" aria-hidden="true"></i>
      </a>
    	<?php echo $cart_item['soluong']; ?>
    	<a href="pages/main/themgiohang.php?tru=<?php echo $cart_item['id'] ?>">
             <i class="fa fa-minus fa-style" aria-hidden="true"></i>
      </a>
    </td>
    <td><?php echo number_format($cart_item['giasp'],0,',','.').'vnđ/100gr'; ?></td>
    <td><?php echo number_format($thanhtien,0,',','.').'vnđ'; ?></td>
    <td><button type="submit" class="giohang" onclick="if (confirm('Bạn có chắc muốn xoá không?'))
                 window.location.href='pages/main/themgiohang.php?xoa=<?php echo $cart_item['id'] ?>';">
                 <a style="color:white; text-decoration:none" >Xoá</a>
        </button>
    </td>
  </tr>
  <?php
  	}
  ?>
   <tr>
    <td colspan="8">
    	<p style="float: right; margin-right:70px">Tổng tiền: 
         <?php echo number_format($tongtien,0,',','.').'vnđ' ?></p><br/>
      <div style="clear: both;"></div>
      <?php
        if(isset($_SESSION['dangky'])){
          ?>

           <button class="giohang" type="submit"><a style="color:white; text-decoration:none" href="pages/main/thanhtoan.php">Đặt hàng</a></button>
         
      <?php
        }else{
      ?>
    
        <button class="giohang" type="submit"><a style="color:white; text-decoration:none" href="index.php?quanly=dangky">Đăng ký đặt hàng</a></button>

      <?php
        }
      ?>
      
     


    </td>

   
  </tr>
  <?php	
  }else{ 
  ?>
   <tr>
    <td colspan="8"><p>Hiện tại giỏ hàng trống</p></td>
   
  </tr>
  <?php
  } 
  ?>  
 


  
 
</table>


  
