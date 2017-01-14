<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
    
<!-- Mirrored from www.dashmonk.com/demo/dashplus/pages/forms/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2013], Sat, 08 Oct 2016 00:34:07 GMT -->
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
                        <h2 class="pull-left">Inscription w@blo culture</h2>

                        <ul class="breadcrumb pull-right">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Forms</a></li>
                            <li><a href="#">Form Validations</a></li>
                        </ul>
                    </div>
                   
                    <div class="card">
                        <div class="card-header">
                            <h2>veuillez remplir les champs
                                <small>Tous les champs sont  "<font color="red">obligatoire</font>"
                                </small>
                            </h2>
                        </div>

                        <div class="card-body card-padding">
                            <div class="form-group has-success has-feedback">
                                <div class="fg-line">
                                    <label class="control-label" for="inputSuccess1">Societé*</label>
                                    <input type="text" class="form-control" id="inputSuccess1"
                                           value="">
                                </div>
                                <small class="help-block">Veuillez entrer le nom de votre entreprise</small>
                            </div>

                            <div class="form-group has-success has-feedback">
                                <div class="fg-line">
                                    <label class="control-label" for="inputWarning1">Nom et prenom *</label>
                                    <input type="text" class="form-control" id="inputWarning1"
                                           value="">
                                </div>
                                <small class="help-block">veuillez entrer votre nom & prenom</small>
                            </div>

                            <div class="form-group has-success has-feedback">
                                <div class="fg-line">
                                    <label class="control-label" for="inputError1">E-mail *</label>
                                    <input type="text" class="form-control" id="inputError1"
                                           value="">
                                </div>
                                <small class="help-block">veuillez entrer votre adresse email</small>
                            </div>
                            <div class="form-group has-success has-feedback">
                                <div class="fg-line">
                                    <label class="control-label" for="inputError1">Mode de paiement *</label>
                                    <input type="text" class="form-control" id="inputError1"
                                           value="">
                                </div>
                                <small class="help-block">veuillez entrer votre mode de paiement</small>
                            </div>

                            <div class="form-group has-success has-feedback">
                                <div class="fg-line">
                                    <label class="control-label" for="inputError1">Info paiement *</label>
                                    <input type="text" class="form-control" id="inputError1"
                                           value="">
                                </div>
                                <small class="help-block">veuillez entrer les informations concernant votre paiement</small>
                            </div>

                            <div class="form-group has-success has-feedback">
                                <div class="fg-line">
                                    <label class="control-label" for="inputError1">Montant *</label>
                                    <input type="text" class="form-control" id="inputError1"
                                           value="">
                                </div>
                                <small class="help-block">veuillez entrer le montant de paiement</small>
                            </div>
                            <div class="form-group has-success has-feedback">
                                <div class="fg-line">
                                    <label class="control-label" for="inputError1">Telephone *</label>
                                    <input type="text" class="form-control" id="inputError1"
                                           value="">
                                </div>
                                <small class="help-block">veuillez entrer votre numero de telephone</small>
                            </div>

                            <br/>
                        </div>
                    </div>
                           <button> <a class="btn-raised" value="buton"></a></button>

                  
                </div>
            </section>
            <!-- Content Section END -->
        </section>

        <!-- Footer -->
        <?php 
            require('_footer.php');
        ?> 

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

<!-- Mirrored from www.dashmonk.com/demo/dashplus/pages/forms/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2013], Sat, 08 Oct 2016 00:34:07 GMT -->
</html>