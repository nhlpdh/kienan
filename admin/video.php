<?php include "check.php";?>
<div style="width:96%" align="left"><strong>CẬP NHẬT</strong></div>

<?php  

	 if($_POST['UpdateIntro']) {	
			  			
				
				mysql_query("UPDATE ".intro." SET full_intro='".$_POST['full_intro']."' WHERE id=".intval($_POST['id'])."");
				
				echo "Cập nhật thành công";
		}	  
	 
?>
<div style="float:left">
<?php
  $sqlstr=mysql_query("SELECT * FROM ".intro." where id='4'");
  if(mysql_num_rows($sqlstr)>0)   {
		   
		$row=mysql_fetch_array($sqlstr);
	
?>
<table border="0"  cellpadding="0" cellspacing="0" width="700px">
<form action="" method="post" enctype="multipart/form-data" >
  
  <tr>
    <td colspan="2" >
	 <textarea name="full_intro" id="full_intro" cols="80" rows="10"><?=$row['full_intro']?></textarea></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>	  
	  <input type="hidden" name="id" value="<?=$row['id']?>" />
      <input name="UpdateIntro" type="submit"  value="Cập nhật" />
      <input type="reset" name="Submit2" value="Nhập Lại" />
    </td>
  </tr>
  </form>
</table>
<?php }?>
</div>


