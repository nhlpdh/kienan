	
	

	
	 <div style="font-size: 1px; height: 2px;"></div>
<table width="190" border="0" cellspacing="0" cellpadding="0" align="center">
              <tr>
                <td id="amdtrai" align="center"><span id="mdtrai">SẢN PHẨM</span></td>
              </tr>
			  </table>


  <table width="190" border="0" cellspacing="0" cellpadding="0" align="center"  id="bomd">              
  <?php
          $sqlstr=mysql_query("SELECT * FROM ".menu_product." WHERE status='true' 
		  AND parent='0' ORDER BY stt ASC");
		  if(mysql_num_rows($sqlstr)>0) { $k = 0;
		   
   		  while($row=mysql_fetch_array($sqlstr)) { $k +=1;
  ?> 
              <tr >
                <td  width="20"  align="right">
           <img src="images1/cham.gif"  align="absmiddle"/>
                </td>
				 <td  width="180" id="amenutrai">
             <a href="product_<?=$row['id']?><?=$vip?>"  id="menutrai"> <?=$row['category']?></a>
                </td>
              </tr>
			 
				<?php
//(isset($_GET['query_age']) ? $_GET['query_age'] : null);
				if(isset($_GET['viewParent'])!="") {
                 
                    $sqlstrSub=mysql_query("SELECT * FROM ".menu_product." WHERE status='true' 
                 AND parent='".intval($_GET['viewParent'])."'  AND parent='".$row['id']."' ORDER BY stt ASC");
                    if(mysql_num_rows($sqlstrSub)>0) {
                           
                    while($rowSub=mysql_fetch_array($sqlstrSub)) {
                ?> 
                  <tr >
				  <td  >&nbsp;</td>
                    <td  id="amenutrai2" >
                  <a href="product_<?=$row['id']?>_<?=$rowSub['id']?><?=$vip?>"  id="menutrai2" >-&nbsp;<?=$rowSub['category']?></a>             
                    </td>
                  </tr>
                <?php } }  } ?>                   
      <?php } } ?>   
	     
			            
</table>






	 <div style="font-size: 1px; height: 10px;"></div>
<table width="190" border="0" cellspacing="0" cellpadding="0" align="center">
              <tr>
                <td id="amdtrai" align="center"><span id="mdtrai">TIN TỨC</span></td>
              </tr>
			  </table>

  <table width="190" border="0" cellspacing="0" cellpadding="0" align="center"  id="bomd">              
  <?php
          $sqlstr=mysql_query("SELECT * FROM ".menu_product2." WHERE status='true' 
		  AND parent='0' ORDER BY stt ASC");
		  if(mysql_num_rows($sqlstr)>0) { $k = 0;
		   
   		  while($row=mysql_fetch_array($sqlstr)) { $k +=1;
  ?> 
               <tr >
                <td  width="20"  align="right">
           <img src="images1/cham.gif"  align="absmiddle"/>
                </td>
				 <td  width="180" id="amenutrai">
             <a href="service_<?=$row['id']?><?=$vip?>"  id="menutrai"> <?=$row['category']?></a>
                </td>
              </tr>
			 
				<?php
                    if($_GET['viewParent2']!="") {
                    $sqlstrSub=mysql_query("SELECT * FROM ".menu_product2." WHERE status='true' 
                    AND parent='".intval($_GET['viewParent2'])."' AND parent='".$row['id']."' ORDER BY stt ASC");
                    if(mysql_num_rows($sqlstrSub)>0) {
                           
                    while($rowSub=mysql_fetch_array($sqlstrSub)) {
                ?> 
                  <tr >
				  <td  >&nbsp;</td>
                    <td  id="amenutrai2" >
                 <a href="service_<?=$row['id']?>_<?=$rowSub['id']?><?=$vip?>"  id="menutrai2" >- &nbsp;<?=$rowSub['category']?></a>             
                    </td>
                  </tr>
                <?php } }  }  ?>                   
      <?php } } ?>   
	     
			            
</table>
	 <div style="font-size: 1px; height: 10px;"></div>

 	
			 <table width="190" border="0" cellspacing="0" cellpadding="0" align="center"  >
		 <tr>
                <td id="amdtrai" align="center"><span id="mdtrai" >HỖ TRỢ TRỰC TUYẾN</span></td>
              </tr>	 
			  </table>
			  <table width="190" border="0" cellspacing="0" cellpadding="0" align="center"  id="bomd">
 
        <?php
          $sqlstr=mysql_query("SELECT * FROM ".support." WHERE status='true'   ORDER BY stt ASC");
		  if(mysql_num_rows($sqlstr)>0) {
		   

		  while($row=mysql_fetch_array($sqlstr)) {
		  ?>         
              <?php if($row['kind'] !='2') {  ?> 
			  <tr>
                <td height="25"  align="center" ><b><?=$row['fullname']?></b>                
                </td>
              </tr>
             
			 
			        
			   <tr>
                <td align="center"  > 
				         
                <a href="ymsgr:sendim?<?=$row['nick']?>">
                <img src="http://opi.yahoo.com/online?u=<?=$row['nick']?>&amp;m=g&amp;t=2&amp;l=us" border="0"></a>
				
                </td>
              </tr>
			  <?php }  else    {?>
			  <tr>
                <td height="25" align="center" ><b><?=$row['fullname']?></b>                
                </td>
              </tr>
			   <tr>
                <td   align="center" > 
				         
               <a href="skype:<?=$row['nick']?>?chat">
                <img src="images1/skypecall.gif" border="0"></a>
				
                </td>
              </tr>
			  
			   <?php }?> 
			  
          <?php } }?>     
		 
             <tr>
                <td   align="center" height="5" > 
			
				
                </td>
              </tr>
            </table>
	 <div style="font-size: 1px; height: 7px;"></div>
				 


		
		 			<table width="190" border="0" cellspacing="3" cellpadding="3" align="center"  id="bomd"  >			  <tr>
				<td>
				<select name="category" onchange="window.open(this.options[this.selectedIndex].value,'_blank');this.options[0].selected=true"  style="width:178px"  >
				<option value="">Liên kết website </option> 
			
<?php	

 $p=7;				     
	$sqlstr = "SELECT * FROM ".website."  ";				  
		 
		
			 $sqlstr .=" ORDER BY id DESC ";		
	$sqlstr=mysql_query($sqlstr);	
    if(mysql_num_rows($sqlstr)>0) {	    
					  
    while($row=mysql_fetch_array($sqlstr)) {     
?>  

<option value="http://<?=$row['website']?>" ><?=$row['title']?> </option> <?php } }?>
				
			 
				</select> 
				</td>
			  </tr>
	
</table>

	 <div style="font-size: 1px; height: 7px;"></div>
			
		
         <div style="font-size: 1px; height: 5px;"></div>
			
		 			<table width="190" border="0" cellspacing="0" cellpadding="0" align="center"  id="bomd"  >
  			  <tr>
                <td id="amdphai" align="center"><span id="mdphai" >Thống kê</span></td>
              </tr>	  
               <tr>
                <td height="23"  style="padding-left:10px; font-weight:bold">Khách online: <?php echo $online; ?>  </td></tr>
             
              
			  <?php
                      $sqlstr=mysql_query("SELECT * FROM ".bodem." ORDER BY ID DESC limit 1 ");
					  
				
                      if(mysql_num_rows($sqlstr)>0) {
                       
                      while($row=mysql_fetch_array($sqlstr)) {
						mysql_query("UPDATE  ".bodem." SET tong=tong +10 ");
					
					  ?>             
					 
					 <tr>
                <td height="23"  style="padding-left:10px; font-weight:bold">Tổng lượt truy cập: <?=$row['tong']+19000?>  </td></tr>
				
					 <?php } }?>  
					
				        
</table>
<br />

	