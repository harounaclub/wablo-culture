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
                        <h2 class="pull-left">Ajout personnel </h2>

                        <ul class="breadcrumb pull-right">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Forms</a></li>
                            <li><a href="#">Basic Elements</a></li>
                        </ul>
                    </div>
                   
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card" style="min-height: 445px">
                                <div class="card-header">
                                    <h2>Indiquer l'unite.
                                        <small>Selectionner l'unite du personnel</small>
                                    </h2>
                                </div>
        
                                <div class="card-body card-padding">
                                    <div class="col-sm-6">
                                            <p class="c-black f-500 m-b-20"></p>
        
                                            <div class="form-group">
                                                <div class="fg-line">
                                                    <div class="select">
                                                        <select class="form-control">
                                                            <option>Selectionner la unite</option>
                                                            <option>valeur 1</option>
                                                            <option>valeur 2</option>
                                                            <option>valeur 3</option>
                                                            <option>valeur 4</option>
                                                            <option>valeur 5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
        
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                           	<div class="card">
                                <div class="card-header">
                                    <h2>Ajout d'un personnel
                                        <small>
                                        </small>
                                    </h2>
                                </div>
        
                                <div class="card-body card-padding">
                                    
                                    <div class="form-group">
                                        <div class="fg-line">
                                            <input class="form-control" rows="3"
                                                      placeholder="Nom & prenom"></input>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="fg-line">
                                            <input class="form-control" rows="3"
                                                      placeholder="Adresse"></input>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="fg-line">
                                            <input class="form-control" rows="3"
                                                      placeholder="Email"></input>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="fg-line">
                                            <input class="form-control" rows="3"
                                                      placeholder="Telephone"></input>
                                        </div>
                                    </div>

                                    <p class="c-black f-500 m-b-20">Catégorie</p>
        
                                            <div class="form-group">
                                                <div class="fg-line">
                                                    <div class="select">
                                                        <select class="form-control">
                                                            <option>Selectionner la catégorie</option>
                                                            <option>Catégorie 1</option>
                                                            <option>Catégorie 2</option>
                                                            <option>Catégorie 3</option>
                                                            <option>Catégorie 4</option>
                                                            <option>Catégorie 5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                    
                                </div>
                            </div>
                            
                           
                        </div>
                    </div>
                </div>
                <div class="card-body card-padding">
                    <div class="btn-demo">
                <button class="btn btn-default btn-icon-text"><i class="zmdi zmdi-more-vert"></i>Valider
                                        </button>
                </div>
                    </div>
                                    </br>
                                    </br>
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

        
        
        
       
        
        
        <

        
	</body>

<!-- Mirrored from www.dashmonk.com/demo/dashplus/pages/forms/basic-elements.html by HTTrack Website Copier/3.x [XR&CO'2013], Sat, 08 Oct 2016 00:33:59 GMT -->
</html>