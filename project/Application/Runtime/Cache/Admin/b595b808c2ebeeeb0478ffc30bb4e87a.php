<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
 <head> 
  <meta charset="utf-8" /> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" /> 
  <meta name="keywords" content="admin, dashboard, bootstrap, template, flat, modern, theme, responsive, fluid, retina, backend, html5, css, css3" /> 
  <meta name="description" content="" /> 
  <meta name="author" content="ThemeBucket" /> 
  <link rel="shortcut icon" href="#" type="image/png" /> 
  <title>后台首页</title> 
  <!--icheck--> 
  <link href="/13_class/two_object/project/Public/Admin/js/iCheck/skins/minimal/minimal.css" rel="stylesheet" /> 
  <link href="/13_class/two_object/project/Public/Admin/js/iCheck/skins/square/square.css" rel="stylesheet" /> 
  <link href="/13_class/two_object/project/Public/Admin/js/iCheck/skins/square/red.css" rel="stylesheet" /> 
  <link href="/13_class/two_object/project/Public/Admin/js/iCheck/skins/square/blue.css" rel="stylesheet" /> 
  <!--dashboard calendar--> 
  <link href="/13_class/two_object/project/Public/Admin/css/clndr.css" rel="stylesheet" /> 
  <!--Morris Chart CSS --> 
  <link rel="stylesheet" href="/13_class/two_object/project/Public/Admin/js/morris-chart/morris.css" /> 
  <!--common--> 
  <link href="/13_class/two_object/project/Public/Admin/css/style.css" rel="stylesheet" /> 
  <link href="/13_class/two_object/project/Public/Admin/css/style-responsive.css" rel="stylesheet" /> 
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries --> 
  <!--[if lt IE 9]>
  <script src="/13_class/two_object/project/Public/Admin/js/html5shiv.js"></script>
  <script src="/13_class/two_object/project/Public/Admin/js/respond.min.js"></script>
  <![endif]--> 
 </head> 
 <body class="sticky-header"> 
  <section> 
   <!-- left side start--> 
   <div class="left-side sticky-left-side"> 
    <!--logo and iconic logo start--> 
    <div class="logo"> 
     <a href="index.html"><img src="/13_class/two_object/project/Public/Admin/images/logo.png" alt="" /></a> 
    </div> 
    <div class="logo-icon text-center"> 
     <a href="index.html"><img src="/13_class/two_object/project/Public/Admin/images/logo_icon.png" alt="" /></a> 
    </div> 
    <!--logo and iconic logo end--> 
    <div class="left-side-inner"> 
     <!-- visible to small devices only --> 
     <div class="visible-xs hidden-sm hidden-md hidden-lg"> 
      <div class="media logged-user"> 
       <img alt="" src="/13_class/two_object/project/Public/Admin/images/photos/user-avatar.png" class="media-object" /> 
       <div class="media-body"> 
        <h4><a href="#">John Doe</a></h4> 
        <span>&quot;Hello There...&quot;</span> 
       </div> 
      </div> 
      <h5 class="left-nav-title">Account Information</h5> 
      <ul class="nav nav-pills nav-stacked custom-nav"> 
       <li><a href="#"><i class="fa fa-user"></i> <span>Profile</span></a></li> 
       <li><a href="#"><i class="fa fa-cog"></i> <span>Settings</span></a></li> 
       <li><a href="#"><i class="fa fa-sign-out"></i> <span>Sign Out</span></a></li> 
      </ul> 
     </div> 
     <!--sidebar nav start--> 
     <ul class="nav nav-pills nav-stacked custom-nav"> 
      <li class="active"><a href="/13_class/two_object/project/index.php/Admin/Index/index"><i class="fa fa-home"></i> <span>首页</span></a></li> 
      <li class="menu-list"><a href=""><i class="fa fa-laptop"></i> <span>用户管理</span></a> 
       <ul class="sub-menu-list"> 
        <li><a href="/13_class/two_object/project/index.php/Admin/User/index"> 查看用户</a></li> 
        <li><a href="/13_class/two_object/project/index.php/Admin/User/add"> 添加用户</a></li> 
       </ul> </li> 
       <li class="menu-list"><a href=""><i class="fa fa-laptop"></i> <span>角色管理</span></a> 
       <ul class="sub-menu-list"> 
        <li><a href="/13_class/two_object/project/index.php/Admin/Role/index"> 查看角色</a></li> 
        <li><a href="/13_class/two_object/project/index.php/Admin/Role/add"> 添加角色</a></li> 
        <li><a href="/13_class/two_object/project/index.php/Admin/Role/nodeindex"> 查看节点</a></li> 
        <li><a href="/13_class/two_object/project/index.php/Admin/Role/addnode"> 添加节点</a></li> 
       </ul> </li> 
      <li class="menu-list"><a href=""><i class="fa fa-book"></i> <span>分类管理</span></a> 
       <ul class="sub-menu-list"> 
        <li><a href="general.html"> General</a></li> 
        <li><a href="buttons.html"> Buttons</a></li> 
        <li><a href="tabs-accordions.html"> Tabs &amp; Accordions</a></li> 
        <li><a href="typography.html"> Typography</a></li> 
        <li><a href="slider.html"> Slider</a></li> 
        <li><a href="panels.html"> Panels</a></li> 
       </ul> </li> 
      <li class="menu-list"><a href=""><i class="fa fa-cogs"></i> <span>商品管理</span></a> 
       <ul class="sub-menu-list"> 
        <li><a href="grids.html"> Grids</a></li> 
        <li><a href="gallery.html"> Media Gallery</a></li> 
        <li><a href="calendar.html"> Calendar</a></li> 
        <li><a href="tree_view.html"> Tree View</a></li> 
        <li><a href="nestable.html"> Nestable</a></li> 
       </ul> </li> 
      <li><a href="fontawesome.html"><i class="fa fa-bullhorn"></i> <span>订单</span></a></li> 
      <li class="menu-list"><a href=""><i class="fa fa-envelope"></i> <span>友情链接</span></a> 
       <ul class="sub-menu-list"> 
        <li><a href="mail.html"> Inbox</a></li> 
        <li><a href="mail_compose.html"> Compose Mail</a></li> 
        <li><a href="mail_view.html"> View Mail</a></li> 
       </ul> </li> 
      <li class="menu-list"><a href=""><i class="fa fa-tasks"></i> <span>广告管理</span></a> 
       <ul class="sub-menu-list"> 
        <li><a href="form_layouts.html"> Form Layouts</a></li> 
        <li><a href="form_advanced_components.html"> Advanced Components</a></li> 
        <li><a href="form_wizard.html"> Form Wizards</a></li> 
        <li><a href="form_validation.html"> Form Validation</a></li> 
        <li><a href="editors.html"> Editors</a></li> 
        <li><a href="inline_editors.html"> Inline Editors</a></li> 
        <li><a href="pickers.html"> Pickers</a></li> 
        <li><a href="dropzone.html"> Dropzone</a></li> 
        <li><a href="http://www.weidea.net"> More</a></li> 
       </ul> </li> 
      <li class="menu-list"><a href=""><i class="fa fa-bar-chart-o"></i> <span>轮播图管理</span></a> 
       <ul class="sub-menu-list"> 
        <li><a href="flot_chart.html"> Flot Charts</a></li> 
        <li><a href="morris.html"> Morris Charts</a></li> 
        <li><a href="chartjs.html"> Chartjs</a></li> 
        <li><a href="c3chart.html"> C3 Charts</a></li> 
       </ul> </li> 
      <li class="menu-list"><a href="#"><i class="fa fa-th-list"></i> <span>公告管理</span></a> 
       <ul class="sub-menu-list"> 
        <li><a href="basic_table.html"> Basic Table</a></li> 
        <li><a href="dynamic_table.html"> Advanced Table</a></li> 
        <li><a href="responsive_table.html"> Responsive Table</a></li> 
        <li><a href="editable_table.html"> Edit Table</a></li> 
       </ul> </li> 
      <li class="menu-list"><a href="#"><i class="fa fa-map-marker"></i> <span>权限管理</span></a> 
       <ul class="sub-menu-list"> 
        <li><a href="google_map.html"> Google Map</a></li> 
        <li><a href="vector_map.html"> Vector Map</a></li> 
       </ul> </li> 
      <li class="menu-list"><a href=""><i class="fa fa-file-text"></i> <span>Extra Pages</span></a> 
       <ul class="sub-menu-list"> 
        <li><a href="profile.html"> Profile</a></li> 
        <li><a href="invoice.html"> Invoice</a></li> 
        <li><a href="pricing_table.html"> Pricing Table</a></li> 
        <li><a href="timeline.html"> Timeline</a></li> 
        <li><a href="blog_list.html"> Blog List</a></li> 
        <li><a href="blog_details.html"> Blog Details</a></li> 
        <li><a href="directory.html"> Directory </a></li> 
        <li><a href="chat.html"> Chat </a></li> 
        <li><a href="404.html"> 404 Error</a></li> 
        <li><a href="500.html"> 500 Error</a></li> 
        <li><a href="registration.html"> Registration Page</a></li> 
        <li><a href="lock_screen.html"> Lockscreen </a></li> 
       </ul> </li> 
      <li><a href="login.html"><i class="fa fa-sign-in"></i> <span>Login Page</span></a></li> 
     </ul> 
     <!--sidebar nav end--> 
    </div> 
   </div> 
   <!-- left side end--> 
   <!-- main content start--> 
   <div class="main-content"> 
    <!-- header section start--> 
    <div class="header-section"> 
     <!--toggle button start--> 
     <a class="toggle-btn"><i class="fa fa-bars"></i></a> 
     <!--toggle button end--> 
     <!--search start--> 
     <form class="searchform" action="index.html" method="post"> 
      <input type="text" class="form-control" name="keyword" placeholder="Search here..." /> 
     </form> 
     <!--search end--> 
     <!--notification menu start --> 
     <div class="menu-right"> 
      <ul class="notification-menu"> 
       <li> <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown"> <i class="fa fa-tasks"></i> <span class="badge">8</span> </a> 
        <div class="dropdown-menu dropdown-menu-head pull-right"> 
         <h5 class="title">You have 8 pending task</h5> 
         <ul class="dropdown-list user-list"> 
          <li class="new"> <a href="#"> 
            <div class="task-info"> 
             <div>
              Database update
             </div> 
            </div> 
            <div class="progress progress-striped"> 
             <div style="width: 40%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-warning"> 
              <span class="">40%</span> 
             </div> 
            </div> </a> </li> 
          <li class="new"> <a href="#"> 
            <div class="task-info"> 
             <div>
              Dashboard done
             </div> 
            </div> 
            <div class="progress progress-striped"> 
             <div style="width: 90%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="90" role="progressbar" class="progress-bar progress-bar-success"> 
              <span class="">90%</span> 
             </div> 
            </div> </a> </li> 
          <li> <a href="#"> 
            <div class="task-info"> 
             <div>
              Web Development
             </div> 
            </div> 
            <div class="progress progress-striped"> 
             <div style="width: 66%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="66" role="progressbar" class="progress-bar progress-bar-info"> 
              <span class="">66% </span> 
             </div> 
            </div> </a> </li> 
          <li> <a href="#"> 
            <div class="task-info"> 
             <div>
              Mobile App
             </div> 
            </div> 
            <div class="progress progress-striped"> 
             <div style="width: 33%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="33" role="progressbar" class="progress-bar progress-bar-danger"> 
              <span class="">33% </span> 
             </div> 
            </div> </a> </li> 
          <li> <a href="#"> 
            <div class="task-info"> 
             <div>
              Issues fixed
             </div> 
            </div> 
            <div class="progress progress-striped"> 
             <div style="width: 80%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" role="progressbar" class="progress-bar"> 
              <span class="">80% </span> 
             </div> 
            </div> </a> </li> 
          <li class="new"><a href="">See All Pending Task</a></li> 
         </ul> 
        </div> </li> 
       <li> <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown"> <i class="fa fa-envelope-o"></i> <span class="badge">5</span> </a> 
        <div class="dropdown-menu dropdown-menu-head pull-right"> 
         <h5 class="title">You have 5 Mails </h5> 
         <ul class="dropdown-list normal-list"> 
          <li class="new"> <a href=""> <span class="thumb"><img src="/13_class/two_object/project/Public/Admin/images/photos/user1.png" alt="" /></span> <span class="desc"> <span class="name">John Doe <span class="badge badge-success">new</span></span> <span class="msg">Lorem ipsum dolor sit amet...</span> </span> </a> </li> 
          <li> <a href=""> <span class="thumb"><img src="/13_class/two_object/project/Public/Admin/images/photos/user2.png" alt="" /></span> <span class="desc"> <span class="name">Jonathan Smith</span> <span class="msg">Lorem ipsum dolor sit amet...</span> </span> </a> </li> 
          <li> <a href=""> <span class="thumb"><img src="/13_class/two_object/project/Public/Admin/images/photos/user3.png" alt="" /></span> <span class="desc"> <span class="name">Jane Doe</span> <span class="msg">Lorem ipsum dolor sit amet...</span> </span> </a> </li> 
          <li> <a href=""> <span class="thumb"><img src="/13_class/two_object/project/Public/Admin/images/photos/user4.png" alt="" /></span> <span class="desc"> <span class="name">Mark Henry</span> <span class="msg">Lorem ipsum dolor sit amet...</span> </span> </a> </li> 
          <li> <a href=""> <span class="thumb"><img src="/13_class/two_object/project/Public/Admin/images/photos/user5.png" alt="" /></span> <span class="desc"> <span class="name">Jim Doe</span> <span class="msg">Lorem ipsum dolor sit amet...</span> </span> </a> </li> 
          <li class="new"><a href="">Read All Mails</a></li> 
         </ul> 
        </div> </li> 
       <li> <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown"> <i class="fa fa-bell-o"></i> <span class="badge">4</span> </a> 
        <div class="dropdown-menu dropdown-menu-head pull-right"> 
         <h5 class="title">Notifications</h5> 
         <ul class="dropdown-list normal-list"> 
          <li class="new"> <a href=""> <span class="label label-danger"><i class="fa fa-bolt"></i></span> <span class="name">Server #1 overloaded. </span> <em class="small">34 mins</em> </a> </li> 
          <li class="new"> <a href=""> <span class="label label-danger"><i class="fa fa-bolt"></i></span> <span class="name">Server #3 overloaded. </span> <em class="small">1 hrs</em> </a> </li> 
          <li class="new"> <a href=""> <span class="label label-danger"><i class="fa fa-bolt"></i></span> <span class="name">Server #5 overloaded. </span> <em class="small">4 hrs</em> </a> </li> 
          <li class="new"> <a href=""> <span class="label label-danger"><i class="fa fa-bolt"></i></span> <span class="name">Server #31 overloaded. </span> <em class="small">4 hrs</em> </a> </li> 
          <li class="new"><a href="">See All Notifications</a></li> 
         </ul> 
        </div> </li> 
       <li> <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown"> <img src="/13_class/two_object/project/Public/Admin/images/photos/user-avatar.png" alt="" /> John Doe <span class="caret"></span> </a> 
        <ul class="dropdown-menu dropdown-menu-usermenu pull-right"> 
         <li><a href="#"><i class="fa fa-user"></i> Profile</a></li> 
         <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li> 
         <li><a href="#"><i class="fa fa-sign-out"></i> Log Out</a></li> 
        </ul> </li> 
      </ul> 
     </div> 
     <!--notification menu end --> 
    </div> 
    <!-- header section end--> 
    <!-- page heading start--> 
    <div class="page-heading"> 
     <h3> Dashboard </h3> 
     <ul class="breadcrumb"> 
      <li> <a href="#">Dashboard</a> </li> 
      <li class="active"> My Dashboard </li> 
     </ul> 
    </div> 
    <!-- page heading end-->  
    
