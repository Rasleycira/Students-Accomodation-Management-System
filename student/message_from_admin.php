
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
mysqli_query($link,"update from messages set read1='y' where dusername='$_SESSION[username]'");
?>
        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Send A Message To Hostel Manager</h3>
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
                            
                            </div>
                            <div class="x_content">
                                
<table  class="table table-bordered">
<tr>
<th>full name</th>
<th>title</th>
<th>message</th>
</tr>
<?php
$res=mysqli_query($link,"select * from messages where dusername='$_SESSION[username]'order by id desc");
while($row=mysqli_fetch_array($res))
{
	$res1=mysqli_query($link,"select * from admin_registration ");
while($row1=mysqli_fetch_array($res1))
{
	$fullnames=$row1["firstname"]." ".$row1["lastname"];
}

	
	echo "<tr>";
	echo "<td>"; echo $fullnames; echo "</td>";
	echo "<td>"; echo $row["title"]; echo "</td>";
	echo "<td>"; echo $row["msg"];  echo "</td>";
	echo "</tr>";
}
	?>


</table>	
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