
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
include "header.php";

include"connection.php";
?>
        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>STUDENTS SHARING A ROOM </h3>
                    </div>

                
                </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2></h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
							<?php
                             $i=0;
								$res=mysqli_query($link,"select * from add_rooms where available>0");
								echo"<table class='table table-bordered'>";
								echo"<tr>";
								while($row=mysqli_fetch_array($res))
								{	
							      $i=$i+1;
							echo "<td>";
						                ?> <img src="../admin/<?php echo $row['room_image'];?>"height="100"  width="100"> <?php
							echo "<br>";
							echo "<b>".$row["rooms_no"]."</b>";
							echo "<br>";
							echo "<b>"."TOTAL ROOMS AVAILABLE:".$row["total_space"]."</b>";
							echo "<br>";
							echo "<b>"."available:".$row["available"]."</b>";
							echo"<br>";
							?><a href="all_students_within_this_room.php?rooms_no=<?php echo $row["rooms_no"];?>" style="color:red">student details sharing this room</a><?php
							echo"</td>";
							if($i==3)
							{
								echo "</tr>";
								echo"<tr>";
								$i=0;
							}
								}
								echo "</tr>";
								echo "</table>";	
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