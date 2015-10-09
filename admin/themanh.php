<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">



<html xmlns="http://www.w3.org/1999/xhtml">



<head>



<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />



<link rel="stylesheet" type="text/css" href="text_editort/editor.css">



<script type="text/javascript" src="text_editor/editor.js"></script>


<style type="text/css">
body{font-family:Arial, Helvetica, sans-serif; font-size:13px; text-align:left;}
h4	{color:#F00; text-align:center;}
</style>


<title>Thêm Ảnh Slide show</title>



</head>







<body>
<?php
error_reporting(0);


include "connect.php";

$query = "select id, title from hdc_product";	
$result = mysql_query($query);


 ?>


<h4><br>Thêm Ảnh slide show<br></h4>
<?php
   if( isset($_POST['submit']) ) {
      header('Content-Type: image/jpeg'); 
      include('SimpleImage.php');
      $image = new SimpleImage();
      $image->load($_FILES['uploaded_image']['tmp_name']);
      $image->resizeToWidth(210);
      $image->output();
      exit();
   } else {
 
?>
<form name="from1" method="post" action="add_slideshow_process.php" enctype="multipart/form-data">



<table width="90%" height="50" border="0" cellspacing="0" cellpadding="0" align="center">



	<tr>



		<td width="400" height="40px">Tên ảnh:</td>



		<td width="586" height="40px">
			
            
            <input name="tenanh" type="text" size="80"/>


		  </td>



	</tr>



	<tr>



		<td width="400" height="40px">Hình ảnh:</td>



		<td width="586"><input type="file" name="pic" size="50"/></td>



	</tr>



	<tr>



		<td width="400" height="40px">Liên kết đến sản phẩm:</td>



		<td width="586" height="40px">
					<select name="tour">
                    <option value="">------Chọn 1 sp-----</option>
                   <?php 
				   while($row=mysql_fetch_row($result))
				   {
					   echo'<option value="'.$row[0].'">'.$row[1].'</option>';
					   }
				   
				   ?>
</select>

		  </td>



	</tr>
    
    <tr>
    
    <td width="400" height="40px">Trạng thái:</td>
    <td id="menuradiobt">
        <Input type = 'Radio' Name ='gender' value= 'hien' checked='true' <?php $hien_status; ?>>Hiện  
		<Input type = 'Radio' Name ='gender' value= 'an' <?php $an_status; ?> >Ẩn
        </td>
    </tr>
		


	<tr>



		<td width="400" height="40px">Thứ tự: </td>



	  <td width="586" height="40px"><input name="thutu" type="text" /></td>



	</tr>



	<tr>



	<td width="400"></td>



	<td width="586"><input type="submit" name="them" value="Thêm ảnh slideshow" /></td>



	</tr>



</table>



</form>

<?php
   }
?>
</body>



</html>



