<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
    
<!-- Mirrored from www.dashmonk.com/demo/dashplus/pages/forms/form-wizard.html by HTTrack Website Copier/3.x [XR&CO'2013], Sat, 08 Oct 2016 00:34:07 GMT -->
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
                        <h2 class="pull-left">Inscription</h2>

                        <ul class="breadcrumb pull-right">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Forms</a></li>
                            <li><a href="#">Form Wizards</a></li>
                        </ul>
                    </div>
                    
                   
               		<div class="row">
                        <div class="col-md-12">          
                            <div class="card">
                                <div class="card-header">
                                    <h2>Inscription w@blo culture<small></small></h2>
                                </div>

                                <div class="card-body card-padding">
                                    <!-- BEGIN VALIDATION FORM WIZARD -->
                                    <div id="formwizard_validation" class="form-wizard form-wizard-horizontal">
                                        <form class="form floating-label form-validation" role="form" novalidate="novalidate">
                                            <div class="form-wizard-nav">
                                                <div class="progress" style="width: 75%;"><div class="progress-bar progress-bar-primary" style="width: 0%;"></div></div>
                                                <ul class="nav nav-justified nav-pills">
                                                    <li class="active"><a href="#fwv_step1" data-toggle="tab"><span class="step">1</span> <span class="title">Société</span></a></li>
                                                    <li><a href="#fwv_step2" data-toggle="tab"><span class="step">2</span> <span class="title">Personnel</span></a></li>
                                                    <li><a href="#fwv_step3" data-toggle="tab"><span class="step">3</span> <span class="title">Paiement</span></a></li>
                                                    <li><a href="#fwv_step4" data-toggle="tab"><span class="step">4</span> <span class="title">Confirmation</span></a></li>
                                                </ul>
                                            </div><!--end .form-wizard-nav -->
                                            <div class="tab-content clearfix p-30">
                                                <div class="tab-pane active" id="fwv_step1">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <input type="text" name="firstname" id="firstname" class="form-control" data-rule-minlength="2" required="">
                                                                <label for="firstname" class="control-label">Le nom de la societé</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <input type="text" name="lastname" id="lastname" class="form-control" data-rule-minlength="2" required="">
                                                                <label for="lastname" class="control-label">Email</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" name="occupation" id="occupation" class="form-control" data-rule-minlength="3" required="">
                                                        <label for="occupation" class="control-label">Numero</label>
                                                    </div>
                                                </div><!--end #step1 -->
                                                <div class="tab-pane" id="fwv_step2">
                                                    <br><br>
                                                    <div class="form-group">
                                                        <input type="email" name="email" id="email" class="form-control" data-rule-email="true" required="">
                                                        <label for="email" class="control-label">Nom</label>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <input type="password" name="password1" id="password1" class="form-control" required="" data-rule-minlength="5">
                                                                <label for="password1" class="control-label">prenom</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <input type="password" name="passwordrepeat" id="passwordrepeat" class="form-control" data-rule-equalto="#password1" required="">
                                                                <label for="passwordrepeat" class="control-label">Repeat password</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div><!--end #step2 -->
                                                <div class="tab-pane" id="fwv_step3">
                                                    <br><br>
                                                    <div class="form-group">
                                                        <input type="text" name="url2" id="url2" class="form-control" data-rule-url="true" required="">
                                                        <label for="url2" class="control-label">Mode de paiment</label>
                                                        <p class="help-block"></p>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" name="rangelength2" id="rangelength2" class="form-control" data-rule-rangelength="[5, 10]" required="">
                                                        <label for="rangelength2" class="control-label">Montant</label>
                                                        <p class="help-block"></p>
                                                    </div>
                                                </div><!--end #step3 -->
                                                <div class="tab-pane" id="fwv_step4">
                                                    <br><br>
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label class="checkbox">
                                                                <input type="checkbox" id="cb2" name="remember" required=""> Comfirmation.
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <textarea name="textarea1" id="textarea1" class="form-control" rows="3"></textarea>
                                                        <label>termes et conditions</label>
                                                    </div>
                                                </div><!--end #step4 -->
                                                <ul class="pager wizard">
                                                    <li class="previous first disabled"><a class="btn-raised" href="javascript:void(0);">First</a></li>
                                                    <li class="previous disabled"><a class="btn-raised" href="javascript:void(0);">Previous</a></li>
                                                    <li class="next last"><a class="btn-raised" href="javascript:void(0);">Last</a></li>
                                                    <li class="next"><a class="btn-raised" href="javascript:void(0);">Next</a></li>
                                                </ul>
                                            </div><!--end .tab-content -->
                                        </form>
                                    </div><!--end #rootwizard -->
                                    <!-- END VALIDATION FORM WIZARD -->
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
        <script src="<?php echo base_url(); ?>/assets/V2/vendors/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>

        <script src="<?php echo base_url(); ?>/assets/V2/dist/js/dashplus.min.js"></script>
        
        <script>
			$(document).ready(function(){
				//Add blue animated border and remove with condition when focus and blur
				if($('.fg-line')[0]) {
					$('body').on('focus', '.form-control', function(){
						$(this).closest('.fg-line').addClass('fg-toggled');
					})
	
					$('body').on('blur', '.form-control', function(){
						var p = $(this).closest('.form-group');
						var i = p.find('.form-control').val();
	
						if (p.hasClass('fg-float')) {
							if (i.length == 0) {
								$(this).closest('.fg-line').removeClass('fg-toggled');
							}
						}
						else {
							$(this).closest('.fg-line').removeClass('fg-toggled');
						}
					});
				}
	
				//Add blue border for pre-valued fg-flot text feilds
				if($('.fg-float')[0]) {
					$('.fg-float .form-control').each(function(){
						var i = $(this).val();
	
						if (!i.length == 0) {
							$(this).closest('.fg-line').addClass('fg-toggled');
						}
	
					});
				}
			
	
				/*   Form Wizard Functions  */
				/*--------------------------*/
				_handleTabShow = function(tab, navigation, index, wizard){
					var total = navigation.find('li').length;
					var current = index + 0;
					var percent = (current / (total - 1)) * 100;
					var percentWidth = 100 - (100 / total) + '%';
	
					navigation.find('li').removeClass('done');
					navigation.find('li.active').prevAll().addClass('done');
	
					wizard.find('.progress-bar').css({width: percent + '%'});
					$('.form-wizard-horizontal').find('.progress').css({'width': percentWidth});
				};
				
				_updateHorizontalProgressBar = function(tab, navigation, index, wizard){
					var total = navigation.find('li').length;
					var current = index+0;
					var percent = (current/(total-1)) * 100;
					var percentWidth = 100 - (100 / total) + '%';
					
					wizard.find('.progress-bar').css({width:percent+'%'});
					wizard.find('.progress').css({'width': percentWidth});
				};
				
				/* Form Wizard - Example 1  */
				/*--------------------------*/
				$('#formwizard_simple').bootstrapWizard({
					onTabShow: function(tab, navigation, index) {
						_updateHorizontalProgressBar(tab, navigation, index, $('#formwizard_simple'));
					}
				});
	
				/* Form Wizard - Example 2  */
				/*--------------------------*/
				
				$('#formwizard_validation').bootstrapWizard({
					onNext: function(tab, navigation, index) {
						var form = $('#formwizard_validation').find("form");
						var valid = true;
						
						if(index==1) {
							var fname = form.find('#firstname');
							var lastname = form.find('#lastname');
							
							if(!fname.val()) {
								swal("You must enter your first name!");
								fname.focus();
								return false;
							}
							
							if(!lastname.val()) {
								swal("You must enter your last name!");
								lastname.focus();
								return false;
							}
						}
						
						if(!valid){
							return false;
						}
					}, 
					onTabShow: function(tab, navigation, index) {
						_updateHorizontalProgressBar(tab, navigation, index, $('#formwizard_validation'));
					}
				});
				
			});
		</script>
	</body>

<!-- Mirrored from www.dashmonk.com/demo/dashplus/pages/forms/form-wizard.html by HTTrack Website Copier/3.x [XR&CO'2013], Sat, 08 Oct 2016 00:34:07 GMT -->
</html>