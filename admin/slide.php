<link rel="stylesheet" href="css/style.css" type="text/css" />
<?php
include "connect.php";

$query="Select * from dl_slide order by slide_thutu";

$result = mysql_query($query);
echo"
<h3><br>CÁC ẢNH SLIDESHOW<br></h3>
		<br><br><a href=\"JavaScript:newPopup('themanh.php');\"><img src='images/25.png'/><span style='font-size:17px; color:red;'>&nbspThêm ảnh</span></a><br>
			 <br/>	Lưu ý: Để hình ảnh hiển thị đẹp ta nên resize hoặc crop hình về độ phân giải là 643 x 257 px trước khi đăng lên.<br/>
				<div id='hienthidanhsach'>
			<table cellpadding='10px' cellspacing='0px' border='1px' style='vertical-align:top'>
				<tr id='tieudedanhsach'>
					
					<td width='20%'>Tiêu đề</td>
					<td width='10%'>Ảnh slide</td>
					<td width='40%'>Liên kết đến sản phẩm</td>
					<td width='10%'>Trạng thái</td>
					<td width='10%'>Thứ tự</td>
					<td width='5%'>Sửa</td>
					<td width='5%'>Xoá</td>
				</tr>";
			while($row4 = mysql_fetch_array($result)) {	
				 echo "<tr>
							
							<td>$row4[1]</td>
							<td><img src='../$row4[2]' width='100px'/></td>
							<td>";
							$sqll="select * from hdc_product where id=".$row4[3];
							$rr=mysql_query($sqll);
							$roow= mysql_fetch_array($rr);
							echo"$roow[1]</td>
							<td>";
							if($row4[4]==1)
							{ echo "True";} else {echo "False";} echo"</td>
							<td>$row4[5]</td>
							<td style='text-align:center'>
							<a href=\"JavaScript:newPopup('suaslide.php?id=$row4[0]');\"><img src='images/sua.png'/></a></td>
							<td style='text-align:center'>
							<a href=\"JavaScript:newPopup('xoaslide.php?id=$row4[0]');\"><img src='images/xoa.png'/></a></td>
					  </tr>";
				}
			echo"</table></div>";
			?>
			<script type="text/javascript">
			// Popup window code
			function newPopup(url) {
			popupWindow = window.open(
			url,'popUpWindow','height=400,width=800,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
			}
			</script>