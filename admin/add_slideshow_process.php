<?php

include "connect.php";

$hinh=$_FILES["pic"]["name"];

$ten=$_POST["tenanh"];

$linkwebsite=$_POST["tour"];


if($_POST["gender"]=='hien')
{$trangthai=1;
}else{ $trangthai=0;};

$thutu=$_POST["thutu"];

$filepath="../images/slide/".$hinh;

$hinh="images/slide/".$hinh;

$query="insert into dl_slide(slide_hinh,slide_link,slide_matour,slide_hienthi,slide_thutu)

values('$ten','$hinh','$linkwebsite','$trangthai','$thutu')";

$result = mysql_query($query, $link);

if(mysql_errno() != 0)

{

	echo "mysql_error(): ".mysql_error()."<br/>";	

}

else

{

	move_uploaded_file($_FILES["pic"]["tmp_name"],$filepath);

        echo "Add new record successfully !<br/>";

}

?>

<script type="text/javascript">

opener.location.reload(true);
self.close();

</script>