<!-- header logo: style can be found in header-->
<header class="header">
    <nav class="navbar navbar-static-top" role="navigation">
        <a href="dashboard.php" class="logo" >
         
            <img src="img/logo2.png" alt="logo" width="130px"/>
        </a>
       
        <div>
            <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button"> <i
                    class="fa fa-fw fa-bars"></i>
            </a>
        </div>
        <div class="navbar-right">
            <ul class="nav navbar-nav">
               
                     <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle padding-user" data-toggle="dropdown">
                        <img src="img/authors/avatar1.jpg" width="35" class="img-circle img-responsive pull-left"
                             height="35" alt="User Image">
                        <div class="riot">
                            <div>
                                Admin
                                <span>
                                        <i class="caret"></i>
                                    </span>
                            </div>
                        </div>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                       
                        <li class="user-footer">
                          
                            <div class="pull-right">
                                <a href="index.php">
                                    <i class="fa fa-fw fa-sign-out"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="left-side sidebar-offcanvas">
        <!-- sidebar: style can be found in sidebar-->
        <section class="sidebar">
            <div id="menu" role="navigation">
           
                <ul class="navigation">
				 <li  class="active">
                        <a href="traffic_dashboard.php">
                            <i class="menu-icon fa fa-check-square"></i>
                            <span>Dashboard</span>
                            
                        </a>
                      
                    </li>
                     <li >
                        <a href="trf_about.php">
                            <i class="menu-icon fa fa-check-square"></i>
                            <span>About Traffic  </span>
                            
                        </a>
                      
                    </li>
                    <li class="menu-dropdown">
                        <a href="#">
                            <i class="menu-icon fa fa-check-square"></i>
                            <span> Main Category</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="add_traffic_main_category.php">
                                    <i class="fa fa-fw fa-fire"></i>Add New
                                </a>
                            </li>
                            <li>
                              <a href="traffic_category.php">
                                    <i class="fa fa-fw fa-file-text-o"></i> View
                                </a>
                            </li>
                     
                        </ul>
                    </li>
					
				
										
					<li class="menu-dropdown">
                        <a href="#">
                            <i class="menu-icon fa fa-check-square"></i>
                            <span>Product</span>
                            <span class="fa arrow"></span>
                        </a>
                       <ul class="sub-menu">
                            <li>
                                <a href="add_traffic_product.php">
                                    <i class="fa fa-fw fa-fire"></i>Add New
                                </a>
                            </li>
                            <li>
                              <a href="traffic_product.php">
                                    <i class="fa fa-fw fa-file-text-o"></i> View
                                </a>
                            </li>
                     
                        </ul>
                    </li>
										
 
					 <!-- <li class="menu-dropdown">
                        <a href="#">
                            <i class="menu-icon fa fa-check-square"></i>
                            <span>Feed Back</span>
                            <span class="fa arrow"></span>
                        </a>
                       <ul class="sub-menu">
                            <li>
                                <a href="#">
                                    <i class="fa fa-fw fa-fire"></i>Add New
                                </a>
                            </li>
                            <li>
                              <a href="#">
                                    <i class="fa fa-fw fa-file-text-o"></i> View
                                </a>
                            </li>
                     
                        </ul>
                    </li>-->
                </ul>
                <!-- / .navigation -->
            </div>
            <!-- menu -->
        </section>
        <!-- /.sidebar -->
    </aside>