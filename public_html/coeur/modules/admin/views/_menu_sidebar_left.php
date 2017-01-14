<nav id="sidebar-left" class="sidebar mcs-overflow">
            	<ul class="sb-header m-b-20">
                	<li class="dp-trigger" data-dp-action="left-sidebar-toggle" data-dp-target="#sidebar-left">
                        <a href="#"><span class="header-logo m-r-20">Dashplus Admin</span><i class="menu-icon zmdi zmdi-arrow-left"></i></a>
                    </li>
                </ul>
                <div class="nav-menu-wrapper mcs-overflow1">
                	<ul class="nav-menu">
                        <li class="nav-item">
                            <a href="<?php echo base_url() ?>index.php/admin" data-dp-action="submenu-toggle"><i class="zmdi zmdi-palette"></i>&nbsp;<span>Dashboard</span></a>
                            
                        </li>
                        <li class="nav-item">
                            <a href="#" data-dp-action="submenu-toggle"><i class="zmdi zmdi-border-color"></i>&nbsp;<span>Configurations</span></a>
                            <ul>
                                <li><a href="<?php echo base_url() ?>index.php/admin/ajouter_valeur">Ajouter une valeur</a></li>
                                <li><a href="<?php echo base_url() ?>index.php/admin/ajout_questionnaire">Ajouter des questionnaires</a></li>
                                                    <li><a href="<?php echo base_url() ?>index.php/admin/liste_des_valeurs">Liste des valeurs</a></li>
                                        <li><a href="<?php echo base_url() ?>index.php/admin/liste_des_questionnaires">Liste des questionnaires</a></li>
                                
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" data-dp-action="submenu-toggle" class="mega-menu-toggle"><i class="zmdi zmdi-laptop-mac"></i>&nbsp;<span>Souscription</span></a>
                            <ul>
                                <li><a href="<?php echo base_url() ?>index.php/admin/souscription">Ajouter une société</a></li>
                                <li><a href="<?php echo base_url() ?>index.php/admin/attente_de_validation_souscription">Société en attente de validation</a></li>
                                <li><a href="<?php echo base_url() ?>index.php/admin/liste_des_souscription_valide">Liste des souscriptions validées</a></li>
                               
                                
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>