<?php
ob_start();
session_start();
header("Pragma: no-cache");
header("Expires: 0");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-cache, must-revalidate");
define("hdc","hdc",true);
include "admin/define_data.php";
include "admin/config.php";
include "admin/sql.php";
include "admin/connect.php";
include "counter.php";
$require="<font color=#E8862B>(*)</font>";
$vip = '.html';
$tde = 'Cong ty Co phan duoc pham Kien An';
$key = 'duoc pham, thuoc, my tho';
$mota = 'duoc pham, thuoc, my tho';


if(($_SESSION['rate'] == '')||(!isset($_SESSION['rate']))) $_SESSION['rate'] = '1'.' '.'VND';
$explode = explode(' ',$_SESSION['rate']);
?>


<Meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/link.css">
<link rel="stylesheet" type="text/css" href="css/style.css">


<link rel="stylesheet" type="text/css" href="tooltips/tooltiptheme.css"     />


<script type="text/javascript" src="tooltips/jquery.min.js"></script>
<script type="text/javascript" src="tooltips/functions_main.js"></script>
<script type="text/javascript" src="tooltips/jquery.tooltip.js"></script>
</head>


<body >

<table width="988" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
  
    <td width="970">
	<table width="970" align="center" border="0" cellspacing="0" cellpadding="0"  >
	
  <tr>
  <td   >
<?php include "banner.php"; ?>
	 <div style="font-size: 1px; height: 5px;"></div>
  </td>
  </tr>
  
  
   <tr>
  <td  background="images1/bodyBG.png" height="70" >
  <table width="970" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="30"><?php include "top.php"; ?></td>
  </tr>
  <tr>
    <td height="40" valign="middle"><?php include "chuchay.php";?> </td>
  </tr>
</table>

 
	
  </td>
  </tr>
  
 
 
		 
  <tr>
    <td width="970"  >
        <table width="980" border="0" cellpadding="0" cellspacing="0"  bgcolor="#FFFFFF">
        
          <tr>
		    <td width="1" valign="top"  >&nbsp;</td>
             <td width="191" valign="top"  >
               <?php include "MenuLeft.php";?> 
            </td>
            <td width="3" valign="top"  >&nbsp;</td> 
            <td width="100%"  valign="top"   >
				 <div style="font-size: 1px; height: 2px;"></div>

				<?php
                if(file_exists("./".$_GET['page'].".php"))	  {
                   include "./".$_GET['page'].".php";
				  
                }
                else {
                include "center.php";
                }
                ?> 
								 <div style="font-size: 1px; height: 50px;"></div>
          
				 </td>
		
						
		 <td width="3" valign="top"  >&nbsp;</td>
			 <td width="191" valign="top"  >
               <?php include "MenuRight.php";?> 
            </td>
			 <td width="1" valign="top"  >&nbsp;</td>
			
			  
			
          </tr>
		  </table>
		  </td>
		  </tr>

     <tr>
            <td   align="center" valign="top"  >
             <?php include "bottom.php";?>
            </td>
          </tr>
  
</table>

  </tr>
</table>

</body>
