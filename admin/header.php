<?php
include "connection.php";
$tot=0;
$res=mysqli_query($link,"select * from messages_admin where dusername='$_SESSION[admin]'  && read1='n'");
$tot=mysqli_num_rows($res);
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>STUDENT MANAGEMENT SYSTEM </title>


    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/nprogress.css" rel="stylesheet">
    <link href="css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="#" class="site_title"><i class="fa fa-home"></i> <span>RC</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                   
                    <div class="profile_info">
                        <span>Welcome,</span>

                        <h2><?php echo $_SESSION["admin"]; ?></h2>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!-- /menu profile quick info -->

                <br/>

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>General</h3>
                        <ul class="nav side-menu">
                            <li><a href='display_student_info.php'><i class="fa fa-users" aria-hidden="true"></i>All Students Info
							</a>

                            </li>
                            <li><a href ='rooms_details_with_student.php'><i class="fa fa-home" aria-hidden="true"></i>Student Sharing A Room
						</a>

                            </li>
                            <li><a href ='display_rooms.php'><i class="fa fa-building" aria-hidden="true"></i>Showcase Rooms
							</a>

                            </li>
							 <li><a href ='messages_from_students.php'><i class="fa fa-comments" aria-hidden="true"></i>Students Messages
							 </a>

                            </li>
							  <li><a href ='add_rooms.php'><i class="fa fa-plus" aria-hidden="true"></i>Add More Rooms
 </a>

                            </li>
							
                            <li><a href ='issue_rooms.php'><i class="fa fa-share" aria-hidden="true"></i>Give A Room
							</a>

                            </li>
                            <li><a href ='send_notification_student.php'><i class="fa fa-envelope-o" aria-hidden="true"></i> A Message To Student</a>

                            </li>
							 <li><a href ='return_room.php'><i class="fa fa-undo" aria-hidden="true"></i>Exit
							</a>

                            </li>

                        </ul>
                    </div>


                </div>

            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                               aria-expanded="false">
                                <img src="images/img.jpg" alt=""><?php echo $_SESSION["admin"]; ?>
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                            </ul>
                        </li>

                        <li role="presentation" class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown"
                               aria-expanded="false">
                                <i class="fa fa-envelope-o"></i>
                                <span class="badge bg-green" onclick="window.location='messages_from_students.php'"><?php  echo $tot; ?></span>
                            </a>

                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->