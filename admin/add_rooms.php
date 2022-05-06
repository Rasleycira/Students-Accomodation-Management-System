
<?php
session_start();
include "connection.php";
include "header.php";
?>
        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>ADD ROOMS</h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                          
                        </div>
                    </div>
                </div>

                            <div class="x_content">
							
							
							
							
							<form name="form1" action="" method="post" class="col-lg-6" enctype="multipart/form-data">
							
			<table class="table table-bordered">
<tr>
<td>
<input type="text"  class="form-control" placeholder="Room number" name="rooms_no" required=""/>
</td>
</tr>
<tr>
<td>
Room image
<input type="file" name="f1" required="">
</td>
</tr>
<tr>
<td>
<input type="text"  class="form-control" placeholder="Room price"name="room_price" required="">
</td>
</tr>
<tr>
<td>
<input type="text"  class="form-control" placeholder="Total space available"name="total_space" required="">
</td>
</tr>
<tr>
<td>
<input type="text"  class="form-control" placeholder="Available" name="available"required="">
</td>
</tr>
<tr>
<td>
<input type= "submit" name="submit1" class= "btn btn-default submit" value= "insert rooms details" style="background-color:#96a11f ; color:white">
</td>
</tr>

</table>			
			</form>	
			</div>
			</div>
			</div>
			</div>
			</div>
			</div>


<?php
if(isset($_POST["submit1"]))
{
    $tm=md5(time());
	$fnm=$_FILES["f1"]["name"];
	$dst="./room_image/".$tm.$fnm;
	$dst1="room_image/".$tm.$fnm;
	move_uploaded_file($_FILES["f1"]["tmp_name"],$dst);
mysqli_query($link,"insert into add_rooms values('','$_POST[rooms_no]','$dst1','$_POST[room_price]','$_POST[total_space]','$_POST[available]','$_SESSION[admin]')");
?>

<script type="text/javascript">
alert("rooms insert successfully");
</script>
<?Php

}
?>
		

<?php
include "footer.php"
?>