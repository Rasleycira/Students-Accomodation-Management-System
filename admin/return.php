<?php
include "connection.php";
$id=$_GET["id"];
$a=date("d-m-y");
$res=mysqli_query($link,"update issue_rooms set room_exist_day ='$a' where id=$id");
$rooms_no="";
$res=mysqli_query($link,"select * from issue_rooms where id=$id");
while($row=mysqli_fetch_array($res));
{
	$books_name=$row["rooms_no"];
}
mysqli_query($link,"update add_rooms set available=available+1 where rooms_no='rooms_no'");

?>
<script type="text/javascript">
window.location="return_room.php";

</script>