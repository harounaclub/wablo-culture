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
                                    <div class="col-md-2 "></div>
                                    <div class="col-md-2 " ><h1><button class="btn md-bg-light-blue waves-effect"><?php echo $titre;?></button></h1></div>
                                    <div class="col-md-2"></div>
                                </div>
                                <br/><br/>
                                
                                <div class="zone-form">
                                    <?php
                                          $attributes = array('id' => 'addform', 'name'=> 'addform','method'=>'POST');
                                         echo form_open('admin/insertion_valeur', $attributes);
                                    ?>
                                    <input type="hidden" class="form-control" name="nb_valeur" id="nb_valeur" value="1">
                                    
                                    <div class="card-body card-padding">
                                    <p class="c-black f-500"></p>
                                    <div class="form-group input_fields_wrap">
                                            
                                        <div class="row form-row" id="input1">
                                          <div class="fg-line col-sm-2">
                                            <input type="text" placeholder="Ajouter valeur" class="form-control" id="valeur1" name="valeur1">
                                            <textarea placeholder="Signification" class="form-control" id="sens1" name="sens1"></textarea>                                  
                                          </div>
                                          <div class="col-sm-2">
                                           <button class="btn btn-primary btn-sm btn-small" id="ajout1" type="button">Ajouter</button>
                                          </div>
                                        </div>
                                        
                                        <div class="row form-row" id="input2">
                                          <div class="fg-line col-sm-2">
                                            <input type="text" placeholder="Ajouter valeur" class="form-control" id="valeur2" name="valeur2">
                                            <textarea placeholder="Signification" class="form-control" id="sens2" name="sens2"></textarea>
                                          </div>
                                          <div class="col-sm-2">
                                           <button class="btn btn-primary btn-sm btn-small" id="ajout2" type="button">Ajouter</button>
                                          </div>
                                        </div>
                                        
                                        <div class="row form-row" id="input3">
                                          <div class="fg-line col-sm-2">
                                            <input type="text" placeholder="Ajouter valeur" class="form-control" id="valeur3" name="valeur3">
                                            <textarea placeholder="Signification" class="form-control" id="sens3" name="sens3"></textarea>
                                          </div>
                                          <div class="col-sm-2">
                                           <button class="btn btn-primary btn-sm btn-small" id="ajout3" type="button">Ajouter</button>
                                          </div>
                                        </div>
                                        
                                        <div class="row form-row" id="input4">
                                          <div class="fg-line col-sm-2">
                                            <input type="text" placeholder="Ajouter valeur" class="form-control" id="valeur4" name="valeur4">
                                            <textarea placeholder="Signification" class="form-control" id="sens4" name="sens4"></textarea>
                                          </div>
                                          <div class="col-sm-2">
                                           <button class="btn btn-primary btn-sm btn-small" id="ajout4" type="button">Ajouter</button>
                                          </div>
                                        </div>
                                        
                                        <div class="row form-row" id="input5">
                                          <div class="fg-line col-sm-2">
                                            <input type="text" placeholder="Ajouter valeur" class="form-control" id="valeur5" name="valeur5">
                                            <textarea placeholder="Signification" class="form-control" id="sens5" name="sens5"></textarea>
                                          </div>
                                          <div class="col-sm-2">
                                           <button class="btn btn-primary btn-sm btn-small" id="ajout5" type="button">Ajouter</button>
                                          </div>
                                        </div>
                                            
                                        

                                    </div>
        


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
        
        $("#input2").hide();
        $("#input3").hide();
        $("#input4").hide();
        $("#input5").hide();
        
        $( "#ajout1" ).click(function() {

        $("#input2").show();
         $("#nb_valeur").val("2");
        
       
      });


      $( "#ajout2" ).click(function() {

        $("#input3").show();
        $("#nb_valeur").val("3");
       
      });

      $( "#ajout3" ).click(function() {

        $("#input4").show();
        $("#nb_valeur").val("4");
       
      });


      $( "#ajout4" ).click(function() {

        $("#input5").show();
        $("#nb_valeur").val("5");
       
      });
        
        
        
        $("form#addform").on("submit",function(){
            
            $("#okvalid").attr("disabled", "disabled").html("Ajouter des données en cours... ");
            var $this = $(this);
            
            $.ajax({
                url: "<?php echo base_url();?>admin/ajouter_valeur/",
                type: $this.attr('method'),
                data: $this.serialize(),
                dataType: 'json', // JSON
                success: function(json) {
                    if(json.reponse === '1') {

              $("#getcontent").load("<?php echo base_url("admin/ajouter_valeur") ?>");
              //$.growl.notice({ message: "Votre opération s'est bien effectuée!" });


              } else {
                      //$.growl.error({ message: "Echec de l'opération, veuillez verifier les differentes dates et reprendre." });
                      return false;
                        }
                    }
            });
            
            return false;
        });
        
});
</script>