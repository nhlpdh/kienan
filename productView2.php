



<table width="99%" border="0"  bgcolor="#FFFFFF"cellspacing="0" cellpadding="0" align="center" valign="top"  id="bochinh" >


<tr id="achitiet">
   <td  colspan="3" height="30">
   <span  id="tieude"> Trang chủ </span> ><?php
          $sqlstr=mysql_query("SELECT * FROM ".menu_product2." WHERE status='true' 
		  AND id='".intval($_GET['viewParent2'])."'  ");
		  if(mysql_num_rows($sqlstr)>0) { $k = 0;
		   
   		  while($row=mysql_fetch_array($sqlstr)) { $k +=1;
  ?> 
  
  <a href="service_<?=$row['id']?><?=$vip?>"  id="tieude"><?=$row['category']?></a> <?php } } ?> >
  
  <?php
          $sqlstr=mysql_query("SELECT * FROM ".menu_product2." WHERE status='true' 
		  AND id='".$_GET['viewSub2']."'  ");
		  if(mysql_num_rows($sqlstr)>0) { $k = 0;
		   
   		  while($row=mysql_fetch_array($sqlstr)) { $k +=1;
  ?> 
  
  <a href="service_<?=$row['parent']?>_<?=$row['id']?><?=$vip?>"  id="tieude"> <?=$row['category']?> > </a><?php } } ?> 
  
  
   </td>
  </tr>
   
          <?php
		
          $sqlstr = "SELECT * FROM ".product2."  WHERE status='true' 
					  AND id = '".intval($_GET['id'])."'  ";			
		  $sqlstr=mysql_query($sqlstr);	
		 
		
		  		 					  
          if(mysql_num_rows($sqlstr)>0) {	
					  
          $row=mysql_fetch_array($sqlstr);
           ?>
  <tr>
   <td  colspan="3">
   <span id="chitiet">&nbsp;&nbsp;<?=$row['title']?> </span>
 
    <title> <?=$row['title']?> , <?=$tde?> </title> 
<meta name="keywords" content=" <?=$row['title']?> , <?=$key?>" />
  <meta name="description" content="<?=$row['title']?>, <?=$mota?>" />

 
   </td>
  </tr>
   <tr>
   <td colspan="3">&nbsp;</td>
  </tr> 
                   <tr >
                     <td    colspan="3" id="noidung"  >
                       
                       
								<?php if($row['picture2']) {?>
                                  <?php $width=getimagesize("images/product/goc/".$row['picture2']);	?>
                               <img src="images/product/goc/<?=$row['picture2']?>" border="0" align="right" <?php echo  $width[0]>250?'width=250px':'' ;?>  title="<?=$row['title']?>" alt="<?=$row['title']?>">	<?php } ?>  <?=$row['tomtat']?>		<br />
       <br />                   
         <div style="text-align:justify; margin:2px 2px 2px 2px">   <?=$row['full']?>	</div>
			</td>
  </tr> 
  
  
  <?php  }   ?> 
   
</table>

<br />

  
 
   
  <table width="100%" border="0"  bgcolor="#FFFFFF"cellspacing="2" cellpadding="2" align="center" valign="top"  id="bochinh" >  
					
			<tr id="asanpham">
    <td  colspan="3"  ><span id="sanpham">&nbsp;&nbsp;Các Tin khác </span></td>
  </tr>				
						    
  
                   <?php	$p=20;				     
					  $sqlstrt = "SELECT * FROM ".product2."  WHERE status='true' 
					   AND category = '".$_GET['viewParent2']."' and id <> '".$_GET['id']."'   ORDER BY postdate DESC limit $p ";	                   				  
					
					  $sqlstrt=mysql_query($sqlstrt);	
                      if(mysql_num_rows($sqlstrt)>0) {	     $t=0; 
					  
                      while($row=mysql_fetch_array($sqlstrt)) {      $t+=1;
                   ?>
                      
					   <tr>
					  
					   <td    align="left"  height="25"  valign="top">
                       
                       
                              &nbsp;  <img src="images1/cham_2.gif"  /><a  href="serviceView_<?=$row['category']?>_<?=$row['subCategory']?>_<?=$row['id']?><?=$vip?>" id="tieude">&nbsp;<?=$row['title']?> (<?=date("d/m/Y",$row['postdate'])?>)</a>                                
								
						 </td>
							
    </tr>
							  <?php  } }  ?>  
                              
                                                         
</table>
      
							
						
				 
 
							

