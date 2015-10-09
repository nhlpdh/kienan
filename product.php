


<table width="99%" border="0" align="center" cellpadding="2" cellspacing="2" id="bochinh" >
  
  <tr>
   <td colspan="4" id="asanpham"><span id="sanpham">
    <?php
          $sqlstr=mysql_query("SELECT * FROM ".menu_product." WHERE status='true' 
		  AND id='".$_GET['viewParent']."'  ");
		  if(mysql_num_rows($sqlstr)>0) { $k = 0;
		   
   		  while($row=mysql_fetch_array($sqlstr)) { $k +=1;
  ?> 
  
 <?=$row['category']?> 
 
  <?php $tda= $row['category']?> 

 <?php } } ?> 
  <?php  if($_GET['viewSub']!='')
          $sqlstr=mysql_query("SELECT * FROM ".menu_product." WHERE status='true' 
		  AND id='".$_GET['viewSub']."'  ");
		  if(mysql_num_rows($sqlstr)>0) { $k = 0;
		   
   		  while($row=mysql_fetch_array($sqlstr)) { $k +=1;
  ?> 
  
 > <?=$row['category']?> 
  <?php $tdb= $row['category']?> 

 
 <?php } } ?> 
 
 
 
 
 
 
 </span></td>
  </tr>
  

  
     <tr >
 
<?php
  $p=21;				 
					  if($_GET['viewParent']!='')  $sqlstr = "SELECT *	FROM ".product." WHERE status='true' AND category = '".intval($_GET['viewParent'])."' ";
					  if($_GET['viewSub']!='') $sqlstr = "SELECT *	FROM ".product." WHERE status='true' AND subCategory = '".intval($_GET['viewSub'])."' ";
					  	 
		 
		  $page=mysql_query($sqlstr);
		  $n_record=mysql_num_rows($page);
		  num_page(); 
		   $link="product_".$_GET['viewParent']."_".$_GET['viewSub'].""; 
		  $view=$_GET['view']?intval($_GET['view']):1;   
		  $s=($view-1)*$p; 
		  $sqlstr .=" ORDER BY postdate DESC limit $s,$p";
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
	
	<a  href="productView_<?=$row['category']?>_<?=$row['subCategory']?>_<?=$row['id']?><?=$vip?>" ><img src="images/product/thumbs/<?=$row['picture']?>"  border="0"  alt="<?=$row['title']?>" title="<?=$row['title']?>"/></a></td>
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
    echo "<td style='color:#FF0000'  id='ttat'  >Chưa có tin nào</td> </tr> ";                       }
                  ?>   
				  
		   
             
  <tr  ><td colspan="4" align="right" ><?php view_page_view2($link)?></td> </tr>  
			  
         
</table>



     <title> <?=$tda?> , <?=$tdb ?> ,<?=$tde?>, trang  <?=$_GET['view']?></title> 
<meta name="keywords" content="<?=$tda?> , <?=$tdb ?> , <?=$key?> , trang  <?=$_GET['view']?>" />
  <meta name="description" content="<?=$tda?> , <?=$tdb ?> , <?=$mota?> , trang  <?=$_GET['view']?>" />

