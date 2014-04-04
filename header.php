<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- BEGIN PLUGIN CSS -->
    <link href="theme/plugins/fullcalendar/fullcalendar.css"                        rel="stylesheet" type="text/css" media="screen" />
    <link href="theme/plugins/pace/pace-theme-flash.css"                            rel="stylesheet" type="text/css" media="screen" />
    <link href="theme/plugins/gritter/css/jquery.gritter.css"                       rel="stylesheet" type="text/css" />
    <link href="theme/plugins/bootstrap-datepicker/css/datepicker.css"              rel="stylesheet" type="text/css" />
    <link href="theme/plugins/jquery-ricksaw-chart/css/rickshaw.css"                rel="stylesheet" type="text/css" media="screen" charset="utf-8" />
    <link href="theme/plugins/jquery-morris-chart/css/morris.css"                   rel="stylesheet" type="text/css" media="screen" charset="utf-8" />
    <link href="theme/plugins/jquery-slider/css/jquery.sidr.light.css"              rel="stylesheet" type="text/css" media="screen" />
    <link href="theme/plugins/bootstrap-select2/select2.css"                        rel="stylesheet" type="text/css" media="screen" />
    <link href="theme/plugins/jquery-jvectormap/css/jquery-jvectormap-1.2.2.css"    rel="stylesheet" type="text/css" media="screen" />
    <link href="theme/plugins/boostrap-checkbox/css/bootstrap-checkbox.css"         rel="stylesheet" type="text/css" media="screen" />
    <!-- END PLUGIN CSS -->

    <!-- BEGIN CORE CSS FRAMEWORK -->
    <link href="theme/plugins/bootstrap/css/bootstrap.min.css"             rel="stylesheet" type="text/css" />
    <link href="theme/plugins/bootstrap/css/bootstrap-responsive.min.css"  rel="stylesheet" type="text/css" />
    <link href="theme/plugins/font-awesome/css/font-awesome.css"           rel="stylesheet" type="text/css" />
    <link href="theme/css/animate.min.css"                                 rel="stylesheet" type="text/css" />
    <!-- END CORE CSS FRAMEWORK -->

    <!-- BEGIN CSS TEMPLATE -->
    <link href="theme/css/style.css"               rel="stylesheet" type="text/css" />
    <link href="theme/css/responsive.css"          rel="stylesheet" type="text/css" />
    <link href="theme/css/custom-icon-set.css"     rel="stylesheet" type="text/css" />
    <!-- END CSS TEMPLATE -->

</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->
<body class="">
    <!-- BEGIN HEADER -->
    <div class="header navbar navbar-inverse "> 
        <!-- BEGIN TOP NAVIGATION BAR -->
        <div class="navbar-inner">
            <div class="header-seperation"> 
                <ul class="nav pull-left notifcation-center" id="main-menu-toggle-wrapper" style="display:none">	
                    <li class="dropdown"> 
                        <a id="main-menu-toggle" href="#main-menu" class=""> 
                            <div class="iconset top-menu-toggle-white"></div> 
                        </a> 
                    </li>		 
                </ul>
                
                <!-- BEGIN LOGO -->	
                <a href="index.php?page=index">
                    <img src="theme/img/logo.png" class="logo pull-left" data-src="theme/img/logo.png" data-src-retina="theme/img/logo2x.png" width="106" height="92" />
                </a>
                <!-- END LOGO --> 
                
                <ul class="nav pull-right notifcation-center">	
                    <li class="dropdown" id="header_task_bar"> 
                        <a href="index.php?page=index" class="dropdown-toggle active" data-toggle=""> 
                            <div class="iconset top-home"></div> 
                        </a> 
                    </li>
                    
                    <li class="dropdown" id="portrait-chat-toggler" style="display:none"> 
                        <a href="#sidr" class="chat-menu-toggle"> 
                            <div class="iconset top-chat-white "></div> 
                        </a> 
                    </li>        
                </ul>
            </div>
            <!-- END RESPONSIVE MENU TOGGLER --> 
            <div class="header-quick-nav"> 
                
                <!-- BEGIN TOP NAVIGATION MENU -->
                <div class="pull-left"> 
                    <ul class="nav quick-section">
                        <li class="quicklinks"> 
                            <a href="#" class="" id="layout-condensed-toggle">
                                <div class="iconset top-menu-toggle-dark"></div> 
                            </a> 
                        </li>        
                    </ul>
                    
                    <ul class="nav quick-section">
                        
                        <div class="input-prepend inside search-form no-boarder">
                            <span class="add-on"> 
                                <a href="#" class="">
                                    <div class="iconset top-search"></div>
                                </a>
                            </span>
                            <input name="" type="text" class="no-boarder " placeholder="Search Dashboard" style="width:250px;" />
                        </div>
                    </ul>
                </div>
                <!-- END TOP NAVIGATION MENU -->
                
            </div> 
            <!-- END TOP NAVIGATION MENU --> 

        </div>
        <!-- END TOP NAVIGATION BAR --> 
        
    </div>

    <!-- END HEADER --> 
    
    <!-- BEGIN CONTAINER -->
    <div class="page-container row-fluid"> 
        
        <!-- BEGIN SIDEBAR -->
        <div class="page-sidebar" id="main-menu"> 

            <!-- BEGIN SIDEBAR MENU -->	
            <p class="menu-title">BROWSE</p>
            
            <ul>	
                <li class="start active "> 
                    <a href="index.php?page=index"> 
                        <i class="icon-custom-home"></i> 
                        <span class="title">Dashboard</span> 
                        <span class="selected"></span> 
                    </a> 
                </li>
                
                <li class=""> 
                    <a href="index.php?page=tables"> 
                        <i class="icon-custom-thumb"></i> 
                        <span class="title">Tables</span> 
                    </a>                
                </li>
                                
                <li class=""> 
                    <a href="index.php?page=charts"> 
                        <i class="icon-custom-chart"></i> 
                        <span class="title">Charts</span> 
                    </a>
                </li>                
              
            </ul>

            <a href="#" class="scrollup">Scroll</a>
            <div class="clearfix"></div>
            <!-- END SIDEBAR MENU --> 
        </div>
        <!-- END SIDEBAR --> 