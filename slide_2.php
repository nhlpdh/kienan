<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/style_slide.css">
<script type="text/javascript" src="javascript/jquery-1.3.1.min.js"></script>
<script type="text/javascript">

$(document).ready(function() {		
	
	//Execute the slideShow
	slideShow();

});

function slideShow() {

	//Set the opacity of all images to 0
	$('#gallery a').css({opacity: 0.0});
	
	//Get the first image and display it (set it to full opacity)
	$('#gallery a:first').css({opacity: 1.0});
	
	//Set the caption background to semi-transparent
	$('#gallery .caption').css({opacity: 0.7});

	//Resize the width of the caption according to the image width
	$('#gallery .caption').css({width: $('#gallery a').find('img').css('width')});
	
	//Get the caption of the first image from REL attribute and display it
	$('#gallery .content').html($('#gallery a:first').find('img').attr('rel'))
	.animate({opacity: 0.7}, 400);
	
	//Call the gallery function to run the slideshow, 6000 = change to next image after 6 seconds
	setInterval('gallery()',2000);
	
	
	
	
}

function gallery() {
	
	//if no IMGs have the show class, grab the first image
	var current = ($('#gallery a.show')?  $('#gallery a.show') : $('#gallery a:first'));

	//Get next image, if it reached the end of the slideshow, rotate it back to the first image
var next = ((current.next().length) ? ((current.next().hasClass('caption'))? $('#gallery a:first') :current.next()) : $('#gallery a:first'));		
	//Get next image caption
	var caption = next.find('img').attr('rel');	
	
	//Set the fade in effect for the next image, show class has higher z-index
	next.css({opacity: 0.0})
	.addClass('show')
	.animate({opacity: 1.0}, 1000);

	//Hide the current image
	current.animate({opacity: 0.0}, 1000)
	.removeClass('show');
	
	//Set the opacity to 0 and height to 1px
	$('#gallery .caption').animate({opacity: 0.0}, { queue:false, duration:0 }).animate({height: '1px'}, { queue:true, duration:300 });	
	
	//Animate the caption, opacity to 0.7 and heigth to 100px, a slide up effect
	$('#gallery .caption').animate({opacity: 0.7},100 ).animate({height: '25px'},500 );
	
	//Display the content
	$('#gallery .content').html(caption);
	
	
}

</script>

<div id="slideshow">


<div id="gallery">

<div class="show">
	
<?phpphp 
include("admin/connect.php");
//$query="Select s.*,t.title,t.category,t.id from dl_slide s, hdc_product t where s.slide_hienthi=1 and s.slide_matour=t.id order by s.slide_thutu";
$query="select * from dl_slide where slide_hienthi=1 order by slide_thutu";

$result=mysql_query($query,$link);

while ($row_slide=mysql_fetch_row($result))
{
		
echo'<a href="productView_'.$row_slide[7].'__'.$row_slide[8].'.html" class="show">
		<img src="'.$row_slide[2].'" alt="'.$row_slide[1].'" title="Xem chi tiết" rel="'.$row_slide[1].'" />
	</a>';
}

 ?>
<!-- <a href="#" class="show">
		<img src="igh/flowing-rock.jpg" alt="Flowing Rock" width="580" height="360" title="" alt="" rel="aaaaaaaaaaaaaaaaa"/>
	</a>
	
	<a href="#">
		<img src="igh/grass-blades.jpg" alt="Grass Blades" width="580" height="360" title="" alt="" rel="2222222222"/>
	</a>
	
	<a href="#">
		<img src="igh/ladybug.jpg" alt="Ladybug" width="580" height="360" title="" alt="" rel="3333333333"/>
	</a>

	<a href="#">
		<img src="igh/lightning.jpg" alt="Lightning" width="580" height="360" title="" alt="" rel="44444444444444444"/>
	</a>
	
	<a href="#">
		<img src="igh/lotus.jpg" alt="Lotus" width="580" height="360" title="" alt="" rel="555555555."/>
	</a>
	
	<a href="#">
		<img src="igh/mojave.jpg" alt="Mojave" width="580" height="360" title="" alt="" rel="666666666666"/>
	</a>
		
	<a href="#">
		<img src="igh/pier.jpg" alt="Pier" width="580" height="360" title="" alt="" rel="7777777777"/>
	</a>
	
	<a href="#">
		<img src="igh/sea-mist.jpg" alt="Sea Mist" width="580" height="360" title="" alt="" rel="8888888888"/>
	</a>
	
	<a href="#">
		<img src="igh/stones.jpg" alt="Stone" width="580" height="360" title="" alt="" rel="99999999"/>
	</a>-->
