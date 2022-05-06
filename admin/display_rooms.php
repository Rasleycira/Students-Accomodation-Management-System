
<?php
session_start();
if(!isset($_SESSION["admin"]))
{
	?>
	<script type="text/javascript">
	window.location="login.php";
	</script>
	<?php
}
include"connection.php";
include "header.php";
?>
        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Display ROOMS</h3>
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
                                

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
							<form name="form1" action=""method="post">
							<input type="text" name="t1" class="form-control" placeholder="enter room number">
							<input type="submit" name ="submit1" value="search rooms" class="btn btn-default">
							</form>
                                
								
								<?php
								if(isset($_POST["submit1"]))
								{
								$res=mysqli_query($link,"select * from add_rooms where rooms_no like('%$_POST[t1]%')");
								echo "<table class='table table-bordered'>";
								echo "<tr>";
								echo"<th>";echo "Room Image";echo"</th>";
								echo"<th>";echo "Room Number";echo"</th>";
								echo"<th>";echo "Room Price";echo"</th>";
								echo"<th>";echo "Available";echo"</th>";
								echo"<th>";echo "Total Space";echo"</th>";
								echo"<th>";echo "Remove room";echo"</th>";
								echo"</tr>";
								while($row=mysqli_fetch_array($res))
								{
								echo "<tr>";
								echo"<td>"; ?> <img src="<?php echo $row['room_image'];?>"height="100"width="100"/><?php echo"</td>";
								echo"<td>";echo $row['rooms_no'];echo"</td>";
								echo"<td>";echo $row["room_price"];echo"</td>";
								echo"<td>";echo $row["available"];echo"</td>";
								echo"<td>";echo $row["total_space"];echo"</td>";
								echo"<td>";
							?> <a href="remove_room.php?id=<?php echo $row["id"];?>">remove room</a><?php
								echo"</td>";
								echo"</tr>";
						
								}
								echo "</table>";	
								}
								else
								{
								$res=mysqli_query($link,"select * from add_rooms");
								echo "<table class='table table-bordered'>";
								echo "<tr>";
								echo"<th>";echo "Room Image";echo"</th>";
								echo"<th>";echo "Room Number";echo"</th>";
								echo"<th>";echo "Room Price";echo"</th>";
								echo"<th>";echo "Available";echo"</th>";
								echo"<th>";echo "Total Space";echo"</th>";
								echo"<th>";echo "Remove Room";echo"</th>";
								echo"</tr>";
								while($row=mysqli_fetch_array($res))
								{
								echo "<tr>";
								echo"<td>"; ?> <img src="<?php echo $row['room_image'];?>"height="100"width="100"/><?php echo"</td>";
								echo"<td>";echo $row['rooms_no'];echo"</td>";
								echo"<td>";echo $row["room_price"];echo"</td>";
								echo"<td>";echo $row["available"];echo"</td>";
								echo"<td>";echo $row["total_space"];echo"</td>";
								echo"<td>";
							?> <a href="remove_room.php?id=<?php echo $row["id"];?>"style="color:red">remove room</a><?php
								echo"</td>";
								echo "</tr>";
								}
								echo "</table>";	
								}
								?>
								
								
								
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->

<?php
include "footer.php"
?>