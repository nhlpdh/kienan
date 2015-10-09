<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="js/s3Slider.js" type="text/javascript"></script>

<script>$(document).ready(function() { 
    $('#s3slider').s3Slider({
        timeOut: 4000
    });
});</script>

<div id="slideshow">
<div id="s3slider">
    <ul id="s3sliderContent">
        
       
        
	
<?php
include("admin/connect.php");
$query="Select s.*,t.title,t.category,t.id from dl_slide s, hdc_product t where s.slide_hienthi=1 and s.slide_matour=t.id order by s.slide_thutu";
//$query="select * from dl_slide where slide_hienthi=1 order by slide_thutu";

$result=mysql_query($query,$link);

while ($row_slide=mysql_fetch_row($result))
{
		
echo'
<li class="s3sliderImage">
            
<a href="productView_'.$row_slide[7].'__'.$row_slide[8].'.html">
		<img src="'.$row_slide[2].'" alt="'.$row_slide[1].'" title="Xem chi tiết"  width="575" height="256"/></a>
		
		<span>'.$row_slide[1].'</span>
		</li>
	';
}

 ?>


<div class="clear s3sliderImage"></div>
    </ul>
</div>



<style>
#s3slider {
    width: 575px; /* important to be same as image width */
    height: 256px; /* important to be same as image height */
    position: relative; /* important */
    overflow: hidden; /* important */
	top:-10px;
	left:5px;
	
}
 
#s3sliderContent {
    width: 575px; /* important to be same as image width or wider */
	height:256px;
    position: absolute; /* important */
    top: 0; /* important */
    margin-left: 0; /* important */
	display:block;
	list-style:none;
	padding-left:0px;
	padding-top:0px;
}
 
.s3sliderImage {
    float: left; /* important */
    
}
 
.s3sliderImage span {
    position: absolute; /* important */
    left: 0;
    font: 10px/15px Arial, Helvetica, sans-serif;
    padding: 0px 0px 20px 10px;
	
	
    width: 575px;
    background-color: #000;
    filter: alpha(opacity=70); /* here you can set the opacity of box with text */
    -moz-opacity: 0.7; /* here you can set the opacity of box with text */
    -khtml-opacity: 0.7; /* here you can set the opacity of box with text */
    opacity: 0.5; /* here you can set the opacity of box with text */
    color: #fff;
    display: none; /* important */
    bottom: 0; /*
        if you put top: 0;  -> the box with text will be shown 
                                at the top of the image
        if you put bottom: 0;  -> the box with text will be shown 
                                at the bottom of the image
    */
}
 
.clear {
    clear: both;
}
#slideshow
{
	
	width:575px;
	height:256px;
	padding-top:0px;
	padding-left:0px;
}
#slideshow img
{
	width:575px;
	height:255px;
}
.clear {
	clear:both
}


</style>
</div>
