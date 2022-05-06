
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
                        <h3>Clear The Room When the Student Exit</h3>
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
                                <form name="form1" action="" method="post">
								<table class="table table-bordered">
								<tr>
								<td>
								<select name="enr" class ="form-control">
								<?php
								$res=mysqli_query($link,"select student_registration from issue_rooms where room_exist_day=''");
								while($row=mysqli_fetch_array($res))
								{
									echo"<option>";
									echo $row["student_registration"];
									echo"</option>";
								}
								
								?>
								</select></td>
								<td>
								<input type="submit" name="submit1" value="search" class="form-control" style="background-color:blue; color:white">
								</td>
								
								</tr>
								</table>
								</form>
								
								                          <?php
														  if(isset($_POST["submit1"]))
														  
								
								{
									                 $res=mysqli_query($link,"select * from issue_rooms where student_registration='$_POST[enr]'");
													 echo "<table class='table table-bordered'>";
													 echo "<tr>";
													 echo "<th>"; echo "student registration"; echo "</th>";
													 echo "<th>"; echo "student name"; echo "</th>";
													 echo "<th>"; echo "student college"; echo "</th>";
													 echo "<th>"; echo "student email"; echo "</th>";
													 echo "<th>"; echo "rooms no"; echo "</th>";
													 echo "<th>"; echo "room enter day"; echo "</th>";
													 echo"</th>";
													 echo"<th>";
													 echo "room exist day";
													 echo"</th>";
													 echo"</tr>";
								                      while($row=mysqli_fetch_array($res)){
														  echo"<tr>";
														  echo"<td>"; echo $row["student_registration"];echo "</td>";
														  echo"<td>"; echo $row["student_name"];echo "</td>";
														  echo"<td>"; echo $row["student_college"];echo "</td>";
														  echo"<td>"; echo $row["student_email"];echo "</td>";
														  echo"<td>"; echo $row["rooms_no"];echo "</td>";
														  echo"<td>"; echo $row["room_enter day"];echo "</td>";
														  
														  echo "<td>"; ?><a href ="return.php?id=<?php echo $row["id"]; ?>"style="color:red">exit</a><?php echo "</td>";
														  echo"</tr>";	  
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