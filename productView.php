

   
          <?php
		
          $sqlstr = "SELECT * FROM ".product."  WHERE status='true' 
					  AND id = '".intval($_GET['id'])."'  ";			
		  $sqlstr=mysql_query($sqlstr);	
		  	 mysql_query("UPDATE  ".product."  SET solan=solan+1 WHERE id='".intval($_GET['id'])."'");		 					  
          if(mysql_num_rows($sqlstr)>0) {	
					  
          $row=mysql_fetch_array($sqlstr);
           ?>
 
    <title> <?=$row['title']?> , <?=$tde?> </title> 
<meta name="keywords" content=" <?=$row['title']?> , <?=$key?>" />
  <meta name="description" content="<?=$row['title']?>, <?=$mota?>" />

 

<table  style="border-collapse: collapse;" width="99%" align="center" border="1"  cellpadding="2" cellspacing="2" id="bochinh" >  
 
   <tr id="achitiet">
   <td  colspan="3" align="left" height="30" >
   <span id="chitiet"><?=$row['title']?></span>  </td>
  </tr>
				
   
                           <tr >
                     <td    colspan="3"   align="center" >
                       
                       
								<?php if($row['picture2']) {?>
                                
                               <img src="images/product/goc/<?=$row['picture2']?>" border="0" >	    
							<?php }?> 							
					
			</td>
  </tr>
                
                       <tr>
                         <td  colspan="3" height="30">&nbsp;&nbsp;&nbsp;&nbsp;     <strong>Giá: </strong> <span id="gia"><?php if($row['price']) {?>  <?=number_format($row['price']*$explode[0],0,",",".")?> <?=$explode[1]?> <?php } else {?>Call <?php }?>           </td>
                       </tr>   
					    <tr>
                         <td  colspan="3" height="30">&nbsp;&nbsp;&nbsp;&nbsp;    <strong>Đặt mua: </strong>  <a  href="index.php?page=shoppingCart&action=add&viewParent=<?=$_GET['viewParent']?>&id=<?=$row['id']?>" id="tieude"><img src="images1/mua.gif" border="0" align="absmiddle" /></a>                      </td>
                       </tr>    	   
        
		  <tr>
                         <td  colspan="3"height="30"bgcolor="#EFEFEF">&nbsp;&nbsp;<strong>Thông tin chi tiết</strong></td>
                       </tr>    
					     <tr>
                         <td  colspan="3"  id="noidung" height="30"><?=textContent($row['tomtat'])?></td>
                       </tr>    
		    
		

                        </table>
						
					  
                     	   
            <?php  }   ?>  


<br />





<table width="99%" border="0" align="center" cellspacing="1" cellpadding="1" id="bochinh">
 <tr id="asanpham">
    <td colspan="3"  ><span id="sanpham">&nbsp;&nbsp;C&#225;c s&#7843;n ph&#7849;m c&#249;ng lo&#7841;i kh&#225;c </span></td>
  </tr>
  
  
     <tr >
 
<?php
  $p=15;				 
					  $sqlstr = "SELECT *	FROM ".product." WHERE status='true' AND category = '".intval($row['category'])."' AND id <> '".intval($_GET['id'])."'  ";
					
		  $sqlstr .=" ORDER BY postdate DESC limit $p";
		  $sqlstr=mysql_query($sqlstr);	
		  ?>
  
  <?php  					  
            if(mysql_num_rows($sqlstr)>0) {	     $i=0; 
					  
            while($row=mysql_fetch_array($sqlstr)) {      $i+=1;
           ?>
                   
                     <td     align="center" valign="top" width="33%"  id="bosanpham" >
                       
                         
						  
						 <table width="100%" border="0" cellspacing="3" cellpadding="3" >
  <tr>
  <tr>
 
    <td valign="top"  align="center" colspan="2" height="40"> <a  href="productView_<?=$row['category']?>_<?=$row['subCategory']?>_<?=$row['id']?><?=$vip?>" id="tieude"><?=$row['title']?></a> 
	  </td>
  </tr>
    <td  valign="middle" align="center"   colspan="2" height="160">
	


<div class="list_product">
<div>
	<div>
		<div>




<a  class="tooltip" href="productView_<?=$row['category']?>_<?=$row['subCategory']?>_<?=$row['id']?><?=$vip?>" >
<img src="images/product/thumbs/<?=$row['picture']?>"  border="0"  alt="<?=$row['title']?>" title="<?=$row['title']?>"/>
</a>
			


</div>
	</div>
	<pre class="hidden"><div>
		<img src="images/product/goc/<?=$row[picture2]?>" width="350"/></div>
</pre>
</div>
<script type="text/javascript">strTooltipProductOb= (typeof(strTooltipProductOb) == "undefined" ? ".list_product pre," : strTooltipProductOb + ".list_product pre,");</script>
<script type="text/javascript">
$(function(){ tooltipReview(); });</script>
<script type="text/javascript">
$(window).load(function()
{ initLoaded(); });

</script></div>


<!--	<a  href="productView_<?=$row['category']?>_<?=$row['subCategory']?>_<?=$row['id']?><?=$vip?>" ><img src="images/product/thumbs/<?=$row['picture']?>"  border="0"  alt="<?=$row['title']?>" title="<?=$row['title']?>"/></a>-->

</td>
  </tr>
 
   <tr>
 
    <td  valign="bottom"  align="center"  colspan="2">        <strong>Giá: </strong> <span id="gia"><?php if($row['price']) {?>  <?=number_format($row['price']*$explode[0],0,",",".")?> <?=$explode[1]?> <?php } else {?>Call <?php }?>  </span>                                              
	  </td>
  </tr>
    <tr>
  <td valign="top"  align="center"> <a  href="productView_<?=$row['category']?>_<?=$row['subCategory']?>_<?=$row['id']?><?=$vip?>" id="tieude"><img src="images1/chitiet.gif" border="0" /></a> 
	  </td>
    <td valign="top"  align="center"> <a  href="index.php?page=shoppingCart&action=add&viewParent=<?=$_GET['viewParent']?>&id=<?=$row['id']?>" id="tieude"><img src="images1/mua.gif" border="0" /></a> 
	  </td>
  </tr>
  
 
</table>
	
		
	
									                    
	   </td>
                    
                                               
                       <?php if($i%3==0) echo "</tr>";?>         	   
                       <?php	} }					 
                      else {
                       echo "<td style='color:#FF0000' >Ch&#432;a c&#243; tin n&#224;o</td> </tr> ";
                       }
                  ?>   
				  
		   
             

			  
         
</table>