<!--body wrapper start-->
        <div class="wrapper">
            <div class="row">
                <div class="col-md-6">
                    <!--statistics start-->
                    <div class="row state-overview">
                        <div class="col-md-6 col-xs-12 col-sm-6">
                            <div class="panel purple">
                                <div class="symbol">
                                    <i class="fa fa-gavel"></i>
                                </div>
                                <div class="state-value">
                                    <div class="value">230</div>
                                    <div class="title">New Order</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12 col-sm-6">
                            <div class="panel red">
                                <div class="symbol">
                                    <i class="fa fa-tags"></i>
                                </div>
                                <div class="state-value">
                                    <div class="value">3490</div>
                                    <div class="title">Copy Sold</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row state-overview">
                        <div class="col-md-6 col-xs-12 col-sm-6">
                            <div class="panel blue">
                                <div class="symbol">
                                    <i class="fa fa-money"></i>
                                </div>
                                <div class="state-value">
                                    <div class="value">22014</div>
                                    <div class="title"> Total Revenue</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12 col-sm-6">
                            <div class="panel green">
                                <div class="symbol">
                                    <i class="fa fa-eye"></i>
                                </div>
                                <div class="state-value">
                                    <div class="value">390</div>
                                    <div class="title"> Unique Visitors</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--statistics end-->
                </div>
                <div class="col-md-6">
                    <!--more statistics box start-->
                    <div class="panel deep-purple-box">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-7 col-sm-7 col-xs-7">
                                    <div id="graph-donut" class="revenue-graph"></div>

                                </div>
                                <div class="col-md-5 col-sm-5 col-xs-5">
                                    <ul class="bar-legend">
                                        <li><span class="blue"></span> Open rate</li>
                                        <li><span class="green"></span> Click rate</li>
                                        <li><span class="purple"></span> Share rate</li>
                                        <li><span class="red"></span> Unsubscribed rate</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--more statistics box end-->
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="panel">
                        <div class="panel-body">
                            <div class="row revenue-states">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <h4>Monthly revenue report</h4>
                                    <div class="icheck">
                                        <div class="square-red single-row">
                                            <div class="checkbox ">
                                                <input type="checkbox" checked>
                                                <label>Online</label>
                                            </div>
                                        </div>
                                        <div class="square-blue single-row">
                                            <div class="checkbox ">
                                                <input type="checkbox">
                                                <label>Offline </label>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <ul class="revenue-nav">
                                        <li><a href="#">weekly</a></li>
                                        <li><a href="#">monthly</a></li>
                                        <li class="active"><a href="#">yearly</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="clearfix">
                                        <div id="main-chart-legend" class="pull-right">
                                        </div>
                                    </div>

                                    <div id="main-chart">
                                        <div id="main-chart-container" class="main-chart">
                                        </div>
                                    </div>
                                    <ul class="revenue-short-info">
                                        <li>
                                            <h1 class="red">15%</h1>
                                            <p>Server Load</p>
                                        </li>
                                        <li>
                                            <h1 class="purple">30%</h1>
                                            <p>Disk Space</p>
                                        </li>
                                        <li>
                                            <h1 class="green">84%</h1>
                                            <p>Transferred</p>
                                        </li>
                                        <li>
                                            <h1 class="blue">28%</h1>
                                            <p>Temperature</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel">
                        <header class="panel-heading">
                            goal progress
                            <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-chevron-down"></a>
                                <a href="javascript:;" class="fa fa-times"></a>
                             </span>
                        </header>
                        <div class="panel-body">
                            <ul class="goal-progress">
                                <li>
                                    <div class="prog-avatar">
                                        <img src="images/photos/user1.png" alt=""/>
                                    </div>
                                    <div class="details">
                                        <div class="title">
                                            <a href="#">John Doe</a> - Project Lead
                                        </div>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                                <span class="">70%</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="prog-avatar">
                                        <img src="images/photos/user2.png" alt=""/>
                                    </div>
                                    <div class="details">
                                        <div class="title">
                                            <a href="#">Cameron Doe</a> - Sales
                                        </div>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 91%">
                                                <span class="">91%</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="prog-avatar">
                                        <img src="images/photos/user3.png" alt=""/>
                                    </div>
                                    <div class="details">
                                        <div class="title">
                                            <a href="#">Hoffman Doe</a> - Support
                                        </div>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                <span class="">40%</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="prog-avatar">
                                        <img src="images/photos/user4.png" alt=""/>
                                    </div>
                                    <div class="details">
                                        <div class="title">
                                            <a href="#">Jane Doe</a> - Marketing
                                        </div>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                                <span class="">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="prog-avatar">
                                        <img src="images/photos/user5.png" alt=""/>
                                    </div>
                                    <div class="details">
                                        <div class="title">
                                            <a href="#">Hoffman Doe</a> - Support
                                        </div>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                                <span class="">45%</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="text-center"><a href="#">View all Goals</a></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="panel">
                        <div class="panel-body extra-pad">
                            <h4 class="pros-title">prospective <span>leads</span></h4>
                            <div class="row">
                                <div class="col-sm-4 col-xs-4">
                                    <div id="p-lead-1"></div>
                                    <p class="p-chart-title">Laptop</p>
                                </div>
                                <div class="col-sm-4 col-xs-4">
                                    <div id="p-lead-2"></div>
                                    <p class="p-chart-title">iPhone</p>
                                </div>
                                <div class="col-sm-4 col-xs-4">
                                    <div id="p-lead-3"></div>
                                    <p class="p-chart-title">iPad</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel">
                        <div class="panel-body extra-pad">
                            <div class="col-sm-6 col-xs-6">
                                <div class="v-title">Visits</div>
                                <div class="v-value">10,090</div>
                                <div id="visit-1"></div>
                                <div class="v-info">Pages/Visit</div>
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <div class="v-title">Unique Visitors</div>
                                <div class="v-value">8,173</div>
                                <div id="visit-2"></div>
                                <div class="v-info">Avg. Visit Duration</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">

                    <div class="panel green-box">
                        <div class="panel-body extra-pad">
                            <div class="row">
                                <div class="col-sm-6 col-xs-6">
                                    <div class="knob">
                                        <span class="chart" data-percent="79">
                                            <span class="percent">79% <span class="sm">New Visit</span></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <div class="knob">
                                        <span class="chart" data-percent="56">
                                            <span class="percent">56% <span class="sm">Bounce rate</span></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="panel">
                        <div class="panel-body">
                            <div class="calendar-block ">
                                <div class="cal1">

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel">
                        <header class="panel-heading">
                            Todo List
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                             </span>
                        </header>
                        <div class="panel-body">
                            <ul class="to-do-list" id="sortable-todo">
                                <li class="clearfix">
                                    <span class="drag-marker">
                                    <i></i>
                                    </span>
                                    <div class="todo-check pull-left">
                                        <input type="checkbox" value="None" id="todo-check"/>
                                        <label for="todo-check"></label>
                                    </div>
                                    <p class="todo-title">
                                        Dashboard Design & Wiget placement
                                    </p>
                                    <div class="todo-actionlist pull-right clearfix">

                                        <a href="#" class="todo-remove"><i class="fa fa-times"></i></a>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <span class="drag-marker">
                                    <i></i>
                                    </span>
                                    <div class="todo-check pull-left">
                                        <input type="checkbox" value="None" id="todo-check1"/>
                                        <label for="todo-check1"></label>
                                    </div>
                                    <p class="todo-title">
                                        Wireframe prepare for new design
                                    </p>
                                    <div class="todo-actionlist pull-right clearfix">

                                        <a href="#" class="todo-remove"><i class="fa fa-times"></i></a>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <span class="drag-marker">
                                    <i></i>
                                    </span>
                                    <div class="todo-check pull-left">
                                        <input type="checkbox" value="None" id="todo-check2"/>
                                        <label for="todo-check2"></label>
                                    </div>
                                    <p class="todo-title">
                                        UI perfection testing for Mega Section
                                    </p>
                                    <div class="todo-actionlist pull-right clearfix">

                                        <a href="#" class="todo-remove"><i class="fa fa-times"></i></a>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <span class="drag-marker">
                                    <i></i>
                                    </span>
                                    <div class="todo-check pull-left">
                                        <input type="checkbox" value="None" id="todo-check3"/>
                                        <label for="todo-check3"></label>
                                    </div>
                                    <p class="todo-title">
                                        Wiget & Design placement
                                    </p>
                                    <div class="todo-actionlist pull-right clearfix">

                                        <a href="#" class="todo-remove"><i class="fa fa-times"></i></a>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <span class="drag-marker">
                                    <i></i>
                                    </span>
                                    <div class="todo-check pull-left">
                                        <input type="checkbox" value="None" id="todo-check4"/>
                                        <label for="todo-check4"></label>
                                    </div>
                                    <p class="todo-title">
                                        Development & Wiget placement
                                    </p>
                                    <div class="todo-actionlist pull-right clearfix">

                                        <a href="#" class="todo-remove"><i class="fa fa-times"></i></a>
                                    </div>
                                </li>

                            </ul>
                            <div class="row">
                                <div class="col-md-12">
                                    <form role="form" class="form-inline">
                                        <div class="form-group todo-entry">
                                            <input type="text" placeholder="Enter your ToDo List" class="form-control" style="width: 100%">
                                        </div>
                                        <button class="btn btn-primary pull-right" type="submit">+</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel blue-box twt-info">
                        <div class="panel-body">
                            <h3>19 Februay 2014</h3>

                            <p>AdminEx is new model of admin
                            dashboard <a href="#">http://t.co/3laCVziTw4</a>
                            4 days ago by John Doe</p>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-body">
                            <div class="media usr-info">
                                <a href="#" class="pull-left">
                                    <img class="thumb" src="images/photos/user2.png" alt=""/>
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">Mila Watson</h4>
                                    <span>Senior UI Designer</span>
                                    <p>I use to design websites and applications for the web.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer custom-trq-footer">
                            <ul class="user-states">
                                <li>
                                    <i class="fa fa-heart"></i> 127
                                </li>
                                <li>
                                    <i class="fa fa-eye"></i> 853
                                </li>
                                <li>
                                    <i class="fa fa-user"></i> 311
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--body wrapper end-->

    <!--footer section start--> 
    <footer>
      2014 &copy; AdminEx by 
    </footer> 
    <!--footer section end--> 
   </div> 
   <!-- main content end--> 
  </section> 
  <!-- Placed js at the end of the document so the pages load faster --> 
  <script src="/13_class/two_object/project/Public/Admin/js/jquery-1.10.2.min.js"></script> 
  <script src="/13_class/two_object/project/Public/Admin/js/jquery-ui-1.9.2.custom.min.js"></script> 
  <script src="/13_class/two_object/project/Public/Admin/js/jquery-migrate-1.2.1.min.js"></script> 
  <script src="/13_class/two_object/project/Public/Admin/js/bootstrap.min.js"></script> 
  <script src="/13_class/two_object/project/Public/Admin/js/modernizr.min.js"></script> 
  <script src="/13_class/two_object/project/Public/Admin/js/jquery.nicescroll.js"></script> 
  <!--easy pie chart--> 
  <script src="/13_class/two_object/project/Public/Admin/js/easypiechart/jquery.easypiechart.js"></script> 
  <script src="/13_class/two_object/project/Public/Admin/js/easypiechart/easypiechart-init.js"></script> 
  <!--Sparkline Chart--> 
  <script src="/13_class/two_object/project/Public/Admin/js/sparkline/jquery.sparkline.js"></script> 
  <script src="/13_class/two_object/project/Public/Admin/js/sparkline/sparkline-init.js"></script> 
  <!--icheck --> 
  <script src="/13_class/two_object/project/Public/Admin/js/iCheck/jquery.icheck.js"></script> 
  <script src="/13_class/two_object/project/Public/Admin/js/icheck-init.js"></script> 
  <!-- jQuery Flot Chart--> 
  <script src="/13_class/two_object/project/Public/Admin/js/flot-chart/jquery.flot.js"></script> 
  <script src="/13_class/two_object/project/Public/Admin/js/flot-chart/jquery.flot.tooltip.js"></script> 
  <script src="/13_class/two_object/project/Public/Admin/js/flot-chart/jquery.flot.resize.js"></script> 
  <!--Morris Chart--> 
  <script src="/13_class/two_object/project/Public/Admin/js/morris-chart/morris.js"></script> 
  <script src="/13_class/two_object/project/Public/Admin/js/morris-chart/raphael-min.js"></script> 
  <!--Calendar--> 
  <script src="/13_class/two_object/project/Public/Admin/js/calendar/clndr.js"></script> 
  <script src="/13_class/two_object/project/Public/Admin/js/calendar/evnt.calendar.init.js"></script> 
  <script src="/13_class/two_object/project/Public/Admin/js/calendar/moment-2.2.1.js"></script> 
  <!-- <script src="http://cdnjs.cloudflare.com/ajax/libs/underscore./13_class/two_object/project/Public/Admin/js/1.5.2/underscore-min.js"></script>  -->
  <!--common scripts for all pages--> 
  <script src="/13_class/two_object/project/Public/Admin/js/scripts.js"></script> 
  <!--Dashboard Charts--> 
  <script src="/13_class/two_object/project/Public/Admin/js/dashboard-chart-init.js"></script>   
 </body>
</html>