<div class="caption"><div class="content"></div></div>
</div>
<div class="clear"></div>
</div>

</div>


</div>





<!--

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/style_slide.css">
<script type="text/javascript" src="javascript/jquery-1.3.1.min.js"></script>
<script type="text/javascript">

$(document).ready(function() {		
	
	//Execute the slideShow
	slideShow();

});

function slideShow() {

	//Set the opacity of all images to 0
	$('#gallery a').css({opacity: 0.0});
	
	//Get the first image and display it (set it to full opacity)
	$('#gallery a:first').css({opacity: 1.0});
	
	//Set the caption background to semi-transparent
	$('#gallery .caption').css({opacity: 0.7});

	//Resize the width of the caption according to the image width
	$('#gallery .caption').css({width: $('#gallery a').find('img').css('width')});
	
	//Get the caption of the first image from REL attribute and display it
	$('#gallery .content').html($('#gallery a:first').find('img').attr('rel'))
	.animate({opacity: 0.7}, 400);
	
	//Call the gallery function to run the slideshow, 6000 = change to next image after 6 seconds
	setInterval('gallery()',6000);
	
}

function gallery() {
	
	//if no IMGs have the show class, grab the first image
	var current = ($('#gallery a.show')?  $('#gallery a.show') : $('#gallery a:first'));

	//Get next image, if it reached the end of the slideshow, rotate it back to the first image
	var next = ((current.next().length) ? ((current.next().hasClass('caption'))? $('#gallery a:first') :current.next()) : $('#gallery a:first'));	
	
	//Get next image caption
	var caption = next.find('img').attr('rel');	
	
	//Set the fade in effect for the next image, show class has higher z-index
	next.css({opacity: 0.0})
	.addClass('show')
	.animate({opacity: 1.0}, 1000);

	//Hide the current image
	current.animate({opacity: 0.0}, 1000)
	.removeClass('show');
	
	//Set the opacity to 0 and height to 1px
	$('#gallery .caption').animate({opacity: 0.0}, { queue:false, duration:0 }).animate({height: '1px'}, { queue:true, duration:300 });	
	
	//Animate the caption, opacity to 0.7 and heigth to 100px, a slide up effect
	$('#gallery .caption').animate({opacity: 0.7},100 ).animate({height: '25px'},500 );
	
	//Display the content
	$('#gallery .content').html(caption);
	
	
}

</script>

<div id="slideshow">



<div id="gallery">

	
<?phpphp /*
include("admin/connect.php");
$query="Select s.*,t.title,t.category,t.id from dl_slide s, hdc_product t where s.slide_hienthi=1 and s.slide_matour=t.id order by s.slide_thutu";
$result=mysql_query($query,$link);
while ($row_slide=mysql_fetch_row($result))
{
		
echo'<a href="productView_'.$row_slide[7].'__'.$row_slide[8].'.html" class="show">
		<img src="'.$row_slide[2].'" alt="'.$row_slide[1].'" title="Xem chi tiết" rel="'.$row_slide[6].'" class="show" />
	</a>';
}
*/
 ?>

<div class="caption"><div class="content"></div></div>
</div>
<div class="clear"></div>


</div>


</div>-->