
	

	 <div style="font-size: 1px; height: 2px;"></div>
<script src="subCategory.js"></script>

 
	<table width="190" border="0" cellspacing="0" cellpadding="0" align="center" id="bomd"  >
   <form action="index.php" method="get">
 <input type="hidden" name="page" value="resultSearch"> 
  <tr id="amdphai">
   <td align="center" ><span id="mdphai" >
 
 Tìm kiếm 
 
   </span></td>
  </tr>
 <tr >
	   
	   <td>
		<select name="category"   style="width:165" onChange="Category(this.value)">
		<option value="">-Chọn nhóm sản phẩm-</option>
		<?php CategoryParent($_GET['category'],menu_product) ?>
	   </select>   </td>
	 </tr>
	 <tr >
	  
	   <td>
	   <div id="showSubCategory">
	   <select name="subCategory"  style="width:165" >
		<option value="">---Chọn tất cả--</option>        
		<?=Category($_GET['subCategory'],$_GET['category'],menu_product)?>
       
	   </select>   
		</div>   </td>
	 </tr>
   <tr>
   
    <td  align="left"> <input type="text" name="KeyWord" value="Từ khóa" size="15"   onfocus="this.value=''" > <input type="submit" name="button" id="button" value="Tìm"></td>
  </tr>
  
 </form>
  </table>
  

<div style="font-size: 1px; height: 2px;"></div>

	<table width="190" border="0" cellspacing="0" cellpadding="0" align="center" id="bomd"  >
                
				 <tr>
                <td id="amdphai" align="center"><span id="mdphai" >sản phẩm mới nhất</span></td>
              </tr>	  
       
				 <tr>
                <td align="center" >
  


  <marquee   direction="up" height="250px"  width="170" scrollamount="3" onmouseover="this.stop()" onmouseout="this.start()">
<?php
  $p=10;				 
					  $sqlstr = "SELECT *	FROM ".product." WHERE status='true'  and picture <>'' ";
				
		  $sqlstr .=" ORDER BY postdate DESC limit $p";
		  $sqlstr=mysql_query($sqlstr);	
		   if(mysql_num_rows($sqlstr)>0) {	     $i=0; 
            while($row=mysql_fetch_array($sqlstr)) {      $i+=1;
           ?>
	 			 <div align="center"> 
    	<a  href="productView_<?=$row['category']?>_<?=$row['subCategory']?>_<?=$row['id']?><?=$vip?>" id="tieude" title="<?=$row['title']?>"><?=$row['title']?></a> 
	 </div> 
	 <div align="center">    <a  href="productView_<?=$row['category']?>_<?=$row['subCategory']?>_<?=$row['id']?><?=$vip?>" id="tieudenho" title="<?=$row['title']?>">  <img src="images/product/thumbs/<?=$row['picture']?>"  width="170" border="0"  title="<?=$row['title']?>" alt="<?=$row['title']?>"  /> </a> </div>
	 <div style="font-size: 1px; height: 5px;"></div>
              <?php } }	 ?>   
   
         
			  
         

   </marquee> 

   </td>
              </tr>	  
         </table> 
		 
		  <div style="font-size: 1px; height: 5px;"></div>
		 
		
  <table width="190" border="0" cellspacing="0" cellpadding="0" align="center"  id="bomd">
   <tr>
                <td id="amdphai" align="center" colspan="2"><span id="mdphai" >Tin mới</span></td>
              </tr>	  
  
<?php
  $p=10;				 
					  $sqlstr = "SELECT *	FROM ".product2." WHERE status='true' AND special = 'true' and picture <>'' ";
				
		  $sqlstr .=" ORDER BY postdate DESC limit $p";
		  $sqlstr=mysql_query($sqlstr);	
		   if(mysql_num_rows($sqlstr)>0) {	     $i=0; 
            while($row=mysql_fetch_array($sqlstr)) {      $i+=1;
           ?>
	  <tr>
       <td   id="ttat" width="5%">
                     <img src="images/product/thumbs/<?=$row['picture']?>"  width="50" border="0" align="left" title="<?=$row['title']?>" alt="<?=$row['title']?>"  /> </td>
    <td    id="ttat"  width="80%"> 	<a  href="serviceView_<?=$row['category']?>_<?=$row['subCategory']?>_<?=$row['id']?><?=$vip?>" id="tieudenho" title="<?=$row['title']?>"><?=$row['title']?></a> 
	  </td>
   </tr>
              <?php } }	 ?>   
   
             
			  
         
</table>


	
		 
		 
		 
		 
		 	 <div style="font-size: 1px; height: 2px;"></div>

<table width="190" border="0" cellspacing="0" cellpadding="0" align="center" id="bomd"  >
               
            
                
				
                
				 <tr>
                <td align="center">
<?php
          $sqlstr=mysql_query("SELECT * FROM ".intro." where id='4'");
		  if(mysql_num_rows($sqlstr)>0) {
		   
		   while($row=mysql_fetch_array($sqlstr)) {
		   
		   echo $row['full_intro'];
		  $em= $row['email'];
		   
	} } ?>


</td>
              </tr>	  
			  </table>


		 
	
	
	

    
  	  
			
		
		 			<table width="190" border="0" cellspacing="0" cellpadding="0" align="center"  id="bomd"  >
  
					 <tr>
                <td id="amdphai" align="center"><span id="mdphai" >QUẢNG CÁO</span></td>
              </tr>	  
					
					  <?php
                      $sqlstr=mysql_query("SELECT * FROM ".ads." WHERE status='true' AND alignment='2' ORDER BY stt DESC");
                      if(mysql_num_rows($sqlstr)>0) {
                       
                      while($row=mysql_fetch_array($sqlstr)) {
          	 $ext = substr($row['picture'],-3,3);
					  ?>   
					  <?php if($ext=='swf') { ?>          
					  <tr >
						<td height="23"  align="center" >
						
						<?php $width=getimagesize("images/ads/".$row['picture']);	?>
						<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="190" height="<?=number_format($width[1]*180/$width[0],0)?>">
            <param name="movie" value=" images/ads/<?=$row['picture']?>">
            <param name="quality" value="high">
            <embed src="  images/ads/<?=$row['picture']?> " quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="190" height="<?=number_format($width[1]*180/$width[0],0)?>"></embed>
          </object> 
						
						</td>
					  </tr>
					   <?php } else { ?> 
					   
					    <tr >
						<td height="23"  align="center" >
						<a href="<?=$row['link']?>" target="_blank" > <img src="images/ads/<?=$row['picture']?>"  border="0" width="178"/></a>
						</td>
					  </tr>
					   
					   
					   <?php } ?>   
					 <?php } }?>  
					
					
					
					
					
					
					
					
					                     
        </table>
	

			
			<br>
