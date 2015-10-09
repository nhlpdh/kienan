<?php
error_reporting(0);
include "connect.php";
$id=$_GET['id'];
$sql="delete from dl_slide where slide_id='".$id."'";
$result= mysql_query($sql);
mysql_free_result($result);

?>
<script type="text/javascript">
opener.location.reload(true);
self.close();
</script>