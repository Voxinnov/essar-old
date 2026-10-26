<?php
require_once("autoload.php");
$main_cat = new Maincategory();
$record_maincat = $main_cat->Listmaincategory();
$total_record_maincat = is_array($record_maincat) ? count($record_maincat) : 0; ?>        
            <!-- ==========================-->
            <!-- MOBILE MENU-->
            <!-- ==========================-->
                       <div data-off-canvas="mobile-slidebar left overlay"><a href="index.php" class="navbar-brand scroll"><img src="assets/logo2.png" alt="logo" class="normal-logo" style="max-width:130px"/></a>
                <ul class="nav navbar-nav">
				 <li><a href="index.php"><i class="fa fa-home" ></i></a></li>
					<li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Products<b class="caret"></b></a>
						 <ul role="menu" class="dropdown-menu ">
						     <?php
						     
						     	for($i=0;$i<$total_record_maincat;$i++)
									{
						     ?>
											  <li><a href="compression_garments.php" ><?php echo $record_maincat[$i]['med_main_cat_title'];?></a></li>
											  <?php } ?>
											 	<!-- <li><a href="compression_garments.php" >Compression Garments</a></li>
											   <li><a href="silicon_products.php" >Silicon Products </a></li>
										<li><a href="hyperbaric_oxygen.php" >Hyperbaric Oxygen Chambers </a></li>-->
                                           
											 
											    <!--<li><a href="compression_garments.php" >Surgical Items</a></li>
                                                <li><a href="robotic_lithotripsy.php" >ESWL Machine</a></li> -->     
                                            </ul>
					</li>
       
		  <li><a href="about.php">About</a></li>
	
		   
                    <li><a href="contacts.php">Contacts</a></li>
                </ul>
            </div>

            <header class="header-v2 wow slideInDown"><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                            <div class="b-logo">
                                <a href="category.php">
                                    <img src="assets/logo4.png" style="max-width:130px" alt="/">
                                    <span class="logo-title">
                                                                                       
                                                                                    </span>
                                </a>
                            </div>
                            <!-- Mobile Trigger Start-->
                            <button class="menu-mobile-button visible-xs-block js-toggle-mobile-slidebar toggle-menu-button"><i class="toggle-menu-button-icon"><span></span><span></span><span></span><span></span><span></span><span></span></i></button>
                            <!-- Mobile Trigger End-->
                        </div>
                        <div class="hidden-xs col-sm-9 col-md-7 col-lg-8">
                            <div class="header-navibox-2">
                                <nav id="nav" class="navbar">
                                    <ul class="yamm main-menu nav navbar-nav hidden-xs">
                                      <li><a href="index.php"><i class="fa fa-home" ></i></a></li>  
                 <li class="dropdown"><a href="medical_home.php" data-toggle="dropdown" class="dropdown-toggle">Products<b class="caret"></b></a>
						 <ul role="menu" class="dropdown-menu ">
						        <?php
						     
						     	for($i=0;$i<$total_record_maincat;$i++)
									{
						     ?>
											  <li><a href="products.php?m_id=<?php echo  $record_maincat[$i]['med_main_cat_id']; ?>" ><?php echo $record_maincat[$i]['med_main_cat_title'];?></a></li>
											  <?php } ?>
										<!--	<li><a href="compression_garments.php" >Compression Garments</a></li>
											  <li><a href="silicon_products.php" >Silicon Products </a></li>
										   	<li><a href="hyperbaric_oxygen.php" >Hyperbaric Oxygen Chambers </a></li>
                                             
											 <li><a href="surgical_items.php" >Surgical Items</a></li>
                                                <li><a href="eswlmachine.php" >ESWL Machine</a></li>  --> 
                                               
                                            </ul>
					</li>
      
		  <li><a href="about.php">About</a></li>
	
		   
                    <li><a href="contacts.php">Contacts</a></li>
              
              <li>						
										<iframe src="searcform.php" width="100%" height="40px" frameborder="0" scrolling="no" overflow="hidden"> </iframe>
										
										</li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
			
                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
                            <div class="b-socials">
                                <ul class="list-inline">
								  <li class="">
                                       <!-- <a href="#" class="btn_header_search">
                                            <i class="fa fa-search fa-fw" aria-hidden="true"></i>
                                        </a>-->
										
                                    </li>
									 <li>
                                        <a href="cartbox.php">
                                         <i class="fa fa-cart-plus" aria-hidden="true"></i>

                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/">
                                            <i class="fa fa-facebook fa-fw" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/">
                                            <i class="fa fa-twitter fa-fw" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                   
                                   
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </header>
			