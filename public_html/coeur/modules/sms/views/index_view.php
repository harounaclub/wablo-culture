
<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('template/tpl_head_upload_view'); ?>
    

<head>
        
        <!-- Title -->
    
        
</head>
    <body>
        <div class="loader-bg"></div>
        <div class="loader">
            <div class="preloader-wrapper big active">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-teal lighten-1">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mn-content fixed-sidebar">
          
        
          <?php 

          // entete avec titre principale
          $this->load->view('template/tpl_header_view'); 

          ?>


         <?php 

          // partie setting et chat
         $this->load->view('template/tpl_sidebar_first_view'); 

          ?>



          <?php 

          // menu de gauche
         $this->load->view('template/tpl_sidebar_left_view'); 

          ?>



          <?php 

          // contenu principale
         $this->load->view($main_content); 

          ?>

          






           
            
           
          <?php 

          // menu de gauche
         $this->load->view('template/tpl_footer_view'); 

          ?>   
           
           
        </div>
        <div class="left-sidebar-hover"></div>
        
        
        <!-- Javascripts -->
       


        <script src="<?php echo base_url() ?>assets/plugins/jquery/jquery-2.2.0.min.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/materialize/js/materialize.min.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/material-preloader/js/materialPreloader.min.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/dropzone/dropzone.min.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/dropzone/dropzone-amd-module.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/alpha.min.js"></script>
      <script type="text/javascript">
$(document).ready(
function()
{

    console.log("ready");

$("form#addmodform").on(
    "submit",
    function()
    {

  
  var $this = $(this);

  $.ajax({
        url: "<?php echo base_url();?>caisse/add_caisse/",
        type: $this.attr('method'),
        data: $this.serialize(),
        dataType: 'json', // JSON
        success: function(json) {
            if(json.reponse === '1') {

      $("#getcontent").load("<?php echo base_url("caisse/get_caisse") ?>");
      //$.growl.notice({ message: "Votre opération s'est bien effectuée!" });


  } else {
          //$.growl.error({ message: "Echec de l'opération, veuillez verifier les differentes dates et reprendre." });
          return false;
            }
        }
    });


  return false;
}
);

});


</script>

        
    </body>

<!-- Mirrored from steelcoders.com/alpha/v1.2/ by HTTrack Website Copier/3.x [XR&CO'2013], Fri, 02 Sep 2016 03:21:48 GMT -->
</html>