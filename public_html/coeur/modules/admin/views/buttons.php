<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
    
<!-- Mirrored from www.dashmonk.com/demo/dashplus/pages/UI/buttons.html by HTTrack Website Copier/3.x [XR&CO'2013], Sat, 08 Oct 2016 00:33:30 GMT -->
<?php 
            require('_header.php');
        ?> 
    <body class="layout-fixed-left-menu left-sidebar-toggled show-welcome-message">
        <?php 
            require('_header_left_sidebar.php');
        ?> 
        
        <!-- Right Side Bar -->
        <?php 
            require('_aside_right_sidebar.php');
        ?> 

        <section id="main">
            <!-- Main Nav Bar -->
            <?php 
            require('_menu_sidebar_left.php');
        ?>
            
            <!-- Content Section START -->
            <section id="content">
                <div class="container">
                    <div class="block-header clearfix">
                        <h2 class="pull-left">Buttons</h2>

                        <ul class="breadcrumb pull-right">
                            <li><a href="../../index-2.html">Home</a></li>
                            <li><a href="#">UI</a></li>
                            <li><a href="#">Buttons</a></li>
                        </ul>
                    </div>
                    
                    <div class="row">
                    	<div class="col-sm-6">
                        	<div class="card">
                                <div class="card-header">
                                    <h2>Basic Buttons
                                        <small>Use any of the available button classes to quickly create a styled button.</small>
                                    </h2>
                                </div>
        
                                <div class="card-body card-padding">
                                    <p class="f-500 c-black m-b-10">Bootstrap Default Buttons</p>
                                    <div class="btn-demo m-b-10">
                                        <button class="btn btn-default">Default</button>
                                        <button class="btn btn-info">Info</button>
                                        <button class="btn btn-primary">Primary</button>
                                        <button class="btn btn-success">Success</button>
                                        <button class="btn btn-warning">Warning</button>
                                        <button class="btn btn-danger">Danger</button>
                                    </div>
                                    
                                    <p class="f-500 c-black m-b-10">Disabled Buttons</p>
                                    <div class="btn-demo">
                                        <button class="btn btn-default" disabled="disabled">Default</button>
                                        <button class="btn btn-info" disabled="disabled">Info</button>
                                        <button class="btn btn-primary" disabled="disabled">Primary</button>
                                        <button class="btn btn-success" disabled="disabled">Success</button>
                                        <button class="btn btn-warning" disabled="disabled">Warning</button>
                                        <button class="btn btn-danger" disabled="disabled">Danger</button>
                                    </div>
        
                                    <p class="f-500 c-black m-b-10 m-t-25">Custom Material Design Buttons</p>
                                    <div class="btn-colors btn-demo"> <!-- Optional container for demo porpose only -->
                                        <button class="btn md-bg-cyan">Cyan</button>
                                        <button class="btn md-bg-teal">Teal</button>
                                        <button class="btn md-bg-amber">Amber</button>
                                        <button class="btn md-bg-orange">Orange</button>
                                        <button class="btn md-bg-deep-orange">Deep Orange</button>
                                        <button class="btn md-bg-red">Red</button>
        
                                        <button class="btn md-bg-pink">Pink</button>
                                        <button class="btn md-bg-light-blue">Light Blue</button>
                                        <button class="btn md-bg-blue">Blue</button>
                                        <button class="btn md-bg-indigo">Indigo</button>
                                        <button class="btn md-bg-lime">Lime</button>
                                        <button class="btn md-bg-light-green">Light Green</button>
                                        <button class="btn md-bg-green">Green</button>
                                        <button class="btn md-bg-purple">Purple</button>
                                        <button class="btn md-bg-deep-purple">Deep Purple</button>
                                        <button class="btn md-bg-grey">Gray</button>
                                        <button class="btn md-bg-blue-grey">Blue Gray</button>
                                        <button class="btn md-bg-black">Black</button>
                                    </div>
        
                                    <br/>
                                    <br/>
        
                                    <p class="f-500 c-black m-b-5">Button Sizes</p>
                                    <small>Fancy larger or smaller buttons? Add the button sizing classes.</small>
        
                                    <br/>
                                    <br/>
        
                                    <div class="btn-demo">
                                        <button class="btn btn-default btn-lg">Large</button>
                                        <button class="btn btn-default">Default</button>
                                        <button class="btn btn-default btn-sm">Small</button>
                                        <button class="btn btn-default btn-xs">Extra Small</button>
                                    </div>
        
                                    <br/>
                                    <br/>
                                </div>
                            </div>
                    <div class="card" style="min-height: 276px">
                        <div class="card-header">
                            <h2>Button Dropdowns</h2>
                        </div>

                        <div class="card-padding card-body">
                        	<p class="f-500 c-black m-b-5">Nesting</p>
                            <small>Place a '.btn-group' within another '.btn-group' when you want dropdown menus mixed
                                with a series of buttons.
                            </small>

                            <br/>
                            <br/>

                            <div class="btn-group-demo">
                                <div class="btn-group">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default dropdown-toggle"
                                                data-toggle="dropdown">
                                            Dropdown
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Dropdown link</a></li>
                                            <li><a href="#">Dropdown link</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="btn-group">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary dropdown-toggle"
                                                data-toggle="dropdown">
                                            Dropdown

                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Dropdown link</a></li>
                                            <li><a href="#">Dropdown link</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
						
                        </div>
                    </div>
                        </div>
                        <div class="col-sm-6">
                        	<div class="card">
                                <div class="card-header">
                                    <h2>Button Groups
                                        <small>Group a series of buttons together on a single line with the button group</small>
                                    </h2>
                                </div>
        
                                <div class="card-body card-padding">
                                    <p class="f-500 c-black m-b-20">Basic Example</p>
                                    <div class="btn-group-demo">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default">Left</button>
                                            <button type="button" class="btn btn-default">Middle</button>
                                            <button type="button" class="btn btn-default">Right</button>
                                        </div>
        
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary">Left</button>
                                            <button type="button" class="btn btn-primary">Middle</button>
                                            <button type="button" class="btn btn-primary">Right</button>
                                        </div>
        
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info">Left</button>
                                            <button type="button" class="btn btn-info">Middle</button>
                                            <button type="button" class="btn btn-info">Right</button>
                                        </div>
        
                                    </div>
        
                                    <br/>
                                    <br/>
        
                                    <p class="f-500 c-black m-b-5">Button Toolbars</p>
                                    <small>Combine sets of '.btn-group.' into a '.btn-toolbar' for more complex components.
                                    </small>
        
                                    <br/>
                                    <br/>
        							
                                    <div class="btn-toolbar" role="toolbar">
                                        <div class="btn-group btn-group-seperator">
                                            <button type="button" class="btn btn-default"><i class="zmdi zmdi-copy f-20"></i></button>
                                            <button type="button" class="btn btn-default"><i class="zmdi zmdi-paste f-20"></i></button>
                                            <button type="button" class="btn btn-default"><i class="zmdi zmdi-sort-amount-asc f-20"></i></button>
                                            <button type="button" class="btn btn-default"><i class="zmdi zmdi-sort-amount-desc f-20"></i></button>
                                            <button type="button" class="btn btn-default"><i class="zmdi zmdi-redo f-20"></i></button>
                                            <button type="button" class="btn btn-default"><i class="zmdi zmdi-undo f-20"></i></button>
                                            <button type="button" class="btn btn-default"><i class="zmdi zmdi-delete f-20"></i></button>
                                        </div>
                                        <div class="btn-group btn-group-seperator">
                                            <button type="button" class="btn btn-default"><i class="zmdi zmdi-home f-20"></i></button>
                                            <button type="button" class="btn btn-default"><i class="zmdi zmdi-zoom-in f-20"></i></button>
                                            <button type="button" class="btn btn-default"><i class="zmdi zmdi-zoom-out f-20"></i></button>
                                        </div>
                                    </div>
        
                                    <br/>
        
                                    <div class="btn-group-demo">
                                        <div class="btn-group btn-group-seperator" role="group">
                                            <button type="button" class="btn btn-default">
                                            	<span class="p-t-5 p-b-5">
													<i class="zmdi zmdi-home f-18"></i>
												</span>
												<br>
												<span>Home</span>
											</button>
                                            <button type="button" class="btn btn-default">
                                            <span class="p-t-5 p-b-5">
												<i class="zmdi zmdi-favorite f-18"></i>
												</span>
												<br>
												<span>Favourites</span>
											</button>
                                            <button type="button" class="btn btn-default">
												<span class="p-t-5 p-b-5">
												<i class="zmdi zmdi-accounts f-18"></i>
												</span>
												<br>
												<span>Contacts</span>
                                            </button>
                                        </div>
                                    </div>
        
                                    <br/>
                                    <br/>
                                    <br/>
        
                                    <p class="f-500 c-black m-b-5">Button Group Sizing</p>
                                    <small>Instead of applying button sizing classes to every button in a group, just add
                                        '.btn-group-*' to each '.btn-group', including when nesting multiple groups.
                                    </small>
        
                                    <br/>
                                    <br/>
        
                                    <div class="btn-group-demo">
                                        <div class="btn-group btn-group-lg" role="group">
                                            <button type="button" class="btn btn-default">Left</button>
                                            <button type="button" class="btn btn-default">Middle</button>
                                            <button type="button" class="btn btn-default">Right</button>
                                        </div>
        
                                        <div class="btn-group btn-group-lg" role="group">
                                            <button type="button" class="btn btn-info">Left</button>
                                            <button type="button" class="btn btn-info">Middle</button>
                                            <button type="button" class="btn btn-info">Right</button>
                                        </div>
                                    </div>
        
                                    <br/>
        
                                    <div class="btn-group-demo">
                                        <div class="btn-group btn-group" role="group">
                                            <button type="button" class="btn btn-default">Left</button>
                                            <button type="button" class="btn btn-default">Middle</button>
                                            <button type="button" class="btn btn-default">Right</button>
                                        </div>
        
                                        <div class="btn-group btn-group" role="group">
                                            <button type="button" class="btn btn-info">Left</button>
                                            <button type="button" class="btn btn-info">Middle</button>
                                            <button type="button" class="btn btn-info">Right</button>
                                        </div>
                                    </div>
        
                                    <br/>
        
                                    <div class="btn-group-demo">
                                        <div class="btn-group btn-group-sm" role="group">
                                            <button type="button" class="btn btn-default">Left</button>
                                            <button type="button" class="btn btn-default">Middle</button>
                                            <button type="button" class="btn btn-default">Right</button>
                                        </div>
        
                                        <div class="btn-group btn-group-sm" role="group">
                                            <button type="button" class="btn btn-info">Left</button>
                                            <button type="button" class="btn btn-info">Middle</button>
                                            <button type="button" class="btn btn-info">Right</button>
                                        </div>
                                    </div>
        
                                    <br/>
        
                                    <div class="btn-group-demo">
                                        <div class="btn-group btn-group-xs" role="group">
                                            <button type="button" class="btn btn-default">Left</button>
                                            <button type="button" class="btn btn-default">Middle</button>
                                            <button type="button" class="btn btn-default">Right</button>
                                        </div>
        
                                        <div class="btn-group btn-group-xs" role="group">
                                            <button type="button" class="btn btn-info">Left</button>
                                            <button type="button" class="btn btn-info">Middle</button>
                                            <button type="button" class="btn btn-info">Right</button>
                                        </div>
                                    </div>
        
                                    <br/>
                                    <br/>
                                    <br/>
        
                                    <p class="f-500 c-black m-b-5">Justified Button Groups</p>
                                    <small>Make a group of buttons stretch at equal sizes to span the entire width of its
                                        parent
                                    </small>
        
                                    <br/>
                                    <br/>
        
                                    <div class="btn-group btn-group-justified" role="group" aria-label="...">
                                        <div class="btn-group" role="group">
                                            <button type="button" class="btn btn-default">Left</button>
                                        </div>
                                        <div class="btn-group" role="group">
                                            <button type="button" class="btn btn-default">Middle</button>
                                        </div>
                                        <div class="btn-group" role="group">
                                            <button type="button" class="btn btn-default">Right</button>
                                        </div>
                                    </div>
        
                                    <br/>
        
                                    <div class="btn-group btn-group-justified" role="group" aria-label="...">
                                        <div class="btn-group" role="group">
                                            <button type="button" class="btn btn-info">Left</button>
                                        </div>
                                        <div class="btn-group" role="group">
                                            <button type="button" class="btn btn-info">Middle</button>
                                        </div>
                                        <div class="btn-group" role="group">
                                            <button type="button" class="btn btn-info">Right</button>
                                        </div>
                                    </div>
        
                                    <br/>
                                    <br/>
                                    <br/>
        
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                    	<div class="col-sm-6">
                        	<div class="card" style="min-height: 370px">
                                <div class="card-header">
                                    <h2>Button Icons
                                        <small>You can refer the Icons page for the complete list of Font Icons which are
                                            inspired by Material Design
                                        </small>
                                    </h2>
                                </div>
                                <div class="card-body card-padding">
                                    <div class="btn-demo">
                                        <button class="btn btn-default btn-icon-text"><i class="zmdi zmdi-home"></i> Home
                                        </button>
                                        <button class="btn btn-default btn-icon-text"><i class="zmdi zmdi-search"></i> Search
                                        </button>
                                        <button class="btn btn-default btn-icon-text"><i class="zmdi zmdi-more-vert"></i> More
                                        </button>
                                        <button class="btn btn-default btn-icon-text"><i class="zmdi zmdi-arrow-forward"></i>
                                            Forward
                                        </button>
                                        <button class="btn btn-default btn-icon-text"><i class="zmdi zmdi-arrow-back"></i> Back
                                        </button>
                                        <button class="btn btn-default btn-icon-text"><i class="zmdi zmdi-refresh"></i> Sync
                                        </button>
                                        <button class="btn btn-default btn-icon-text"><i class="zmdi zmdi-check"></i> Check
                                        </button>
                                        <button class="btn btn-default btn-icon-text"><i class="zmdi zmdi-close"></i> Check
                                        </button>
                                        <button class="btn btn-default btn-icon-text"><i class="zmdi zmdi-menu"></i> Menu
                                        </button>
                                        <button class="btn btn-default btn-icon-text"><i class="zmdi zmdi-apps"></i> Apps
                                        </button>
                                        <button class="btn btn-default btn-icon-text"><i class="zmdi zmdi-check-all"></i> Done
                                        </button>
                                        <button class="btn btn-default btn-icon-text"><i class="zmdi zmdi-phone"></i> Call
                                        </button>
        
                                        <br/>
                                        <br/>
                                        <br/>
        
        
                                        <button class="btn btn-default"><i class="zmdi zmdi-home"></i></button>
                                        <button class="btn btn-default"><i class="zmdi zmdi-search"></i></button>
                                        <button class="btn btn-default"><i class="zmdi zmdi-more-vert"></i></button>
                                        <button class="btn btn-default"><i class="zmdi zmdi-arrow-forward"></i></button>
                                        <button class="btn btn-default"><i class="zmdi zmdi-arrow-back"></i></button>
                                        <button class="btn btn-default"><i class="zmdi zmdi-refresh"></i></button>
                                        <button class="btn btn-default"><i class="zmdi zmdi-check"></i></button>
                                        <button class="btn btn-default"><i class="zmdi zmdi-close"></i></button>
                                        <button class="btn btn-default"><i class="zmdi zmdi-menu"></i></button>
                                        <button class="btn btn-default"><i class="zmdi zmdi-apps"></i></button>
                                        <button class="btn btn-default"><i class="zmdi zmdi-check-all"></i></button>
                                        <button class="btn btn-default"><i class="zmdi zmdi-phone"></i></button>
        
                                        <br/>
                                        <br/>
        
                                        <button class="btn btn-primary"><i class="zmdi zmdi-home"></i></button>
                                        <button class="btn btn-info"><i class="zmdi zmdi-search"></i></button>
                                        <button class="btn btn-success"><i class="zmdi zmdi-more-vert"></i></button>
                                        <button class="btn btn-warning"><i class="zmdi zmdi-arrow-forward"></i></button>
                                        <button class="btn btn-danger"><i class="zmdi zmdi-arrow-back"></i></button>
                                        <button class="btn bgm-teal"><i class="zmdi zmdi-refresh"></i></button>
                                        <button class="btn bgm-orange"><i class="zmdi zmdi-check"></i></button>
                                        <button class="btn bgm-cyan"><i class="zmdi zmdi-close"></i></button>
                                        <button class="btn bgm-lightgreen"><i class="zmdi zmdi-menu"></i></button>
                                        <button class="btn bgm-lime"><i class="zmdi zmdi-apps"></i></button>
                                        <button class="btn bgm-amber"><i class="zmdi zmdi-check-all"></i></button>
                                        <button class="btn bgm-deeporange"><i class="zmdi zmdi-phone"></i></button>
        
                                        <br/>
                                        <br/>
                                        <br/>
        
                                    </div>
                                </div>
                            </div>
                        </div>
                    	<div class="col-sm-6">
                        	<div class="card" style="min-height: 370px">
                                <div class="card-header">
                                    <h2>Button Shapes & Colors</h2>
                                </div>
        
                                <div class="card-padding card-body">
                                    <div class="btn-demo m-b-10">
                                        <button class="btn btn-default btn-icon c-indigo-800"><i class="zmdi zmdi-facebook"></i></button>
                                        <button class="btn btn-default btn-icon"><i class="zmdi zmdi-twitter"></i></button>
                                        <button class="btn btn-default btn-icon"><i class="zmdi zmdi-google-plus"></i></button>
                                        <button class="btn btn-default btn-icon"><i class="zmdi zmdi-linkedin"></i></button>
                                        <button class="btn btn-default btn-icon"><i class="zmdi zmdi-instagram"></i></button>
                                        <button class="btn btn-default btn-icon"><i class="zmdi zmdi-rss"></i></button>
                                        <button class="btn btn-default btn-icon"><i class="zmdi zmdi-flickr"></i></button>
                                        <button class="btn btn-default btn-icon"><i class="zmdi zmdi-pinterest"></i></button>
                                        <button class="btn btn-default btn-icon"><i class="zmdi zmdi-skype"></i></button>
                                        <button class="btn btn-default btn-icon"><i class="zmdi zmdi-tumblr"></i></button>
                                        <button class="btn btn-default btn-icon"><i class="zmdi zmdi-whatsapp"></i></button>
                                        <button class="btn btn-default btn-icon"><i class="zmdi zmdi-youtube"></i></button>
                                    </div>
                                    <div class="btn-demo m-b-25">
                                        <button class="btn btn-primary btn-icon"><i class="zmdi zmdi-facebook"></i></button>
                                        <button class="btn btn-info btn-icon"><i class="zmdi zmdi-twitter"></i></button>
                                        <button class="btn btn-success btn-icon"><i class="zmdi zmdi-google-plus"></i></button>
                                        <button class="btn btn-warning btn-icon"><i class="zmdi zmdi-linkedin"></i></button>
                                        <button class="btn btn-danger btn-icon"><i class="zmdi zmdi-instagram"></i></button>
                                        <button class="btn bgm-teal btn-icon"><i class="zmdi zmdi-rss"></i></button>
                                        <button class="btn bgm-orange btn-icon"><i class="zmdi zmdi-flickr"></i></button>
                                        <button class="btn bgm-cyan btn-icon"><i class="zmdi zmdi-pinterest"></i></button>
                                        <button class="btn bgm-lightgreen btn-icon"><i class="zmdi zmdi-skype"></i></button>
                                        <button class="btn bgm-lime btn-icon"><i class="zmdi zmdi-tumblr"></i></button>
                                        <button class="btn bgm-amber btn-icon"><i class="zmdi zmdi-whatsapp"></i></button>
                                        <button class="btn bgm-gray btn-icon"><i class="zmdi zmdi-youtube"></i></button>

                                    </div>
                                    
                                    <div class="btn-demo m-b-10">
                                        <button class="btn btn-default btn-icon"><i class="zmdi zmdi-home"></i></button>
                                        <button class="btn btn-default btn-icon"><i class="zmdi zmdi-search"></i></button>
                                        <button class="btn btn-default btn-icon"><i class="zmdi zmdi-more-vert"></i></button>
                                        <button class="btn btn-default btn-icon"><i class="zmdi zmdi-arrow-forward"></i></button>
                                        <button class="btn btn-default btn-icon"><i class="zmdi zmdi-arrow-back"></i></button>
                                        <button class="btn btn-default btn-icon"><i class="zmdi zmdi-refresh"></i></button>
                                        <button class="btn btn-default btn-icon"><i class="zmdi zmdi-check"></i></button>
                                        <button class="btn btn-default btn-icon"><i class="zmdi zmdi-close"></i></button>
                                        <button class="btn btn-default btn-icon"><i class="zmdi zmdi-menu"></i></button>
                                        <button class="btn btn-default btn-icon"><i class="zmdi zmdi-apps"></i></button>
                                        <button class="btn btn-default btn-icon"><i class="zmdi zmdi-check-all"></i></button>
                                        <button class="btn btn-default btn-icon"><i class="zmdi zmdi-phone"></i></button>
                                    </div>
                                    <div class="btn-demo m-b-25">
                                        <button class="btn btn-primary btn-icon"><i class="zmdi zmdi-home"></i></button>
                                        <button class="btn btn-info btn-icon"><i class="zmdi zmdi-search"></i></button>
                                        <button class="btn btn-success btn-icon"><i class="zmdi zmdi-more-vert"></i></button>
                                        <button class="btn btn-warning btn-icon"><i class="zmdi zmdi-arrow-forward"></i></button>
                                        <button class="btn btn-danger btn-icon"><i class="zmdi zmdi-arrow-back"></i></button>
                                        <button class="btn bgm-teal btn-icon"><i class="zmdi zmdi-refresh"></i></button>
                                        <button class="btn bgm-orange btn-icon"><i class="zmdi zmdi-check"></i></button>
                                        <button class="btn bgm-cyan btn-icon"><i class="zmdi zmdi-close"></i></button>
                                        <button class="btn bgm-lightgreen btn-icon"><i class="zmdi zmdi-menu"></i></button>
                                        <button class="btn bgm-lime btn-icon"><i class="zmdi zmdi-apps"></i></button>
                                        <button class="btn bgm-amber btn-icon"><i class="zmdi zmdi-check-all"></i></button>
                                        <button class="btn bgm-deeporange btn-icon"><i class="zmdi zmdi-phone"></i></button>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                   	</div>


                </div>
            </section>
            <!-- Content Section END -->
        </section>

		<!-- Footer -->
        <footer id="footer">
            Copyright &copy; 2016 Admin Dashboard


        </footer>

        <!-- Page Loader -->
        <div class="page-loader">
            <div class="preloader pls-blue">
                <svg class="pl-circular" viewBox="25 25 50 50">
                    <circle class="plc-path" cx="50" cy="50" r="20" />
                </svg>

                <p>Please wait...</p>
            </div>
        </div>

        <!-- Javascript Libraries -->
        <script src="<?php echo base_url(); ?>/assets/V2/vendors/jquery/dist/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/V2/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
        
        <script src="<?php echo base_url(); ?>/assets/V2/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/V2/vendors/Waves/dist/waves.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/V2/vendors/bootstrap-growl/bootstrap-growl.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/V2/vendors/sweetalert/dist/sweetalert.min.js"></script>

        <script src="<?php echo base_url(); ?>/assets/V2/dist/js/dashplus.min.js"></script>
    </body>

<!-- Mirrored from www.dashmonk.com/demo/dashplus/pages/UI/buttons.html by HTTrack Website Copier/3.x [XR&CO'2013], Sat, 08 Oct 2016 00:33:30 GMT -->
</html>
