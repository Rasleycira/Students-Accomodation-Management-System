
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
include "connection.php";
?>
        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Student Sharing A Room</h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                    
                            </div>
                        </div>
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
								$res=mysqli_query($link,"select * from issue_rooms where rooms_no='$_GET[rooms_no]' && room_exist_day =''");
								echo"<table class=table 'table-bordered'>";
								echo"<tr>";
								echo"<th>"; echo "Student Name";echo "</th>";
								echo"<th>"; echo "Student Registration";echo "</th>";
								echo"<th>"; echo "Student College";echo "</th>";
								echo"<th>"; echo "Student Email";echo "</th>";
								echo"<th>"; echo "Room Number";echo "</th>";
								echo"<th>"; echo "Room Enter Day";echo "</th>";
								echo "</tr>";
								while($row=mysqli_fetch_array($res))
								{
									echo "<tr>";
									echo "<td>";echo $row["student_name"]; echo "</td>";
									echo "<td>";echo $row["student_registration"]; echo "</td>";
									echo "<td>";echo $row["student_college"]; echo "</td>";
									echo "<td>";echo $row["student_email"]; echo "</td>";
									echo "<td>";echo $row["rooms_no"]; echo "</td>";
									echo "<td>";echo $row["room_enter day"]; echo "</td>";
									echo"</tr>";
								}
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