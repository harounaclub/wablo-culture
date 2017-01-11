<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from steelcoders.com/alpha/v1.2/table-data.html by HTTrack Website Copier/3.x [XR&CO'2013], Fri, 02 Sep 2016 03:44:08 GMT -->
<head>
        
        <!-- Title -->
        <title>sms pro</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta charset="UTF-8">
        <meta name="description" content="Responsive Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="Steelcoders" />
        
        <!-- Styles -->
        <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/materialize/css/materialize.min.css"/>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/plugins/material-preloader/css/materialPreloader.min.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/plugins/datatables/css/jquery.dataTables.min.css" rel="stylesheet">

            
        <!-- Theme Styles -->
        <link href="<?php echo base_url() ?>assets/css/alpha.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url() ?>assets/css/custom.css" rel="stylesheet" type="text/css"/>
        
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
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
                <div class="spinner-layer spinner-spinner-teal lighten-1">
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
            <main class="mn-inner">
                <div class="row">
                   
                    <div class="col s12 m12 l12">
                        <div class="card">
                            <div class="card-content">
                                <span class="card-title">Liste des contacts</span>
                                <p>Vos contacts enregistré</p><br>
                                <table id="example" class="display responsive-table datatable-example">
                                    <thead>
                                       <tr>
                                            <th data-field="id">Numéro</th>
                                            <th data-field="name">Nom et prenom</th>
                                            <th data-field="price">détails</th>
                                       </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th data-field="id">Numéro</th>
                                            <th data-field="name">Nom et prenom</th>
                                            <th data-field="price">détails</th>
                                            
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                      
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                       
                                                        
                                                       
                                                    </tr>
                                               
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
           
        </div>
        <div class="left-sidebar-hover"></div>
        
        <!-- Javascripts -->
        <script src="<?php echo base_url() ?>assets/plugins/jquery/jquery-2.2.0.min.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/materialize/js/materialize.min.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/material-preloader/js/materialPreloader.min.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/datatables/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/alpha.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/pages/table-data.js"></script>
        
    </body>

<!-- Mirrored from steelcoders.com/alpha/v1.2/table-data.html by HTTrack Website Copier/3.x [XR&CO'2013], Fri, 02 Sep 2016 03:44:16 GMT -->
</html>