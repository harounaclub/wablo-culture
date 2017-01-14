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
                        <h2 class="pull-left">Configuration w@blo culture</h2>

                        <ul class="breadcrumb pull-right">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Forms</a></li>
                            <li><a href="#">Basic Elements</a></li>
                        </ul>
                    </div>
                   
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card" style="min-height: 500px">
                                <div class="card-header">
                                    <h2>Ajouter une valeur
                                        <small>Vous pouvez ajouter plusieurs valeurs.</small>
                                    </h2>
                                </div>
                                
                                <div class="zone-form">
                                    <?php
                                          $attributes = array('id' => 'addform', 'name'=> 'addform','method'=>'POST');
                                         echo form_open('admin/insertion_valeur', $attributes);
                                    ?>
                                    
                                    <div class="card-body card-padding">
                                    <p class="c-black f-500"></p>
                                    <div class="form-group input_fields_wrap">
                                            
                                        <button class="add_field_button">Ajouter une autre valeur</button><br/>
                                        <div class="fg-line"><input type="text" name="mytext[]" class="form-control input-sm" placeholder="Ajouter valeur"></div><br/><br/>
                                            
                                        
<!--
                                        <div class="fg-line col-sm-2">

                                            <input type="text" class="form-control input-sm" placeholder="Ajouter valeur">

                                        </div>
-->
                                        
<!--
                                        <div class="col-sm-2">
                                           <button class="btn btn-primary btn-sm btn-small" id="ajout1" type="button">Ajouter</button>
                                          </div>
-->
                                    </div>
        
<!--
                                    <div class="form-group">
                                        <div class="fg-line">
                                            <input type="text" class="form-control" placeholder="Ajouter valeur">
                                        </div>
                                    </div>
        
                                    <div class="form-group">
                                        <div class="fg-line">
                                            <input type="text" class="form-control input-lg" placeholder="Ajouter valeur">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="fg-line">
                                            <input type="text" class="form-control input-lg" placeholder="Ajouter valeur">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="fg-line">
                                            <input type="text" class="form-control input-lg" placeholder="Ajouter valeur">
                                        </div>
                                    </div>
-->

                                        <div class="row">
                                            <button type="submit" id="okvalid" class="btn btn-default btn-icon-text"><i class="zmdi zmdi-more-vert"></i>Valider</button>
                                        </div>
                                    
                                </div>
                                    <?php echo form_close(); ?>
                                
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
        <script src="<?php echo base_url(); ?>/assets/V2/vendors/autosize/dist/autosize.min.js"></script>

        <script src="<?php echo base_url(); ?>/assets/V2/dist/js/dashplus.min.js"></script>
	</body>

<!-- Mirrored from www.dashmonk.com/demo/dashplus/pages/forms/basic-elements.html by HTTrack Website Copier/3.x [XR&CO'2013], Sat, 08 Oct 2016 00:33:59 GMT -->
</html>

<script type="text/javascript">
    $(document).ready(function() {
        var max_fields      = 10; //maximum input boxes allowed
        var wrapper         = $(".input_fields_wrap"); //Fields wrapper
        var add_button      = $(".add_field_button"); //Add button ID

        var x = 1; //initlal text box count
        $(add_button).click(function(e){ //on add input button click
            e.preventDefault();
            if(x < max_fields){ //max input box allowed
                x++; //text box increment
                //class="form-control input-sm" placeholder="Ajouter valeur"
                $(wrapper).append('<div class="fg-line"><input type="text" name="mytext[]" class="form-control input-sm" placeholder="Ajouter valeur"/><a href="#" class="remove_field">Supprimer</a></div><br/><br/>'); //add input box
            }
        });

        $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
            e.preventDefault(); $(this).parent('div').remove(); x--;
        });
        
        $("form#addform").on("submit",function(){
            
            
        });
        
});
</script>