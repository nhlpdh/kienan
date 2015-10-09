
<img width="980" height="90"  src="images1/banner.jpg"></center>


 <?php
              /*        $sqlstr=mysql_query("SELECT * FROM ".ads." WHERE status='true' AND alignment='4' ORDER BY stt DESC");
                      if(mysql_num_rows($sqlstr)>0) {
                       
                      $row=mysql_fetch_array($sqlstr);
	 $ext = substr($row['picture'],-3,3);
					  ?>  
					  					  <?php if($ext=='swf') { ?>          
<?php $width=getimagesize("images/ads/".$row['picture']);	?>
						<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="970" height="<?=number_format($width[1]*970/$width[0],0)?>">
            <param name="movie" value=" images/ads/<?=$row['picture']?>">
            <param name="quality" value="high">
            <embed src="  images/ads/<?=$row['picture']?> " quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="970" height="<?=number_format($width[1]*970/$width[0],0)?>"></embed>
          </object> 
									   <?php } else { ?> 

					<img src="images/ads/<?=$row['picture']?>"  width="970" border="0" align="center"  />  
					 <?php }} */?> 