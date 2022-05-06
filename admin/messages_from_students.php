
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
mysqli_query($link,"update from messages_admin set read1='y' where susername='$_SESSION[admin]'");
?>
        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Messages From Students</h3>
                    </div>

                    <div class="title_right">
                        
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
                                
<table  class="table table-bordered">
<tr>
<th>room_no</th>
<th>title</th>
<th>message</th>
</tr>
<?php
$res=mysqli_query($link,"select * from messages_admin where dusername='$_SESSION[admin]'order by id desc");
while($row=mysqli_fetch_array($res))
{
	

	
	echo "<tr>";
	echo "<td>"; echo $row["room_no"]; echo "</td>";
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