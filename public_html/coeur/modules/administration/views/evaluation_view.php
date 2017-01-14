<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
    
<!-- Mirrored from www.dashmonk.com/demo/dashplus/pages/tables/data-tables.html by HTTrack Website Copier/3.x [XR&CO'2013], Sat, 08 Oct 2016 00:34:07 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dashplus Admin</title>

        <!-- Vendor CSS -->
        <link href="<?php echo base_url(); ?>/assets/V2/vendors/animate.css/animate.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>/assets/V2/vendors/sweetalert/dist/sweetalert.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>/assets/V2/vendors/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>/assets/V2/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>/assets/V2/vendors/bootgrid/jquery.bootgrid.min.css" rel="stylesheet">

        <!-- Dashplus CSS -->
        <link href="<?php echo base_url(); ?>/assets/V2/dist/css/dashplus_1.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>/assets/V2/dist/css/dashplus_2.min.css" rel="stylesheet">
    </head>
    <body class="layout-fixed-left-menu left-sidebar-toggled">
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
                        <h2 class="pull-left">Selection des employers</h2>

                        <ul class="breadcrumb pull-right">
                            <li><a href="<?php echo base_url(); ?>/assets/V2/index-2.html">Home</a></li>
                            <li><a href="#">Tables</a></li>
                            <li><a href="#">Date Tables</a></li>
                        </ul>
                    </div>
                   
                    <div class="row">
                        
                        <div class="col-md-12">
                            <div class="card" style="min-height: 670px">
                                <div class="card-header">
                                    <h2>Selectionner des employers
                                        <small>
                                        </small>
                                    </h2>
                                </div>
        
                                <div class="table-responsive">
                                    <table id="data-table-selection" class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th data-column-id="id" data-type="numeric" data-identifier="true">ID</th>
                                                <th data-column-id="sender">Unité</th>
                                                <th data-column-id="received" data-order="desc">Nom & prenom</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>10238</td>
                                                <td>eduardo@pingpong.com</td>
                                                <td>14.10.2013</td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
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
        <script src="<?php echo base_url(); ?>/assets/V2/vendors/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/V2/vendors/bootgrid/jquery.bootgrid.updated.min.js"></script>

        <script src="<?php echo base_url(); ?>/assets/V2/dist/js/dashplus.min.js"></script>
        
        <script type="text/javascript">
            $(document).ready(function(){
                //Warning Message
                function deleteRow(elm){
                    swal({   
                        title: "Are you sure?",   
                        text: "You will not be able to recover this imaginary file!",   
                        type: "warning",   
                        showCancelButton: true,   
                        confirmButtonColor: "#DD6B55",   
                        confirmButtonText: "Yes, delete it!",   
                        closeOnConfirm: true 
                    }, function(){   
                        var row = elm.closest('tr');
                        row.addClass("deleted");
                        setTimeout(function(){
                            row.remove();
                        }, 1000);
                    });
                }
                
                function editRowForm(elm){
                    var row = $(elm).closest('tr');
                    var rowId = row.data("row-id");
                    
                    var form = $('#row_edit_form');
                    form.find('input[name="id"]').val(row.find('td:nth-child(1)').html());
                    form.find('input[name="sender"]').val(row.find('td:nth-child(2)').html());
                    form.find('input[name="received"]').val(row.find('td:nth-child(3)').html());
                    
                    form.find('#save_btn').data("row-id", rowId);
                    form.modal('show');
                }
                                
                $("#save_btn").on("click", function(e){
                    var rowId = $(this).data("row-id");
                    var row = $("#data-table-command tr[data-row-id='" + rowId +"']");
                    var form = $('#row_edit_form');
                    
                    row.find('td:nth-child(1)').html(form.find('input[name="id"]').val());
                    row.find('td:nth-child(2)').html(form.find('input[name="sender"]').val());
                    row.find('td:nth-child(3)').html(form.find('input[name="received"]').val());
                    
                    form.modal('hide');
                    
                    row.addClass("updated");                    
                    setTimeout(function(){
                        row.removeClass("updated"); 
                    }, 1000);
                });
            
                //Basic Example
                $("#data-table-basic").bootgrid({
                    css: {
                        icon: 'zmdi icon',
                        iconColumns: 'zmdi-view-list',
                        iconDown: 'zmdi-caret-down',
                        iconRefresh: 'zmdi-refresh-sync',
                        iconUp: 'zmdi-caret-up'
                    },
                });

                //Selection
                $("#data-table-selection").bootgrid({
                    css: {
                        icon: 'zmdi icon',
                        iconColumns: 'zmdi-view-list',
                        iconDown: 'zmdi-caret-down',
                        iconRefresh: 'zmdi-refresh',
                        iconUp: 'zmdi-caret-up'
                    },
                    selection: true,
                    multiSelect: true,
                    rowSelect: true,
                    keepSelection: true
                });

                //Command Buttons
                var commandGrid = $("#data-table-command").bootgrid({
                    css: {
                        icon: 'zmdi icon',
                        iconColumns: 'zmdi-view-list',
                        iconDown: 'zmdi-caret-down',
                        iconRefresh: 'zmdi-refresh',
                        iconUp: 'zmdi-caret-up'
                    },
                    formatters: {
                        "commands": function(column, row) {
                            return "<button type=\"button\" class=\"btn command-btn command-edit\" data-row-id=\""+ row.id +"\"><span class=\"zmdi zmdi-edit\"></span></button> " +
                               "<button type=\"button\" class=\"btn command-btn command-delete\" data-row-id=\""+ row.id +"\"><span class=\"zmdi zmdi-delete\"></span></button>";
                        }
                    }
                }).on("loaded.rs.jquery.bootgrid", function(){
                    /* Executes after data is loaded and rendered */
                    commandGrid.find(".command-edit").on("click", function(e){
                        editRowForm($(this));
                    }).end().find(".command-delete").on("click", function(e){
                        deleteRow($(this));
                    });
                });
            });
        </script>
    </body>

<!-- Mirrored from www.dashmonk.com/demo/dashplus/pages/tables/data-tables.html by HTTrack Website Copier/3.x [XR&CO'2013], Sat, 08 Oct 2016 00:34:07 GMT -->
</html>