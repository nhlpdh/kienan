<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<?phpphp

$fp = fopen("sitemap.xml", "w+");
fwrite($fp, "<?phpxml version=\"1.0\" encoding=\"UTF-8\"?>\n");

fwrite($fp, "<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">\n");

	
fwrite($fp, "<url>\n"); 
	fwrite($fp, "<loc>http://www.reducefat.biz</loc>\n");  
	
	fwrite($fp, " <changefreq>always</changefreq>\n");  
	fwrite($fp, "<priority>1</priority>\n");  
	fwrite($fp, "</url>\n"); 
	

   $sqlstr = "SELECT *	FROM ".menu_product2."  ";
		  $sqlstr=mysql_query($sqlstr);	
		  if(mysql_num_rows($sqlstr)>0) {	     $i=0; 
					  
            while($row=mysql_fetch_array($sqlstr)) {      $i+=1;
           ?>
		   
		   
<?php	fwrite($fp, "<url>\n"); ?> 
<?php	fwrite($fp, "<loc>http://www.reducefat.biz/t_tin_".$row[id].".html</loc>\n"); ?> 
<?php	fwrite($fp, " <changefreq>hourly</changefreq>\n"); ?> 
<?php	fwrite($fp, "<priority>0.9</priority>\n"); ?> 
<?php	fwrite($fp, "</url>\n"); ?> 

 
  
   <?php }}?> 
   



<?phpphp


   $sqlstr = "SELECT *	FROM ".product2." ORDER BY id ASC ";
		  $sqlstr=mysql_query($sqlstr);	
		  if(mysql_num_rows($sqlstr)>0) {	     $i=0; 
					  
            while($row=mysql_fetch_array($sqlstr)) {      $i+=1;
           ?>
		   
		   
<?php	fwrite($fp, "<url>\n"); ?> 
<?php	fwrite($fp, "<loc>http://www.reducefat.biz/t_tinView_".$row[category]."_".$row[subCategory]."_".$row[id].".html</loc>\n"); ?> 
<?php	fwrite($fp, " <changefreq>weekly</changefreq>\n"); ?> 
<?php	fwrite($fp, "<priority>0.4</priority>\n"); ?> 
<?php	fwrite($fp, "</url>\n"); ?> 
  
   <?php }}?> 
   

<?phpphp

  $sqlstr = "SELECT *	FROM ".menu_product."  ";
		  $sqlstr=mysql_query($sqlstr);	
		  if(mysql_num_rows($sqlstr)>0) {	     $i=0; 
					  
            while($row=mysql_fetch_array($sqlstr)) {      $i+=1;
           ?>
		   
		   
<?php	fwrite($fp, "<url>\n"); ?> 
<?php	fwrite($fp, "<loc>http://www.reducefat.biz/h_health_".$row[id].".html</loc>\n"); ?> 
<?php	fwrite($fp, " <changefreq>hourly</changefreq>\n"); ?> 
<?php	fwrite($fp, "<priority>0.9</priority>\n"); ?> 
<?php	fwrite($fp, "</url>\n"); ?> 

 
  
   <?php }}?> 
   



<?phpphp


   $sqlstr = "SELECT *	FROM ".product." ORDER BY id ASC ";
		  $sqlstr=mysql_query($sqlstr);	
		  if(mysql_num_rows($sqlstr)>0) {	     $i=0; 
					  
            while($row=mysql_fetch_array($sqlstr)) {      $i+=1;
           ?>
		   
		   
<?php	fwrite($fp, "<url>\n"); ?> 
<?php	fwrite($fp, "<loc>http://www.reducefat.biz/h_healthView_".$row[category]."_".$row[subCategory]."_".$row[id].".html</loc>\n"); ?> 
<?php	fwrite($fp, " <changefreq>weekly</changefreq>\n"); ?> 
<?php	fwrite($fp, "<priority>0.4</priority>\n"); ?> 
<?php	fwrite($fp, "</url>\n"); ?> 
  
   <?php }}?> 






 
 <?php	fwrite($fp, "</urlset> \n"); ?> 