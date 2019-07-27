<!DOCTYPE html>
<html lang="en">


<!-- roles-permissions24:05-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>Preclinic - Medical & Hospital - Bootstrap 4 Admin Template</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <div class="header">
			<div class="header-left">
				<a href="index-2.html" class="logo">
					<img src="assets/img/logo.png" width="35" height="35" alt="">
				</a>
			</div>
			<a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
            <ul class="nav user-menu float-right">
                <li class="nav-item dropdown d-none d-sm-block">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"><i class="fa fa-bell-o"></i> <span class="badge badge-pill bg-danger float-right">3</span></a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span>Notifications</span>
                        </div>
                        <div class="drop-scroll">
                            <ul class="notification-list">
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
											<span class="avatar">
												<img alt="John Doe" src="assets/img/user.jpg" class="img-fluid">
											</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">John Doe</span> added new task <span class="noti-title">Patient appointment booking</span></p>
												<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
											</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
											<span class="avatar">V</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Tarah Shropshire</span> changed the task name <span class="noti-title">Appointment booking with payment gateway</span></p>
												<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
											</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
											<span class="avatar">L</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Misty Tison</span> added <span class="noti-title">Domenic Houston</span> and <span class="noti-title">Claire Mapes</span> to project <span class="noti-title">Doctor available module</span></p>
												<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
											</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
											<span class="avatar">G</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Rolland Webber</span> completed task <span class="noti-title">Patient and Doctor video conferencing</span></p>
												<p class="noti-time"><span class="notification-time">12 mins ago</span></p>
											</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
											<span class="avatar">V</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Bernardo Galaviz</span> added new task <span class="noti-title">Private chat module</span></p>
												<p class="noti-time"><span class="notification-time">2 days ago</span></p>
											</div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="activities.html">View all Notifications</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown d-none d-sm-block">
                    <a href="javascript:void(0);" id="open_msg_box" class="hasnotifications nav-link"><i class="fa fa-comment-o"></i> <span class="badge badge-pill bg-danger float-right">8</span></a>
                </li>
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="user-img"><img class="rounded-circle" src="assets/img/user.jpg" width="40" alt="Admin">
							<span class="status online"></span></span>
                        <span>Admin</span>
                    </a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="profile.html">My Profile</a>
						<a class="dropdown-item" href="edit-profile.html">Edit Profile</a>
						<a class="dropdown-item" href="settings.html">Settings</a>
						<a class="dropdown-item" href="login.html">Logout</a>
					</div>
                </li>
            </ul>
            <div class="dropdown mobile-user-menu float-right">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="profile.html">My Profile</a>
                    <a class="dropdown-item" href="edit-profile.html">Edit Profile</a>
                    <a class="dropdown-item" href="settings.html">Settings</a>
                    <a class="dropdown-item" href="login.html">Logout</a>
                </div>
            </div>
        </div>
         @php
        $curl=url()->current();
        @endphp
     <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">Main</li>
                        <li @if(strstr($curl,"admin"))
                             class="active"
                             @endif>
                            <a href="{{url('admin')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                        </li>
                        <li @if(strstr($curl,"register"))
                             class="active"
                             @endif>
                            <a href="{{url('register')}}"><i class="fa fa-user-plus"></i> <span>Add User</span></a>
                        </li>
                        <li @if(strstr($curl,"coordinate2"))
                             class="active"
                             @endif
                        >
                            <a href="{{url('coordinate2')}}"><i class="fa fa-user"></i> <span>Country Co-Ordinate</span></a>
                        </li>
                        <li @if(strstr($curl,"country"))
                             class="active"
                             @endif>
                            <a href="{{url('country')}}"><i class="fa fa-globe"></i> <span>Country</span></a>
                        </li>
                        <li @if(strstr($curl,"doctor"))
                             class="active"
                             @endif>
                            <a href="{{url('doctor')}}"><i class="fa fa-user-md"></i> <span>Doctors</span></a>
                        </li>
                        <li @if(strstr($curl,"assign_country"))
                             class="active"
                             @endif>
                            <a href="{{url('assign_country')}}"><i class="fa fa-user-md"></i> <span>Assign Country</span></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wheelchair"></i> <span>Patients</span></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-calendar"></i> <span>Appointments</span></a>
                        </li>
                        <li @if(strstr($curl,"schedule"))
                             class="active"
                             @endif>
                            <a href="schedule"><i class="fa fa-calendar-check-o"></i> <span>Doctor Schedule</span></a>
                        </li>
                        <li @if(strstr($curl,"department"))
                             class="active"
                             @endif>
                            <a href="{{url('department')}}"><i class="fa fa-hospital-o"></i> <span>Departments</span></a>
                        </li>
                          <li @if(strstr($curl,"email"))
                             class="active"
                             @endif>
                            <a href="{{url('email')}}"><i class="fa fa-envelope"></i> <span>Email</span></a>
                        </li>
                        <li @if(strstr($curl,"feedback"))
                             class="active"
                             @endif>
                            <a href="{{url('feedbacklist')}}"><i class="fa fa-envelope"></i> <span>Feedback</span></a>
                        </li>
                        <li @if(strstr($curl,"feedback"))
                             class="active"
                             @endif>
                            <a href="{{url('role')}}"><i class="fa fa-key"></i> <span>Roles & Permissions</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-user"></i> <span> Employees </span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="employees.html">Employees List</a></li>
                                <li><a href="leaves.html">Leaves</a></li>
                                <li><a href="holidays.html">Holidays</a></li>
                                <li><a href="attendance.html">Attendance</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-money"></i> <span> Accounts </span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="invoices.html">Invoices</a></li>
                                <li><a href="payments.html">Payments</a></li>
                                <li><a href="expenses.html">Expenses</a></li>
                                <li><a href="taxes.html">Taxes</a></li>
                                <li><a href="provident-fund.html">Provident Fund</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-book"></i> <span> Payroll </span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="salary.html"> Employee Salary </a></li>
                                <li><a href="salary-view.html"> Payslip </a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="chat.html"><i class="fa fa-comments"></i> <span>Chat</span> <span class="badge badge-pill bg-primary float-right">5</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-video-camera camera"></i> <span> Calls</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="voice-call.html">Voice Call</a></li>
                                <li><a href="video-call.html">Video Call</a></li>
                                <li><a href="incoming-call.html">Incoming Call</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-envelope"></i> <span> Email</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="compose.html">Compose Mail</a></li>
                                <li><a href="inbox.html">Inbox</a></li>
                                <li><a href="mail-view.html">Mail View</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-commenting-o"></i> <span> Blog</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="blog-details.html">Blog View</a></li>
                                <li><a href="add-blog.html">Add Blog</a></li>
                                <li><a href="edit-blog.html">Edit Blog</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="assets.html"><i class="fa fa-cube"></i> <span>Assets</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-flag-o"></i> <span> Reports </span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="expense-reports.html"> Expense Report </a></li>
                                <li><a href="invoice-reports.html"> Invoice Report </a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="settings.html"><i class="fa fa-cog"></i> <span>Settings</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-8">
                        <h4 class="page-title">Roles & Permissions</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-3">
                        <a href="#" class="btn btn-primary btn-block"><i class="fa fa-plus"></i> Add Roles</a>
                        <div class="roles-menu">
                            <ul>
                                <li class="active">
                                    <a href="javascript:void(0);">Administrator</a>
									<span class="role-action">
										<a href="edit-role.html">
											<span class="action-circle large">
												<i class="material-icons">edit</i>
											</span>
										</a>
										<a href="#" data-toggle="modal" data-target="#delete_role">
											<span class="action-circle large delete-btn">
												<i class="material-icons">delete</i>
											</span>
										</a>
									</span>
                                </li>
                                <li><a href="#">Co_Ordinate</a></li>
                                <li><a href="#">Branch_Admin</a></li>
                                <li><a href="#">Doctor</a></li>
                                <li><a href="#">Patient</a></li>
                                <li><a href="#">Accountant</a></li>
                                <li><a href="#">Receptionist</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-8 col-md-8 col-lg-8 col-xl-9">
                        <h6 class="card-title m-b-20">Module Access</h6>
                        <div class="m-b-30">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    Employee
                                    <div class="material-switch float-right">
                                        <input id="staff_module" type="checkbox">
                                        <label for="staff_module" class="badge-success"></label>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    Holidays
                                    <div class="material-switch float-right">
                                        <input id="holidays_module" type="checkbox">
                                        <label for="holidays_module" class="badge-success"></label>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    Leave Request
                                    <div class="material-switch float-right">
                                        <input id="leave_module" type="checkbox">
                                        <label for="leave_module" class="badge-success"></label>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    Events
                                    <div class="material-switch float-right">
                                        <input id="events_module" type="checkbox">
                                        <label for="events_module" class="badge-success"></label>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    Chat
                                    <div class="material-switch float-right">
                                        <input id="chat_module" type="checkbox">
                                        <label for="chat_module" class="badge-success"></label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped custom-table">
                                <thead>
                                    <tr>
                                        <th>Module Permission</th>
                                        <th class="text-center">Read</th>
                                        <th class="text-center">Write</th>
                                        <th class="text-center">Create</th>
                                        <th class="text-center">Delete</th>
                                        <th class="text-center">Import</th>
                                        <th class="text-center">Export</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Employee</td>
                                        <td class="text-center">
                                            <input type="checkbox" checked="">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox" checked="">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox" checked="">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox" checked="">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox" checked="">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox" checked="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Holidays</td>
                                        <td class="text-center">
                                            <input type="checkbox" checked="">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox" checked="">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox" checked="">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox" checked="">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox" checked="">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox" checked="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Leave Request</td>
                                        <td class="text-center">
                                            <input type="checkbox" checked="">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox" checked="">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox" checked="">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox" checked="">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox" checked="">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox" checked="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Events</td>
                                        <td class="text-center">
                                            <input type="checkbox" checked="">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox" checked="">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox" checked="">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox" checked="">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox" checked="">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox" checked="">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/app.js"></script>
</body>


<!-- roles-permissions24:05-->
</html>