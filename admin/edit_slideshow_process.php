<?php

include "connect.php";
$id=$_POST['idd'];

$hinh=$_FILES["pic"]["name"];

$ten=$_POST["tenanh"];

$linkwebsite=$_POST["tour"];


if($_POST["gender"]=='hien')
{$trangthai=1;
}else{ $trangthai=0;};

$thutu=$_POST["thutu"];

if($hinh!="")
{
	
$filepath="../images/slide/".$hinh;

$hinh="images/slide/".$hinh;
move_uploaded_file($_FILES["pic"]["tmp_name"],$filepath);

$query="update dl_slide set slide_hinh='$ten',slide_link='$hinh',slide_matour='$linkwebsite',slide_hienthi='$trangthai',slide_thutu='$thutu' where slide_id=$id";
}
else
{
$query="update dl_slide set slide_hinh='$ten',slide_matour='$linkwebsite',slide_hienthi='$trangthai',slide_thutu='$thutu' where slide_id=$id";

}
$result = mysql_query($query, $link);
if(mysql_errno() != 0)

{

	echo "mysql_error(): ".mysql_error()."<br/>";	

}

else

{

	
echo $query;

        echo "Add new record successfully !<br/>";

}

?>

<script type="text/javascript">

opener.location.reload(true);
self.close();

</script>