
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
                        <h3></h3>
                    </div>

                    <div class="title_right">
                        
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Issue Room</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                             <form name="form1" action="" method="post">
							 <table>
							 
							 <td>
							 <select  name="enr" class="form-control selectpicker">
							 <?php
							 
							 
							 $res=mysqli_query($link,"select registration from student_registration");
							 while($row=mysqli_fetch_array($res))
							 
							 { 
							 echo"<option>";
							 echo $row["registration"];
							 echo"</option>";	 
							 }
							 ?>
							 </select>
							 </td>
							 
							 <td>
							 <input type="submit" style="color:blue;"value="search" name ="submit1" class="form-control btn btn-default" style="margin-top:5px";>
							 </td>
							 <tr>
							 </table>
							
							 <?php
							 if(isset($_POST['submit1']))
								  {  
								  $res5=mysqli_query($link,"select * from  student_registration where registration='$_POST[enr]'");
								  while($row5=mysqli_fetch_array($res5)) 
								  {
									  
									 
									$firstname=$row5["firstname"];
									$lastname=$row5["lastname"];
									$username=$row5["username"];
									$college=$row5["college"]; 
									$email=$row5["email"];
									$registration=$row5["registration"]; 
									$_SESSION["registration"]=$registration;
									$_SESSION["username"]=$username;
									
									
								  }
                                  ?>	
                                 <table class="table table-bordered">
                                   <tr>
                                      <td>
                                     <input type="text"  class="form-control" placeholder="Registration number" name="registration" value="<?php echo $registration;?>" disabled>
                                      </td>
                                         </tr> 
                                           <tr>
                                           <td>
                                       <input type="text"  class="form-control" placeholder="Student Name" name="name" value="<?php echo $firstname.''.$lastname;?>"  required=""/>
                                   </td>
                                         </tr> 
                                             <tr>
                                   <td>
                                    <input type="text"  class="form-control" placeholder="Student college" name="college" value="<?php echo $college;?>"  required=""/>
                                     </td>
                                     </tr> 
									 <tr>
                                   <td>
                                    <input type="text"  class="form-control" placeholder="Studentemail" name="email" value="<?php echo $email;?>" required=""/>
                                     </td>
                                     </tr>
									 <tr>
									 <td>
									 <select name="roomsnumber" class="form-control  selectpicker ">
									 <?php
									 $res=mysqli_query($link,"select  rooms_no from add_rooms");
									 while($row=mysqli_fetch_array($res))
									 {
										echo "<option>";
										
										echo $row["rooms_no"];
                                        echo "</option>";									
									 }
									 ?>
									 </select>
								   </td>
								   </tr>
								    <tr>
                                   <td>
                                    <input type="text"  class="form-control" placeholder="Roomenterday" name="roomenterday" value="<?php echo date ("d-m-y");?>"  required=""/>
                                     </td>
                                     </tr>
									<div>
									  <tr>
                                   <td>
                                    <input type="text"  class="form-control" placeholder="Studentusername" name="username" value="<?php echo $username;?>  "disabled=""/>
                                     </td>
                                     </tr>
									 </div>
									 <tr>
                                   <td>
                                    <input type="submit" value="issue rooms"
									        name="submit2" class="form-control btn btn-default" name="issue rooms" style="background-color:#96a11f; color:white";>
                                     </td>
                                     </tr>
							
                                       </table>    



								 <?php 
							 }
							 
                               ?>
							   </form> 
							   <?php
							   if(isset($_POST["submit2"]))
							   {  $qty=0;
							     
								 $res=mysqli_query($link,"select * from add_rooms where rooms_no='$_POST[roomsnumber]'");
								 while($row=mysqli_fetch_array($res))
								 {
									 $qty=$row["available"];
									 
								 }
								 if($qty==0)
								 {
									
	?>
	<div class="alert alert-danger col-lg-6 col-lg-push-3">
        <strong style="...">this room is not available</strong> 
     </div>
<?php 
								 }
								 else
								 {
							     mysqli_query($link,"insert into issue_rooms values('','$_SESSION[registration]','$_POST[name]','$_POST[college]','$_POST[email]','$_POST[roomsnumber]','$_POST[roomenterday]','','$_SESSION[username]')");
							     mysqli_query($link,"update add_rooms set available=available-1 where rooms_no='$_POST[roomsnumber]'");
							     ?>
								 <script type="text/javascript">
							         alert(" Issued A Room Successfully");
								  window.location.href=window.location.href;
                                 </script>
								 <?php
							   }
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