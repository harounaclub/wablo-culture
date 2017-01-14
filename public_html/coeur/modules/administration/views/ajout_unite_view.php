<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
    
<!-- Mirrored from www.dashmonk.com/demo/dashplus/pages/forms/basic-elements.html by HTTrack Website Copier/3.x [XR&CO'2013], Sat, 08 Oct 2016 00:33:59 GMT -->
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
                        <h2 class="pull-left">Ajout d'une unité</h2>

                        <ul class="breadcrumb pull-right">
                            <li><a href="../../index-2.html">Home</a></li>
                            <li><a href="#">Forms</a></li>
                            <li><a href="#">Basic Elements</a></li>
                        </ul>
                    </div>
                   
                    <div class="row">
                       
                        <div class="col-sm-6">
                           	
                            
                            <div class="card" style="min-height: 400px">
                                <div class="card-header">
                                    <h2>Ajouter le type d'unite
                                        <small></small>
                                    </h2>
                                </div>
        
                                <div class="card-body card-padding">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p class="c-black f-500 m-b-20"></p>
        
                                            <div class="form-group">
                                                <div class="fg-line">
                                                    <div class="select">
                                                        <select class="form-control">
                                                            <option>Choisir le type d'unité</option>
                                                            <option> Departement</option>
                                                            <option> Direction</option>
                                                            <option> Service</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="col-sm-6">
                            <div class="card" style="min-height: 226px">
                                <div class="card-header">
                                    <h2>Ajouter l'unite
                                        <small></small>
                                    </h2>
                                </div>
        
                                <div class="card-body card-padding">
                                    <p class="c-black f-500"></p>
        
                                    <div class="form-group">
                                        <div class="fg-line">
                                            <input type="text" class="form-control input-sm" placeholder="Ajouter l'unite">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="fg-line">
                                            <input type="text" class="form-control input-sm" placeholder="Ajouter l'unite">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="fg-line">
                                            <input type="text" class="form-control input-sm" placeholder="Ajouter l'unite">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="fg-line">
                                            <input type="text" class="form-control input-sm" placeholder="Ajouter l'unite">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="fg-line">
                                            <input type="text" class="form-control input-sm" placeholder="Ajouter l'unite">
                                        </div>
                                    </div>
        
                                    
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                    <button class="btn btn-default btn-icon-text"><i class="zmdi zmdi-more-vert"></i> Enregistrer
                     </button>
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
        <script src="<?php echo base_url(); ?>/assets/V2/vendors/autosize/dist/autosize.min.js"></script>

        <script src="<?php echo base_url(); ?>/assets/V2/dist/js/dashplus.min.js"></script>
	</body>

<!-- Mirrored from www.dashmonk.com/demo/dashplus/pages/forms/basic-elements.html by HTTrack Website Copier/3.x [XR&CO'2013], Sat, 08 Oct 2016 00:33:59 GMT -->
</html>