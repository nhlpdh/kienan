
<table width="970" height="105" border="0" cellspacing="0" cellpadding="0" align="center"  >
   
   <tr >
       <td   style="background-image:url(images1/bt.png); height:106 background-repeat:repeat-x"  id="noidung">
	   
       <?php
          $sqlstr=mysql_query("SELECT * FROM ".bottom."");
		  if(mysql_num_rows($sqlstr)>0) {
		   
		   while($row=mysql_fetch_array($sqlstr)) {
		   
		  echo $row['full_intro'];   
		   
		   }
		  }
   ?>
       </td>
    </tr>
</table>
