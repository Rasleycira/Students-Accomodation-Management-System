<?php
session_start();
if(!isset($_SESSION["username"]))
{
	?>
	<script type="text/javascript">
	window.location="login.php";
	</script>
	<?php
}
include "header.php";
include "connection.php";
?>
        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Send Message To Admin</h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2> </h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                
								
								<form name="form1" action="" method="post" class="col-lg-6" enctype="multipart/form-data">
							
			<table class="table table-bordered">
<tr>
<td>
<select class="form-control" name="dusername">
<?php
$res=mysqli_query($link,"select * from admin_registration");
while($row=mysqli_fetch_array($res))
{
	?>
	<option value="<?php echo $row["firstname"]?>">
	<?php echo $row["firstname"]."(". $row["lastname"].")"; ?>
		</option>
<?php	
}
?>

</select>
</td>
</tr>
<tr>
<td>
<input type="text" class="form-control" name="room_no" placeholder="Rooom No">
</td>
</tr>

<tr>
<td>
<input type="text" class="form-control" name="title" placeholder="Enter title">
</td>
</tr>
<tr>
<td>
<textarea name="msg" class="form-control" placeholder="message">
</textarea>
</td>
</tr>
<tr>
<td>
<input type="submit" name="submit1" value="send message"> 

</td>
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
        <!-- /page content -->
<?php
if(isset($_POST["submit1"]))
{
	mysqli_query($link,"insert into messages_admin  values('','$_SESSION[username]','$_POST[dusername]','$_POST[room_no]','$_POST[title]','$_POST[msg]','n')")or die(mysqli_error($link));
?>
<script type="text/javascript">
alert("message send successfully");
</script>
<?php	
}	
?>
<?php
include "footer.php"
?>